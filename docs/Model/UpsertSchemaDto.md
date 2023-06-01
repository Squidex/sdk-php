# # UpsertSchemaDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**properties** | [**\OpenAPI\Client\Model\SchemaPropertiesDto**](SchemaPropertiesDto.md) |  | [optional]
**scripts** | [**\OpenAPI\Client\Model\SchemaScriptsDto**](SchemaScriptsDto.md) |  | [optional]
**fields_in_references** | **string[]** | The names of the fields that should be used in references. | [optional]
**fields_in_lists** | **string[]** | The names of the fields that should be shown in lists, including meta fields. | [optional]
**fields** | [**\OpenAPI\Client\Model\UpsertSchemaFieldDto[]**](UpsertSchemaFieldDto.md) | Optional fields. | [optional]
**preview_urls** | **array<string,string>** | The optional preview urls. | [optional]
**field_rules** | [**\OpenAPI\Client\Model\FieldRuleDto[]**](FieldRuleDto.md) | The optional field Rules. | [optional]
**category** | **string** | The category. | [optional]
**is_published** | **bool** | Set it to true to autopublish the schema. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
