# # BulkUpdateContentsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**jobs** | [**\OpenAPI\Client\Model\BulkUpdateContentsJobDto[]**](BulkUpdateContentsJobDto.md) | The contents to update or insert. |
**publish** | **bool** | True to automatically publish the content. | [optional]
**do_not_script** | **bool** | True to turn off scripting for faster inserts. Default: true. | [optional]
**do_not_validate** | **bool** | True to turn off validation for faster inserts. Default: false. | [optional]
**do_not_validate_workflow** | **bool** | True to turn off validation of workflow rules. Default: false. | [optional]
**check_referrers** | **bool** | True to check referrers of deleted contents. | [optional]
**optimize_validation** | **bool** | True to turn off costly validation: Unique checks, asset checks and reference checks. Default: true. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
