# OpenAPI\Client\TeamsApi

All URIs are relative to https://cloud.squidex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**teamContributorsDeleteContributor()**](TeamsApi.md#teamContributorsDeleteContributor) | **DELETE** /api/teams/{team}/contributors/{id} | Remove contributor. |
| [**teamContributorsDeleteMyself()**](TeamsApi.md#teamContributorsDeleteMyself) | **DELETE** /api/teams/{team}/contributors/me | Remove yourself. |
| [**teamContributorsGetContributors()**](TeamsApi.md#teamContributorsGetContributors) | **GET** /api/teams/{team}/contributors | Get team contributors. |
| [**teamContributorsPostContributor()**](TeamsApi.md#teamContributorsPostContributor) | **POST** /api/teams/{team}/contributors | Assign contributor to team. |
| [**teamsGetTeam()**](TeamsApi.md#teamsGetTeam) | **GET** /api/teams/{team} | Get an team by name. |
| [**teamsGetTeams()**](TeamsApi.md#teamsGetTeams) | **GET** /api/teams | Get your teams. |
| [**teamsPostTeam()**](TeamsApi.md#teamsPostTeam) | **POST** /api/teams | Create a new team. |
| [**teamsPutTeam()**](TeamsApi.md#teamsPutTeam) | **PUT** /api/teams/{team} | Update the team. |


## `teamContributorsDeleteContributor()`

```php
teamContributorsDeleteContributor($team, $id): \OpenAPI\Client\Model\ContributorsDto
```

Remove contributor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team = 'team_example'; // string | The ID of the team.
$id = 'id_example'; // string | The ID of the contributor.

try {
    $result = $apiInstance->teamContributorsDeleteContributor($team, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->teamContributorsDeleteContributor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team** | **string**| The ID of the team. | |
| **id** | **string**| The ID of the contributor. | |

### Return type

[**\OpenAPI\Client\Model\ContributorsDto**](../Model/ContributorsDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teamContributorsDeleteMyself()`

```php
teamContributorsDeleteMyself($team): \OpenAPI\Client\Model\ContributorsDto
```

Remove yourself.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team = 'team_example'; // string | The ID of the team.

try {
    $result = $apiInstance->teamContributorsDeleteMyself($team);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->teamContributorsDeleteMyself: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team** | **string**| The ID of the team. | |

### Return type

[**\OpenAPI\Client\Model\ContributorsDto**](../Model/ContributorsDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teamContributorsGetContributors()`

```php
teamContributorsGetContributors($team): \OpenAPI\Client\Model\ContributorsDto
```

Get team contributors.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team = 'team_example'; // string | The ID of the team.

try {
    $result = $apiInstance->teamContributorsGetContributors($team);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->teamContributorsGetContributors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team** | **string**| The ID of the team. | |

### Return type

[**\OpenAPI\Client\Model\ContributorsDto**](../Model/ContributorsDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teamContributorsPostContributor()`

```php
teamContributorsPostContributor($team, $assign_contributor_dto): \OpenAPI\Client\Model\ContributorsDto
```

Assign contributor to team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team = 'team_example'; // string | The ID of the team.
$assign_contributor_dto = new \OpenAPI\Client\Model\AssignContributorDto(); // \OpenAPI\Client\Model\AssignContributorDto | Contributor object that needs to be added to the team.

try {
    $result = $apiInstance->teamContributorsPostContributor($team, $assign_contributor_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->teamContributorsPostContributor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team** | **string**| The ID of the team. | |
| **assign_contributor_dto** | [**\OpenAPI\Client\Model\AssignContributorDto**](../Model/AssignContributorDto.md)| Contributor object that needs to be added to the team. | |

### Return type

[**\OpenAPI\Client\Model\ContributorsDto**](../Model/ContributorsDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teamsGetTeam()`

```php
teamsGetTeam($team): \OpenAPI\Client\Model\TeamDto
```

Get an team by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team = 'team_example'; // string | The name of the team.

try {
    $result = $apiInstance->teamsGetTeam($team);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->teamsGetTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team** | **string**| The name of the team. | |

### Return type

[**\OpenAPI\Client\Model\TeamDto**](../Model/TeamDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teamsGetTeams()`

```php
teamsGetTeams(): \OpenAPI\Client\Model\TeamDto[]
```

Get your teams.

You can only retrieve the list of teams when you are authenticated as a user (OpenID implicit flow). You will retrieve all teams, where you are assigned as a contributor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->teamsGetTeams();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->teamsGetTeams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\TeamDto[]**](../Model/TeamDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teamsPostTeam()`

```php
teamsPostTeam($create_team_dto): \OpenAPI\Client\Model\TeamDto
```

Create a new team.

You can only create an team when you are authenticated as a user (OpenID implicit flow). You will be assigned as owner of the new team automatically.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_team_dto = new \OpenAPI\Client\Model\CreateTeamDto(); // \OpenAPI\Client\Model\CreateTeamDto | The team object that needs to be added to Squidex.

try {
    $result = $apiInstance->teamsPostTeam($create_team_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->teamsPostTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_team_dto** | [**\OpenAPI\Client\Model\CreateTeamDto**](../Model/CreateTeamDto.md)| The team object that needs to be added to Squidex. | |

### Return type

[**\OpenAPI\Client\Model\TeamDto**](../Model/TeamDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teamsPutTeam()`

```php
teamsPutTeam($team, $update_team_dto): \OpenAPI\Client\Model\TeamDto
```

Update the team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team = 'team_example'; // string | The name of the team to update.
$update_team_dto = new \OpenAPI\Client\Model\UpdateTeamDto(); // \OpenAPI\Client\Model\UpdateTeamDto | The values to update.

try {
    $result = $apiInstance->teamsPutTeam($team, $update_team_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->teamsPutTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team** | **string**| The name of the team to update. | |
| **update_team_dto** | [**\OpenAPI\Client\Model\UpdateTeamDto**](../Model/UpdateTeamDto.md)| The values to update. | |

### Return type

[**\OpenAPI\Client\Model\TeamDto**](../Model/TeamDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
