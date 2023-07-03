# OpenAPI\Client\RulesApi

All URIs are relative to https://cloud.squidex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**rulesDeleteEvent()**](RulesApi.md#rulesDeleteEvent) | **DELETE** /api/apps/{app}/rules/events/{id} | Cancels an event. |
| [**rulesDeleteEvents()**](RulesApi.md#rulesDeleteEvents) | **DELETE** /api/apps/{app}/rules/events | Cancels all events. |
| [**rulesDeleteRule()**](RulesApi.md#rulesDeleteRule) | **DELETE** /api/apps/{app}/rules/{id} | Delete a rule. |
| [**rulesDeleteRuleEvents()**](RulesApi.md#rulesDeleteRuleEvents) | **DELETE** /api/apps/{app}/rules/{id}/events | Cancels all rule events. |
| [**rulesDeleteRuleRun()**](RulesApi.md#rulesDeleteRuleRun) | **DELETE** /api/apps/{app}/rules/run | Cancel the current run. |
| [**rulesDisableRule()**](RulesApi.md#rulesDisableRule) | **PUT** /api/apps/{app}/rules/{id}/disable | Disable a rule. |
| [**rulesEnableRule()**](RulesApi.md#rulesEnableRule) | **PUT** /api/apps/{app}/rules/{id}/enable | Enable a rule. |
| [**rulesGetActions()**](RulesApi.md#rulesGetActions) | **GET** /api/rules/actions | Get supported rule actions. |
| [**rulesGetEventSchema()**](RulesApi.md#rulesGetEventSchema) | **GET** /api/rules/eventtypes/{type} | Provide the json schema for the event with the specified name. |
| [**rulesGetEventTypes()**](RulesApi.md#rulesGetEventTypes) | **GET** /api/rules/eventtypes | Provide a list of all event types that are used in rules. |
| [**rulesGetEvents()**](RulesApi.md#rulesGetEvents) | **GET** /api/apps/{app}/rules/events | Get rule events. |
| [**rulesGetRules()**](RulesApi.md#rulesGetRules) | **GET** /api/apps/{app}/rules | Get rules. |
| [**rulesPostRule()**](RulesApi.md#rulesPostRule) | **POST** /api/apps/{app}/rules | Create a new rule. |
| [**rulesPutEvent()**](RulesApi.md#rulesPutEvent) | **PUT** /api/apps/{app}/rules/events/{id} | Retry the event immediately. |
| [**rulesPutRule()**](RulesApi.md#rulesPutRule) | **PUT** /api/apps/{app}/rules/{id} | Update a rule. |
| [**rulesPutRuleRun()**](RulesApi.md#rulesPutRuleRun) | **PUT** /api/apps/{app}/rules/{id}/run | Run a rule. |
| [**rulesSimulateGET()**](RulesApi.md#rulesSimulateGET) | **GET** /api/apps/{app}/rules/{id}/simulate | Simulate a rule. |
| [**rulesSimulatePOST()**](RulesApi.md#rulesSimulatePOST) | **POST** /api/apps/{app}/rules/simulate | Simulate a rule. |
| [**rulesTriggerRule()**](RulesApi.md#rulesTriggerRule) | **PUT** /api/apps/{app}/rules/{id}/trigger | Trigger a rule. |


## `rulesDeleteEvent()`

```php
rulesDeleteEvent($app, $id)
```

Cancels an event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The event to cancel.

try {
    $apiInstance->rulesDeleteEvent($app, $id);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesDeleteEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The event to cancel. | |

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

## `rulesDeleteEvents()`

```php
rulesDeleteEvents($app)
```

Cancels all events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.

try {
    $apiInstance->rulesDeleteEvents($app);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesDeleteEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |

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

## `rulesDeleteRule()`

```php
rulesDeleteRule($app, $id)
```

Delete a rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The ID of the rule to delete.

try {
    $apiInstance->rulesDeleteRule($app, $id);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesDeleteRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The ID of the rule to delete. | |

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

## `rulesDeleteRuleEvents()`

```php
rulesDeleteRuleEvents($app, $id)
```

Cancels all rule events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The ID of the rule to cancel.

try {
    $apiInstance->rulesDeleteRuleEvents($app, $id);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesDeleteRuleEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The ID of the rule to cancel. | |

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

## `rulesDeleteRuleRun()`

```php
rulesDeleteRuleRun($app)
```

Cancel the current run.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.

try {
    $apiInstance->rulesDeleteRuleRun($app);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesDeleteRuleRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |

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

## `rulesDisableRule()`

```php
rulesDisableRule($app, $id): \OpenAPI\Client\Model\RuleDto
```

Disable a rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The ID of the rule to disable.

try {
    $result = $apiInstance->rulesDisableRule($app, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesDisableRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The ID of the rule to disable. | |

### Return type

[**\OpenAPI\Client\Model\RuleDto**](../Model/RuleDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesEnableRule()`

```php
rulesEnableRule($app, $id): \OpenAPI\Client\Model\RuleDto
```

Enable a rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The ID of the rule to enable.

try {
    $result = $apiInstance->rulesEnableRule($app, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesEnableRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The ID of the rule to enable. | |

### Return type

[**\OpenAPI\Client\Model\RuleDto**](../Model/RuleDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesGetActions()`

```php
rulesGetActions(): array<string,\OpenAPI\Client\Model\RuleElementDto>
```

Get supported rule actions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->rulesGetActions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesGetActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**array<string,\OpenAPI\Client\Model\RuleElementDto>**](../Model/RuleElementDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesGetEventSchema()`

```php
rulesGetEventSchema($type): mixed
```

Provide the json schema for the event with the specified name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | The type name of the event.

try {
    $result = $apiInstance->rulesGetEventSchema($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesGetEventSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| The type name of the event. | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesGetEventTypes()`

```php
rulesGetEventTypes(): string[]
```

Provide a list of all event types that are used in rules.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->rulesGetEventTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesGetEventTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `rulesGetEvents()`

```php
rulesGetEvents($app, $rule_id, $skip, $take): \OpenAPI\Client\Model\RuleEventsDto
```

Get rule events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$rule_id = 'rule_id_example'; // string | The optional rule id to filter to events.
$skip = 0; // int | The number of events to skip.
$take = 20; // int | The number of events to take.

try {
    $result = $apiInstance->rulesGetEvents($app, $rule_id, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesGetEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **rule_id** | **string**| The optional rule id to filter to events. | [optional] |
| **skip** | **int**| The number of events to skip. | [optional] [default to 0] |
| **take** | **int**| The number of events to take. | [optional] [default to 20] |

### Return type

[**\OpenAPI\Client\Model\RuleEventsDto**](../Model/RuleEventsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesGetRules()`

```php
rulesGetRules($app): \OpenAPI\Client\Model\RulesDto
```

Get rules.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.

try {
    $result = $apiInstance->rulesGetRules($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesGetRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |

### Return type

[**\OpenAPI\Client\Model\RulesDto**](../Model/RulesDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesPostRule()`

```php
rulesPostRule($app, $create_rule_dto): \OpenAPI\Client\Model\RuleDto
```

Create a new rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$create_rule_dto = new \OpenAPI\Client\Model\CreateRuleDto(); // \OpenAPI\Client\Model\CreateRuleDto | The rule object that needs to be added to the app.

try {
    $result = $apiInstance->rulesPostRule($app, $create_rule_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesPostRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **create_rule_dto** | [**\OpenAPI\Client\Model\CreateRuleDto**](../Model/CreateRuleDto.md)| The rule object that needs to be added to the app. | |

### Return type

[**\OpenAPI\Client\Model\RuleDto**](../Model/RuleDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesPutEvent()`

```php
rulesPutEvent($app, $id)
```

Retry the event immediately.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The event to enqueue.

try {
    $apiInstance->rulesPutEvent($app, $id);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesPutEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The event to enqueue. | |

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

## `rulesPutRule()`

```php
rulesPutRule($app, $id, $update_rule_dto): \OpenAPI\Client\Model\RuleDto
```

Update a rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The ID of the rule to update.
$update_rule_dto = new \OpenAPI\Client\Model\UpdateRuleDto(); // \OpenAPI\Client\Model\UpdateRuleDto | The rule object that needs to be added to the app.

try {
    $result = $apiInstance->rulesPutRule($app, $id, $update_rule_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesPutRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The ID of the rule to update. | |
| **update_rule_dto** | [**\OpenAPI\Client\Model\UpdateRuleDto**](../Model/UpdateRuleDto.md)| The rule object that needs to be added to the app. | |

### Return type

[**\OpenAPI\Client\Model\RuleDto**](../Model/RuleDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesPutRuleRun()`

```php
rulesPutRuleRun($app, $id, $from_snapshots)
```

Run a rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The ID of the rule to run.
$from_snapshots = false; // bool | Runs the rule from snapeshots if possible.

try {
    $apiInstance->rulesPutRuleRun($app, $id, $from_snapshots);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesPutRuleRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The ID of the rule to run. | |
| **from_snapshots** | **bool**| Runs the rule from snapeshots if possible. | [optional] [default to false] |

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

## `rulesSimulateGET()`

```php
rulesSimulateGET($app, $id): \OpenAPI\Client\Model\SimulatedRuleEventsDto
```

Simulate a rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The ID of the rule to simulate.

try {
    $result = $apiInstance->rulesSimulateGET($app, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesSimulateGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The ID of the rule to simulate. | |

### Return type

[**\OpenAPI\Client\Model\SimulatedRuleEventsDto**](../Model/SimulatedRuleEventsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesSimulatePOST()`

```php
rulesSimulatePOST($app, $create_rule_dto): \OpenAPI\Client\Model\SimulatedRuleEventsDto
```

Simulate a rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$create_rule_dto = new \OpenAPI\Client\Model\CreateRuleDto(); // \OpenAPI\Client\Model\CreateRuleDto | The rule to simulate.

try {
    $result = $apiInstance->rulesSimulatePOST($app, $create_rule_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesSimulatePOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **create_rule_dto** | [**\OpenAPI\Client\Model\CreateRuleDto**](../Model/CreateRuleDto.md)| The rule to simulate. | |

### Return type

[**\OpenAPI\Client\Model\SimulatedRuleEventsDto**](../Model/SimulatedRuleEventsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesTriggerRule()`

```php
rulesTriggerRule($app, $id)
```

Trigger a rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = 'app_example'; // string | The name of the app.
$id = 'id_example'; // string | The ID of the rule to disable.

try {
    $apiInstance->rulesTriggerRule($app, $id);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesTriggerRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | **string**| The name of the app. | |
| **id** | **string**| The ID of the rule to disable. | |

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
