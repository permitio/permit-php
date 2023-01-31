# # ResourceActionRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the action |
**description** | **string** | An optional longer description of what this action respresents in your system | [optional]
**key** | **string** | A URL-friendly name of the action (i.e: slug). You will be able to query later using this key instead of the id (UUID) of the action. |
**id** | **string** | Unique id of the action |
**permission_name** | **string** | The name of the action, prefixed by the resource the action is acting upon. |
**organization_id** | **string** | Unique id of the organization that the action belongs to. |
**project_id** | **string** | Unique id of the project that the action belongs to. |
**environment_id** | **string** | Unique id of the environment that the action belongs to. |
**resource_id** | **string** | Unique id of the resource that the action belongs to. |
**created_at** | **\DateTime** | Date and time when the action was created (ISO_8601 format). |
**updated_at** | **\DateTime** | Date and time when the action was last updated/modified (ISO_8601 format). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
