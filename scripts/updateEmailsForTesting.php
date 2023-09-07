#!/usr/bin/env php
<?php
/***************************************************************\
 * To run this file from commandline:                          *
 *   cd scripts/                                               *
 *   php -f updateEmailsForTesting.php                         *
\***************************************************************/

/** using emailName@emailDomain as a guide populate the following variables **/
$emailName = "CHANGE_ME";
$emailDomain = "providentcrm.com";

/** DO NOT EDIT BELOW THIS LINE **/
if ($emailName === "CHA" . "NGE" . "_ME") {
    die ("ERROR! emailName variable has not been set - aborting");
}
error_reporting ("E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT");
ini_set ("display_errors","On");

/** Connect to database and check what tables exist **/
if (!defined ("sugarEntry")) define ("sugarEntry", true);
chdir (dirname (__FILE__));
chdir ("../sugar/");
define ("ENTRY_POINT_TYPE", "api");
require_once ("include/entryPoint.php");
global $db, $sugar_config;
if (!$db) {
    die (" Could not connect: " . mysqli_error ());
}
$dbName = $sugar_config["dbconfig"]["db_name"];

$modulesQ = "SELECT bean_module FROM email_addr_bean_rel GROUP BY bean_module;";
$modulesR = $db->query ($modulesQ);
if (!$modulesR) {
    die ("MySQL Error: " . mysqli_error ());
}
while ($modulesRow = $db->fetchByAssoc ($modulesR)){
    if (BeanFactory::getBean ($modulesRow["bean_module"]) instanceof Person) {
        $nameString = "IFNULL (m.first_name,''), m.last_name";
    } else {
        $nameString = "m.name";
    }
    $nameString = "REPLACE({$nameString},' ','')";
    $moduleLower = strtolower ($modulesRow["bean_module"]);
    $newEmailAddressString = "CONCAT ('{$emailName}+{$dbName}-{$moduleLower}-', {$nameString}, '@{$emailDomain}')";
    $updateQ = "UPDATE email_addresses ea 
                INNER JOIN email_addr_bean_rel ear 
                  ON ea.id = ear.email_address_id 
                  AND ea.deleted = '0' 
                  AND ear.deleted = '0' 
                INNER JOIN {$moduleLower} m 
                  ON ear.bean_id = m.id 
                  AND ear.bean_module = '{$modulesRow["bean_module"]}' 
              SET 
                ea.email_address = {$newEmailAddressString}
                , email_address_caps = UPPER({$newEmailAddressString});";
    $db->query ($updateQ);
}
