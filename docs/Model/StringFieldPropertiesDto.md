# # StringFieldPropertiesDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_values** | **array<string,string>** |  | [optional]
**default_value** | **string** | The default value for the field value. | [optional]
**pattern** | **string** | The pattern to enforce a specific format for the field value. | [optional]
**pattern_message** | **string** | The validation message for the pattern. | [optional]
**folder_id** | **string** | The initial id to the folder when the control supports file uploads. | [optional]
**min_length** | **int** | The minimum allowed length for the field value. | [optional]
**max_length** | **int** | The maximum allowed length for the field value. | [optional]
**min_characters** | **int** | The minimum allowed of normal characters for the field value. | [optional]
**max_characters** | **int** | The maximum allowed of normal characters for the field value. | [optional]
**min_words** | **int** | The minimum allowed number of words for the field value. | [optional]
**max_words** | **int** | The maximum allowed number of words for the field value. | [optional]
**allowed_values** | **string[]** | The allowed values for the field value. | [optional]
**schema_ids** | **string[]** | The allowed schema ids that can be embedded. | [optional]
**is_unique** | **bool** | Indicates if the field value must be unique. Ignored for nested fields and localized fields. | [optional]
**is_embeddable** | **bool** | Indicates that other content items or references are embedded. | [optional]
**inline_editable** | **bool** | Indicates that the inline editor is enabled for this field. | [optional]
**create_enum** | **bool** | Indicates whether GraphQL Enum should be created. | [optional]
**content_type** | [**\OpenAPI\Client\Model\StringContentType**](StringContentType.md) |  | [optional]
**editor** | [**\OpenAPI\Client\Model\StringFieldEditor**](StringFieldEditor.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
