# # SchemaDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**array<string,\OpenAPI\Client\Model\ResourceLink>**](ResourceLink.md) | The links. |
**id** | **string** | The ID of the schema. |
**created_by** | **string** | The user that has created the schema. |
**last_modified_by** | **string** | The user that has updated the schema. |
**name** | **string** | The name of the schema. Unique within the app. |
**type** | [**\OpenAPI\Client\Model\SchemaType**](SchemaType.md) |  |
**category** | **string** | The name of the category. | [optional]
**properties** | [**\OpenAPI\Client\Model\SchemaPropertiesDto**](SchemaPropertiesDto.md) |  |
**is_singleton** | **bool** | Indicates if the schema is a singleton. |
**is_published** | **bool** | Indicates if the schema is published. |
**created** | **\DateTime** | The date and time when the schema has been created. |
**last_modified** | **\DateTime** | The date and time when the schema has been modified last. |
**version** | **int** | The version of the schema. |
**scripts** | [**\OpenAPI\Client\Model\SchemaScriptsDto**](SchemaScriptsDto.md) |  |
**preview_urls** | **array<string,string>** | The preview Urls. |
**fields_in_lists** | **string[]** | The name of fields that are used in content lists. |
**fields_in_references** | **string[]** | The name of fields that are used in content references. |
**field_rules** | [**\OpenAPI\Client\Model\FieldRuleDto[]**](FieldRuleDto.md) | The field rules. |
**fields** | [**\OpenAPI\Client\Model\FieldDto[]**](FieldDto.md) | The list of fields. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
