# Repo Management Scripts 
This directory holds files that have been designed to manage a SugarCRM repository. 

#### [.gitignore](.gitignore) 
##### This is a standard .gitignore file for use with new projects.
* It should be put at the root directory of the cloned repository.
* The SugarCRM application files should be unzipped to a `sugar/` directory
* **NB: If you are updating an existing repo with this file, please ensure that you are not removing anything from the "project specific files section".**

#### [buildPatchFromCommits.php](buildPatchFromCommits.php)
##### This script is for building a ModuleLoader compatible zip-file by selecting commits and the files changed by those commits.
* Handy for deploying your customisations to an onDemand or on-site instances and facilitating the porting of customisations from one instance to another. 

#### [moduleFieldReport.php](moduleFieldReport.php)
##### This script returns a list of fields on a per module basis. 
* Handy for retrieving a list of database column definitions for data import mappings and also for documentation. 

#### [repair.php](repair.php) 
##### This script is for running a Quick Repair & Rebuild from the command line. 
* Handy if the UI is not responding.

#### [runMeBeforeCommitting.php](runMeBeforeCommitting.php) 
##### This was designed to be run on a PROD system to ensure that the repository will contain enough information for a local DEV clone to be set up.
* It can also be run on a DEV system but only before the system goes live for the first time as running it in multiple environments can lead to merge conflicts.

---
## DANGER ZONE - NEVER RUN THESE IN A PROD ENVIRONMENT!!!

#### [updateEmailsForTesting.php](updateEmailsForTesting.php)
##### This script was designed to be used before troubleshooting any email related issues when the use of a (copy of the) PROD database cannot be avoided.  
* It should be run __before__ troubleshooting to ensure that test emails __are not__ sent to the actual Accounts, Contacts, Leads or Users' mailboxes.
* Change the `$emailName` variable before running.
* It will to update ALL email address to the format: "_myName_+_databaseName_-_moduleName_-_recordName_@providentcrm.com".

#### [updateUsersForDev.php](updateUsersForDev.php)
##### This script was designed to be used before starting any development work to ensure that test emails __are not__ sent to the actual Users' mailboxes.
* Change the `$emailName` variable before running. 
* It resets the username of the sys-admin User (ID="1") to “admin”. 
* It updates each User’s password to match their username.
* It will to update ALL Users' email address to the format: "_myName_+_databaseName_-users-_recordName_@providentcrm.com". 
