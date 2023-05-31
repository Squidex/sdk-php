# # AppDtoAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the app. |
**name** | **string** | The name of the app. |
**label** | **string** | The optional label of the app. | [optional]
**description** | **string** | The optional description of the app. | [optional]
**version** | **int** | The version of the app. |
**created** | **\DateTime** | The timestamp when the app has been created. |
**last_modified** | **\DateTime** | The timestamp when the app has been modified last. |
**team_id** | **string** | The ID of the team. | [optional]
**permissions** | **string[]** | The permission level of the user. |
**can_access_api** | **bool** | Indicates if the user can access the api. |
**can_access_content** | **bool** | Indicates if the user can access at least one content. |
**role_name** | **string** | The role name of the user. | [optional]
**role_properties** | **array<string,mixed>** | The properties from the role. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
