# # UserRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | A unique id by which Permit will identify the user for permission checks. |
**id** | **string** | Unique id of the user |
**organization_id** | **string** | Unique id of the organization that the user belongs to. |
**project_id** | **string** | Unique id of the project that the user belongs to. |
**environment_id** | **string** | Unique id of the environment that the user belongs to. |
**roles** | [**\OpenAPI\Client\Model\UserRole[]**](UserRole.md) |  | [optional]
**email** | **string** | The email of the user. If synced, will be unique inside the environment. | [optional]
**first_name** | **string** | First name of the user. | [optional]
**last_name** | **string** | Last name of the user. | [optional]
**attributes** | **object** | Arbitraty user attributes that will be used to enforce attribute-based access control policies. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
