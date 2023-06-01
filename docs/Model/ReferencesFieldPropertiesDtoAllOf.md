# # ReferencesFieldPropertiesDtoAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_values** | **array<string,string[]>** |  | [optional]
**default_value** | **string[]** | The default value as a list of content ids. | [optional]
**min_items** | **int** | The minimum allowed items for the field value. | [optional]
**max_items** | **int** | The maximum allowed items for the field value. | [optional]
**allow_duplicates** | **bool** | True, if duplicate values are allowed. | [optional]
**resolve_reference** | **bool** | True to resolve references in the content list. | [optional]
**must_be_published** | **bool** | True when all references must be published. | [optional]
**editor** | [**\OpenAPI\Client\Model\ReferencesFieldEditor**](ReferencesFieldEditor.md) |  | [optional]
**schema_ids** | **string[]** | The ID of the referenced schemas. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
