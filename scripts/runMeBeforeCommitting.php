#!/usr/bin/env php
<?php
/***************************************************************\
 * To run this file from commandline:                          *
 *   cd scripts/                                               *
 *   php -f runMeBeforeCommitting.php                          *
\***************************************************************/

/** UPDATE VARIABLES BELOW WITH THOSE OF THE REPO AND YOUR SYSTEM **/
$db_path = "../db";
$application_files_path = "../sugar";
$mysqldump_path_windows = "C:/xampp/mysql/bin/mysqldump.exe";
$mysqldump_path_linux = "$(which mysqldump)";
$mysqldump_path_mac = "/Applications/MAMP/Library/bin/mysqldump";
/** UPDATE VARIABLES ABOVE WITH THOSE OF THE REPO AND YOUR SYSTEM **/

/** DO NOT EDIT BELOW THIS LINE **/
error_reporting (E_ALL & ~E_NOTICE);
ini_set ("display_errors","On");

/** Get SugarCRM config files for database credentials **/
if (file_exists ("{$application_files_path}/config.php")) {
    require_once ("{$application_files_path}/config.php");
}
if (file_exists ("{$application_files_path}/config_override.php")) {
    require_once ("{$application_files_path}/config_override.php");
}
/** get DB config before we replace it for ref file **/
$dbconfig = $sugar_config["dbconfig"];
$db_name = $dbconfig["db_name"];
$db_user_name = $dbconfig["db_user_name"];
$db_password = $dbconfig["db_password"];
$db_host_name = $dbconfig["db_host_name"];

/** Merge config files **/
ksort ($sugar_config);
$sugar_config_string = "<?php\n " . "// created: " . date ("Y-m-d H:i:s") . "\n \$sugar_config = " . var_export ($sugar_config ,true) . ";";
file_put_contents ("{$application_files_path}/config.php", $sugar_config_string );
$empty_sugar_config_override_string = "<?php\n/***CONFIGURATOR***/\n/***CONFIGURATOR***/";
file_put_contents ("{$application_files_path}/config_override.php", $empty_sugar_config_override_string );
echo " config.php and config_override.php merged!\n";
/** Create reference config file **/
$sugar_config["dbconfig"]["db_host_name"] = "CHANGE_ME";
$sugar_config["dbconfig"]["db_user_name"] = "CHANGE_ME";
$sugar_config["dbconfig"]["db_password"] = "CHANGE_ME";
$sugar_config["dbconfig"]["db_name"] = "CHANGE_ME";
$sugar_config["site_url"] = "CHANGE_ME";
$sugar_config["unique_key"] = "CHANGE_ME";
if (isset($sugar_config["db"]["reports"])) {
    unset ($sugar_config["db"]["reports"]);
}
if (isset($sugar_config["db"]["listviews"])) {
    unset ($sugar_config["db"]["listviews"]);
}
if (isset ($sugar_config["full_text_engine"])) {
    $sugar_config["full_text_engine"] = array (
        "Elastic" => array (
            'host' => 'CHANGE_ME',
            'port' => 'CHANGE_ME',
        ),
    );
}
if (isset ($sugar_config["aws"])) {
    unset ($sugar_config["aws"]);
    unset ($sugar_config["upload_wrapper_class"]);
}
if (isset ($sugar_config["TW_CallbackURL"])) {
    $sugar_config["TW_CallbackURL"] = "CHANGE_ME";
    $sugar_config["cti_username"] = "CHANGE_ME";
    $sugar_config["cti_password"] = "CHANGE_ME";
}
if (isset ($sugar_config["cache"])) {
    $sugar_config["cache"]["multi_tenant"] = false;
    unset ($sugar_config["cache"]["encryption_key"]);
}
if (isset ($sugar_config["external_cache"])) {
    unset ($sugar_config["external_cache"]);
    $sugar_config["external_cache_disabled"] = true;
    $sugar_config["external_cache_disabled_apc"] = true;
    $sugar_config["external_cache_disabled_memcache"] = true;
    $sugar_config["external_cache_disabled_memcached"] = true;
    $sugar_config["external_cache_disabled_redis"] = true;
    $sugar_config["external_cache_disabled_smash"] = true;
    $sugar_config["external_cache_disabled_wincache"] = true;
    $sugar_config["external_cache_disabled_zend"] = true;
}
/** System directories **/
$directories = array (
    "cache_dir" => "cache/",
    "tmp_dir" => "cache/xml/",
    "upload_dir" => "upload/",
);
foreach ($directories as $config => $directory) {
    $sugar_config[$config] = $directory;
    if (!file_exists ("{$application_files_path}/{$directory}index.html")) {
        if (!file_exists ("{$application_files_path}/{$directory}")) {
            mkdir ("{$application_files_path}/{$directory}");
        }
        file_put_contents ("{$application_files_path}/{$directory}index.html", "This directory must be writable by the webserver user. \n");
    }
}
$sugar_config_string = "<?php\n " . "// created: " . date ("Y-m-d H:i:s") . "\n \$sugar_config = " . var_export ($sugar_config ,true) . ";";
file_put_contents ("{$application_files_path}/config4ref.php", $sugar_config_string );
echo " config4ref.php updated!\n";
/** Create reference .htaccess file **/
file_put_contents ("{$application_files_path}/.htaccessref", file_get_contents ("{$application_files_path}/.htaccess"));
echo " htaccessref updated!\n";

