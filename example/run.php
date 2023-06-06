<?php


use OpenAPI\Client\SquidexClient;

require_once __DIR__ . '/../vendor/autoload.php';


$apiInstance = new SquidexClient([
        'clientId' => 'test:default',
        'clientSecret' => 'fzzjcd4w5yrxilowxctwri1mavlxgtnm6yiky8ipufcx',
        'appName' => 'test',
    ]);

$id = 1;

try {
    $result = $apiInstance->rules()->rulesPutRuleRun($id);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage();
}

