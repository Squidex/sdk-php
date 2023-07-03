# OpenAPI\Client\LanguagesApi

All URIs are relative to https://cloud.squidex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**languagesGetLanguages()**](LanguagesApi.md#languagesGetLanguages) | **GET** /api/languages | Get supported languages. |


## `languagesGetLanguages()`

```php
languagesGetLanguages(): \OpenAPI\Client\Model\LanguageDto[]
```

Get supported languages.

Provide a list of supported language codes, following the ISO2Code standard.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->languagesGetLanguages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguagesApi->languagesGetLanguages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\LanguageDto[]**](../Model/LanguageDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
