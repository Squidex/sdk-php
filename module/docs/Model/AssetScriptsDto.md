# # AssetScriptsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**array<string,\OpenAPI\Client\Model\ResourceLink>**](ResourceLink.md) | The links. |
**query** | **string** | The script that is executed for each asset when querying assets. | [optional]
**query_pre** | **string** | The script that is executed for all assets when querying assets. | [optional]
**create** | **string** | The script that is executed when creating an asset. | [optional]
**update** | **string** | The script that is executed when updating a content. | [optional]
**annotate** | **string** | The script that is executed when annotating a content. | [optional]
**move** | **string** | The script that is executed when moving a content. | [optional]
**delete** | **string** | The script that is executed when deleting a content. | [optional]
**version** | **int** | The version of the app. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
