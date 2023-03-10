# # ConditionSetCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | A unique id by which Permit will identify the condition set. The key will be used as the generated rego rule name. |
**type** | [**ConditionSetType**](ConditionSetType.md) | the type of the set: UserSet or ResourceSet | [optional]
**autogenerated** | **bool** | whether the set was autogenerated by the system. | [optional] [default to false]
**resource_id** | [**\OpenAPI\Client\Model\ResourceId**](ResourceId.md) |  | [optional]
**name** | **string** | A descriptive name for the set, i.e: &#39;US based employees&#39; or &#39;Users behind VPN&#39; |
**description** | **string** | an optional longer description of the set | [optional]
**conditions** | **object** | a boolean expression that consists of multiple conditions, with and/or logic. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
