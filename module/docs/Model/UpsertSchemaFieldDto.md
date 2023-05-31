# # UpsertSchemaFieldDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the field. Must be unique within the schema. |
**is_hidden** | **bool** | Defines if the field is hidden. | [optional]
**is_locked** | **bool** | Defines if the field is locked. | [optional]
**is_disabled** | **bool** | Defines if the field is disabled. | [optional]
**partitioning** | **string** | Determines the optional partitioning of the field. | [optional]
**properties** | [**\OpenAPI\Client\Model\FieldPropertiesDto**](FieldPropertiesDto.md) |  |
**nested** | [**\OpenAPI\Client\Model\UpsertSchemaNestedFieldDto[]**](UpsertSchemaNestedFieldDto.md) | The nested fields. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
