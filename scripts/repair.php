#!/usr/bin/env php
<?php
/***************************************************************\
 * To run this file from commandline:                          *
 *   cd scripts/                                               *
 *   php -f repair.php                                         *
\***************************************************************/

if (!defined ('sugarEntry')) define ('sugarEntry', true);
chdir (dirname (__FILE__));
chdir ('../sugar/');
define ('ENTRY_POINT_TYPE', 'api');
require_once ('include/entryPoint.php');
require_once ('modules/Administration/QuickRepairAndRebuild.php');

$sapi_type = php_sapi_name ();
if (substr ($sapi_type, 0, 3) != 'cgi') {
    global $sugar_config;
    if (!empty ($sugar_config['site_url'])){
        header ("Location: ".$sugar_config['site_url'] . "/index.php");
    }else{
        sugar_die ("Didn't find site url in your config file");
    }
}

if (empty ($current_language)) {
    $current_language = $sugar_config['default_language'];
}

$app_strings = return_application_language ($current_language);

global $current_user;
$current_user = new User ();
$current_user->getSystemUser ();

$repair = new RepairAndClear ();
$repair->repairAndClearAll (array ("clearAll"), array (translate ("LBL_ALL_MODULES")), true, false, "");
//remove the js language files
LanguageManager::removeJSLanguageFiles ();

//remove language cache files
LanguageManager::clearLanguageCache ();

$exit_on_cleanup = true;

sugar_cleanup (false);

// some jobs have annoying habit of calling sugar_cleanup (), and it can be called only once
// but job results can be written to DB after job is finished, so we have to disconnect here again
// just in case we couldn't call cleanup
if (class_exists ('DBManagerFactory')) {
    $db = DBManagerFactory::getInstance ();
    $db->disconnect ();
}

if ($exit_on_cleanup) exit;
