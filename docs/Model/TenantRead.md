# # TenantRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | A unique id by which Permit will identify the tenant. The tenant key must be url-friendly (slugified). |
**id** | **string** | Unique id of the tenant |
**organization_id** | **string** | Unique id of the organization that the tenant belongs to. |
**project_id** | **string** | Unique id of the project that the tenant belongs to. |
**environment_id** | **string** | Unique id of the environment that the tenant belongs to. |
**created_at** | **\DateTime** | Date and time when the tenant was created (ISO_8601 format). |
**updated_at** | **\DateTime** | Date and time when the tenant was last updated/modified (ISO_8601 format). |
**last_action_at** | **\DateTime** | Date and time when the tenant was last active (ISO_8601 format). In other words, this is the last time a permission check was done on a resource belonging to this tenant. |
**name** | **string** | A descriptive name for the tenant |
**description** | **string** | an optional longer description of the tenant | [optional]
**attributes** | **object** | Arbitraty tenant attributes that will be used to enforce attribute-based access control policies. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
