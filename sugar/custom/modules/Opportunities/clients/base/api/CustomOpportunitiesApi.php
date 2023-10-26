<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class CustomOpportunitiesApi extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            //GET
            'RejectPostEndpoint' => array(
                //request type
                'reqType' => 'PUT',

                //set authentication
                'noLoginRequired' => false,

                //endpoint path
                'path' => array('Reject', 'Post', '?'),

                //endpoint variables
                'pathVars' => array('', '', 'id'),

                //method to call
                'method' => 'RejectMethod',

                //short help string to be displayed in the help documentation
                'shortHelp' => 'POST Reject Opportunity endpoint',
            ),
        );
    }

    public function RejectMethod($api, $args)
    {
//        $requestType = $_SERVER['REQUEST_METHOD'];
        $id = $args['id'];
        $reason = $args['reason'];
        $query = 'UPDATE opportunities_cstm SET approval_status_c = ?, rejected_reason_c = ? WHERE id_c = ?';
        $conn = $GLOBALS['db']->getConnection();
        $stmt = $conn->executeQuery($query, array('R', $reason, $id));
/*
                $fieldDefs = $GLOBALS['dictionary']['table']['fields'];
                $GLOBALS['db']->updateParams('accounts_cstm', $fieldDefs, array('custom_completed' => '1',), array('id_c' => $id));
*/
    }
}
