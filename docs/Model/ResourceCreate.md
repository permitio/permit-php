# # ResourceCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | A URL-friendly name of the resource (i.e: slug). You will be able to query later using this key instead of the id (UUID) of the resource. |
**name** | **string** | The name of the resource |
**urn** | **string** | The [URN](https://en.wikipedia.org/wiki/Uniform_Resource_Name) (Uniform Resource Name) of the resource | [optional]
**description** | **string** | An optional longer description of what this resource respresents in your system | [optional]
**actions** | [**array<string,\OpenAPI\Client\Model\ActionBlockEditable>**](ActionBlockEditable.md) | A actions definition block, typically contained within a resource type definition block.         The actions represents the ways you can interact with a protected resource. |
**attributes** | [**array<string,\OpenAPI\Client\Model\AttributeBlockEditable>**](AttributeBlockEditable.md) | Attributes that each resource of this type defines, and can be used in your ABAC policies. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
