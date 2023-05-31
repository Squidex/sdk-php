# # BulkUpdateContentsJobDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**query** | [**\OpenAPI\Client\Model\QueryJsonDto**](QueryJsonDto.md) |  | [optional]
**id** | **string** | An optional ID of the content to update. | [optional]
**data** | **array<string,array>** |  | [optional]
**status** | **string** | The new status when the type is set to &#39;ChangeStatus&#39; or &#39;Upsert&#39;. | [optional]
**due_time** | **\DateTime** | The due time. | [optional]
**type** | [**\OpenAPI\Client\Model\BulkUpdateContentType**](BulkUpdateContentType.md) |  | [optional]
**schema** | **string** | The optional schema id or name. | [optional]
**patch** | **bool** | Makes the update as patch. | [optional]
**permanent** | **bool** | True to delete the content permanently. | [optional]
**expected_count** | **int** | The number of expected items. Set it to a higher number to update multiple items when a query is defined. | [optional]
**expected_version** | **int** | The expected version. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
