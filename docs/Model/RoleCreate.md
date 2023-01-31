# # RoleCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | A URL-friendly name of the role (i.e: slug). You will be able to query later using this key instead of the id (UUID) of the role. |
**name** | **string** | The name of the role |
**description** | **string** | optional description string explaining what this role represents, or what permissions are granted to it. | [optional]
**permissions** | **string[]** | list of action keys that define what actions this resource role is permitted to do | [optional]
**extends** | **string[]** | list of role keys that define what roles this role extends. In other words: this role will automatically inherit all the permissions of the given roles in this list. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
