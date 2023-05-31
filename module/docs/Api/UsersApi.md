# OpenAPI\Client\UsersApi

All URIs are relative to https://cloud.squidex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**usersGetUser()**](UsersApi.md#usersGetUser) | **GET** /api/users/{id} | Get user by id. |
| [**usersGetUserPicture()**](UsersApi.md#usersGetUserPicture) | **GET** /api/users/{id}/picture | Get user picture by id. |
| [**usersGetUserResources()**](UsersApi.md#usersGetUserResources) | **GET** /api | Get the user resources. |
| [**usersGetUsers()**](UsersApi.md#usersGetUsers) | **GET** /api/users | Get users by query. |


## `usersGetUser()`

```php
usersGetUser($id): \OpenAPI\Client\Model\UserDto
```

Get user by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the user (GUID).

try {
    $result = $apiInstance->usersGetUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGetUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the user (GUID). | |

### Return type

[**\OpenAPI\Client\Model\UserDto**](../Model/UserDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersGetUserPicture()`

```php
usersGetUserPicture($id): \SplFileObject
```

Get user picture by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the user (GUID).

try {
    $result = $apiInstance->usersGetUserPicture($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGetUserPicture: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the user (GUID). | |

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

## `usersGetUserResources()`

```php
usersGetUserResources(): \OpenAPI\Client\Model\ResourcesDto
```

Get the user resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->usersGetUserResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGetUserResources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ResourcesDto**](../Model/ResourcesDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersGetUsers()`

```php
usersGetUsers($query): \OpenAPI\Client\Model\UserDto[]
```

Get users by query.

Search the user by query that contains the email address or the part of the email address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | The query to search the user by email address. Case invariant.

try {
    $result = $apiInstance->usersGetUsers($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGetUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| The query to search the user by email address. Case invariant. | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserDto[]**](../Model/UserDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
