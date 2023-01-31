# # DataSourceEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | Url source to query for data |
**config** | **object** | Suggested fetcher configuration (e.g. auth or method) to fetch data with | [optional]
**topics** | **string[]** | topics the data applies to | [optional]
**dst_path** | **string** | OPA data api path to store the document at | [optional] [default to '']
**save_method** | **string** | Method used to write into OPA - PUT/PATCH | [optional] [default to 'PUT']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
