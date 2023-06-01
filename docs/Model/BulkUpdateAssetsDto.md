# # BulkUpdateAssetsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**jobs** | [**\OpenAPI\Client\Model\BulkUpdateAssetsJobDto[]**](BulkUpdateAssetsJobDto.md) | The contents to update or insert. | [optional]
**check_referrers** | **bool** | True to check referrers of deleted assets. | [optional]
**optimize_validation** | **bool** | True to turn off costly validation: Folder checks. Default: true. | [optional]
**do_not_script** | **bool** | True to turn off scripting for faster inserts. Default: true. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
