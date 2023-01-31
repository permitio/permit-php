# # PolicyRepoRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique id of the policy repo |
**status** | [**\OpenAPI\Client\Model\PolicyRepoStatus**](PolicyRepoStatus.md) |  |
**key** | **string** | A URL-friendly name of the policy repo (i.e: slug). You will be able to query later using this key instead of the id (UUID) of the policy repo. |
**url** | **string** |  |
**main_branch_name** | **string** |  | [optional] [default to 'main']
**credentials** | [**\OpenAPI\Client\Model\SSHAuthData**](SSHAuthData.md) |  |
**activate_when_validated** | **bool** | if you want to change your policy repository to this repo right after it is validated | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
