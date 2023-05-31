# OpenAPI\Client\SearchApi

All URIs are relative to https://cloud.squidex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**searchGetSearchResults()**](SearchApi.md#searchGetSearchResults) | **GET** /api/apps/{app}/search | Get search results. |


## `searchGetSearchResults()`

```php
searchGetSearchResults($app, $query): \OpenAPI\Client\Model\SearchResultDto[]
```

Get search results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$query = 'query_example'; // string | The search query.

try {
    $result = $apiInstance->searchGetSearchResults($app, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchGetSearchResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **query** | **string**| The search query. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SearchResultDto[]**](../Model/SearchResultDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
