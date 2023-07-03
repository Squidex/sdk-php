# OpenAPI\Client\StatisticsApi

All URIs are relative to https://cloud.squidex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**usagesGetCurrentStorageSize()**](StatisticsApi.md#usagesGetCurrentStorageSize) | **GET** /api/apps/{app}/usages/storage/today | Get total asset size. |
| [**usagesGetLog()**](StatisticsApi.md#usagesGetLog) | **GET** /api/apps/{app}/usages/log | Get api calls as log file. |
| [**usagesGetStorageSizes()**](StatisticsApi.md#usagesGetStorageSizes) | **GET** /api/apps/{app}/usages/storage/{fromDate}/{toDate} | Get asset usage by date. |
| [**usagesGetStorageSizesForTeam()**](StatisticsApi.md#usagesGetStorageSizesForTeam) | **GET** /api/teams/{team}/usages/storage/{fromDate}/{toDate} | Get asset usage by date for team. |
| [**usagesGetTeamCurrentStorageSizeForTeam()**](StatisticsApi.md#usagesGetTeamCurrentStorageSizeForTeam) | **GET** /api/teams/{team}/usages/storage/today | Get total asset size by team. |
| [**usagesGetUsages()**](StatisticsApi.md#usagesGetUsages) | **GET** /api/apps/{app}/usages/calls/{fromDate}/{toDate} | Get api calls in date range. |
| [**usagesGetUsagesForTeam()**](StatisticsApi.md#usagesGetUsagesForTeam) | **GET** /api/teams/{team}/usages/calls/{fromDate}/{toDate} | Get api calls in date range for team. |


## `usagesGetCurrentStorageSize()`

```php
usagesGetCurrentStorageSize($app): \OpenAPI\Client\Model\CurrentStorageDto
```

Get total asset size.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.

try {
    $result = $apiInstance->usagesGetCurrentStorageSize($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->usagesGetCurrentStorageSize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |

### Return type

[**\OpenAPI\Client\Model\CurrentStorageDto**](../Model/CurrentStorageDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usagesGetLog()`

```php
usagesGetLog($app): \OpenAPI\Client\Model\LogDownloadDto
```

Get api calls as log file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.

try {
    $result = $apiInstance->usagesGetLog($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->usagesGetLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |

### Return type

[**\OpenAPI\Client\Model\LogDownloadDto**](../Model/LogDownloadDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usagesGetStorageSizes()`

```php
usagesGetStorageSizes($app, $from_date, $to_date): \OpenAPI\Client\Model\StorageUsagePerDateDto[]
```

Get asset usage by date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The from date.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The to date.

try {
    $result = $apiInstance->usagesGetStorageSizes($app, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->usagesGetStorageSizes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **from_date** | **\DateTime**| The from date. | |
| **to_date** | **\DateTime**| The to date. | |

### Return type

[**\OpenAPI\Client\Model\StorageUsagePerDateDto[]**](../Model/StorageUsagePerDateDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usagesGetStorageSizesForTeam()`

```php
usagesGetStorageSizesForTeam($team, $from_date, $to_date): \OpenAPI\Client\Model\StorageUsagePerDateDto[]
```

Get asset usage by date for team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team = 'team_example'; // string | The ID of the team.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The from date.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The to date.

try {
    $result = $apiInstance->usagesGetStorageSizesForTeam($team, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->usagesGetStorageSizesForTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team** | **string**| The ID of the team. | |
| **from_date** | **\DateTime**| The from date. | |
| **to_date** | **\DateTime**| The to date. | |

### Return type

[**\OpenAPI\Client\Model\StorageUsagePerDateDto[]**](../Model/StorageUsagePerDateDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usagesGetTeamCurrentStorageSizeForTeam()`

```php
usagesGetTeamCurrentStorageSizeForTeam($team): \OpenAPI\Client\Model\CurrentStorageDto
```

Get total asset size by team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team = 'team_example'; // string | The ID of the team.

try {
    $result = $apiInstance->usagesGetTeamCurrentStorageSizeForTeam($team);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->usagesGetTeamCurrentStorageSizeForTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team** | **string**| The ID of the team. | |

### Return type

[**\OpenAPI\Client\Model\CurrentStorageDto**](../Model/CurrentStorageDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usagesGetUsages()`

```php
usagesGetUsages($app, $from_date, $to_date): \OpenAPI\Client\Model\CallsUsageDtoDto
```

Get api calls in date range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The from date.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The to date.

try {
    $result = $apiInstance->usagesGetUsages($app, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->usagesGetUsages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **from_date** | **\DateTime**| The from date. | |
| **to_date** | **\DateTime**| The to date. | |

### Return type

[**\OpenAPI\Client\Model\CallsUsageDtoDto**](../Model/CallsUsageDtoDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usagesGetUsagesForTeam()`

```php
usagesGetUsagesForTeam($team, $from_date, $to_date): \OpenAPI\Client\Model\CallsUsageDtoDto
```

Get api calls in date range for team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team = 'team_example'; // string | The name of the team.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The from date.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The to date.

try {
    $result = $apiInstance->usagesGetUsagesForTeam($team, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->usagesGetUsagesForTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team** | **string**| The name of the team. | |
| **from_date** | **\DateTime**| The from date. | |
| **to_date** | **\DateTime**| The to date. | |

### Return type

[**\OpenAPI\Client\Model\CallsUsageDtoDto**](../Model/CallsUsageDtoDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
