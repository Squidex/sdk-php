# OpenAPI\Client\NewsApi

All URIs are relative to https://cloud.squidex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**newsGetNews()**](NewsApi.md#newsGetNews) | **GET** /api/news/features | Get features since version. |


## `newsGetNews()`

```php
newsGetNews($version): \OpenAPI\Client\Model\FeaturesDto
```

Get features since version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 0; // int | The latest received version.

try {
    $result = $apiInstance->newsGetNews($version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->newsGetNews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **int**| The latest received version. | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\FeaturesDto**](../Model/FeaturesDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
