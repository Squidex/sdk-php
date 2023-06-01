# OpenAPI\Client\AssetsApi

All URIs are relative to https://cloud.squidex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assetContentGetAssetContent()**](AssetsApi.md#assetContentGetAssetContent) | **GET** /api/assets/{id} | Get the asset content. |
| [**assetContentGetAssetContentBySlug()**](AssetsApi.md#assetContentGetAssetContentBySlug) | **GET** /api/assets/{app}/{idOrSlug}/{more} | Get the asset content. |
| [**assetFoldersDeleteAssetFolder()**](AssetsApi.md#assetFoldersDeleteAssetFolder) | **DELETE** /api/apps/{app}/assets/folders/{id} | Delete an asset folder. |
| [**assetFoldersGetAssetFolders()**](AssetsApi.md#assetFoldersGetAssetFolders) | **GET** /api/apps/{app}/assets/folders | Get asset folders. |
| [**assetFoldersPostAssetFolder()**](AssetsApi.md#assetFoldersPostAssetFolder) | **POST** /api/apps/{app}/assets/folders | Create an asset folder. |
| [**assetFoldersPutAssetFolder()**](AssetsApi.md#assetFoldersPutAssetFolder) | **PUT** /api/apps/{app}/assets/folders/{id} | Update an asset folder. |
| [**assetFoldersPutAssetFolderParent()**](AssetsApi.md#assetFoldersPutAssetFolderParent) | **PUT** /api/apps/{app}/assets/folders/{id}/parent | Move an asset folder. |
| [**assetsBulkUpdateAssets()**](AssetsApi.md#assetsBulkUpdateAssets) | **POST** /api/apps/{app}/assets/bulk | Bulk update assets. |
| [**assetsDeleteAsset()**](AssetsApi.md#assetsDeleteAsset) | **DELETE** /api/apps/{app}/assets/{id} | Delete an asset. |
| [**assetsGetAsset()**](AssetsApi.md#assetsGetAsset) | **GET** /api/apps/{app}/assets/{id} | Get an asset by id. |
| [**assetsGetAssets()**](AssetsApi.md#assetsGetAssets) | **GET** /api/apps/{app}/assets | Get assets. |
| [**assetsGetAssetsPost()**](AssetsApi.md#assetsGetAssetsPost) | **POST** /api/apps/{app}/assets/query | Get assets. |
| [**assetsGetTags()**](AssetsApi.md#assetsGetTags) | **GET** /api/apps/{app}/assets/tags | Get assets tags. |
| [**assetsPostAsset()**](AssetsApi.md#assetsPostAsset) | **POST** /api/apps/{app}/assets | Upload a new asset. |
| [**assetsPostUpsertAsset()**](AssetsApi.md#assetsPostUpsertAsset) | **POST** /api/apps/{app}/assets/{id} | Upsert an asset. |
| [**assetsPutAsset()**](AssetsApi.md#assetsPutAsset) | **PUT** /api/apps/{app}/assets/{id} | Update an asset. |
| [**assetsPutAssetContent()**](AssetsApi.md#assetsPutAssetContent) | **PUT** /api/apps/{app}/assets/{id}/content | Replace asset content. |
| [**assetsPutAssetParent()**](AssetsApi.md#assetsPutAssetParent) | **PUT** /api/apps/{app}/assets/{id}/parent | Moves the asset. |
| [**assetsPutTag()**](AssetsApi.md#assetsPutTag) | **PUT** /api/apps/{app}/assets/tags/{name} | Rename an asset tag. |


## `assetContentGetAssetContent()`

```php
assetContentGetAssetContent($id, $version, $cache, $download, $width, $height, $quality, $mode, $bg, $focus_x, $focus_y, $nofocus, $auto, $force, $format): \SplFileObject
```

Get the asset content.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the asset.
$version = 56; // int | The optional version of the asset.
$cache = 56; // int | The cache duration in seconds.
$download = 56; // int | Set it to 0 to prevent download.
$width = 56; // int | The target width of the asset, if it is an image.
$height = 56; // int | The target height of the asset, if it is an image.
$quality = 56; // int | Optional image quality, it is is an jpeg image.
$mode = new \OpenAPI\Client\Model\ResizeMode(); // ResizeMode | The resize mode when the width and height is defined.
$bg = 'bg_example'; // string | Optional background color.
$focus_x = 3.4; // float | Override the y focus point.
$focus_y = 3.4; // float | Override the x focus point.
$nofocus = True; // bool | True to ignore the asset focus point if any.
$auto = True; // bool | True to use auto format.
$force = True; // bool | True to force a new resize even if it already stored.
$format = new \OpenAPI\Client\Model\ImageFormat(); // ImageFormat | True to force a new resize even if it already stored.

try {
    $result = $apiInstance->assetContentGetAssetContent($id, $version, $cache, $download, $width, $height, $quality, $mode, $bg, $focus_x, $focus_y, $nofocus, $auto, $force, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetContentGetAssetContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the asset. | |
| **version** | **int**| The optional version of the asset. | [optional] |
| **cache** | **int**| The cache duration in seconds. | [optional] |
| **download** | **int**| Set it to 0 to prevent download. | [optional] |
| **width** | **int**| The target width of the asset, if it is an image. | [optional] |
| **height** | **int**| The target height of the asset, if it is an image. | [optional] |
| **quality** | **int**| Optional image quality, it is is an jpeg image. | [optional] |
| **mode** | [**ResizeMode**](../Model/.md)| The resize mode when the width and height is defined. | [optional] |
| **bg** | **string**| Optional background color. | [optional] |
| **focus_x** | **float**| Override the y focus point. | [optional] |
| **focus_y** | **float**| Override the x focus point. | [optional] |
| **nofocus** | **bool**| True to ignore the asset focus point if any. | [optional] |
| **auto** | **bool**| True to use auto format. | [optional] |
| **force** | **bool**| True to force a new resize even if it already stored. | [optional] |
| **format** | [**ImageFormat**](../Model/.md)| True to force a new resize even if it already stored. | [optional] |

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

## `assetContentGetAssetContentBySlug()`

```php
assetContentGetAssetContentBySlug($app, $id_or_slug, $more, $version, $cache, $download, $width, $height, $quality, $mode, $bg, $focus_x, $focus_y, $nofocus, $auto, $force, $format): \SplFileObject
```

Get the asset content.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id_or_slug = 'id_or_slug_example'; // string | The id or slug of the asset.
$more = 'more_example'; // string | Optional suffix that can be used to seo-optimize the link to the image Has not effect.
$version = 56; // int | The optional version of the asset.
$cache = 56; // int | The cache duration in seconds.
$download = 56; // int | Set it to 0 to prevent download.
$width = 56; // int | The target width of the asset, if it is an image.
$height = 56; // int | The target height of the asset, if it is an image.
$quality = 56; // int | Optional image quality, it is is an jpeg image.
$mode = new \OpenAPI\Client\Model\ResizeMode(); // ResizeMode | The resize mode when the width and height is defined.
$bg = 'bg_example'; // string | Optional background color.
$focus_x = 3.4; // float | Override the y focus point.
$focus_y = 3.4; // float | Override the x focus point.
$nofocus = True; // bool | True to ignore the asset focus point if any.
$auto = True; // bool | True to use auto format.
$force = True; // bool | True to force a new resize even if it already stored.
$format = new \OpenAPI\Client\Model\ImageFormat(); // ImageFormat | True to force a new resize even if it already stored.

try {
    $result = $apiInstance->assetContentGetAssetContentBySlug($app, $id_or_slug, $more, $version, $cache, $download, $width, $height, $quality, $mode, $bg, $focus_x, $focus_y, $nofocus, $auto, $force, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetContentGetAssetContentBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id_or_slug** | **string**| The id or slug of the asset. | |
| **more** | **string**| Optional suffix that can be used to seo-optimize the link to the image Has not effect. | |
| **version** | **int**| The optional version of the asset. | [optional] |
| **cache** | **int**| The cache duration in seconds. | [optional] |
| **download** | **int**| Set it to 0 to prevent download. | [optional] |
| **width** | **int**| The target width of the asset, if it is an image. | [optional] |
| **height** | **int**| The target height of the asset, if it is an image. | [optional] |
| **quality** | **int**| Optional image quality, it is is an jpeg image. | [optional] |
| **mode** | [**ResizeMode**](../Model/.md)| The resize mode when the width and height is defined. | [optional] |
| **bg** | **string**| Optional background color. | [optional] |
| **focus_x** | **float**| Override the y focus point. | [optional] |
| **focus_y** | **float**| Override the x focus point. | [optional] |
| **nofocus** | **bool**| True to ignore the asset focus point if any. | [optional] |
| **auto** | **bool**| True to use auto format. | [optional] |
| **force** | **bool**| True to force a new resize even if it already stored. | [optional] |
| **format** | [**ImageFormat**](../Model/.md)| True to force a new resize even if it already stored. | [optional] |

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

## `assetFoldersDeleteAssetFolder()`

```php
assetFoldersDeleteAssetFolder($app, $id)
```

Delete an asset folder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The ID of the asset folder to delete.

try {
    $apiInstance->assetFoldersDeleteAssetFolder($app, $id);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetFoldersDeleteAssetFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The ID of the asset folder to delete. | |

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

## `assetFoldersGetAssetFolders()`

```php
assetFoldersGetAssetFolders($app, $parent_id, $scope): \OpenAPI\Client\Model\AssetFoldersDto
```

Get asset folders.

Get all asset folders for the app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$parent_id = 'parent_id_example'; // string | The optional parent folder id.
$scope = new \OpenAPI\Client\Model\AssetFolderScope(); // AssetFolderScope | The scope of the query.

try {
    $result = $apiInstance->assetFoldersGetAssetFolders($app, $parent_id, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetFoldersGetAssetFolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **parent_id** | **string**| The optional parent folder id. | [optional] |
| **scope** | [**AssetFolderScope**](../Model/.md)| The scope of the query. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AssetFoldersDto**](../Model/AssetFoldersDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetFoldersPostAssetFolder()`

```php
assetFoldersPostAssetFolder($app, $create_asset_folder_dto): \OpenAPI\Client\Model\AssetFolderDto
```

Create an asset folder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$create_asset_folder_dto = new \OpenAPI\Client\Model\CreateAssetFolderDto(); // \OpenAPI\Client\Model\CreateAssetFolderDto | The asset folder object that needs to be added to the App.

try {
    $result = $apiInstance->assetFoldersPostAssetFolder($app, $create_asset_folder_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetFoldersPostAssetFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **create_asset_folder_dto** | [**\OpenAPI\Client\Model\CreateAssetFolderDto**](../Model/CreateAssetFolderDto.md)| The asset folder object that needs to be added to the App. | |

### Return type

[**\OpenAPI\Client\Model\AssetFolderDto**](../Model/AssetFolderDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetFoldersPutAssetFolder()`

```php
assetFoldersPutAssetFolder($app, $id, $rename_asset_folder_dto): \OpenAPI\Client\Model\AssetFolderDto
```

Update an asset folder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The ID of the asset folder.
$rename_asset_folder_dto = new \OpenAPI\Client\Model\RenameAssetFolderDto(); // \OpenAPI\Client\Model\RenameAssetFolderDto | The asset folder object that needs to updated.

try {
    $result = $apiInstance->assetFoldersPutAssetFolder($app, $id, $rename_asset_folder_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetFoldersPutAssetFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The ID of the asset folder. | |
| **rename_asset_folder_dto** | [**\OpenAPI\Client\Model\RenameAssetFolderDto**](../Model/RenameAssetFolderDto.md)| The asset folder object that needs to updated. | |

### Return type

[**\OpenAPI\Client\Model\AssetFolderDto**](../Model/AssetFolderDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetFoldersPutAssetFolderParent()`

```php
assetFoldersPutAssetFolderParent($app, $id, $move_asset_folder_dto): \OpenAPI\Client\Model\AssetFolderDto
```

Move an asset folder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The ID of the asset folder.
$move_asset_folder_dto = new \OpenAPI\Client\Model\MoveAssetFolderDto(); // \OpenAPI\Client\Model\MoveAssetFolderDto | The asset folder object that needs to updated.

try {
    $result = $apiInstance->assetFoldersPutAssetFolderParent($app, $id, $move_asset_folder_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetFoldersPutAssetFolderParent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The ID of the asset folder. | |
| **move_asset_folder_dto** | [**\OpenAPI\Client\Model\MoveAssetFolderDto**](../Model/MoveAssetFolderDto.md)| The asset folder object that needs to updated. | |

### Return type

[**\OpenAPI\Client\Model\AssetFolderDto**](../Model/AssetFolderDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetsBulkUpdateAssets()`

```php
assetsBulkUpdateAssets($app, $bulk_update_assets_dto): \OpenAPI\Client\Model\BulkResultDto[]
```

Bulk update assets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$bulk_update_assets_dto = new \OpenAPI\Client\Model\BulkUpdateAssetsDto(); // \OpenAPI\Client\Model\BulkUpdateAssetsDto | The bulk update request.

try {
    $result = $apiInstance->assetsBulkUpdateAssets($app, $bulk_update_assets_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsBulkUpdateAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **bulk_update_assets_dto** | [**\OpenAPI\Client\Model\BulkUpdateAssetsDto**](../Model/BulkUpdateAssetsDto.md)| The bulk update request. | |

### Return type

[**\OpenAPI\Client\Model\BulkResultDto[]**](../Model/BulkResultDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetsDeleteAsset()`

```php
assetsDeleteAsset($app, $id, $check_referrers, $permanent)
```

Delete an asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The ID of the asset to delete.
$check_referrers = True; // bool | True to check referrers of this asset.
$permanent = True; // bool | True to delete the asset permanently.

try {
    $apiInstance->assetsDeleteAsset($app, $id, $check_referrers, $permanent);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsDeleteAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The ID of the asset to delete. | |
| **check_referrers** | **bool**| True to check referrers of this asset. | [optional] |
| **permanent** | **bool**| True to delete the asset permanently. | [optional] |

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

## `assetsGetAsset()`

```php
assetsGetAsset($app, $id): \OpenAPI\Client\Model\AssetDto
```

Get an asset by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The ID of the asset to retrieve.

try {
    $result = $apiInstance->assetsGetAsset($app, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsGetAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The ID of the asset to retrieve. | |

### Return type

[**\OpenAPI\Client\Model\AssetDto**](../Model/AssetDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetsGetAssets()`

```php
assetsGetAssets($app, $parent_id, $ids, $q, $top, $skip, $orderby, $filter, $x_no_total, $x_no_slow_total): \OpenAPI\Client\Model\AssetsDto
```

Get assets.

Get all assets for the app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$parent_id = 'parent_id_example'; // string | The optional parent folder id.
$ids = 'ids_example'; // string | The optional asset ids.
$q = 'q_example'; // string | The optional json query.
$top = 3.4; // float | Optional number of items to take.
$skip = 3.4; // float | Optional number of items to skip.
$orderby = 'orderby_example'; // string | Optional OData order definition.
$filter = 'filter_example'; // string | Optional OData filter.
$x_no_total = True; // bool | Do not return the total amount.
$x_no_slow_total = True; // bool | Do not return the total amount, if it would be slow.

try {
    $result = $apiInstance->assetsGetAssets($app, $parent_id, $ids, $q, $top, $skip, $orderby, $filter, $x_no_total, $x_no_slow_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsGetAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **parent_id** | **string**| The optional parent folder id. | [optional] |
| **ids** | **string**| The optional asset ids. | [optional] |
| **q** | **string**| The optional json query. | [optional] |
| **top** | **float**| Optional number of items to take. | [optional] |
| **skip** | **float**| Optional number of items to skip. | [optional] |
| **orderby** | **string**| Optional OData order definition. | [optional] |
| **filter** | **string**| Optional OData filter. | [optional] |
| **x_no_total** | **bool**| Do not return the total amount. | [optional] |
| **x_no_slow_total** | **bool**| Do not return the total amount, if it would be slow. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AssetsDto**](../Model/AssetsDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetsGetAssetsPost()`

```php
assetsGetAssetsPost($app, $query_dto, $x_no_total, $x_no_slow_total): \OpenAPI\Client\Model\AssetsDto
```

Get assets.

Get all assets for the app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$query_dto = new \OpenAPI\Client\Model\QueryDto(); // \OpenAPI\Client\Model\QueryDto | The required query object.
$x_no_total = True; // bool | Do not return the total amount.
$x_no_slow_total = True; // bool | Do not return the total amount, if it would be slow.

try {
    $result = $apiInstance->assetsGetAssetsPost($app, $query_dto, $x_no_total, $x_no_slow_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsGetAssetsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **query_dto** | [**\OpenAPI\Client\Model\QueryDto**](../Model/QueryDto.md)| The required query object. | |
| **x_no_total** | **bool**| Do not return the total amount. | [optional] |
| **x_no_slow_total** | **bool**| Do not return the total amount, if it would be slow. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AssetsDto**](../Model/AssetsDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetsGetTags()`

```php
assetsGetTags($app): array<string,int>
```

Get assets tags.

Get all tags for assets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.

try {
    $result = $apiInstance->assetsGetTags($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsGetTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |

### Return type

**array<string,int>**

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetsPostAsset()`

```php
assetsPostAsset($app, $parent_id, $id, $duplicate, $file): \OpenAPI\Client\Model\AssetDto
```

Upload a new asset.

You can only upload one file at a time. The mime type of the file is not calculated by Squidex and is required correctly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$parent_id = 'parent_id_example'; // string | The optional parent folder id.
$id = 'id_example'; // string | The optional custom asset id.
$duplicate = True; // bool | True to duplicate the asset, event if the file has been uploaded.
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->assetsPostAsset($app, $parent_id, $id, $duplicate, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsPostAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **parent_id** | **string**| The optional parent folder id. | [optional] |
| **id** | **string**| The optional custom asset id. | [optional] |
| **duplicate** | **bool**| True to duplicate the asset, event if the file has been uploaded. | [optional] |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AssetDto**](../Model/AssetDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetsPostUpsertAsset()`

```php
assetsPostUpsertAsset($app, $id, $parent_id, $duplicate, $file): \OpenAPI\Client\Model\AssetDto
```

Upsert an asset.

You can only upload one file at a time. The mime type of the file is not calculated by Squidex and is required correctly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The optional custom asset id.
$parent_id = 'parent_id_example'; // string | The optional parent folder id.
$duplicate = True; // bool | True to duplicate the asset, event if the file has been uploaded.
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->assetsPostUpsertAsset($app, $id, $parent_id, $duplicate, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsPostUpsertAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The optional custom asset id. | |
| **parent_id** | **string**| The optional parent folder id. | [optional] |
| **duplicate** | **bool**| True to duplicate the asset, event if the file has been uploaded. | [optional] |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AssetDto**](../Model/AssetDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetsPutAsset()`

```php
assetsPutAsset($app, $id, $annotate_asset_dto): \OpenAPI\Client\Model\AssetDto
```

Update an asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The ID of the asset.
$annotate_asset_dto = new \OpenAPI\Client\Model\AnnotateAssetDto(); // \OpenAPI\Client\Model\AnnotateAssetDto | The asset object that needs to updated.

try {
    $result = $apiInstance->assetsPutAsset($app, $id, $annotate_asset_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsPutAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The ID of the asset. | |
| **annotate_asset_dto** | [**\OpenAPI\Client\Model\AnnotateAssetDto**](../Model/AnnotateAssetDto.md)| The asset object that needs to updated. | |

### Return type

[**\OpenAPI\Client\Model\AssetDto**](../Model/AssetDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetsPutAssetContent()`

```php
assetsPutAssetContent($app, $id, $file): \OpenAPI\Client\Model\AssetDto
```

Replace asset content.

Use multipart request to upload an asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The ID of the asset.
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->assetsPutAssetContent($app, $id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsPutAssetContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The ID of the asset. | |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AssetDto**](../Model/AssetDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetsPutAssetParent()`

```php
assetsPutAssetParent($app, $id, $move_asset_dto): \OpenAPI\Client\Model\AssetDto
```

Moves the asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The ID of the asset.
$move_asset_dto = new \OpenAPI\Client\Model\MoveAssetDto(); // \OpenAPI\Client\Model\MoveAssetDto | The asset object that needs to updated.

try {
    $result = $apiInstance->assetsPutAssetParent($app, $id, $move_asset_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsPutAssetParent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The ID of the asset. | |
| **move_asset_dto** | [**\OpenAPI\Client\Model\MoveAssetDto**](../Model/MoveAssetDto.md)| The asset object that needs to updated. | |

### Return type

[**\OpenAPI\Client\Model\AssetDto**](../Model/AssetDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetsPutTag()`

```php
assetsPutTag($app, $name, $rename_tag_dto): array<string,int>
```

Rename an asset tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$name = 'name_example'; // string | The tag to return.
$rename_tag_dto = new \OpenAPI\Client\Model\RenameTagDto(); // \OpenAPI\Client\Model\RenameTagDto | The required request object.

try {
    $result = $apiInstance->assetsPutTag($app, $name, $rename_tag_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsPutTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **name** | **string**| The tag to return. | |
| **rename_tag_dto** | [**\OpenAPI\Client\Model\RenameTagDto**](../Model/RenameTagDto.md)| The required request object. | |

### Return type

**array<string,int>**

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
