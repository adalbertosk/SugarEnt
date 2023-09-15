<?php

if (!defined("sugarEntry") || !sugarEntry) die("Not A Valid Entry Point");

global    $current_user, $beanList, $sugar_config, $current_language,
          $mod_strings, $beanList, $app_strings, $app_list_strings, $moduleList;

if (!is_admin($current_user)) {
    sugar_die("Unauthorized access to administration.");
}

$admin = BeanFactory::newBean('Administration');

if (isset($_REQUEST["process"]) && $_REQUEST["process"] == "true") {
    $url      = $_REQUEST["password_settings_url"];
    $username = $_REQUEST["password_settings_username"];
    $pass     = $_REQUEST["password_settings_password"];
    
    require_once 'modules/Administration/Administration.php';

    $administrationObj = new Administration();
    
    //save the setting
    $administrationObj->saveSetting("PASSWORD_SETTINGS", "URL", $url);
    $administrationObj->saveSetting("PASSWORD_SETTINGS", "USERNAME", $username);
    $administrationObj->saveSetting("PASSWORD_SETTINGS", "PASSWORD", $pass);

}

$adminSettings = Administration::getSettings();
$sugar_smarty   = new Sugar_Smarty();
$sugar_smarty->assign("TITLE", get_module_title("", $mod_strings["LBL_PASSWORD_SETTINGS_TITLE"], false));
$sugar_smarty->assign("DESCRIPTION", get_module_title("", $mod_strings["LBL_PASSWORD_SETTINGS_DESCRIPTION"], false));
$sugar_smarty->assign("MOD", $mod_strings);
$sugar_smarty->assign("APP", $app_strings);
$sugar_smarty->assign("APP_LIST", $app_list_strings);
$sugar_smarty->assign("CONFIG", $sugar_config);

$sugar_smarty->assign("password_settings_url", !empty($adminSettings->settings["PASSWORD_SETTINGS_URL"]) ? $adminSettings->settings["PASSWORD_SETTINGS_URL"] : "");
$sugar_smarty->assign("password_settings_username", !empty($adminSettings->settings["PASSWORD_SETTINGS_USERNAME"]) ? $adminSettings->settings["PASSWORD_SETTINGS_USERNAME"] : "");
$sugar_smarty->assign("password_settings_password", !empty($adminSettings->settings["PASSWORD_SETTINGS_PASSWORD"]) ? $adminSettings->settings["PASSWORD_SETTINGS_PASSWORD"] : "");


$tpl = "custom/modules/Administration/tpl/password_settings.tpl";
$sugar_smarty->display($tpl);