# OpenAPI\Client\NotificationsApi

All URIs are relative to https://cloud.squidex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**userNotificationsDeleteComment()**](NotificationsApi.md#userNotificationsDeleteComment) | **DELETE** /api/users/{userId}/notifications/{commentId} | Delete a notification. |
| [**userNotificationsGetNotifications()**](NotificationsApi.md#userNotificationsGetNotifications) | **GET** /api/users/{userId}/notifications | Get all notifications. |


## `userNotificationsDeleteComment()`

```php
userNotificationsDeleteComment($user_id, $comment_id)
```

Delete a notification.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | The user id.
$comment_id = 'comment_id_example'; // string | The ID of the comment.

try {
    $apiInstance->userNotificationsDeleteComment($user_id, $comment_id);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->userNotificationsDeleteComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The user id. | |
| **comment_id** | **string**| The ID of the comment. | |

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

## `userNotificationsGetNotifications()`

```php
userNotificationsGetNotifications($user_id, $version): \OpenAPI\Client\Model\CommentsDto
```

Get all notifications.

When passing in a version you can retrieve all updates since then.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | The user id.
$version = -2; // int | The current version.

try {
    $result = $apiInstance->userNotificationsGetNotifications($user_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->userNotificationsGetNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The user id. | |
| **version** | **int**| The current version. | [optional] [default to -2] |

### Return type

[**\OpenAPI\Client\Model\CommentsDto**](../Model/CommentsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
