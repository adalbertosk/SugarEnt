<?php
error_reporting (1);
/* Set package defaults */
$defaults = array (
    "Path to git executable" => "git",
    "Name" => "",
    "Description" => "",
    "Author" => "Provident CRM",
    "Source Directory" => "sugar",
    "Destination Directory" => "releases",
);

/** DO NOT EDIT BELOW THIS LINE **/
if (substr (php_sapi_name (), 0, 3) == "cgi") {
    die ("This script should be run from a browser");
}
/* Show instructions; package details options and commits for selection */
echo "<head><style>body {font-family: sans-serif;} span.debug {font-size: small; color: red}</style></head>";
echo "<h1>Use this script to generate a zip-file which is compatible with Module Loader</h1>";
echo "<p>Before you begin, ensure that you have the correct branch checked out </p>";
echo "<ol>";
echo " <li>Update variables to suit your project/package</li>";
echo " <li>Select the commits that you want to include files from</li>";
echo " <li>Select the files that you want to include</li>";
echo "</ol>";
echo "<p>NB: Although this script lists commits and the files changed in those commits, the current version of the file is used when creating the zip (ie. not the diff). As such, the following is highly advised</p>";
echo "<ul>";
echo " <li>Repo has been rolled back to the most recent commit that you intend to select: \"git checkout {commitID}\"</li>";
echo " <li>There are NO uncommitted changes in the working directory</li>";
echo "</ul>";
echo "<hr>";

$debug = isset ($_REQUEST["debug"]) ? $_REQUEST["debug"] : false;
$details = isset ($_REQUEST["details"]) ? $_REQUEST["details"] : $defaults;
$packageID = str_replace ( " ", "-", "{$details["Name"]}");
$version = date ("Ymd.H.i");

$form = "<form action=\"buildPatchFromCommits.php\" method=\"POST\">";
$form .= "<input type=\"hidden\" name=\"debug\" value=\"{$debug}\">";
/* Show package details options */
$form .="<table>";
foreach ($details as $name => $value) {
    $form .= "<tr><td>{$name}:</td>";
    $form .= "<td><input type=\"text\" name=\"details[{$name}]\" value=\"{$value}\" size=\"100\"></td>";
    if ($name === "Name") {
        $form .= "<td> This is the ID of the package in ModuleLoader so keep it consistent if installing a new version. examples: \"Phase X\"; or the Jira ref: \"JIRA-123\"</td>";
    } elseif ($name === "Descripion") {
        $form .= "<td> ie. \"Patch to customise SugarCRM\" or \"Custom Integration Bugfixes\"</td>";
    } elseif ($name === "Path to git executable") {
        $form .= "<td> if git binary is in your PATH, use git otherwise seearch PHPStorm's Settings for \"git exec\". Linux Users can use \"$(which git)\"</td>";
    }
    $form .="</tr>";
}
$form .="</table>";
$form .= "<hr><input type=\"submit\"><br /><hr>";

/* Show list of commits */
$commits = isset ($_REQUEST["commits"]) ? $_REQUEST["commits"] : array ();
$git = "\"{$details["Path to git executable"]}\"";
if (empty ($commits)) {
    $cmd = "{$git} log --oneline";
    $commitList = shell_exec ($cmd);
    $commits = explode ("\n", $commitList);
    foreach ($commits as $commit) {
        if (!empty ($commit)) {
            $form .= "<input type=\"checkbox\" name=\"commits[]\" value=\"" . substr ($commit, 0,7) . "\" />{$commit}<br />";
        }
    }
    $form .= "<hr><input type=\"submit\"><br /><hr>";
    $form .= "</form>";
    if ($debug) {
        displayOnScreen (array ($cmd,$commitList,$commits));
    }
    die ($form);
} else {
    $form .= "<input type=\"hidden\" name=\"commits\" value=\"true\" />";
}

/* Show list of files from selected commits */
$files = isset ($_REQUEST["files"]) ? $_REQUEST["files"] : array ();
if (empty ($files)) {
    $os = PHP_OS;
    if ($os == "Linux") {
        $pretty = "\"format:\""; // Linux
    } elseif($os == "Darwin") {
        $pretty="\"\""; // MacOs
    } else {
        $pretty = ""; // Windows
    }
    $fileList = "";
    foreach ($commits as $commit) {
        $cmd = "{$git} show {$commit} --pretty={$pretty} --name-only";
        $fileList .= shell_exec ($cmd);
    }
    $files = explode ("\n", $fileList);
    asort ($files);
    $files = array_unique ($files);
    foreach ($files as $file) {
        if (!empty ($file) && !strpos ($file, 'orderMapping')) {
            $form .= "<input type=\"checkbox\" name=\"files[]\" value=\"{$file}\" checked>{$file}<br />";
        }
    }
    $form .= "<hr><input type=\"submit\"><br /><hr>";
    $form .= "</form>";
    if ($debug) {
        displayOnScreen (array ($os, $cmd, $fileList, $files));
    }
    die ($form);
} else {
    $form .= "<input type=\"hidden\" name=\"files\" value=\"true\" />";
}

