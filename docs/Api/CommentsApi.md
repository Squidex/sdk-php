# OpenAPI\Client\CommentsApi

All URIs are relative to https://cloud.squidex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**commentsDeleteComment()**](CommentsApi.md#commentsDeleteComment) | **DELETE** /api/apps/{app}/comments/{commentsId}/{commentId} | Delete a comment. |
| [**commentsGetComments()**](CommentsApi.md#commentsGetComments) | **GET** /api/apps/{app}/comments/{commentsId} | Get all comments. |
| [**commentsGetWatchingUsers()**](CommentsApi.md#commentsGetWatchingUsers) | **GET** /api/apps/{app}/watching/{resource} | Get all watching users.. |
| [**commentsPostComment()**](CommentsApi.md#commentsPostComment) | **POST** /api/apps/{app}/comments/{commentsId} | Create a new comment. |
| [**commentsPutComment()**](CommentsApi.md#commentsPutComment) | **PUT** /api/apps/{app}/comments/{commentsId}/{commentId} | Update a comment. |


## `commentsDeleteComment()`

```php
commentsDeleteComment($app, $comments_id, $comment_id)
```

Delete a comment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$comments_id = 'comments_id_example'; // string | The ID of the comments.
$comment_id = 'comment_id_example'; // string | The ID of the comment.

try {
    $apiInstance->commentsDeleteComment($app, $comments_id, $comment_id);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->commentsDeleteComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **comments_id** | **string**| The ID of the comments. | |
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

## `commentsGetComments()`

```php
commentsGetComments($app, $comments_id, $version): \OpenAPI\Client\Model\CommentsDto
```

Get all comments.

When passing in a version you can retrieve all updates since then.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$comments_id = 'comments_id_example'; // string | The ID of the comments.
$version = -2; // int | The current version.

try {
    $result = $apiInstance->commentsGetComments($app, $comments_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->commentsGetComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **comments_id** | **string**| The ID of the comments. | |
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

## `commentsGetWatchingUsers()`

```php
commentsGetWatchingUsers($app, $resource): string[]
```

Get all watching users..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$resource = 'resource_example'; // string | The path to the resource.

try {
    $result = $apiInstance->commentsGetWatchingUsers($app, $resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->commentsGetWatchingUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **resource** | **string**| The path to the resource. | |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commentsPostComment()`

```php
commentsPostComment($app, $comments_id, $upsert_comment_dto): \OpenAPI\Client\Model\CommentDto
```

Create a new comment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$comments_id = 'comments_id_example'; // string | The ID of the comments.
$upsert_comment_dto = new \OpenAPI\Client\Model\UpsertCommentDto(); // \OpenAPI\Client\Model\UpsertCommentDto | The comment object that needs to created.

try {
    $result = $apiInstance->commentsPostComment($app, $comments_id, $upsert_comment_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->commentsPostComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **comments_id** | **string**| The ID of the comments. | |
| **upsert_comment_dto** | [**\OpenAPI\Client\Model\UpsertCommentDto**](../Model/UpsertCommentDto.md)| The comment object that needs to created. | |

### Return type

[**\OpenAPI\Client\Model\CommentDto**](../Model/CommentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commentsPutComment()`

```php
commentsPutComment($app, $comments_id, $comment_id, $upsert_comment_dto)
```

Update a comment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$comments_id = 'comments_id_example'; // string | The ID of the comments.
$comment_id = 'comment_id_example'; // string | The ID of the comment.
$upsert_comment_dto = new \OpenAPI\Client\Model\UpsertCommentDto(); // \OpenAPI\Client\Model\UpsertCommentDto | The comment object that needs to updated.

try {
    $apiInstance->commentsPutComment($app, $comments_id, $comment_id, $upsert_comment_dto);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->commentsPutComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **comments_id** | **string**| The ID of the comments. | |
| **comment_id** | **string**| The ID of the comment. | |
| **upsert_comment_dto** | [**\OpenAPI\Client\Model\UpsertCommentDto**](../Model/UpsertCommentDto.md)| The comment object that needs to updated. | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
