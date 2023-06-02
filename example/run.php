<?php


use OpenAPI\Client\SquidexClient;

require_once __DIR__ . '/../vendor/autoload.php';

$apiInstance = new SquidexClient(
    [
        'clientId' => 'client-id',
        'clientSecret' => 'client-secret',
        'appName' => 'my-app',
    ]
);

$id = 10;
try {
    $result = $apiInstance->rules()->rulesPutRuleRun($id);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage();
}

