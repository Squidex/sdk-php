# # WorkflowStepDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transitions** | [**array<string,\OpenAPI\Client\Model\WorkflowTransitionDto>**](WorkflowTransitionDto.md) | The transitions. | [optional]
**color** | **string** | The optional color. | [optional]
**validate** | **bool** | True if the content should be validated when moving to this step. | [optional]
**no_update** | **bool** | Indicates if updates should not be allowed. | [optional]
**no_update_expression** | **string** | Optional expression that must evaluate to true when you want to prevent updates. | [optional]
**no_update_roles** | **string[]** | Optional list of roles to restrict the updates for users with these roles. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
