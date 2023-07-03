<?php


use OpenAPI\Client\SquidexClient;

require_once __DIR__ . '/../vendor/autoload.php';


$apiInstance = new SquidexClient([
        'clientId' => 'next:default',
        'clientSecret' => 'fzzjcd4w5yrxilowxctwri1mavlxgtnm6yiky8ipufcx',
        'appName' => 'next1954',
    ]);

$id = 1;

try {
    $result = $apiInstance->rules()->rulesPutRuleRun($id);
//    $result = $apiInstance->apps()->appClientsGetClients($id);
    print($result);
} catch (Exception $e) {
    echo $e->getMessage();
}

