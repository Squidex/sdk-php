# # SimulatedRuleEventDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** | The unique event id. |
**unique_id** | **string** | The the unique id of the simulated event. |
**event_name** | **string** | The name of the event. |
**event** | **mixed** | The source event. |
**enriched_event** | **mixed** | The enriched event. | [optional]
**action_name** | **string** | The data for the action. | [optional]
**action_data** | **string** | The name of the action. | [optional]
**error** | **string** | The name of the event. | [optional]
**skip_reasons** | [**\OpenAPI\Client\Model\SkipReason[]**](SkipReason.md) | The reason why the event has been skipped. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
