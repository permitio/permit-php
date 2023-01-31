# # ElementsConfigRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | A URL-friendly name of the elements_config (i.e: slug). You will be able to query later using this key instead of the id (UUID) of the elements_config. |
**id** | **string** | Unique id of the elements_config |
**organization_id** | **string** | Unique id of the organization that the elements_config belongs to. |
**project_id** | **string** | Unique id of the project that the elements_config belongs to. |
**environment_id** | **string** | Unique id of the environment that the elements_config belongs to. |
**created_at** | **\DateTime** | Date and time when the elements_config was created (ISO_8601 format). |
**updated_at** | **\DateTime** | Date and time when the elements_config was last updated/modified (ISO_8601 format). |
**is_active** | **bool** |  |
**name** | **string** | The name of the elements_config |
**elements_type** | [**ElementsType**](ElementsType.md) | The type of the elements interface, e.g: user management |
**settings** | [**array<string,\OpenAPI\Client\Model\Settings>**](Settings.md) | Obj with the options of the elements interface, e.g: primary color |
**roles_to_levels** | **array<string,\OpenAPI\Client\Model\PermissionLevelRoleRead[]>** | Obj with levels as keys and role ids as values |
**webhook** | [**\OpenAPI\Client\Model\WebhookRead**](WebhookRead.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
