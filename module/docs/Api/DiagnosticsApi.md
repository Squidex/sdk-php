# OpenAPI\Client\DiagnosticsApi

All URIs are relative to https://cloud.squidex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**diagnosticsGetDump()**](DiagnosticsApi.md#diagnosticsGetDump) | **GET** /api/diagnostics/dump | Creates a dump and writes it into storage.. |
| [**diagnosticsGetGCDump()**](DiagnosticsApi.md#diagnosticsGetGCDump) | **GET** /api/diagnostics/gcdump | Creates a gc dump and writes it into storage. |


## `diagnosticsGetDump()`

```php
diagnosticsGetDump()
```

Creates a dump and writes it into storage..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\DiagnosticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->diagnosticsGetDump();
} catch (Exception $e) {
    echo 'Exception when calling DiagnosticsApi->diagnosticsGetDump: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `diagnosticsGetGCDump()`

```php
diagnosticsGetGCDump()
```

Creates a gc dump and writes it into storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\DiagnosticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->diagnosticsGetGCDump();
} catch (Exception $e) {
    echo 'Exception when calling DiagnosticsApi->diagnosticsGetGCDump: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
