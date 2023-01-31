# # RoleRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the role |
**description** | **string** | optional description string explaining what this role represents, or what permissions are granted to it. | [optional]
**permissions** | **string[]** | list of action keys that define what actions this resource role is permitted to do | [optional]
**extends** | **string[]** | list of role keys that define what roles this role extends. In other words: this role will automatically inherit all the permissions of the given roles in this list. | [optional]
**key** | **string** | A URL-friendly name of the role (i.e: slug). You will be able to query later using this key instead of the id (UUID) of the role. |
**id** | **string** | Unique id of the role |
**organization_id** | **string** | Unique id of the organization that the role belongs to. |
**project_id** | **string** | Unique id of the project that the role belongs to. |
**environment_id** | **string** | Unique id of the environment that the role belongs to. |
**created_at** | **\DateTime** | Date and time when the role was created (ISO_8601 format). |
**updated_at** | **\DateTime** | Date and time when the role was last updated/modified (ISO_8601 format). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
