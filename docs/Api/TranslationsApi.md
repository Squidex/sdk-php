# OpenAPI\Client\TranslationsApi

All URIs are relative to https://cloud.squidex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**translationsPostTranslation()**](TranslationsApi.md#translationsPostTranslation) | **POST** /api/apps/{app}/translations | Translate a text. |


## `translationsPostTranslation()`

```php
translationsPostTranslation($app, $translate_dto): \OpenAPI\Client\Model\TranslationDto
```

Translate a text.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$translate_dto = new \OpenAPI\Client\Model\TranslateDto(); // \OpenAPI\Client\Model\TranslateDto | The translation request.

try {
    $result = $apiInstance->translationsPostTranslation($app, $translate_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->translationsPostTranslation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **translate_dto** | [**\OpenAPI\Client\Model\TranslateDto**](../Model/TranslateDto.md)| The translation request. | |

### Return type

[**\OpenAPI\Client\Model\TranslationDto**](../Model/TranslationDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
