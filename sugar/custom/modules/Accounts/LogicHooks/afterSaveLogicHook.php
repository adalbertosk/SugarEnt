<?php

class after_save_class
{
    function update_website_field($bean, $event, $arguments)
    {
//        $bean->website = ;
//        $query = 'UPDATE accounts SET website = "website@aaa.com" WHERE id = "83c19d4e-4d55-11ee-8247-0800279be312"';
//        $conn = $GLOBALS['db']->getConnection();
//        $stmt = $conn->executeQuery($query);

        $sugarQuery = new SugarQuery();
        $sugarQuery->select(array('id','name'));
        $sugarQuery->from(BeanFactory::newBean('Accounts'));
        //add the where clause
        $sugarQuery->where()->equals('name', 'Test Account');
        //fetch the result
        $result = $sugarQuery->execute();
        console.log($result);
    }
}