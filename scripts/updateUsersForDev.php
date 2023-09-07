#!/usr/bin/env php
<?php
/***************************************************************\
 * To run this file from commandline:                          *
 *   cd scripts/                                               *
 *   php -f updateUsersForDev.php                              *
\***************************************************************/

/** using emailName@emailDomain as a guide populate the following variables **/
$name = "CHANGE_ME";
$domain = "providentcrm.com";

/** DO NOT EDIT BELOW THIS LINE **/
if ($name === "CHA" . "NGE" . "_ME") {
    die ("ERROR! name variable has not been set - aborting");
}
if (!defined ("sugarEntry")) define ("sugarEntry", true);
chdir (dirname (__FILE__));
chdir ("../sugar/");
define ("ENTRY_POINT_TYPE", "api");
require_once ("include/entryPoint.php");
global $sugar_config, $db;
$system = $sugar_config["dbconfig"]["db_name"];
$sapi_type = php_sapi_name ();
if (substr ($sapi_type, 0, 3) != "cli") {
    if (!empty ($sugar_config["site_url"])) {
        header ("Location: {$sugar_config["site_url"]}/index.php");
    } else {
        sugar_die ("Didn't find site url in your sugarcrm config file");
    }
}

global $current_user;
$current_user = new User ();
$current_user->getSystemUser ();

function removeSpecialCharacters ($string) {
    return str_replace (array (" ", "@","_","(",")","-","'","\""), "", $string);
}

$res = $db->query ("SELECT id FROM users WHERE deleted = '0' AND status <> 'Reserved' AND portal_only = '0' ORDER BY user_name");
$systemUserExists = false;
$total = $res->num_rows;
$i = 0;
while ($row = $db->fetchByAssoc ($res)) {
    $i++;
    $rowNo = str_pad ($i, strlen ($total), "0", STR_PAD_LEFT)  . " of {$total}";
    $u = BeanFactory::getBean ("Users", $row["id"]);
    if (empty ($u->user_name)) {
        echo "{$rowNo}: User with ID: {$u->id} has no username... skipping" . PHP_EOL;
        continue;
    }
    if ($u->id === "1") {
        $systemUserExists = true;
        $u->user_name = "admin";
        $u->is_admin = true;
        $u->status = "Active";
        $u->deleted = false;
    }
    $u->user_name = removeSpecialCharacters ($u->user_name);
    $u->email1 = strtolower ("{$name}+{$system}-users-{$u->user_name}@{$domain}");
    $u->email2 = "";
    $u->email3 = "";
    $u->external_auth_only = false;
    $u->processed = true; // prevent logic hooks triggering
    $u->save ();
    $u->setNewPassword ($u->user_name);
    echo "{$rowNo}: User with ID: {$u->id} has been updated... username & password: {$u->user_name}" . PHP_EOL;
}
if (!$systemUserExists) {
    echo "SysAdmin User (ID: 1) was not found... creating" . PHP_EOL;
    $u = BeanFactory::getBean ("Users", "1", null, false);
    if (empty ($u->id)) {
        // Default sys-admin User does not exist - create one
        $u->id = "1";
        $u->new_with_id = true;
    }
    $u->first_name = "SugarCRM";
    $u->last_name = "Administrator";
    $u->user_name = "admin";
    $u->email1 = strtolower ("{$name}+{$system}-users-sysadmin@{$domain}");
    $u->email2 = "";
    $u->email3 = "";
    $u->is_admin = true;
    $u->status = "Active";
    $u->deleted = false;
    $u->external_auth_only = false;
    $u->processed = true; // prevent logic hooks triggering
    $u->save ();
    $u->setNewPassword ($u->user_name);
    echo "SysAdmin User (ID: {$u->id}) has been created... username & password: {$u->user_name}" . PHP_EOL;
}
$admin = BeanFactory::newBean ("Administration");
$admin->saveSetting ("system", "ldap_enabled", false);
