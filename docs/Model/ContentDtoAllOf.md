# # ContentDtoAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The if of the content item. |
**created_by** | **string** | The user that has created the content item. |
**last_modified_by** | **string** | The user that has updated the content item. |
**data** | **mixed** | The data of the content item. |
**reference_data** | **array<string,array>** |  | [optional]
**created** | **\DateTime** | The date and time when the content item has been created. |
**last_modified** | **\DateTime** | The date and time when the content item has been modified last. |
**status** | **string** | The status of the content. |
**new_status** | **string** | The new status of the content. | [optional]
**status_color** | **string** | The color of the status. |
**new_status_color** | **string** | The color of the new status. | [optional]
**edit_token** | **string** | The UI token. | [optional]
**schedule_job** | [**\OpenAPI\Client\Model\ScheduleJobDto**](ScheduleJobDto.md) |  | [optional]
**schema_id** | **string** | The ID of the schema. |
**schema_name** | **string** | The name of the schema. | [optional]
**schema_display_name** | **string** | The display name of the schema. | [optional]
**reference_fields** | [**\OpenAPI\Client\Model\FieldDto[]**](FieldDto.md) | The reference fields. | [optional]
**is_deleted** | **bool** | Indicates whether the content is deleted. |
**version** | **int** | The version of the content. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
