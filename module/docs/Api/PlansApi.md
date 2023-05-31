# OpenAPI\Client\PlansApi

All URIs are relative to https://cloud.squidex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**appPlansGetPlans()**](PlansApi.md#appPlansGetPlans) | **GET** /api/apps/{app}/plans | Get app plan information. |
| [**appPlansPutPlan()**](PlansApi.md#appPlansPutPlan) | **PUT** /api/apps/{app}/plan | Change the app plan. |
| [**teamPlansGetTeamPlans()**](PlansApi.md#teamPlansGetTeamPlans) | **GET** /api/teams/{team}/plans | Get team plan information. |
| [**teamPlansPutTeamPlan()**](PlansApi.md#teamPlansPutTeamPlan) | **PUT** /api/teams/{team}/plan | Change the team plan. |


## `appPlansGetPlans()`

```php
appPlansGetPlans($app): \OpenAPI\Client\Model\PlansDto
```

Get app plan information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.

try {
    $result = $apiInstance->appPlansGetPlans($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->appPlansGetPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |

### Return type

[**\OpenAPI\Client\Model\PlansDto**](../Model/PlansDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appPlansPutPlan()`

```php
appPlansPutPlan($app, $change_plan_dto): \OpenAPI\Client\Model\PlanChangedDto
```

Change the app plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$change_plan_dto = new \OpenAPI\Client\Model\ChangePlanDto(); // \OpenAPI\Client\Model\ChangePlanDto | Plan object that needs to be changed.

try {
    $result = $apiInstance->appPlansPutPlan($app, $change_plan_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->appPlansPutPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **change_plan_dto** | [**\OpenAPI\Client\Model\ChangePlanDto**](../Model/ChangePlanDto.md)| Plan object that needs to be changed. | |

### Return type

[**\OpenAPI\Client\Model\PlanChangedDto**](../Model/PlanChangedDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teamPlansGetTeamPlans()`

```php
teamPlansGetTeamPlans($team): \OpenAPI\Client\Model\PlansDto
```

Get team plan information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team = 'team_example'; // string | The name of the team.

try {
    $result = $apiInstance->teamPlansGetTeamPlans($team);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->teamPlansGetTeamPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team** | **string**| The name of the team. | |

### Return type

[**\OpenAPI\Client\Model\PlansDto**](../Model/PlansDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teamPlansPutTeamPlan()`

```php
teamPlansPutTeamPlan($team, $change_plan_dto): \OpenAPI\Client\Model\PlanChangedDto
```

Change the team plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team = 'team_example'; // string | The name of the team.
$change_plan_dto = new \OpenAPI\Client\Model\ChangePlanDto(); // \OpenAPI\Client\Model\ChangePlanDto | Plan object that needs to be changed.

try {
    $result = $apiInstance->teamPlansPutTeamPlan($team, $change_plan_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->teamPlansPutTeamPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team** | **string**| The name of the team. | |
| **change_plan_dto** | [**\OpenAPI\Client\Model\ChangePlanDto**](../Model/ChangePlanDto.md)| Plan object that needs to be changed. | |

### Return type

[**\OpenAPI\Client\Model\PlanChangedDto**](../Model/PlanChangedDto.md)

### Authorization

[squidex-oauth-auth](../../README.md#squidex-oauth-auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
