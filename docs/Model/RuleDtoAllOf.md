# # RuleDtoAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the rule. |
**created_by** | **string** | The user that has created the rule. |
**last_modified_by** | **string** | The user that has updated the rule. |
**created** | **\DateTime** | The date and time when the rule has been created. |
**last_modified** | **\DateTime** | The date and time when the rule has been modified last. |
**version** | **int** | The version of the rule. |
**is_enabled** | **bool** | Determines if the rule is enabled. |
**name** | **string** | Optional rule name. | [optional]
**trigger** | [**\OpenAPI\Client\Model\RuleTriggerDto**](RuleTriggerDto.md) |  |
**action** | [**\OpenAPI\Client\Model\RuleActionDto**](RuleActionDto.md) |  |
**num_succeeded** | **int** | The number of completed executions. |
**num_failed** | **int** | The number of failed executions. |
**last_executed** | **\DateTime** | The date and time when the rule was executed the last time. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
