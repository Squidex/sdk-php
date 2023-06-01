<?php

require_once __DIR__ . '/../vendor/autoload.php';

$apiInstance = new OpenAPI\Client\Api\AppsApi(
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example';

try {
    $result = $apiInstance->appAssetsGetAssetScripts($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appAssetsGetAssetScripts: ', $e->getMessage(), PHP_EOL;
}

