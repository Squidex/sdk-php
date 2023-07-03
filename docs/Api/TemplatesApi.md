# OpenAPI\Client\TemplatesApi

All URIs are relative to https://cloud.squidex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**templatesGetTemplate()**](TemplatesApi.md#templatesGetTemplate) | **GET** /api/templates/{name} | Get template details. |
| [**templatesGetTemplates()**](TemplatesApi.md#templatesGetTemplates) | **GET** /api/templates | Get all templates. |


## `templatesGetTemplate()`

```php
templatesGetTemplate($name): \OpenAPI\Client\Model\TemplateDetailsDto
```

Get template details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of the template.

try {
    $result = $apiInstance->templatesGetTemplate($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesGetTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the template. | |

### Return type

[**\OpenAPI\Client\Model\TemplateDetailsDto**](../Model/TemplateDetailsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templatesGetTemplates()`

```php
templatesGetTemplates(): \OpenAPI\Client\Model\TemplatesDto
```

Get all templates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->templatesGetTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesGetTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\TemplatesDto**](../Model/TemplatesDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
