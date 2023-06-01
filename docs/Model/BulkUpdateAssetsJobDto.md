# # BulkUpdateAssetsJobDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | An optional ID of the asset to update. | [optional]
**type** | [**\OpenAPI\Client\Model\BulkUpdateAssetType**](BulkUpdateAssetType.md) |  | [optional]
**parent_id** | **string** | The parent folder id. | [optional]
**file_name** | **string** | The new name of the asset. | [optional]
**slug** | **string** | The new slug of the asset. | [optional]
**is_protected** | **bool** | True, when the asset is not public. | [optional]
**tags** | **string[]** | The new asset tags. | [optional]
**metadata** | **array<string,mixed>** | The asset metadata. | [optional]
**permanent** | **bool** | True to delete the asset permanently. | [optional]
**expected_version** | **int** | The expected version. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
