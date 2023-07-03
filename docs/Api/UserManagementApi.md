# OpenAPI\Client\UserManagementApi

All URIs are relative to https://cloud.squidex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**userManagementDeleteUser()**](UserManagementApi.md#userManagementDeleteUser) | **DELETE** /api/user-management/{id} | Delete a User. |
| [**userManagementGetUser()**](UserManagementApi.md#userManagementGetUser) | **GET** /api/user-management/{id} | Get a user by ID. |
| [**userManagementGetUsers()**](UserManagementApi.md#userManagementGetUsers) | **GET** /api/user-management | Get users by query. |
| [**userManagementLockUser()**](UserManagementApi.md#userManagementLockUser) | **PUT** /api/user-management/{id}/lock | Lock a user. |
| [**userManagementPostUser()**](UserManagementApi.md#userManagementPostUser) | **POST** /api/user-management | Create a new user. |
| [**userManagementPutUser()**](UserManagementApi.md#userManagementPutUser) | **PUT** /api/user-management/{id} | Update a user. |
| [**userManagementUnlockUser()**](UserManagementApi.md#userManagementUnlockUser) | **PUT** /api/user-management/{id}/unlock | Unlock a user. |


## `userManagementDeleteUser()`

```php
userManagementDeleteUser($id)
```

Delete a User.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the user to delete.

try {
    $apiInstance->userManagementDeleteUser($id);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userManagementDeleteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the user to delete. | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userManagementGetUser()`

```php
userManagementGetUser($id): \OpenAPI\Client\Model\UserDto
```

Get a user by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the user.

try {
    $result = $apiInstance->userManagementGetUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userManagementGetUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the user. | |

### Return type

[**\OpenAPI\Client\Model\UserDto**](../Model/UserDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userManagementGetUsers()`

```php
userManagementGetUsers($query, $skip, $take): \OpenAPI\Client\Model\UsersDto
```

Get users by query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | Optional query to search by email address or username.
$skip = 0; // int | The number of users to skip.
$take = 10; // int | The number of users to return.

try {
    $result = $apiInstance->userManagementGetUsers($query, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userManagementGetUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| Optional query to search by email address or username. | [optional] |
| **skip** | **int**| The number of users to skip. | [optional] [default to 0] |
| **take** | **int**| The number of users to return. | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\Model\UsersDto**](../Model/UsersDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userManagementLockUser()`

```php
userManagementLockUser($id): \OpenAPI\Client\Model\UserDto
```

Lock a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the user to lock.

try {
    $result = $apiInstance->userManagementLockUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userManagementLockUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the user to lock. | |

### Return type

[**\OpenAPI\Client\Model\UserDto**](../Model/UserDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userManagementPostUser()`

```php
userManagementPostUser($create_user_dto): \OpenAPI\Client\Model\UserDto
```

Create a new user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_user_dto = new \OpenAPI\Client\Model\CreateUserDto(); // \OpenAPI\Client\Model\CreateUserDto | The user object that needs to be added.

try {
    $result = $apiInstance->userManagementPostUser($create_user_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userManagementPostUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_user_dto** | [**\OpenAPI\Client\Model\CreateUserDto**](../Model/CreateUserDto.md)| The user object that needs to be added. | |

### Return type

[**\OpenAPI\Client\Model\UserDto**](../Model/UserDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userManagementPutUser()`

```php
userManagementPutUser($id, $update_user_dto): \OpenAPI\Client\Model\UserDto
```

Update a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the user.
$update_user_dto = new \OpenAPI\Client\Model\UpdateUserDto(); // \OpenAPI\Client\Model\UpdateUserDto | The user object that needs to be updated.

try {
    $result = $apiInstance->userManagementPutUser($id, $update_user_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userManagementPutUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the user. | |
| **update_user_dto** | [**\OpenAPI\Client\Model\UpdateUserDto**](../Model/UpdateUserDto.md)| The user object that needs to be updated. | |

### Return type

[**\OpenAPI\Client\Model\UserDto**](../Model/UserDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userManagementUnlockUser()`

```php
userManagementUnlockUser($id): \OpenAPI\Client\Model\UserDto
```

Unlock a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the user to unlock.

try {
    $result = $apiInstance->userManagementUnlockUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userManagementUnlockUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the user to unlock. | |

### Return type

[**\OpenAPI\Client\Model\UserDto**](../Model/UserDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
