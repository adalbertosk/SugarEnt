<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class CustomAccountsApi extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            //GET
            'MyGetEndpoint' => array(
                //request type
                'reqType' => 'GET',

                //set authentication
                'noLoginRequired' => false,

                //endpoint path
                'path' => array('MyEndpoint', 'GetExample'),

                //endpoint variables
                'pathVars' => array('', ''),

                //method to call
                'method' => 'MyGetMethod',

                //short help string to be displayed in the help documentation
                'shortHelp' => 'An example of a GET endpoint',

                //long help to be displayed in the help documentation
//                'longHelp' => 'custom/clients/base/api/help/MyEndPoint_MyGetEndPoint_help.html',
            ),


            'Completed' => array(
                //request type
                'reqType' => array('GET','PUT'),

                //set authentication
                'noLoginRequired' => false,

                //endpoint path
                'path' => array('Completed', 'Value', '?'),

                //endpoint variables
                'pathVars' => array('', '', 'id'),

                //method to call
                'method' => 'ReqMethod',

                //short help string to be displayed in the help documentation
                'shortHelp' => 'An example of endpoint',

                //long help to be displayed in the help documentation
//                'longHelp' => 'custom/clients/base/api/help/MyEndPoint_MyGetEndPoint_help.html',
            ),
        );
    }

    /**
     * Method to be used for my MyEndpoint/GetExample endpoint
     */
    public function MyGetMethod($api, $args)
    {
        //custom logic
        $query = 'SELECT * FROM accounts WHERE deleted = 1';
        $conn = $GLOBALS['db']->getConnection(); 
        $stmt = $conn->executeQuery($query);
        $result = array();
        foreach($stmt->fetchAll() as $row){
            array_push($result, $row);
        }
        return $result;

    }

    public function ReqMethod($api, $args)
    {
        $requestType = $_SERVER['REQUEST_METHOD'];
        $id = $args['id'];

        switch($requestType) {
            case 'GET':
                $query = 'SELECT custom_completed FROM accounts_cstm WHERE id_c = "' . $id . '"';
                $conn = $GLOBALS['db']->getConnection();
                $stmt = $conn->executeQuery($query);
                $result = array();
                foreach($stmt->fetchAll() as $row){
                    array_push($result, $row);
                }
                return $result;
                break;
            case 'PUT':
                $query = 'UPDATE accounts_cstm SET custom_completed = 1 WHERE id_c = "' . $id . '"';
                $conn = $GLOBALS['db']->getConnection();
                $stmt = $conn->executeQuery($query);
                break;
        }


    }

}

?>