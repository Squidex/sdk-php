# OpenAPI\Client\EventConsumersApi

All URIs are relative to https://cloud.squidex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**eventConsumersGetEventConsumers()**](EventConsumersApi.md#eventConsumersGetEventConsumers) | **GET** /api/event-consumers | Get event consumers. |
| [**eventConsumersResetEventConsumer()**](EventConsumersApi.md#eventConsumersResetEventConsumer) | **PUT** /api/event-consumers/{consumerName}/reset | Reset an event consumer. |
| [**eventConsumersStartEventConsumer()**](EventConsumersApi.md#eventConsumersStartEventConsumer) | **PUT** /api/event-consumers/{consumerName}/start | Start an event consumer. |
| [**eventConsumersStopEventConsumer()**](EventConsumersApi.md#eventConsumersStopEventConsumer) | **PUT** /api/event-consumers/{consumerName}/stop | Stop an event consumer. |


## `eventConsumersGetEventConsumers()`

```php
eventConsumersGetEventConsumers(): \OpenAPI\Client\Model\EventConsumersDto
```

Get event consumers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\EventConsumersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->eventConsumersGetEventConsumers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventConsumersApi->eventConsumersGetEventConsumers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\EventConsumersDto**](../Model/EventConsumersDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventConsumersResetEventConsumer()`

```php
eventConsumersResetEventConsumer($consumer_name): \OpenAPI\Client\Model\EventConsumerDto
```

Reset an event consumer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\EventConsumersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consumer_name = 'consumer_name_example'; // string | The name of the event consumer.

try {
    $result = $apiInstance->eventConsumersResetEventConsumer($consumer_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventConsumersApi->eventConsumersResetEventConsumer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consumer_name** | **string**| The name of the event consumer. | |

### Return type

[**\OpenAPI\Client\Model\EventConsumerDto**](../Model/EventConsumerDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventConsumersStartEventConsumer()`

```php
eventConsumersStartEventConsumer($consumer_name): \OpenAPI\Client\Model\EventConsumerDto
```

Start an event consumer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\EventConsumersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consumer_name = 'consumer_name_example'; // string | The name of the event consumer.

try {
    $result = $apiInstance->eventConsumersStartEventConsumer($consumer_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventConsumersApi->eventConsumersStartEventConsumer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consumer_name** | **string**| The name of the event consumer. | |

### Return type

[**\OpenAPI\Client\Model\EventConsumerDto**](../Model/EventConsumerDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventConsumersStopEventConsumer()`

```php
eventConsumersStopEventConsumer($consumer_name): \OpenAPI\Client\Model\EventConsumerDto
```

Stop an event consumer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\EventConsumersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consumer_name = 'consumer_name_example'; // string | The name of the event consumer.

try {
    $result = $apiInstance->eventConsumersStopEventConsumer($consumer_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventConsumersApi->eventConsumersStopEventConsumer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consumer_name** | **string**| The name of the event consumer. | |

### Return type

[**\OpenAPI\Client\Model\EventConsumerDto**](../Model/EventConsumerDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
