# # ProjectRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | A URL-friendly name of the project (i.e: slug). You will be able to query later using this key instead of the id (UUID) of the project. |
**urn_namespace** | **string** | Optional namespace for URNs. If empty, URNs will be generated from project key. | [optional]
**id** | **string** | Unique id of the project |
**organization_id** | **string** | Unique id of the organization that the project belongs to. |
**created_at** | **\DateTime** | Date and time when the project was created (ISO_8601 format). |
**updated_at** | **\DateTime** | Date and time when the project was last updated/modified (ISO_8601 format). |
**name** | **string** | The name of the project |
**description** | **string** | a longer description outlining the project objectives | [optional]
**settings** | **object** | the settings for this project | [optional]
**active_policy_repo_id** | **string** | the id of the policy repo to use for this project | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
