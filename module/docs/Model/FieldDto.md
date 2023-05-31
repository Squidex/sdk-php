# # FieldDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**array<string,\OpenAPI\Client\Model\ResourceLink>**](ResourceLink.md) | The links. |
**field_id** | **int** | The ID of the field. |
**name** | **string** | The name of the field. Must be unique within the schema. |
**is_hidden** | **bool** | Defines if the field is hidden. |
**is_locked** | **bool** | Defines if the field is locked. |
**is_disabled** | **bool** | Defines if the field is disabled. |
**partitioning** | **string** | Defines the partitioning of the field. |
**properties** | [**\OpenAPI\Client\Model\FieldPropertiesDto**](FieldPropertiesDto.md) |  |
**nested** | [**\OpenAPI\Client\Model\NestedFieldDto[]**](NestedFieldDto.md) | The nested fields. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
