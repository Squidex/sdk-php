# # SignalRRuleActionDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**connection_string** | **string** | The connection string to the Azure SignalR. |
**hub_name** | **string** | The name of the hub. |
**action** | [**\OpenAPI\Client\Model\ActionTypeEnum**](ActionTypeEnum.md) |  |
**method_name** | **string** | Set the Name of the hub method received by the customer. | [optional]
**target** | **string** | Define target users or groups by id or name. One item per line. Not needed for Broadcast action. | [optional]
**payload** | **string** | Leave it empty to use the full event as body. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
