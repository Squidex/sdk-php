<?php


use OpenAPI\Client\SquidexClient;

require_once __DIR__ . '/../vendor/autoload.php';

$apiInstance = new SquidexClient(
    [
        'clientId' => 'asdfasdasd:default',
        'clientSecret' => 'fzzjcd4w5yrxilowxctwri1mavlxgtnm6yiky8ipufcx',
        'appName' => 'ararat1954',
    ]
);

$id = 50;
try {
    $result = $apiInstance->rules()->rulesPutRuleRun($id);
} catch (Exception $e) {
    echo $e->getMessage();
}