/* Prepare manifest array */
$manifestFile = "manifest.php";
if (!defined ("sugarEntry")) define ("sugarEntry", true);
chdir (dirname (__FILE__));
chdir ("../");
require_once ("{$details["Source Directory"]}/sugar_version.php");
$manifest = array (
    "name" => $details["Name"],
    "description" => $details["Description"],
    "version" => $version,
    "author" => $details["Author"],
    "key" => "PR",
    "acceptable_sugar_versions" => array (
        "exact_matches" => array (
            $sugar_version
        ),
    ),
    "acceptable_sugar_flavors" => array (
        $sugar_flavor
    ),
    "type" => "module",
    "published_date" => date ("Y-m-d H:i:s"),
    "is_uninstallable" => true,
);
/* Prepare manifest array */
$installdefs = array (
    "id" => $packageID,
    "copy" => array (),
    "pre_execute" => array (),
    "post_execute" => array (),
    "pre_uninstall" => array (),
    "post_uninstall" => array (),
);

/* Begin zip file creation */
$destination = $details["Destination Directory"];
$zipFile = "{$destination}/{$packageID}-{$version}.zip";
if (!is_dir ($destination)) {
    mkdir ($destination);
}
echo "Creating {$zipFile} ... <br />";
$zip = new ZipArchive ();
$zip->open ($zipFile, ZipArchive::CREATE);
$source = rtrim ($details["Source Directory"],"/");
$basePath = realpath ($source);
$scripts = array (
    "pre_execute",
    "post_execute",
    "pre_uninstall",
    "post_uninstall",
);
foreach ($files as $k => $file) {
    $addFile = false;
    if (file_exists ($file)) {
        /* add to manifest */
        if (strpos ($file, $source) === 0) {
            $installdefs["copy"][] = array (
                "from" => "<basepath>/{$file}",
                "to" => str_replace ("{$source}/", "", $file),
            );
            $addFile = true;
        } else {
            foreach ($scripts as $n => $script) {
                if (strpos ($file, $script) === 0) {
                    $installdefs[$script][] = "<basepath>/{$file}";
                    $addFile = true;
                    continue;
                }
            }
        }
        /* add to zip */
        if ($addFile) {
            $fullFilePath = realpath ($file);
            $zip->addFile ($fullFilePath, $file);
            echo " adding {$file}.. <br />";
        }
    }
}

/* Always include LICENSE.txt */
$license = "LICENSE.txt";
if (file_exists ($license)) {
    echo " adding {$license}.. <br />";
    $zip->addFile ($license, $license);
}

/* Add README.md to manifest */
$readMe = "README.md";
if (file_exists ($readMe)) {
    $manifest["readme"] = htmlspecialchars (file_get_contents ($readMe));
}

/* Create temp manifest.php */
$manifestString = "<?php\n/** {$manifest["author"]} " . date ("d/m/Y") . " **/\n";
$manifestString .= "\$manifest = " . var_export ($manifest, true) . ";\n";
$manifestString .= "\$installdefs = " . var_export ($installdefs, true) . ";\n";
file_put_contents ($manifestFile, $manifestString);
$zip->addFile ($manifestFile, $manifestFile);
echo " adding {$manifestFile}.. <br />";

/* Complete zip file creation */
if (!$zip->close ()) {
    die ("Zip file creation failed. Check logs for more information");
}

/* Delete temp manifest.php */
unlink ($manifestFile);

/* Complete! */
echo "Done!<br />";
echo "<a href=\"../{$zipFile}\">click here to download {$zipFile}</a>";
exit (0);

/* for debugging */
function displayOnScreen (array $vars) {
    foreach ($vars as $var) {
        foreach ($GLOBALS as $varName => $varValue) {
            if ($varValue === $var) {
                $name = $varName;
            }
        }
        if ($_REQUEST["debug"] == "cmdOnly" && $name !== "cmd") {
            continue;
        }
        if (is_array ($var)) {
            if ($_REQUEST["debug"] == "skipArrays") {
                continue;
            }
            $value = var_export ($var, true);
        } else {
            $value = str_replace ("\n", "<br />", $var);
        }
        echo  "<span class=\"debug\">{$name}: {$value}<br /></span>";
    }
}
