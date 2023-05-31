# # WebhookRuleActionDtoAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The url to the webhook. |
**method** | [**\OpenAPI\Client\Model\WebhookMethod**](WebhookMethod.md) |  |
**payload** | **string** | Leave it empty to use the full event as body. | [optional]
**payload_type** | **string** | The mime type of the payload. | [optional]
**headers** | **string** | The message headers in the format &#39;[Key]&#x3D;[Value]&#39;, one entry per line. | [optional]
**shared_secret** | **string** | The shared secret that is used to calculate the payload signature. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
