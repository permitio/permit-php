# # ConditionSetRuleCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_set** | **string** | The userset that will be given permission, i.e: all the users matching this rule will be given the specified permission |
**permission** | **string** | The permission that will be granted to the userset *on* the resourceset. The permission can be either a resource action id, or &#x60;{resource_key}:{action_key}&#x60;, i.e: the \&quot;permission name\&quot;. |
**resource_set** | **string** | The resourceset that represents the resources that are granted for access, i.e: all the resources matching this rule can be accessed by the userset to perform the granted *permission* |
**is_role** | **bool** | if True, will set the condition set rule to the role&#39;s autogen user-set. | [optional] [default to false]
**is_resource** | **bool** | if True, will set the condition set rule to the resource&#39;s autogen resource-set. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
