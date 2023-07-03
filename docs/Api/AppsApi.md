# OpenAPI\Client\AppsApi

All URIs are relative to https://cloud.squidex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**appAssetsGetAssetScripts()**](AppsApi.md#appAssetsGetAssetScripts) | **GET** /api/apps/{app}/assets/scripts | Get the app asset scripts. |
| [**appAssetsPutAssetScripts()**](AppsApi.md#appAssetsPutAssetScripts) | **PUT** /api/apps/{app}/assets/scripts | Update the app asset scripts. |
| [**appClientsDeleteClient()**](AppsApi.md#appClientsDeleteClient) | **DELETE** /api/apps/{app}/clients/{id} | Revoke an app client. |
| [**appClientsGetClients()**](AppsApi.md#appClientsGetClients) | **GET** /api/apps/{app}/clients | Get app clients. |
| [**appClientsPostClient()**](AppsApi.md#appClientsPostClient) | **POST** /api/apps/{app}/clients | Create a new app client. |
| [**appClientsPutClient()**](AppsApi.md#appClientsPutClient) | **PUT** /api/apps/{app}/clients/{id} | Updates an app client. |
| [**appContributorsDeleteContributor()**](AppsApi.md#appContributorsDeleteContributor) | **DELETE** /api/apps/{app}/contributors/{id} | Remove contributor. |
| [**appContributorsDeleteMyself()**](AppsApi.md#appContributorsDeleteMyself) | **DELETE** /api/apps/{app}/contributors/me | Remove yourself. |
| [**appContributorsGetContributors()**](AppsApi.md#appContributorsGetContributors) | **GET** /api/apps/{app}/contributors | Get app contributors. |
| [**appContributorsPostContributor()**](AppsApi.md#appContributorsPostContributor) | **POST** /api/apps/{app}/contributors | Assign contributor to app. |
| [**appImageGetImage()**](AppsApi.md#appImageGetImage) | **GET** /api/apps/{app}/image | Get the app image. |
| [**appLanguagesDeleteLanguage()**](AppsApi.md#appLanguagesDeleteLanguage) | **DELETE** /api/apps/{app}/languages/{language} | Deletes an app language. |
| [**appLanguagesGetLanguages()**](AppsApi.md#appLanguagesGetLanguages) | **GET** /api/apps/{app}/languages | Get app languages. |
| [**appLanguagesPostLanguage()**](AppsApi.md#appLanguagesPostLanguage) | **POST** /api/apps/{app}/languages | Attaches an app language. |
| [**appLanguagesPutLanguage()**](AppsApi.md#appLanguagesPutLanguage) | **PUT** /api/apps/{app}/languages/{language} | Updates an app language. |
| [**appRolesDeleteRole()**](AppsApi.md#appRolesDeleteRole) | **DELETE** /api/apps/{app}/roles/{roleName} | Remove role from app. |
| [**appRolesGetPermissions()**](AppsApi.md#appRolesGetPermissions) | **GET** /api/apps/{app}/roles/permissions | Get app permissions. |
| [**appRolesGetRoles()**](AppsApi.md#appRolesGetRoles) | **GET** /api/apps/{app}/roles | Get app roles. |
| [**appRolesPostRole()**](AppsApi.md#appRolesPostRole) | **POST** /api/apps/{app}/roles | Add role to app. |
| [**appRolesPutRole()**](AppsApi.md#appRolesPutRole) | **PUT** /api/apps/{app}/roles/{roleName} | Update an app role. |
| [**appSettingsGetSettings()**](AppsApi.md#appSettingsGetSettings) | **GET** /api/apps/{app}/settings | Get the app settings. |
| [**appSettingsPutSettings()**](AppsApi.md#appSettingsPutSettings) | **PUT** /api/apps/{app}/settings | Update the app settings. |
| [**appWorkflowsDeleteWorkflow()**](AppsApi.md#appWorkflowsDeleteWorkflow) | **DELETE** /api/apps/{app}/workflows/{id} | Delete a workflow. |
| [**appWorkflowsGetWorkflows()**](AppsApi.md#appWorkflowsGetWorkflows) | **GET** /api/apps/{app}/workflows | Get app workflow. |
| [**appWorkflowsPostWorkflow()**](AppsApi.md#appWorkflowsPostWorkflow) | **POST** /api/apps/{app}/workflows | Create a workflow. |
| [**appWorkflowsPutWorkflow()**](AppsApi.md#appWorkflowsPutWorkflow) | **PUT** /api/apps/{app}/workflows/{id} | Update a workflow. |
| [**appsDeleteApp()**](AppsApi.md#appsDeleteApp) | **DELETE** /api/apps/{app} | Delete the app. |
| [**appsDeleteImage()**](AppsApi.md#appsDeleteImage) | **DELETE** /api/apps/{app}/image | Remove the app image. |
| [**appsGetApp()**](AppsApi.md#appsGetApp) | **GET** /api/apps/{app} | Get an app by name. |
| [**appsGetApps()**](AppsApi.md#appsGetApps) | **GET** /api/apps | Get your apps. |
| [**appsGetTeamApps()**](AppsApi.md#appsGetTeamApps) | **GET** /api/teams/{team}/apps | Get team apps. |
| [**appsPostApp()**](AppsApi.md#appsPostApp) | **POST** /api/apps | Create a new app. |
| [**appsPutApp()**](AppsApi.md#appsPutApp) | **PUT** /api/apps/{app} | Update the app. |
| [**appsPutAppTeam()**](AppsApi.md#appsPutAppTeam) | **PUT** /api/apps/{app}/team | Transfer the app. |
| [**appsUploadImage()**](AppsApi.md#appsUploadImage) | **POST** /api/apps/{app}/image | Upload the app image. |


## `appAssetsGetAssetScripts()`

```php
appAssetsGetAssetScripts($app): \OpenAPI\Client\Model\AssetScriptsDto
```

Get the app asset scripts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app to get the asset scripts for.

try {
    $result = $apiInstance->appAssetsGetAssetScripts($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appAssetsGetAssetScripts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app to get the asset scripts for. | |

### Return type

[**\OpenAPI\Client\Model\AssetScriptsDto**](../Model/AssetScriptsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appAssetsPutAssetScripts()`

```php
appAssetsPutAssetScripts($app, $update_asset_scripts_dto): \OpenAPI\Client\Model\AssetScriptsDto
```

Update the app asset scripts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app to update.
$update_asset_scripts_dto = new \OpenAPI\Client\Model\UpdateAssetScriptsDto(); // \OpenAPI\Client\Model\UpdateAssetScriptsDto | The values to update.

try {
    $result = $apiInstance->appAssetsPutAssetScripts($app, $update_asset_scripts_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appAssetsPutAssetScripts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app to update. | |
| **update_asset_scripts_dto** | [**\OpenAPI\Client\Model\UpdateAssetScriptsDto**](../Model/UpdateAssetScriptsDto.md)| The values to update. | |

### Return type

[**\OpenAPI\Client\Model\AssetScriptsDto**](../Model/AssetScriptsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appClientsDeleteClient()`

```php
appClientsDeleteClient($app, $id): \OpenAPI\Client\Model\ClientsDto
```

Revoke an app client.

The application that uses this client credentials cannot access the API after it has been revoked.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The ID of the client that must be deleted.

try {
    $result = $apiInstance->appClientsDeleteClient($app, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appClientsDeleteClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The ID of the client that must be deleted. | |

### Return type

[**\OpenAPI\Client\Model\ClientsDto**](../Model/ClientsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appClientsGetClients()`

```php
appClientsGetClients($app): \OpenAPI\Client\Model\ClientsDto
```

Get app clients.

Gets all configured clients for the app with the specified name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.

try {
    $result = $apiInstance->appClientsGetClients($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appClientsGetClients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |

### Return type

[**\OpenAPI\Client\Model\ClientsDto**](../Model/ClientsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appClientsPostClient()`

```php
appClientsPostClient($app, $create_client_dto): \OpenAPI\Client\Model\ClientsDto
```

Create a new app client.

Create a new client for the app with the specified name. The client secret is auto generated on the server and returned. The client does not expire, the access token is valid for 30 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$create_client_dto = new \OpenAPI\Client\Model\CreateClientDto(); // \OpenAPI\Client\Model\CreateClientDto | Client object that needs to be added to the app.

try {
    $result = $apiInstance->appClientsPostClient($app, $create_client_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appClientsPostClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **create_client_dto** | [**\OpenAPI\Client\Model\CreateClientDto**](../Model/CreateClientDto.md)| Client object that needs to be added to the app. | |

### Return type

[**\OpenAPI\Client\Model\ClientsDto**](../Model/ClientsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appClientsPutClient()`

```php
appClientsPutClient($app, $id, $update_client_dto): \OpenAPI\Client\Model\ClientsDto
```

Updates an app client.

Only the display name can be changed, create a new client if necessary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The ID of the client that must be updated.
$update_client_dto = new \OpenAPI\Client\Model\UpdateClientDto(); // \OpenAPI\Client\Model\UpdateClientDto | Client object that needs to be updated.

try {
    $result = $apiInstance->appClientsPutClient($app, $id, $update_client_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appClientsPutClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The ID of the client that must be updated. | |
| **update_client_dto** | [**\OpenAPI\Client\Model\UpdateClientDto**](../Model/UpdateClientDto.md)| Client object that needs to be updated. | |

### Return type

[**\OpenAPI\Client\Model\ClientsDto**](../Model/ClientsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appContributorsDeleteContributor()`

```php
appContributorsDeleteContributor($app, $id): \OpenAPI\Client\Model\ContributorsDto
```

Remove contributor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The ID of the contributor.

try {
    $result = $apiInstance->appContributorsDeleteContributor($app, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appContributorsDeleteContributor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The ID of the contributor. | |

### Return type

[**\OpenAPI\Client\Model\ContributorsDto**](../Model/ContributorsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appContributorsDeleteMyself()`

```php
appContributorsDeleteMyself($app): \OpenAPI\Client\Model\ContributorsDto
```

Remove yourself.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.

try {
    $result = $apiInstance->appContributorsDeleteMyself($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appContributorsDeleteMyself: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |

### Return type

[**\OpenAPI\Client\Model\ContributorsDto**](../Model/ContributorsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appContributorsGetContributors()`

```php
appContributorsGetContributors($app): \OpenAPI\Client\Model\ContributorsDto
```

Get app contributors.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.

try {
    $result = $apiInstance->appContributorsGetContributors($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appContributorsGetContributors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |

### Return type

[**\OpenAPI\Client\Model\ContributorsDto**](../Model/ContributorsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appContributorsPostContributor()`

```php
appContributorsPostContributor($app, $assign_contributor_dto): \OpenAPI\Client\Model\ContributorsDto
```

Assign contributor to app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$assign_contributor_dto = new \OpenAPI\Client\Model\AssignContributorDto(); // \OpenAPI\Client\Model\AssignContributorDto | Contributor object that needs to be added to the app.

try {
    $result = $apiInstance->appContributorsPostContributor($app, $assign_contributor_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appContributorsPostContributor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **assign_contributor_dto** | [**\OpenAPI\Client\Model\AssignContributorDto**](../Model/AssignContributorDto.md)| Contributor object that needs to be added to the app. | |

### Return type

[**\OpenAPI\Client\Model\ContributorsDto**](../Model/ContributorsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appImageGetImage()`

```php
appImageGetImage($app): \SplFileObject
```

Get the app image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.

try {
    $result = $apiInstance->appImageGetImage($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appImageGetImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |

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

## `appLanguagesDeleteLanguage()`

```php
appLanguagesDeleteLanguage($app, $language): \OpenAPI\Client\Model\AppLanguagesDto
```

Deletes an app language.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$language = 'language_example'; // string | The language to delete from the app.

try {
    $result = $apiInstance->appLanguagesDeleteLanguage($app, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appLanguagesDeleteLanguage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **language** | **string**| The language to delete from the app. | |

### Return type

[**\OpenAPI\Client\Model\AppLanguagesDto**](../Model/AppLanguagesDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appLanguagesGetLanguages()`

```php
appLanguagesGetLanguages($app): \OpenAPI\Client\Model\AppLanguagesDto
```

Get app languages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.

try {
    $result = $apiInstance->appLanguagesGetLanguages($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appLanguagesGetLanguages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |

### Return type

[**\OpenAPI\Client\Model\AppLanguagesDto**](../Model/AppLanguagesDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appLanguagesPostLanguage()`

```php
appLanguagesPostLanguage($app, $add_language_dto): \OpenAPI\Client\Model\AppLanguagesDto
```

Attaches an app language.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$add_language_dto = new \OpenAPI\Client\Model\AddLanguageDto(); // \OpenAPI\Client\Model\AddLanguageDto | The language to add to the app.

try {
    $result = $apiInstance->appLanguagesPostLanguage($app, $add_language_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appLanguagesPostLanguage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **add_language_dto** | [**\OpenAPI\Client\Model\AddLanguageDto**](../Model/AddLanguageDto.md)| The language to add to the app. | |

### Return type

[**\OpenAPI\Client\Model\AppLanguagesDto**](../Model/AppLanguagesDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appLanguagesPutLanguage()`

```php
appLanguagesPutLanguage($app, $language, $update_language_dto): \OpenAPI\Client\Model\AppLanguagesDto
```

Updates an app language.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$language = 'language_example'; // string | The language to update.
$update_language_dto = new \OpenAPI\Client\Model\UpdateLanguageDto(); // \OpenAPI\Client\Model\UpdateLanguageDto | The language object.

try {
    $result = $apiInstance->appLanguagesPutLanguage($app, $language, $update_language_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appLanguagesPutLanguage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **language** | **string**| The language to update. | |
| **update_language_dto** | [**\OpenAPI\Client\Model\UpdateLanguageDto**](../Model/UpdateLanguageDto.md)| The language object. | |

### Return type

[**\OpenAPI\Client\Model\AppLanguagesDto**](../Model/AppLanguagesDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appRolesDeleteRole()`

```php
appRolesDeleteRole($app, $role_name): \OpenAPI\Client\Model\RolesDto
```

Remove role from app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$role_name = 'role_name_example'; // string | The name of the role.

try {
    $result = $apiInstance->appRolesDeleteRole($app, $role_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appRolesDeleteRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **role_name** | **string**| The name of the role. | |

### Return type

[**\OpenAPI\Client\Model\RolesDto**](../Model/RolesDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appRolesGetPermissions()`

```php
appRolesGetPermissions($app): string[]
```

Get app permissions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.

try {
    $result = $apiInstance->appRolesGetPermissions($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appRolesGetPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |

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

## `appRolesGetRoles()`

```php
appRolesGetRoles($app): \OpenAPI\Client\Model\RolesDto
```

Get app roles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.

try {
    $result = $apiInstance->appRolesGetRoles($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appRolesGetRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |

### Return type

[**\OpenAPI\Client\Model\RolesDto**](../Model/RolesDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appRolesPostRole()`

```php
appRolesPostRole($app, $add_role_dto): \OpenAPI\Client\Model\RolesDto
```

Add role to app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$add_role_dto = new \OpenAPI\Client\Model\AddRoleDto(); // \OpenAPI\Client\Model\AddRoleDto | Role object that needs to be added to the app.

try {
    $result = $apiInstance->appRolesPostRole($app, $add_role_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appRolesPostRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **add_role_dto** | [**\OpenAPI\Client\Model\AddRoleDto**](../Model/AddRoleDto.md)| Role object that needs to be added to the app. | |

### Return type

[**\OpenAPI\Client\Model\RolesDto**](../Model/RolesDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appRolesPutRole()`

```php
appRolesPutRole($app, $role_name, $update_role_dto): \OpenAPI\Client\Model\RolesDto
```

Update an app role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$role_name = 'role_name_example'; // string | The name of the role to be updated.
$update_role_dto = new \OpenAPI\Client\Model\UpdateRoleDto(); // \OpenAPI\Client\Model\UpdateRoleDto | Role to be updated for the app.

try {
    $result = $apiInstance->appRolesPutRole($app, $role_name, $update_role_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appRolesPutRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **role_name** | **string**| The name of the role to be updated. | |
| **update_role_dto** | [**\OpenAPI\Client\Model\UpdateRoleDto**](../Model/UpdateRoleDto.md)| Role to be updated for the app. | |

### Return type

[**\OpenAPI\Client\Model\RolesDto**](../Model/RolesDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appSettingsGetSettings()`

```php
appSettingsGetSettings($app): \OpenAPI\Client\Model\AppSettingsDto
```

Get the app settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app to get the settings for.

try {
    $result = $apiInstance->appSettingsGetSettings($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appSettingsGetSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app to get the settings for. | |

### Return type

[**\OpenAPI\Client\Model\AppSettingsDto**](../Model/AppSettingsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appSettingsPutSettings()`

```php
appSettingsPutSettings($app, $update_app_settings_dto): \OpenAPI\Client\Model\AppSettingsDto
```

Update the app settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app to update.
$update_app_settings_dto = new \OpenAPI\Client\Model\UpdateAppSettingsDto(); // \OpenAPI\Client\Model\UpdateAppSettingsDto | The values to update.

try {
    $result = $apiInstance->appSettingsPutSettings($app, $update_app_settings_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appSettingsPutSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app to update. | |
| **update_app_settings_dto** | [**\OpenAPI\Client\Model\UpdateAppSettingsDto**](../Model/UpdateAppSettingsDto.md)| The values to update. | |

### Return type

[**\OpenAPI\Client\Model\AppSettingsDto**](../Model/AppSettingsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appWorkflowsDeleteWorkflow()`

```php
appWorkflowsDeleteWorkflow($app, $id): \OpenAPI\Client\Model\WorkflowsDto
```

Delete a workflow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The ID of the workflow to update.

try {
    $result = $apiInstance->appWorkflowsDeleteWorkflow($app, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appWorkflowsDeleteWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The ID of the workflow to update. | |

### Return type

[**\OpenAPI\Client\Model\WorkflowsDto**](../Model/WorkflowsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appWorkflowsGetWorkflows()`

```php
appWorkflowsGetWorkflows($app): \OpenAPI\Client\Model\WorkflowsDto
```

Get app workflow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.

try {
    $result = $apiInstance->appWorkflowsGetWorkflows($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appWorkflowsGetWorkflows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |

### Return type

[**\OpenAPI\Client\Model\WorkflowsDto**](../Model/WorkflowsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appWorkflowsPostWorkflow()`

```php
appWorkflowsPostWorkflow($app, $add_workflow_dto): \OpenAPI\Client\Model\WorkflowsDto
```

Create a workflow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$add_workflow_dto = new \OpenAPI\Client\Model\AddWorkflowDto(); // \OpenAPI\Client\Model\AddWorkflowDto | The new workflow.

try {
    $result = $apiInstance->appWorkflowsPostWorkflow($app, $add_workflow_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appWorkflowsPostWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **add_workflow_dto** | [**\OpenAPI\Client\Model\AddWorkflowDto**](../Model/AddWorkflowDto.md)| The new workflow. | |

### Return type

[**\OpenAPI\Client\Model\WorkflowsDto**](../Model/WorkflowsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appWorkflowsPutWorkflow()`

```php
appWorkflowsPutWorkflow($app, $id, $update_workflow_dto): \OpenAPI\Client\Model\WorkflowsDto
```

Update a workflow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The ID of the workflow to update.
$update_workflow_dto = new \OpenAPI\Client\Model\UpdateWorkflowDto(); // \OpenAPI\Client\Model\UpdateWorkflowDto | The new workflow.

try {
    $result = $apiInstance->appWorkflowsPutWorkflow($app, $id, $update_workflow_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appWorkflowsPutWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The ID of the workflow to update. | |
| **update_workflow_dto** | [**\OpenAPI\Client\Model\UpdateWorkflowDto**](../Model/UpdateWorkflowDto.md)| The new workflow. | |

### Return type

[**\OpenAPI\Client\Model\WorkflowsDto**](../Model/WorkflowsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appsDeleteApp()`

```php
appsDeleteApp($app)
```

Delete the app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app to delete.

try {
    $apiInstance->appsDeleteApp($app);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsDeleteApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app to delete. | |

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

## `appsDeleteImage()`

```php
appsDeleteImage($app): \OpenAPI\Client\Model\AppDto
```

Remove the app image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app to update.

try {
    $result = $apiInstance->appsDeleteImage($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsDeleteImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app to update. | |

### Return type

[**\OpenAPI\Client\Model\AppDto**](../Model/AppDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appsGetApp()`

```php
appsGetApp($app): \OpenAPI\Client\Model\AppDto
```

Get an app by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.

try {
    $result = $apiInstance->appsGetApp($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsGetApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |

### Return type

[**\OpenAPI\Client\Model\AppDto**](../Model/AppDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appsGetApps()`

```php
appsGetApps(): \OpenAPI\Client\Model\AppDto[]
```

Get your apps.

You can only retrieve the list of apps when you are authenticated as a user (OpenID implicit flow). You will retrieve all apps, where you are assigned as a contributor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->appsGetApps();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsGetApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AppDto[]**](../Model/AppDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appsGetTeamApps()`

```php
appsGetTeamApps($team): \OpenAPI\Client\Model\AppDto[]
```

Get team apps.

You can only retrieve the list of apps when you are authenticated as a user (OpenID implicit flow). You will retrieve all apps, where you are assigned as a contributor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team = 'team_example'; // string | The ID of the team.

try {
    $result = $apiInstance->appsGetTeamApps($team);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsGetTeamApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team** | **string**| The ID of the team. | |

### Return type

[**\OpenAPI\Client\Model\AppDto[]**](../Model/AppDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appsPostApp()`

```php
appsPostApp($create_app_dto): \OpenAPI\Client\Model\AppDto
```

Create a new app.

You can only create an app when you are authenticated as a user (OpenID implicit flow). You will be assigned as owner of the new app automatically.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_app_dto = new \OpenAPI\Client\Model\CreateAppDto(); // \OpenAPI\Client\Model\CreateAppDto | The app object that needs to be added to Squidex.

try {
    $result = $apiInstance->appsPostApp($create_app_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsPostApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_app_dto** | [**\OpenAPI\Client\Model\CreateAppDto**](../Model/CreateAppDto.md)| The app object that needs to be added to Squidex. | |

### Return type

[**\OpenAPI\Client\Model\AppDto**](../Model/AppDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appsPutApp()`

```php
appsPutApp($app, $update_app_dto): \OpenAPI\Client\Model\AppDto
```

Update the app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app to update.
$update_app_dto = new \OpenAPI\Client\Model\UpdateAppDto(); // \OpenAPI\Client\Model\UpdateAppDto | The values to update.

try {
    $result = $apiInstance->appsPutApp($app, $update_app_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsPutApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app to update. | |
| **update_app_dto** | [**\OpenAPI\Client\Model\UpdateAppDto**](../Model/UpdateAppDto.md)| The values to update. | |

### Return type

[**\OpenAPI\Client\Model\AppDto**](../Model/AppDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appsPutAppTeam()`

```php
appsPutAppTeam($app, $transfer_to_team_dto): \OpenAPI\Client\Model\AppDto
```

Transfer the app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app to update.
$transfer_to_team_dto = new \OpenAPI\Client\Model\TransferToTeamDto(); // \OpenAPI\Client\Model\TransferToTeamDto | The team information.

try {
    $result = $apiInstance->appsPutAppTeam($app, $transfer_to_team_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsPutAppTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app to update. | |
| **transfer_to_team_dto** | [**\OpenAPI\Client\Model\TransferToTeamDto**](../Model/TransferToTeamDto.md)| The team information. | |

### Return type

[**\OpenAPI\Client\Model\AppDto**](../Model/AppDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appsUploadImage()`

```php
appsUploadImage($app, $file): \OpenAPI\Client\Model\AppDto
```

Upload the app image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app to update.
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->appsUploadImage($app, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsUploadImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app to update. | |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AppDto**](../Model/AppDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