/** Connect to database and check what tables exist **/
if ($dbconfig["db_type"] !== "mysql") die ("NOT A MYSQL DATABASE!");
$db_connection = mysqli_connect ($db_host_name,$db_user_name,$db_password,$db_name);
if (!$db_connection) {
    die (" Could not connect: " . mysqli_error ());
}
$tables_to_query = array (
    "acl_actions",
    "acl_fields",
    "acl_role_sets",
    "acl_role_sets_acl_roles",
    "acl_roles",
    "acl_roles_actions",
    "acl_roles_users",
    "aow_actions",
    "aow_conditions",
    "aow_workflow",
    "categories",
    "config",
    "currencies",
    "custom_queries",
    "dashboards",
    "data_sets",
    "dataset_attributes",
    "dataset_layouts",
    "dri_subworkflow_templates",
    "dri_workflow_templates",
    "dri_workflow_task_templates",
    "email_templates",
    "expressions",
    "fields_meta_data",
    "filters",
    "import_maps",
    "inbound_email",
    "kreports",
    "manufacturers",
    "outbound_email",
    "pdfmanager",
    "pmse_bpm_access_management",
    "pmse_bpm_activity_definition",
    "pmse_bpm_activity_step",
    "pmse_bpm_activity_user",
    "pmse_bpm_case_data",
    "pmse_bpm_dynamic_forms",
    "pmse_bpm_event_definition",
    "pmse_bpm_gateway_definition",
    "pmse_bpm_group",
    "pmse_bpm_group_user",
    "pmse_bpm_process_definition",
    "pmse_bpm_related_dependency",
    "pmse_bpm_thread",
    "pmse_bpmn_activity",
    "pmse_bpmn_artifact",
    "pmse_bpmn_bound",
    "pmse_bpmn_data",
    "pmse_bpmn_diagram",
    "pmse_bpmn_documentation",
    "pmse_bpmn_event",
    "pmse_bpmn_extension",
    "pmse_bpmn_flow",
    "pmse_bpmn_gateway",
    "pmse_bpmn_lane",
    "pmse_bpmn_laneset",
    "pmse_bpmn_participant",
    "pmse_bpmn_process",
    "pmse_business_rules",
    "pmse_emails_templates",
    "pmse_project",
    "product_categories",
    "product_templates",
    "product_types",
    "relationships",
    "roles",
    "roles_modules",
    "roles_users",
    "saved_reports",
    "schedulers",
    "securitygroups",
    "securitygroups_acl_roles",
    "securitygroups_default",
    "securitygroups_securitygroups_1_c",
    "securitygroups_users",
    "shippers",
    "syno_dashboardtemplatefilters",
    "syno_dashboardtemplatehistory",
    "syno_dashboardtemplatehistory_syno_dashboardtemplates_c",
    "syno_dashboardtemplatehistory_users_c",
    "syno_dashboardtemplatelines",
    "syno_dashboardtemplatelines_syno_dashboardtemplates_c",
    "syno_dashboardtemplates",
    "systems",
    "tags",
    "taxrates",
    "team_memberships",
    "team_sets",
    "team_sets_teams",
    "teams",
    "timeperiods",
    "upgrade_history",
    "user_preferences",
    "users",
    "users_cstm",
    "versions",
    "weblogichooks",
    "workflow",
    "workflow_actions",
    "workflow_actionshells",
    "workflow_alerts",
    "workflow_alertshells",
    "workflow_triggershells",
    "versions"
);
$dump_tables ="";
$tablesQ = "SHOW TABLES FROM {$db_name}";
$tablesR = mysqli_query ($db_connection,$tablesQ);
if (!$tablesR) {
    die ("MySQL Error: " . mysqli_error ());
}
while ($tablesRow = mysqli_fetch_row ($tablesR)){
    if (in_array ($tablesRow[0],$tables_to_query)) $dump_tables .= " " . $tablesRow[0];
}
/** Determine which mysqldump client to use **/
switch (PHP_OS){
    case "WINNT":
        $mysqldump_path = $mysqldump_path_windows;
        break;
    case "Darwin":
        $mysqldump_path = $mysqldump_path_mac;
        break;
    case "Linux":
        $mysqldump_path = $mysqldump_path_linux;
        break;
    default:
        die ("no predefined path for mysqldump");
}
$mysqldump_path = str_replace ("\\", "/", $mysqldump_path);

/** Dump schema **/
$purgeGTID = strtolower ($db_host_name) === "prd-aur-rds02.cluster-cnby34eeobv3.eu-west-1.rds.amazonaws.com" ? "--set-gtid-purged=OFF" : "";
$schema_dump_cmd = "{$mysqldump_path} -d --quick --single-transaction {$purgeGTID} -u{$db_user_name} -p'{$db_password}' -h{$db_host_name} {$db_name} > {$db_path}/schema.sql";
//echo $schema_dump_cmd; //uncomment for debug
system ($schema_dump_cmd);
echo " Dump of schema done!\n";

/** Dump system tables **/
$outputFile = "{$db_path}/systemtables.sql";
$system_table_dump_cmd = "{$mysqldump_path} --quick --single-transaction --routines --no-create-info {$purgeGTID} -u{$db_user_name} -p'{$db_password}' -h{$db_host_name} {$db_name} {$dump_tables} > {$outputFile}";
//echo $system_table_dump_cmd; //uncomment for debug
system ($system_table_dump_cmd);
clearstatcache ();
if (file_exists ($outputFile) && filesize ($outputFile) > (50*1024*1024)) { // github.com has a 50MB limit per file
    $system_table_zip_cmd = "gzip -f {$outputFile}";
    system ($system_table_zip_cmd);
}
echo " Dump of system table data done!\n";

/** Done **/
echo " Complete!! =)\n";
