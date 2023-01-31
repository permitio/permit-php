# # ResourceAttributeRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**AttributeType**](AttributeType.md) | The type of the attribute, we currently support: &#x60;bool&#x60;, &#x60;number&#x60; (ints, floats), &#x60;time&#x60; (a timestamp), &#x60;string&#x60;, and &#x60;json&#x60;. |
**description** | **string** | An optional longer description of what this attribute respresents in your system | [optional]
**key** | **string** | A URL-friendly name of the attribute (i.e: slug). You will be able to query later using this key instead of the id (UUID) of the attribute. |
**id** | **string** | Unique id of the attribute |
**resource_id** | **string** | Unique id of the resource that the attribute belongs to. |
**resource_key** | **string** | A URL-friendly name of the resource (i.e: slug). You will be able to query later using this key instead of the id (UUID) of the resource. |
**organization_id** | **string** | Unique id of the organization that the attribute belongs to. |
**project_id** | **string** | Unique id of the project that the attribute belongs to. |
**environment_id** | **string** | Unique id of the environment that the attribute belongs to. |
**created_at** | **\DateTime** | Date and time when the attribute was created (ISO_8601 format). |
**updated_at** | **\DateTime** | Date and time when the attribute was last updated/modified (ISO_8601 format). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
