<?php

use Sugarcrm\Sugarcrm\Security\HttpClient\ExternalResourceClient;
use Sugarcrm\Sugarcrm\Security\HttpClient\RequestException;

class before_save_class
{
    function populate_new_field($bean, $event, $arguments)
    {
        if($bean->fetched_row['name'] != $bean->name) {
            $bean->new_field_c = "Field NAME updated";
        }

// ExternalResourceClient GET
    $url = 'https://catfact.ninja/fact';

        try {
    // Set timeout to 60 seconds and 10 max redirects
    $response = (new ExternalResourceClient(60, 10))->get($url);
} catch (RequestException $e) {
    $GLOBALS['log']->log('fatal', 'Error: ' . $e->getMessage());
    throw new \SugarApiExceptionError($e->getMessage());
}
$httpCode = $response->getStatusCode();
if ($httpCode >= 400) {
    $GLOBALS['log']->log("fatal", "Request failed with status: " . $httpCode);
    throw new \SugarApiException("Request failed with status: " . $httpCode, null, null, $httpCode);
}
$content = json_decode($response->getBody()->getContents(), true);
$bean->description = $content["fact"];
}
}
