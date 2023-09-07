<?php
if (!defined ('sugarEntry')) {
    define ('sugarEntry', true);
    chdir (dirname (__FILE__));
    chdir ('../sugar/');
    define ('ENTRY_POINT_TYPE', 'api');
    require_once ('include/entryPoint.php');
    global $current_user;
    $current_user = new User ();
    $current_user->getSystemUser ();
}
global $log;
$directories = array (
    '../pre_execute',
    '../post_execute',
);
foreach ($directories as $directory) {
    foreach (SugarAutoLoader::getDirFiles ($directory) as $script) {
        echo "running {$script} ...";
        SugarAutoLoader::load ($script);
        echo " done!" . PHP_EOL;
    }
}
echo "repairing ";
$repair = new RepairAndClear ();
echo ".";
$repair->repairAndClearAll (array ("clearAll"), array (translate ("LBL_ALL_MODULES")), true, false, "");
echo ".";
//remove the js language files
LanguageManager::removeJSLanguageFiles ();
echo ".";
//remove language cache files
LanguageManager::clearLanguageCache ();
echo " done!" . PHP_EOL;
