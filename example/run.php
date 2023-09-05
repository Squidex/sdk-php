<?php


use Squidex\Client\Configuration;
use Squidex\Client\SquidexClient;

require_once __DIR__ . '/../vendor/autoload.php';

$config = new Configuration();
$config->setClientId('squidex-website:reader');
$config->setClientSecret('yy9x4dcxsnp1s34r2z19t88wedbzxn1tfq7uzmoxf60x');
$config->setAppName('squidex-website');

$apiInstance = new SquidexClient($config);

$id = 1;

try {
    $result = $apiInstance->rules()->putRuleRun($id);
//    $result = $apiInstance->apps()->appClientsGetClients($id);
    print($result);
} catch (Exception $e) {
    echo $e->getMessage();
}

