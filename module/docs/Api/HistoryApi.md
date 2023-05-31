# OpenAPI\Client\HistoryApi

All URIs are relative to https://cloud.squidex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**historyGetAppHistory()**](HistoryApi.md#historyGetAppHistory) | **GET** /api/apps/{app}/history | Get historical events. |
| [**historyGetTeamHistory()**](HistoryApi.md#historyGetTeamHistory) | **GET** /api/teams/{team}/history | Get historical events for a team. |


## `historyGetAppHistory()`

```php
historyGetAppHistory($app, $channel): \OpenAPI\Client\Model\HistoryEventDto[]
```

Get historical events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$channel = 'channel_example'; // string | The name of the channel.

try {
    $result = $apiInstance->historyGetAppHistory($app, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->historyGetAppHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **channel** | **string**| The name of the channel. | [optional] |

### Return type

[**\OpenAPI\Client\Model\HistoryEventDto[]**](../Model/HistoryEventDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `historyGetTeamHistory()`

```php
historyGetTeamHistory($team, $channel): \OpenAPI\Client\Model\HistoryEventDto[]
```

Get historical events for a team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team = 'team_example'; // string | The ID of the team.
$channel = 'channel_example'; // string | The name of the channel.

try {
    $result = $apiInstance->historyGetTeamHistory($team, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->historyGetTeamHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team** | **string**| The ID of the team. | |
| **channel** | **string**| The name of the channel. | [optional] |

### Return type

[**\OpenAPI\Client\Model\HistoryEventDto[]**](../Model/HistoryEventDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
