# # CallsUsageDtoDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total_calls** | **int** | The total number of API calls. |
**total_bytes** | **int** | The total number of bytes transferred. |
**month_calls** | **int** | The total number of API calls this month. |
**month_bytes** | **int** | The total number of bytes transferred this month. |
**blocking_api_calls** | **int** | The amount of calls that will block the app. |
**allowed_bytes** | **int** | The included API traffic. |
**allowed_calls** | **int** | The included API calls. |
**average_elapsed_ms** | **double** | The average duration in milliseconds. |
**details** | **array<string,\OpenAPI\Client\Model\CallsUsagePerDateDto[]>** | The statistics by date and group. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
