# OpenAPI\Client\ContentsApi

All URIs are relative to https://cloud.squidex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**contentsBulkUpdateContents()**](ContentsApi.md#contentsBulkUpdateContents) | **POST** /api/content/{app}/{schema}/bulk | Bulk update content items. |
| [**contentsCreateDraft()**](ContentsApi.md#contentsCreateDraft) | **POST** /api/content/{app}/{schema}/{id}/draft | Create a new draft version. |
| [**contentsDeleteContent()**](ContentsApi.md#contentsDeleteContent) | **DELETE** /api/content/{app}/{schema}/{id} | Delete a content item. |
| [**contentsDeleteContentStatus()**](ContentsApi.md#contentsDeleteContentStatus) | **DELETE** /api/content/{app}/{schema}/{id}/status | Cancel status change of a content item. |
| [**contentsDeleteVersion()**](ContentsApi.md#contentsDeleteVersion) | **DELETE** /api/content/{app}/{schema}/{id}/draft | Delete the draft version. |
| [**contentsGetContent()**](ContentsApi.md#contentsGetContent) | **GET** /api/content/{app}/{schema}/{id} | Get a content item. |
| [**contentsGetContentValidity()**](ContentsApi.md#contentsGetContentValidity) | **GET** /api/content/{app}/{schema}/{id}/validity | Get a content item validity. |
| [**contentsGetContentVersion()**](ContentsApi.md#contentsGetContentVersion) | **GET** /api/content/{app}/{schema}/{id}/{version} | Get a content by version. |
| [**contentsGetContents()**](ContentsApi.md#contentsGetContents) | **GET** /api/content/{app}/{schema} | Queries contents. |
| [**contentsGetContentsPost()**](ContentsApi.md#contentsGetContentsPost) | **POST** /api/content/{app}/{schema}/query | Queries contents. |
| [**contentsGetReferences()**](ContentsApi.md#contentsGetReferences) | **GET** /api/content/{app}/{schema}/{id}/references | Get all references of a content. |
| [**contentsGetReferencing()**](ContentsApi.md#contentsGetReferencing) | **GET** /api/content/{app}/{schema}/{id}/referencing | Get a referencing contents of a content item. |
| [**contentsPatchContent()**](ContentsApi.md#contentsPatchContent) | **PATCH** /api/content/{app}/{schema}/{id} | Patchs a content item. |
| [**contentsPostContent()**](ContentsApi.md#contentsPostContent) | **POST** /api/content/{app}/{schema} | Create a content item. |
| [**contentsPostContents()**](ContentsApi.md#contentsPostContents) | **POST** /api/content/{app}/{schema}/import | Import content items. |
| [**contentsPostUpsertContent()**](ContentsApi.md#contentsPostUpsertContent) | **POST** /api/content/{app}/{schema}/{id} | Upsert a content item. |
| [**contentsPutContent()**](ContentsApi.md#contentsPutContent) | **PUT** /api/content/{app}/{schema}/{id} | Update a content item. |
| [**contentsPutContentStatus()**](ContentsApi.md#contentsPutContentStatus) | **PUT** /api/content/{app}/{schema}/{id}/status | Change status of a content item. |


## `contentsBulkUpdateContents()`

```php
contentsBulkUpdateContents($app, $schema, $bulk_update_contents_dto): \OpenAPI\Client\Model\BulkResultDto[]
```

Bulk update content items.

You can read the generated documentation for your app at /api/content/{appName}/docs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$bulk_update_contents_dto = new \OpenAPI\Client\Model\BulkUpdateContentsDto(); // \OpenAPI\Client\Model\BulkUpdateContentsDto | The bulk update request.

try {
    $result = $apiInstance->contentsBulkUpdateContents($app, $schema, $bulk_update_contents_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentsApi->contentsBulkUpdateContents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **bulk_update_contents_dto** | [**\OpenAPI\Client\Model\BulkUpdateContentsDto**](../Model/BulkUpdateContentsDto.md)| The bulk update request. | |

### Return type

[**\OpenAPI\Client\Model\BulkResultDto[]**](../Model/BulkResultDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentsCreateDraft()`

```php
contentsCreateDraft($app, $schema, $id, $x_unpublished, $x_languages): \OpenAPI\Client\Model\ContentDto
```

Create a new draft version.

You can read the generated documentation for your app at /api/content/{appName}/docs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$id = 'id_example'; // string | The ID of the content item to create the draft for.
$x_unpublished = True; // bool | Return unpublished content items.
$x_languages = 'x_languages_example'; // string | Only resolve these languages (comma-separated).

try {
    $result = $apiInstance->contentsCreateDraft($app, $schema, $id, $x_unpublished, $x_languages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentsApi->contentsCreateDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **id** | **string**| The ID of the content item to create the draft for. | |
| **x_unpublished** | **bool**| Return unpublished content items. | [optional] |
| **x_languages** | **string**| Only resolve these languages (comma-separated). | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentDto**](../Model/ContentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentsDeleteContent()`

```php
contentsDeleteContent($app, $schema, $id, $check_referrers, $permanent)
```

Delete a content item.

You can create an generated documentation for your app at /api/content/{appName}/docs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$id = 'id_example'; // string | The ID of the content item to delete.
$check_referrers = True; // bool | True to check referrers of this content.
$permanent = True; // bool | True to delete the content permanently.

try {
    $apiInstance->contentsDeleteContent($app, $schema, $id, $check_referrers, $permanent);
} catch (Exception $e) {
    echo 'Exception when calling ContentsApi->contentsDeleteContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **id** | **string**| The ID of the content item to delete. | |
| **check_referrers** | **bool**| True to check referrers of this content. | [optional] |
| **permanent** | **bool**| True to delete the content permanently. | [optional] |

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

## `contentsDeleteContentStatus()`

```php
contentsDeleteContentStatus($app, $schema, $id, $x_unpublished, $x_languages): \OpenAPI\Client\Model\ContentDto
```

Cancel status change of a content item.

You can read the generated documentation for your app at /api/content/{appName}/docs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$id = 'id_example'; // string | The ID of the content item to cancel.
$x_unpublished = True; // bool | Return unpublished content items.
$x_languages = 'x_languages_example'; // string | Only resolve these languages (comma-separated).

try {
    $result = $apiInstance->contentsDeleteContentStatus($app, $schema, $id, $x_unpublished, $x_languages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentsApi->contentsDeleteContentStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **id** | **string**| The ID of the content item to cancel. | |
| **x_unpublished** | **bool**| Return unpublished content items. | [optional] |
| **x_languages** | **string**| Only resolve these languages (comma-separated). | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentDto**](../Model/ContentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentsDeleteVersion()`

```php
contentsDeleteVersion($app, $schema, $id, $x_unpublished, $x_languages): \OpenAPI\Client\Model\ContentDto
```

Delete the draft version.

You can read the generated documentation for your app at /api/content/{appName}/docs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$id = 'id_example'; // string | The ID of the content item to delete the draft from.
$x_unpublished = True; // bool | Return unpublished content items.
$x_languages = 'x_languages_example'; // string | Only resolve these languages (comma-separated).

try {
    $result = $apiInstance->contentsDeleteVersion($app, $schema, $id, $x_unpublished, $x_languages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentsApi->contentsDeleteVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **id** | **string**| The ID of the content item to delete the draft from. | |
| **x_unpublished** | **bool**| Return unpublished content items. | [optional] |
| **x_languages** | **string**| Only resolve these languages (comma-separated). | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentDto**](../Model/ContentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentsGetContent()`

```php
contentsGetContent($app, $schema, $id, $version, $x_flatten, $x_languages, $x_unpublished): \OpenAPI\Client\Model\ContentDto
```

Get a content item.

You can read the generated documentation for your app at /api/content/{appName}/docs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$id = 'id_example'; // string | The ID of the content to fetch.
$version = -2; // int | The optional version.
$x_flatten = True; // bool | Provide the data as flat object.
$x_languages = 'x_languages_example'; // string | Only resolve these languages (comma-separated).
$x_unpublished = True; // bool | Return unpublished content items.

try {
    $result = $apiInstance->contentsGetContent($app, $schema, $id, $version, $x_flatten, $x_languages, $x_unpublished);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentsApi->contentsGetContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **id** | **string**| The ID of the content to fetch. | |
| **version** | **int**| The optional version. | [optional] [default to -2] |
| **x_flatten** | **bool**| Provide the data as flat object. | [optional] |
| **x_languages** | **string**| Only resolve these languages (comma-separated). | [optional] |
| **x_unpublished** | **bool**| Return unpublished content items. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentDto**](../Model/ContentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentsGetContentValidity()`

```php
contentsGetContentValidity($app, $schema, $id)
```

Get a content item validity.

You can read the generated documentation for your app at /api/content/{appName}/docs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$id = 'id_example'; // string | The ID of the content to fetch.

try {
    $apiInstance->contentsGetContentValidity($app, $schema, $id);
} catch (Exception $e) {
    echo 'Exception when calling ContentsApi->contentsGetContentValidity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **id** | **string**| The ID of the content to fetch. | |

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

## `contentsGetContentVersion()`

```php
contentsGetContentVersion($app, $schema, $id, $version, $x_unpublished, $x_languages): \SplFileObject
```

Get a content by version.

You can read the generated documentation for your app at /api/content/{appName}/docs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$id = 'id_example'; // string | The ID of the content to fetch.
$version = 56; // int | The version fo the content to fetch.
$x_unpublished = True; // bool | Return unpublished content items.
$x_languages = 'x_languages_example'; // string | Only resolve these languages (comma-separated).

try {
    $result = $apiInstance->contentsGetContentVersion($app, $schema, $id, $version, $x_unpublished, $x_languages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentsApi->contentsGetContentVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **id** | **string**| The ID of the content to fetch. | |
| **version** | **int**| The version fo the content to fetch. | |
| **x_unpublished** | **bool**| Return unpublished content items. | [optional] |
| **x_languages** | **string**| Only resolve these languages (comma-separated). | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentsGetContents()`

```php
contentsGetContents($app, $schema, $ids, $q, $search, $top, $skip, $orderby, $filter, $x_flatten, $x_languages, $x_no_slow_total, $x_no_total, $x_unpublished): \OpenAPI\Client\Model\ContentsDto
```

Queries contents.

You can read the generated documentation for your app at /api/content/{appName}/docs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$ids = 'ids_example'; // string | The optional ids of the content to fetch.
$q = 'q_example'; // string | The optional json query.
$search = 'search_example'; // string | Optional number of items to skip.
$top = 3.4; // float | Optional number of items to take.
$skip = 3.4; // float | Optional number of items to skip.
$orderby = 'orderby_example'; // string | Optional OData order definition.
$filter = 'filter_example'; // string | Optional OData filter.
$x_flatten = True; // bool | Provide the data as flat object.
$x_languages = 'x_languages_example'; // string | Only resolve these languages (comma-separated).
$x_no_slow_total = True; // bool | Do not return the total amount, if it would be slow.
$x_no_total = True; // bool | Do not return the total amount.
$x_unpublished = True; // bool | Return unpublished content items.

try {
    $result = $apiInstance->contentsGetContents($app, $schema, $ids, $q, $search, $top, $skip, $orderby, $filter, $x_flatten, $x_languages, $x_no_slow_total, $x_no_total, $x_unpublished);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentsApi->contentsGetContents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **ids** | **string**| The optional ids of the content to fetch. | [optional] |
| **q** | **string**| The optional json query. | [optional] |
| **search** | **string**| Optional number of items to skip. | [optional] |
| **top** | **float**| Optional number of items to take. | [optional] |
| **skip** | **float**| Optional number of items to skip. | [optional] |
| **orderby** | **string**| Optional OData order definition. | [optional] |
| **filter** | **string**| Optional OData filter. | [optional] |
| **x_flatten** | **bool**| Provide the data as flat object. | [optional] |
| **x_languages** | **string**| Only resolve these languages (comma-separated). | [optional] |
| **x_no_slow_total** | **bool**| Do not return the total amount, if it would be slow. | [optional] |
| **x_no_total** | **bool**| Do not return the total amount. | [optional] |
| **x_unpublished** | **bool**| Return unpublished content items. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentsDto**](../Model/ContentsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentsGetContentsPost()`

```php
contentsGetContentsPost($app, $schema, $query_dto, $x_flatten, $x_languages, $x_no_slow_total, $x_no_total, $x_unpublished): \OpenAPI\Client\Model\ContentsDto
```

Queries contents.

You can read the generated documentation for your app at /api/content/{appName}/docs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$query_dto = new \OpenAPI\Client\Model\QueryDto(); // \OpenAPI\Client\Model\QueryDto | The required query object.
$x_flatten = True; // bool | Provide the data as flat object.
$x_languages = 'x_languages_example'; // string | Only resolve these languages (comma-separated).
$x_no_slow_total = True; // bool | Do not return the total amount, if it would be slow.
$x_no_total = True; // bool | Do not return the total amount.
$x_unpublished = True; // bool | Return unpublished content items.

try {
    $result = $apiInstance->contentsGetContentsPost($app, $schema, $query_dto, $x_flatten, $x_languages, $x_no_slow_total, $x_no_total, $x_unpublished);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentsApi->contentsGetContentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **query_dto** | [**\OpenAPI\Client\Model\QueryDto**](../Model/QueryDto.md)| The required query object. | |
| **x_flatten** | **bool**| Provide the data as flat object. | [optional] |
| **x_languages** | **string**| Only resolve these languages (comma-separated). | [optional] |
| **x_no_slow_total** | **bool**| Do not return the total amount, if it would be slow. | [optional] |
| **x_no_total** | **bool**| Do not return the total amount. | [optional] |
| **x_unpublished** | **bool**| Return unpublished content items. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentsDto**](../Model/ContentsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentsGetReferences()`

```php
contentsGetReferences($app, $schema, $id, $q, $x_flatten, $x_languages, $x_unpublished, $x_no_slow_total, $x_no_total): \OpenAPI\Client\Model\ContentsDto
```

Get all references of a content.

You can read the generated documentation for your app at /api/content/{appName}/docs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$id = 'id_example'; // string | The ID of the content to fetch.
$q = 'q_example'; // string | The optional json query.
$x_flatten = True; // bool | Provide the data as flat object.
$x_languages = 'x_languages_example'; // string | Only resolve these languages (comma-separated).
$x_unpublished = True; // bool | Return unpublished content items.
$x_no_slow_total = True; // bool | Do not return the total amount, if it would be slow.
$x_no_total = True; // bool | Do not return the total amount.

try {
    $result = $apiInstance->contentsGetReferences($app, $schema, $id, $q, $x_flatten, $x_languages, $x_unpublished, $x_no_slow_total, $x_no_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentsApi->contentsGetReferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **id** | **string**| The ID of the content to fetch. | |
| **q** | **string**| The optional json query. | [optional] |
| **x_flatten** | **bool**| Provide the data as flat object. | [optional] |
| **x_languages** | **string**| Only resolve these languages (comma-separated). | [optional] |
| **x_unpublished** | **bool**| Return unpublished content items. | [optional] |
| **x_no_slow_total** | **bool**| Do not return the total amount, if it would be slow. | [optional] |
| **x_no_total** | **bool**| Do not return the total amount. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentsDto**](../Model/ContentsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentsGetReferencing()`

```php
contentsGetReferencing($app, $schema, $id, $q, $x_flatten, $x_languages, $x_unpublished, $x_no_slow_total, $x_no_total): \OpenAPI\Client\Model\ContentsDto
```

Get a referencing contents of a content item.

You can read the generated documentation for your app at /api/content/{appName}/docs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$id = 'id_example'; // string | The ID of the content to fetch.
$q = 'q_example'; // string | The optional json query.
$x_flatten = True; // bool | Provide the data as flat object.
$x_languages = 'x_languages_example'; // string | Only resolve these languages (comma-separated).
$x_unpublished = True; // bool | Return unpublished content items.
$x_no_slow_total = True; // bool | Do not return the total amount, if it would be slow.
$x_no_total = True; // bool | Do not return the total amount.

try {
    $result = $apiInstance->contentsGetReferencing($app, $schema, $id, $q, $x_flatten, $x_languages, $x_unpublished, $x_no_slow_total, $x_no_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentsApi->contentsGetReferencing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **id** | **string**| The ID of the content to fetch. | |
| **q** | **string**| The optional json query. | [optional] |
| **x_flatten** | **bool**| Provide the data as flat object. | [optional] |
| **x_languages** | **string**| Only resolve these languages (comma-separated). | [optional] |
| **x_unpublished** | **bool**| Return unpublished content items. | [optional] |
| **x_no_slow_total** | **bool**| Do not return the total amount, if it would be slow. | [optional] |
| **x_no_total** | **bool**| Do not return the total amount. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentsDto**](../Model/ContentsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentsPatchContent()`

```php
contentsPatchContent($app, $schema, $id, $request_body, $x_unpublished, $x_languages): \OpenAPI\Client\Model\ContentDto
```

Patchs a content item.

You can read the generated documentation for your app at /api/content/{appName}/docs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$id = 'id_example'; // string | The ID of the content item to patch.
$request_body = NULL; // array<string,array> | The patch for the content item.
$x_unpublished = True; // bool | Return unpublished content items.
$x_languages = 'x_languages_example'; // string | Only resolve these languages (comma-separated).

try {
    $result = $apiInstance->contentsPatchContent($app, $schema, $id, $request_body, $x_unpublished, $x_languages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentsApi->contentsPatchContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **id** | **string**| The ID of the content item to patch. | |
| **request_body** | [**array<string,array>**](../Model/array.md)| The patch for the content item. | |
| **x_unpublished** | **bool**| Return unpublished content items. | [optional] |
| **x_languages** | **string**| Only resolve these languages (comma-separated). | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentDto**](../Model/ContentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentsPostContent()`

```php
contentsPostContent($app, $schema, $request_body, $status, $id, $publish, $x_unpublished, $x_languages): \OpenAPI\Client\Model\ContentDto
```

Create a content item.

You can read the generated documentation for your app at /api/content/{appName}/docs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$request_body = NULL; // array<string,array> | The full data for the content item.
$status = 'status_example'; // string | The initial status.
$id = 'id_example'; // string | The optional custom content id.
$publish = True; // bool | True to automatically publish the content.
$x_unpublished = True; // bool | Return unpublished content items.
$x_languages = 'x_languages_example'; // string | Only resolve these languages (comma-separated).

try {
    $result = $apiInstance->contentsPostContent($app, $schema, $request_body, $status, $id, $publish, $x_unpublished, $x_languages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentsApi->contentsPostContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **request_body** | [**array<string,array>**](../Model/array.md)| The full data for the content item. | |
| **status** | **string**| The initial status. | [optional] |
| **id** | **string**| The optional custom content id. | [optional] |
| **publish** | **bool**| True to automatically publish the content. | [optional] |
| **x_unpublished** | **bool**| Return unpublished content items. | [optional] |
| **x_languages** | **string**| Only resolve these languages (comma-separated). | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentDto**](../Model/ContentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentsPostContents()`

```php
contentsPostContents($app, $schema, $import_contents_dto): \OpenAPI\Client\Model\BulkResultDto[]
```

Import content items.

You can read the generated documentation for your app at /api/content/{appName}/docs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$import_contents_dto = new \OpenAPI\Client\Model\ImportContentsDto(); // \OpenAPI\Client\Model\ImportContentsDto | The import request.

try {
    $result = $apiInstance->contentsPostContents($app, $schema, $import_contents_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentsApi->contentsPostContents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **import_contents_dto** | [**\OpenAPI\Client\Model\ImportContentsDto**](../Model/ImportContentsDto.md)| The import request. | |

### Return type

[**\OpenAPI\Client\Model\BulkResultDto[]**](../Model/BulkResultDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentsPostUpsertContent()`

```php
contentsPostUpsertContent($app, $schema, $id, $request_body, $status, $patch, $publish, $x_unpublished, $x_languages): \OpenAPI\Client\Model\ContentDto
```

Upsert a content item.

You can read the generated documentation for your app at /api/content/{appName}/docs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$id = 'id_example'; // string | The ID of the content item to update.
$request_body = NULL; // array<string,array> | The full data for the content item.
$status = 'status_example'; // string | The initial status.
$patch = True; // bool | Makes the update as patch.
$publish = True; // bool | True to automatically publish the content.
$x_unpublished = True; // bool | Return unpublished content items.
$x_languages = 'x_languages_example'; // string | Only resolve these languages (comma-separated).

try {
    $result = $apiInstance->contentsPostUpsertContent($app, $schema, $id, $request_body, $status, $patch, $publish, $x_unpublished, $x_languages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentsApi->contentsPostUpsertContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **id** | **string**| The ID of the content item to update. | |
| **request_body** | [**array<string,array>**](../Model/array.md)| The full data for the content item. | |
| **status** | **string**| The initial status. | [optional] |
| **patch** | **bool**| Makes the update as patch. | [optional] |
| **publish** | **bool**| True to automatically publish the content. | [optional] |
| **x_unpublished** | **bool**| Return unpublished content items. | [optional] |
| **x_languages** | **string**| Only resolve these languages (comma-separated). | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentDto**](../Model/ContentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentsPutContent()`

```php
contentsPutContent($app, $schema, $id, $request_body, $x_unpublished, $x_languages): \OpenAPI\Client\Model\ContentDto
```

Update a content item.

You can read the generated documentation for your app at /api/content/{appName}/docs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$id = 'id_example'; // string | The ID of the content item to update.
$request_body = NULL; // array<string,array> | The full data for the content item.
$x_unpublished = True; // bool | Return unpublished content items.
$x_languages = 'x_languages_example'; // string | Only resolve these languages (comma-separated).

try {
    $result = $apiInstance->contentsPutContent($app, $schema, $id, $request_body, $x_unpublished, $x_languages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentsApi->contentsPutContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **id** | **string**| The ID of the content item to update. | |
| **request_body** | [**array<string,array>**](../Model/array.md)| The full data for the content item. | |
| **x_unpublished** | **bool**| Return unpublished content items. | [optional] |
| **x_languages** | **string**| Only resolve these languages (comma-separated). | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentDto**](../Model/ContentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentsPutContentStatus()`

```php
contentsPutContentStatus($app, $schema, $id, $change_status_dto, $x_unpublished, $x_languages): \OpenAPI\Client\Model\ContentDto
```

Change status of a content item.

You can read the generated documentation for your app at /api/content/{appName}/docs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$id = 'id_example'; // string | The ID of the content item to change.
$change_status_dto = new \OpenAPI\Client\Model\ChangeStatusDto(); // \OpenAPI\Client\Model\ChangeStatusDto | The status request.
$x_unpublished = True; // bool | Return unpublished content items.
$x_languages = 'x_languages_example'; // string | Only resolve these languages (comma-separated).

try {
    $result = $apiInstance->contentsPutContentStatus($app, $schema, $id, $change_status_dto, $x_unpublished, $x_languages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentsApi->contentsPutContentStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **id** | **string**| The ID of the content item to change. | |
| **change_status_dto** | [**\OpenAPI\Client\Model\ChangeStatusDto**](../Model/ChangeStatusDto.md)| The status request. | |
| **x_unpublished** | **bool**| Return unpublished content items. | [optional] |
| **x_languages** | **string**| Only resolve these languages (comma-separated). | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentDto**](../Model/ContentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
