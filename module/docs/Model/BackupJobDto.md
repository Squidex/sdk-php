# # BackupJobDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**array<string,\OpenAPI\Client\Model\ResourceLink>**](ResourceLink.md) | The links. |
**id** | **string** | The ID of the backup job. |
**started** | **\DateTime** | The time when the job has been started. |
**stopped** | **\DateTime** | The time when the job has been stopped. | [optional]
**handled_events** | **int** | The number of handled events. |
**handled_assets** | **int** | The number of handled assets. |
**status** | [**\OpenAPI\Client\Model\JobStatus**](JobStatus.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
