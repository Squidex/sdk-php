# # AssetsFieldPropertiesDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**preview_mode** | [**\OpenAPI\Client\Model\AssetPreviewMode**](AssetPreviewMode.md) |  | [optional]
**default_values** | **array<string,string[]>** |  | [optional]
**default_value** | **string[]** | The default value as a list of asset ids. | [optional]
**folder_id** | **string** | The initial id to the folder. | [optional]
**preview_format** | **string** | The preview format. | [optional]
**min_items** | **int** | The minimum allowed items for the field value. | [optional]
**max_items** | **int** | The maximum allowed items for the field value. | [optional]
**min_size** | **int** | The minimum file size in bytes. | [optional]
**max_size** | **int** | The maximum file size in bytes. | [optional]
**min_width** | **int** | The minimum image width in pixels. | [optional]
**max_width** | **int** | The maximum image width in pixels. | [optional]
**min_height** | **int** | The minimum image height in pixels. | [optional]
**max_height** | **int** | The maximum image height in pixels. | [optional]
**aspect_width** | **int** | The image aspect width in pixels. | [optional]
**aspect_height** | **int** | The image aspect height in pixels. | [optional]
**expected_type** | [**\OpenAPI\Client\Model\AssetType**](AssetType.md) |  | [optional]
**resolve_first** | **bool** | True to resolve first asset in the content list. | [optional]
**must_be_image** | **bool** | True to resolve first image in the content list. | [optional]
**resolve_image** | **bool** | True to resolve first image in the content list. | [optional]
**allowed_extensions** | **string[]** | The allowed file extensions. | [optional]
**allow_duplicates** | **bool** | True, if duplicate values are allowed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
