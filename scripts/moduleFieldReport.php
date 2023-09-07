<?php
$defaultModules = array (
    "Accounts",
    "Contacts",
    "Leads",
    "Opportunities",
);
$defaultAttributes = array (
    "name",
    "vname",
    "type",
    "len",
    "required",
    "audited",
    "default",
    "options",
);

/** DO NOT EDIT BELOW THIS LINE **/
if (substr (php_sapi_name (), 0, 3) === "cli") {
    die ("This script should be run from a browser");
}
if (!defined ("sugarEntry")) define ("sugarEntry", true);
chdir (dirname (__FILE__));
chdir ("../sugar/");
define ("ENTRY_POINT_TYPE", "api");
require_once ("include/entryPoint.php");

$app = new SugarApplication ();
$app->loadLanguages ();
global $current_user, $beanList, $moduleList, $app_list_strings;
$current_user = new User ();
$current_user->getSystemUser ();

$selectedModules = isset ($_REQUEST["selectedModules"]) ? $_REQUEST["selectedModules"] : $defaultModules;
$attributes = $defaultAttributes;
$selectedAttributes = isset ($_REQUEST["selectedAttributes"]) ? $_REQUEST["selectedAttributes"] : $defaultAttributes;
$translateLabels = isset ($_REQUEST["translateLabels"]) ? $_REQUEST["translateLabels"] : false;
$includeNonDBs = isset ($_REQUEST["includeNonDBs"]) ? $_REQUEST["includeNonDBs"] : false;
$showDBValues = isset ($_REQUEST["showDbValues"]) ? $_REQUEST["showDbValues"] : false;
$headerRow = "<tr>";
foreach ($selectedAttributes as $k => $selectedAttribute) {
    $headerRow .= "<th>" . ($selectedAttribute === "vname" ? "Label" : ucfirst ($selectedAttribute)) . "</th>";
}
$headerRow .= "</tr>";
$tables = array ();
foreach ($moduleList as $moduleName) {
    if (!in_array ($moduleName, $selectedModules)) {
        continue;
    }
    $objectName = $beanList[$moduleName];
    if ($objectName === "aCase") {
        $objectName = "Case";
    }
    $moduleLabel = $app_list_strings["moduleList"][$moduleName];
    if (!empty ($objectName)) {
        $tables[$moduleLabel] = "";
        VardefManager::refreshVardefs ($moduleName, $objectName);
        global $dictionary;
        if (!isset ($dictionary[$objectName])) {
            //handle cases where Sugar's bean class has been extended
            $objectName = str_replace ("Custom", "", $objectName);
            if (!isset ($dictionary[$objectName])) {
                $objectName = str_replace ("Pr", "", $objectName);
                if (!isset ($dictionary[$objectName])) {
                    $objectName = str_replace ("PR_", "", $objectName);
                }
            }
        }
        if (isset ($dictionary[$objectName]["fields"])) {
            $tables[$moduleLabel] .= "<h1 id=\"{$moduleLabel}\">{$moduleLabel}</h1>";
            if ($showDBValues) {
                $tables[$moduleLabel] .= "<h3>Table name: {$dictionary[$objectName]["table"]}</h3>";
            }
            $tables[$moduleLabel] .= "<table border =\"1\">";
            $tables[$moduleLabel] .= $headerRow;
            foreach ($dictionary[$objectName]["fields"] as $fieldName => $fieldDefs) {
                foreach ($fieldDefs as $attributeName => $attributeValue) {
                    if (!in_array ($attributeName, $attributes)) {
                        $attributes[] = $attributeName;
                    }
                }
                if (!$includeNonDBs && isset ($fieldDefs["source"]) && $fieldDefs["source"] === "non-db") {
                    continue;
                }
                $tables[$moduleLabel] .= "<tr>";
                foreach ($selectedAttributes as $selectedAttribute) {
                    if ($showDBValues && $selectedAttribute === "type" && isset ($fieldDefs["dbType"]) && !empty ($fieldDefs["dbType"])) {
                        $selectedAttribute = "dbType";
                    }
                    $value = isset ($fieldDefs[$selectedAttribute]) ? $fieldDefs[$selectedAttribute] : "";
                    if (!empty ($value)) {
                        if ($translateLabels && in_array ($selectedAttribute, array ("vname", "label", "labelValue"))) {
                            $value = translate ($value, $moduleName);
                        }
                        if ($selectedAttribute === "options" && isset ($app_list_strings[$value])) {
                            $options = $app_list_strings[$value];
                            $value = "";
                            foreach ($options as $item => $label) {
                                $value .= ($showDBValues ? $item : $label) . ", ";
                            }
                            $value = trim ($value, ", ");
                        }
                        if (is_bool ($value)) {
                            $value = $value ? "True" : "False";
                        }
                    }
                    $tables[$moduleLabel] .= "<td>{$value}</td>";
                }
                $tables[$moduleLabel] .= "</tr>";
            }
            $tables[$moduleLabel] .= "</table>";
        }
    }
}
$ignoredModules = array (
    "Home",
    "Calendar",
);
ksort ($tables);

/** show form **/
echo "<h1>Module Field Report</h1>";
echo "<form method=\"POST\">";
echo "Choose Modules:<br>";
echo "  <select name=\"selectedModules[]\" multiple size=\"10\">";
foreach ($moduleList as $moduleName) {
    if (!in_array ($moduleName, $ignoredModules)) {
        echo "<option value=\"{$moduleName}\" " . (in_array ($moduleName, $selectedModules) ? "selected " : "" ) . ">{$app_list_strings["moduleList"][$moduleName]}</option>";
    }
}
echo "  </select><br>";
echo "Choose Attributes:<br>";
echo "  <select name=\"selectedAttributes[]\" multiple size=\"10\">";
foreach ($attributes as $K => $attribute) {
    echo "<option value=\"{$attribute}\" " . (in_array ($attribute, $selectedAttributes) ? "selected " : "" ) . ">{$attribute}</option>";
}
echo "  </select><br>";
echo "<input type=\"checkbox\" name=\"translateLabels\" value=\"true\" " . ($translateLabels ? "checked " : "" ) . "/>Translate labels<br>";
echo "<input type=\"checkbox\" name=\"showDbValues\" value=\"true\" " . ($showDBValues ? "checked " : "" ) . "/>Show database values<br>";
echo "<input type=\"checkbox\" name=\"includeNonDBs\" value=\"true\" " . ($includeNonDBs ? "checked " : "" ) . "/>Include \"non-db\" fields<br>";
echo "<input type=\"submit\" value=\"Submit\">";
echo "</form>";

echo "<ol>";

/** show output **/
foreach ($tables as $tableName => $tableData) {
    echo "<li><a href=\"#{$tableName}\">{$tableName}</a></li>";
}
echo "</ol>";
foreach ($tables as $tableName => $tableData) {
    echo $tableData;
}