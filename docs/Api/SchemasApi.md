# OpenAPI\Client\SchemasApi

All URIs are relative to https://cloud.squidex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**schemaFieldsDeleteField()**](SchemasApi.md#schemaFieldsDeleteField) | **DELETE** /api/apps/{app}/schemas/{schema}/fields/{id} | Delete a schema field. |
| [**schemaFieldsDeleteNestedField()**](SchemasApi.md#schemaFieldsDeleteNestedField) | **DELETE** /api/apps/{app}/schemas/{schema}/fields/{parentId}/nested/{id} | Delete a nested field. |
| [**schemaFieldsDisableField()**](SchemasApi.md#schemaFieldsDisableField) | **PUT** /api/apps/{app}/schemas/{schema}/fields/{id}/disable | Disable a schema field. |
| [**schemaFieldsDisableNestedField()**](SchemasApi.md#schemaFieldsDisableNestedField) | **PUT** /api/apps/{app}/schemas/{schema}/fields/{parentId}/nested/{id}/disable | Disable a nested field. |
| [**schemaFieldsEnableField()**](SchemasApi.md#schemaFieldsEnableField) | **PUT** /api/apps/{app}/schemas/{schema}/fields/{id}/enable | Enable a schema field. |
| [**schemaFieldsEnableNestedField()**](SchemasApi.md#schemaFieldsEnableNestedField) | **PUT** /api/apps/{app}/schemas/{schema}/fields/{parentId}/nested/{id}/enable | Enable a nested field. |
| [**schemaFieldsHideField()**](SchemasApi.md#schemaFieldsHideField) | **PUT** /api/apps/{app}/schemas/{schema}/fields/{id}/hide | Hide a schema field. |
| [**schemaFieldsHideNestedField()**](SchemasApi.md#schemaFieldsHideNestedField) | **PUT** /api/apps/{app}/schemas/{schema}/fields/{parentId}/nested/{id}/hide | Hide a nested field. |
| [**schemaFieldsLockField()**](SchemasApi.md#schemaFieldsLockField) | **PUT** /api/apps/{app}/schemas/{schema}/fields/{id}/lock | Lock a schema field. |
| [**schemaFieldsLockNestedField()**](SchemasApi.md#schemaFieldsLockNestedField) | **PUT** /api/apps/{app}/schemas/{schema}/fields/{parentId}/nested/{id}/lock | Lock a nested field. |
| [**schemaFieldsPostField()**](SchemasApi.md#schemaFieldsPostField) | **POST** /api/apps/{app}/schemas/{schema}/fields | Add a schema field. |
| [**schemaFieldsPostNestedField()**](SchemasApi.md#schemaFieldsPostNestedField) | **POST** /api/apps/{app}/schemas/{schema}/fields/{parentId}/nested | Add a nested field. |
| [**schemaFieldsPutField()**](SchemasApi.md#schemaFieldsPutField) | **PUT** /api/apps/{app}/schemas/{schema}/fields/{id} | Update a schema field. |
| [**schemaFieldsPutNestedField()**](SchemasApi.md#schemaFieldsPutNestedField) | **PUT** /api/apps/{app}/schemas/{schema}/fields/{parentId}/nested/{id} | Update a nested field. |
| [**schemaFieldsPutNestedFieldOrdering()**](SchemasApi.md#schemaFieldsPutNestedFieldOrdering) | **PUT** /api/apps/{app}/schemas/{schema}/fields/{parentId}/nested/ordering | Reorder all nested fields. |
| [**schemaFieldsPutSchemaFieldOrdering()**](SchemasApi.md#schemaFieldsPutSchemaFieldOrdering) | **PUT** /api/apps/{app}/schemas/{schema}/fields/ordering | Reorder all fields. |
| [**schemaFieldsPutSchemaUIFields()**](SchemasApi.md#schemaFieldsPutSchemaUIFields) | **PUT** /api/apps/{app}/schemas/{schema}/fields/ui | Configure UI fields. |
| [**schemaFieldsShowField()**](SchemasApi.md#schemaFieldsShowField) | **PUT** /api/apps/{app}/schemas/{schema}/fields/{id}/show | Show a schema field. |
| [**schemaFieldsShowNestedField()**](SchemasApi.md#schemaFieldsShowNestedField) | **PUT** /api/apps/{app}/schemas/{schema}/fields/{parentId}/nested/{id}/show | Show a nested field. |
| [**schemasDeleteSchema()**](SchemasApi.md#schemasDeleteSchema) | **DELETE** /api/apps/{app}/schemas/{schema} | Delete a schema. |
| [**schemasGetSchema()**](SchemasApi.md#schemasGetSchema) | **GET** /api/apps/{app}/schemas/{schema} | Get a schema by name. |
| [**schemasGetSchemas()**](SchemasApi.md#schemasGetSchemas) | **GET** /api/apps/{app}/schemas | Get schemas. |
| [**schemasPostSchema()**](SchemasApi.md#schemasPostSchema) | **POST** /api/apps/{app}/schemas | Create a new schema. |
| [**schemasPublishSchema()**](SchemasApi.md#schemasPublishSchema) | **PUT** /api/apps/{app}/schemas/{schema}/publish | Publish a schema. |
| [**schemasPutCategory()**](SchemasApi.md#schemasPutCategory) | **PUT** /api/apps/{app}/schemas/{schema}/category | Update a schema category. |
| [**schemasPutPreviewUrls()**](SchemasApi.md#schemasPutPreviewUrls) | **PUT** /api/apps/{app}/schemas/{schema}/preview-urls | Update the preview urls. |
| [**schemasPutRules()**](SchemasApi.md#schemasPutRules) | **PUT** /api/apps/{app}/schemas/{schema}/rules | Update the rules. |
| [**schemasPutSchema()**](SchemasApi.md#schemasPutSchema) | **PUT** /api/apps/{app}/schemas/{schema} | Update a schema. |
| [**schemasPutSchemaSync()**](SchemasApi.md#schemasPutSchemaSync) | **PUT** /api/apps/{app}/schemas/{schema}/sync | Synchronize a schema. |
| [**schemasPutScripts()**](SchemasApi.md#schemasPutScripts) | **PUT** /api/apps/{app}/schemas/{schema}/scripts | Update the scripts. |
| [**schemasUnpublishSchema()**](SchemasApi.md#schemasUnpublishSchema) | **PUT** /api/apps/{app}/schemas/{schema}/unpublish | Unpublish a schema. |


## `schemaFieldsDeleteField()`

```php
schemaFieldsDeleteField($app, $schema, $id): \OpenAPI\Client\Model\SchemaDto
```

Delete a schema field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$id = 56; // int | The ID of the field to disable.

try {
    $result = $apiInstance->schemaFieldsDeleteField($app, $schema, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemaFieldsDeleteField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **id** | **int**| The ID of the field to disable. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemaFieldsDeleteNestedField()`

```php
schemaFieldsDeleteNestedField($app, $schema, $parent_id, $id): \OpenAPI\Client\Model\SchemaDto
```

Delete a nested field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$parent_id = 56; // int | The parent field id.
$id = 56; // int | The ID of the field to disable.

try {
    $result = $apiInstance->schemaFieldsDeleteNestedField($app, $schema, $parent_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemaFieldsDeleteNestedField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **parent_id** | **int**| The parent field id. | |
| **id** | **int**| The ID of the field to disable. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemaFieldsDisableField()`

```php
schemaFieldsDisableField($app, $schema, $id): \OpenAPI\Client\Model\SchemaDto
```

Disable a schema field.

A disabled field cannot not be edited in the squidex portal anymore, but will be part of the API response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$id = 56; // int | The ID of the field to disable.

try {
    $result = $apiInstance->schemaFieldsDisableField($app, $schema, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemaFieldsDisableField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **id** | **int**| The ID of the field to disable. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemaFieldsDisableNestedField()`

```php
schemaFieldsDisableNestedField($app, $schema, $parent_id, $id): \OpenAPI\Client\Model\SchemaDto
```

Disable a nested field.

A disabled field cannot not be edited in the squidex portal anymore, but will be part of the API response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$parent_id = 56; // int | The parent field id.
$id = 56; // int | The ID of the field to disable.

try {
    $result = $apiInstance->schemaFieldsDisableNestedField($app, $schema, $parent_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemaFieldsDisableNestedField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **parent_id** | **int**| The parent field id. | |
| **id** | **int**| The ID of the field to disable. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemaFieldsEnableField()`

```php
schemaFieldsEnableField($app, $schema, $id): \OpenAPI\Client\Model\SchemaDto
```

Enable a schema field.

A disabled field cannot not be edited in the squidex portal anymore, but will be part of the API response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$id = 56; // int | The ID of the field to enable.

try {
    $result = $apiInstance->schemaFieldsEnableField($app, $schema, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemaFieldsEnableField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **id** | **int**| The ID of the field to enable. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemaFieldsEnableNestedField()`

```php
schemaFieldsEnableNestedField($app, $schema, $parent_id, $id): \OpenAPI\Client\Model\SchemaDto
```

Enable a nested field.

A disabled field cannot not be edited in the squidex portal anymore, but will be part of the API response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$parent_id = 56; // int | The parent field id.
$id = 56; // int | The ID of the field to enable.

try {
    $result = $apiInstance->schemaFieldsEnableNestedField($app, $schema, $parent_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemaFieldsEnableNestedField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **parent_id** | **int**| The parent field id. | |
| **id** | **int**| The ID of the field to enable. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemaFieldsHideField()`

```php
schemaFieldsHideField($app, $schema, $id): \OpenAPI\Client\Model\SchemaDto
```

Hide a schema field.

A hidden field is not part of the API response, but can still be edited in the portal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$id = 56; // int | The ID of the field to hide.

try {
    $result = $apiInstance->schemaFieldsHideField($app, $schema, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemaFieldsHideField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **id** | **int**| The ID of the field to hide. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemaFieldsHideNestedField()`

```php
schemaFieldsHideNestedField($app, $schema, $parent_id, $id): \OpenAPI\Client\Model\SchemaDto
```

Hide a nested field.

A hidden field is not part of the API response, but can still be edited in the portal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$parent_id = 56; // int | The parent field id.
$id = 56; // int | The ID of the field to hide.

try {
    $result = $apiInstance->schemaFieldsHideNestedField($app, $schema, $parent_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemaFieldsHideNestedField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **parent_id** | **int**| The parent field id. | |
| **id** | **int**| The ID of the field to hide. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemaFieldsLockField()`

```php
schemaFieldsLockField($app, $schema, $id): \OpenAPI\Client\Model\SchemaDto
```

Lock a schema field.

A locked field cannot be updated or deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$id = 56; // int | The ID of the field to lock.

try {
    $result = $apiInstance->schemaFieldsLockField($app, $schema, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemaFieldsLockField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **id** | **int**| The ID of the field to lock. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemaFieldsLockNestedField()`

```php
schemaFieldsLockNestedField($app, $schema, $parent_id, $id): \OpenAPI\Client\Model\SchemaDto
```

Lock a nested field.

A locked field cannot be edited or deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$parent_id = 56; // int | The parent field id.
$id = 56; // int | The ID of the field to lock.

try {
    $result = $apiInstance->schemaFieldsLockNestedField($app, $schema, $parent_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemaFieldsLockNestedField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **parent_id** | **int**| The parent field id. | |
| **id** | **int**| The ID of the field to lock. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemaFieldsPostField()`

```php
schemaFieldsPostField($app, $schema, $add_field_dto): \OpenAPI\Client\Model\SchemaDto
```

Add a schema field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$add_field_dto = new \OpenAPI\Client\Model\AddFieldDto(); // \OpenAPI\Client\Model\AddFieldDto | The field object that needs to be added to the schema.

try {
    $result = $apiInstance->schemaFieldsPostField($app, $schema, $add_field_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemaFieldsPostField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **add_field_dto** | [**\OpenAPI\Client\Model\AddFieldDto**](../Model/AddFieldDto.md)| The field object that needs to be added to the schema. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemaFieldsPostNestedField()`

```php
schemaFieldsPostNestedField($app, $schema, $parent_id, $add_field_dto): \OpenAPI\Client\Model\SchemaDto
```

Add a nested field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$parent_id = 56; // int | The parent field id.
$add_field_dto = new \OpenAPI\Client\Model\AddFieldDto(); // \OpenAPI\Client\Model\AddFieldDto | The field object that needs to be added to the schema.

try {
    $result = $apiInstance->schemaFieldsPostNestedField($app, $schema, $parent_id, $add_field_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemaFieldsPostNestedField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **parent_id** | **int**| The parent field id. | |
| **add_field_dto** | [**\OpenAPI\Client\Model\AddFieldDto**](../Model/AddFieldDto.md)| The field object that needs to be added to the schema. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemaFieldsPutField()`

```php
schemaFieldsPutField($app, $schema, $id, $update_field_dto): \OpenAPI\Client\Model\SchemaDto
```

Update a schema field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$id = 56; // int | The ID of the field to update.
$update_field_dto = new \OpenAPI\Client\Model\UpdateFieldDto(); // \OpenAPI\Client\Model\UpdateFieldDto | The field object that needs to be added to the schema.

try {
    $result = $apiInstance->schemaFieldsPutField($app, $schema, $id, $update_field_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemaFieldsPutField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **id** | **int**| The ID of the field to update. | |
| **update_field_dto** | [**\OpenAPI\Client\Model\UpdateFieldDto**](../Model/UpdateFieldDto.md)| The field object that needs to be added to the schema. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemaFieldsPutNestedField()`

```php
schemaFieldsPutNestedField($app, $schema, $parent_id, $id, $update_field_dto): \OpenAPI\Client\Model\SchemaDto
```

Update a nested field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$parent_id = 56; // int | The parent field id.
$id = 56; // int | The ID of the field to update.
$update_field_dto = new \OpenAPI\Client\Model\UpdateFieldDto(); // \OpenAPI\Client\Model\UpdateFieldDto | The field object that needs to be added to the schema.

try {
    $result = $apiInstance->schemaFieldsPutNestedField($app, $schema, $parent_id, $id, $update_field_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemaFieldsPutNestedField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **parent_id** | **int**| The parent field id. | |
| **id** | **int**| The ID of the field to update. | |
| **update_field_dto** | [**\OpenAPI\Client\Model\UpdateFieldDto**](../Model/UpdateFieldDto.md)| The field object that needs to be added to the schema. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemaFieldsPutNestedFieldOrdering()`

```php
schemaFieldsPutNestedFieldOrdering($app, $schema, $parent_id, $reorder_fields_dto): \OpenAPI\Client\Model\SchemaDto
```

Reorder all nested fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$parent_id = 56; // int | The parent field id.
$reorder_fields_dto = new \OpenAPI\Client\Model\ReorderFieldsDto(); // \OpenAPI\Client\Model\ReorderFieldsDto | The request that contains the field ids.

try {
    $result = $apiInstance->schemaFieldsPutNestedFieldOrdering($app, $schema, $parent_id, $reorder_fields_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemaFieldsPutNestedFieldOrdering: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **parent_id** | **int**| The parent field id. | |
| **reorder_fields_dto** | [**\OpenAPI\Client\Model\ReorderFieldsDto**](../Model/ReorderFieldsDto.md)| The request that contains the field ids. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemaFieldsPutSchemaFieldOrdering()`

```php
schemaFieldsPutSchemaFieldOrdering($app, $schema, $reorder_fields_dto): \OpenAPI\Client\Model\SchemaDto
```

Reorder all fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$reorder_fields_dto = new \OpenAPI\Client\Model\ReorderFieldsDto(); // \OpenAPI\Client\Model\ReorderFieldsDto | The request that contains the field ids.

try {
    $result = $apiInstance->schemaFieldsPutSchemaFieldOrdering($app, $schema, $reorder_fields_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemaFieldsPutSchemaFieldOrdering: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **reorder_fields_dto** | [**\OpenAPI\Client\Model\ReorderFieldsDto**](../Model/ReorderFieldsDto.md)| The request that contains the field ids. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemaFieldsPutSchemaUIFields()`

```php
schemaFieldsPutSchemaUIFields($app, $schema, $configure_ui_fields_dto): \OpenAPI\Client\Model\SchemaDto
```

Configure UI fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$configure_ui_fields_dto = new \OpenAPI\Client\Model\ConfigureUIFieldsDto(); // \OpenAPI\Client\Model\ConfigureUIFieldsDto | The request that contains the field names.

try {
    $result = $apiInstance->schemaFieldsPutSchemaUIFields($app, $schema, $configure_ui_fields_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemaFieldsPutSchemaUIFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **configure_ui_fields_dto** | [**\OpenAPI\Client\Model\ConfigureUIFieldsDto**](../Model/ConfigureUIFieldsDto.md)| The request that contains the field names. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemaFieldsShowField()`

```php
schemaFieldsShowField($app, $schema, $id): \OpenAPI\Client\Model\SchemaDto
```

Show a schema field.

A hidden field is not part of the API response, but can still be edited in the portal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$id = 56; // int | The ID of the field to show.

try {
    $result = $apiInstance->schemaFieldsShowField($app, $schema, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemaFieldsShowField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **id** | **int**| The ID of the field to show. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemaFieldsShowNestedField()`

```php
schemaFieldsShowNestedField($app, $schema, $parent_id, $id): \OpenAPI\Client\Model\SchemaDto
```

Show a nested field.

A hidden field is not part of the API response, but can still be edited in the portal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$parent_id = 56; // int | The parent field id.
$id = 56; // int | The ID of the field to show.

try {
    $result = $apiInstance->schemaFieldsShowNestedField($app, $schema, $parent_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemaFieldsShowNestedField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **parent_id** | **int**| The parent field id. | |
| **id** | **int**| The ID of the field to show. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemasDeleteSchema()`

```php
schemasDeleteSchema($app, $schema)
```

Delete a schema.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema to delete.

try {
    $apiInstance->schemasDeleteSchema($app, $schema);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemasDeleteSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema to delete. | |

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

## `schemasGetSchema()`

```php
schemasGetSchema($app, $schema): \OpenAPI\Client\Model\SchemaDto
```

Get a schema by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema to retrieve.

try {
    $result = $apiInstance->schemasGetSchema($app, $schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemasGetSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema to retrieve. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemasGetSchemas()`

```php
schemasGetSchemas($app): \OpenAPI\Client\Model\SchemasDto
```

Get schemas.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.

try {
    $result = $apiInstance->schemasGetSchemas($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemasGetSchemas: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |

### Return type

[**\OpenAPI\Client\Model\SchemasDto**](../Model/SchemasDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemasPostSchema()`

```php
schemasPostSchema($app, $create_schema_dto): \OpenAPI\Client\Model\SchemaDto
```

Create a new schema.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$create_schema_dto = new \OpenAPI\Client\Model\CreateSchemaDto(); // \OpenAPI\Client\Model\CreateSchemaDto | The schema object that needs to be added to the app.

try {
    $result = $apiInstance->schemasPostSchema($app, $create_schema_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemasPostSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **create_schema_dto** | [**\OpenAPI\Client\Model\CreateSchemaDto**](../Model/CreateSchemaDto.md)| The schema object that needs to be added to the app. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemasPublishSchema()`

```php
schemasPublishSchema($app, $schema): \OpenAPI\Client\Model\SchemaDto
```

Publish a schema.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema to publish.

try {
    $result = $apiInstance->schemasPublishSchema($app, $schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemasPublishSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema to publish. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemasPutCategory()`

```php
schemasPutCategory($app, $schema, $change_category_dto): \OpenAPI\Client\Model\SchemaDto
```

Update a schema category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$change_category_dto = new \OpenAPI\Client\Model\ChangeCategoryDto(); // \OpenAPI\Client\Model\ChangeCategoryDto | The schema object that needs to updated.

try {
    $result = $apiInstance->schemasPutCategory($app, $schema, $change_category_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemasPutCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **change_category_dto** | [**\OpenAPI\Client\Model\ChangeCategoryDto**](../Model/ChangeCategoryDto.md)| The schema object that needs to updated. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemasPutPreviewUrls()`

```php
schemasPutPreviewUrls($app, $schema, $request_body): \OpenAPI\Client\Model\SchemaDto
```

Update the preview urls.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$request_body = array('key' => 'request_body_example'); // array<string,string> | The preview urls for the schema.

try {
    $result = $apiInstance->schemasPutPreviewUrls($app, $schema, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemasPutPreviewUrls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **request_body** | [**array<string,string>**](../Model/string.md)| The preview urls for the schema. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemasPutRules()`

```php
schemasPutRules($app, $schema, $configure_field_rules_dto): \OpenAPI\Client\Model\SchemaDto
```

Update the rules.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$configure_field_rules_dto = new \OpenAPI\Client\Model\ConfigureFieldRulesDto(); // \OpenAPI\Client\Model\ConfigureFieldRulesDto | The schema rules object that needs to updated.

try {
    $result = $apiInstance->schemasPutRules($app, $schema, $configure_field_rules_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemasPutRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **configure_field_rules_dto** | [**\OpenAPI\Client\Model\ConfigureFieldRulesDto**](../Model/ConfigureFieldRulesDto.md)| The schema rules object that needs to updated. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemasPutSchema()`

```php
schemasPutSchema($app, $schema, $update_schema_dto): \OpenAPI\Client\Model\SchemaDto
```

Update a schema.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$update_schema_dto = new \OpenAPI\Client\Model\UpdateSchemaDto(); // \OpenAPI\Client\Model\UpdateSchemaDto | The schema object that needs to updated.

try {
    $result = $apiInstance->schemasPutSchema($app, $schema, $update_schema_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemasPutSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **update_schema_dto** | [**\OpenAPI\Client\Model\UpdateSchemaDto**](../Model/UpdateSchemaDto.md)| The schema object that needs to updated. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemasPutSchemaSync()`

```php
schemasPutSchemaSync($app, $schema, $synchronize_schema_dto): \OpenAPI\Client\Model\SchemaDto
```

Synchronize a schema.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$synchronize_schema_dto = new \OpenAPI\Client\Model\SynchronizeSchemaDto(); // \OpenAPI\Client\Model\SynchronizeSchemaDto | The schema object that needs to updated.

try {
    $result = $apiInstance->schemasPutSchemaSync($app, $schema, $synchronize_schema_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemasPutSchemaSync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **synchronize_schema_dto** | [**\OpenAPI\Client\Model\SynchronizeSchemaDto**](../Model/SynchronizeSchemaDto.md)| The schema object that needs to updated. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemasPutScripts()`

```php
schemasPutScripts($app, $schema, $schema_scripts_dto): \OpenAPI\Client\Model\SchemaDto
```

Update the scripts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema.
$schema_scripts_dto = new \OpenAPI\Client\Model\SchemaScriptsDto(); // \OpenAPI\Client\Model\SchemaScriptsDto | The schema scripts object that needs to updated.

try {
    $result = $apiInstance->schemasPutScripts($app, $schema, $schema_scripts_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemasPutScripts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema. | |
| **schema_scripts_dto** | [**\OpenAPI\Client\Model\SchemaScriptsDto**](../Model/SchemaScriptsDto.md)| The schema scripts object that needs to updated. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schemasUnpublishSchema()`

```php
schemasUnpublishSchema($app, $schema): \OpenAPI\Client\Model\SchemaDto
```

Unpublish a schema.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$schema = 'schema_example'; // string | The name of the schema to unpublish.

try {
    $result = $apiInstance->schemasUnpublishSchema($app, $schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->schemasUnpublishSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **schema** | **string**| The name of the schema to unpublish. | |

### Return type

[**\OpenAPI\Client\Model\SchemaDto**](../Model/SchemaDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
