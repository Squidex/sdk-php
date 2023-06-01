# OpenAPI\Client\BackupsApi

All URIs are relative to https://cloud.squidex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**backupContentGetBackupContent()**](BackupsApi.md#backupContentGetBackupContent) | **GET** /api/apps/{app}/backups/{id} | Get the backup content. |
| [**backupContentGetBackupContentV2()**](BackupsApi.md#backupContentGetBackupContentV2) | **GET** /api/apps/backups/{id} | Get the backup content. |
| [**backupsDeleteBackup()**](BackupsApi.md#backupsDeleteBackup) | **DELETE** /api/apps/{app}/backups/{id} | Delete a backup. |
| [**backupsGetBackups()**](BackupsApi.md#backupsGetBackups) | **GET** /api/apps/{app}/backups | Get all backup jobs. |
| [**backupsPostBackup()**](BackupsApi.md#backupsPostBackup) | **POST** /api/apps/{app}/backups | Start a new backup. |
| [**restoreGetRestoreJob()**](BackupsApi.md#restoreGetRestoreJob) | **GET** /api/apps/restore | Get current restore status. |
| [**restorePostRestoreJob()**](BackupsApi.md#restorePostRestoreJob) | **POST** /api/apps/restore | Restore a backup. |


## `backupContentGetBackupContent()`

```php
backupContentGetBackupContent($app, $id): \SplFileObject
```

Get the backup content.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The ID of the backup.

try {
    $result = $apiInstance->backupContentGetBackupContent($app, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->backupContentGetBackupContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The ID of the backup. | |

### Return type

**\SplFileObject**

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `backupContentGetBackupContentV2()`

```php
backupContentGetBackupContentV2($id, $app_id, $app): \SplFileObject
```

Get the backup content.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the backup.
$app_id = 'app_id_example'; // string | The ID of the app.
$app = ''; // string | The name of the app.

try {
    $result = $apiInstance->backupContentGetBackupContentV2($id, $app_id, $app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->backupContentGetBackupContentV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the backup. | |
| **app_id** | **string**| The ID of the app. | [optional] |
| **app** | **string**| The name of the app. | [optional] [default to &#39;&#39;] |

### Return type

**\SplFileObject**

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `backupsDeleteBackup()`

```php
backupsDeleteBackup($app, $id)
```

Delete a backup.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The ID of the backup to delete.

try {
    $apiInstance->backupsDeleteBackup($app, $id);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->backupsDeleteBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The ID of the backup to delete. | |

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

## `backupsGetBackups()`

```php
backupsGetBackups($app): \OpenAPI\Client\Model\BackupJobsDto
```

Get all backup jobs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.

try {
    $result = $apiInstance->backupsGetBackups($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->backupsGetBackups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |

### Return type

[**\OpenAPI\Client\Model\BackupJobsDto**](../Model/BackupJobsDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `backupsPostBackup()`

```php
backupsPostBackup($app)
```

Start a new backup.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.

try {
    $apiInstance->backupsPostBackup($app);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->backupsPostBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |

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

## `restoreGetRestoreJob()`

```php
restoreGetRestoreJob(): \OpenAPI\Client\Model\RestoreJobDto
```

Get current restore status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restoreGetRestoreJob();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->restoreGetRestoreJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\RestoreJobDto**](../Model/RestoreJobDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restorePostRestoreJob()`

```php
restorePostRestoreJob($restore_request_dto)
```

Restore a backup.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$restore_request_dto = new \OpenAPI\Client\Model\RestoreRequestDto(); // \OpenAPI\Client\Model\RestoreRequestDto | The backup to restore.

try {
    $apiInstance->restorePostRestoreJob($restore_request_dto);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->restorePostRestoreJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **restore_request_dto** | [**\OpenAPI\Client\Model\RestoreRequestDto**](../Model/RestoreRequestDto.md)| The backup to restore. | |

### Return type

void (empty response body)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
