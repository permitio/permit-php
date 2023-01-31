# # EnvironmentRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | A URL-friendly name of the environment (i.e: slug). You will be able to query later using this key instead of the id (UUID) of the environment. |
**id** | **string** | Unique id of the environment |
**organization_id** | **string** | Unique id of the organization that the environment belongs to. |
**project_id** | **string** | Unique id of the project that the environment belongs to. |
**created_at** | **\DateTime** | Date and time when the environment was created (ISO_8601 format). |
**updated_at** | **\DateTime** | Date and time when the environment was last updated/modified (ISO_8601 format). |
**name** | **string** | The name of the environment |
**description** | **string** | an optional longer description of the environment | [optional]
**custom_branch_name** | **string** | when using gitops feature, an optional branch name for the environment | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
