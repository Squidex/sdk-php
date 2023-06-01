# # AssetDtoAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the asset. |
**parent_id** | **string** | The ID of the parent folder. Empty for files without parent. |
**file_name** | **string** | The file name. |
**file_hash** | **string** | The file hash. | [optional]
**is_protected** | **bool** | True, when the asset is not public. |
**slug** | **string** | The slug. |
**mime_type** | **string** | The mime type. |
**file_type** | **string** | The file type. |
**metadata_text** | **string** | The formatted text representation of the metadata. |
**edit_token** | **string** | The UI token. | [optional]
**metadata** | **array<string,mixed>** | The asset metadata. |
**tags** | **string[]** | The asset tags. | [optional]
**file_size** | **int** | The size of the file in bytes. |
**file_version** | **int** | The version of the file. |
**type** | [**\OpenAPI\Client\Model\AssetType**](AssetType.md) |  |
**created_by** | **string** | The user that has created the schema. |
**last_modified_by** | **string** | The user that has updated the asset. |
**created** | **\DateTime** | The date and time when the asset has been created. |
**last_modified** | **\DateTime** | The date and time when the asset has been modified last. |
**version** | **int** | The version of the asset. |
**_meta** | [**\OpenAPI\Client\Model\AssetMeta**](AssetMeta.md) |  | [optional]
**is_image** | **bool** | Determines of the created file is an image. |
**pixel_width** | **int** | The width of the image in pixels if the asset is an image. | [optional]
**pixel_height** | **int** | The height of the image in pixels if the asset is an image. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
