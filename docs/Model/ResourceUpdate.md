# # ResourceUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the resource | [optional]
**urn** | **string** | The [URN](https://en.wikipedia.org/wiki/Uniform_Resource_Name) (Uniform Resource Name) of the resource | [optional]
**description** | **string** | An optional longer description of what this resource respresents in your system | [optional]
**actions** | [**array<string,\OpenAPI\Client\Model\ActionBlockEditable>**](ActionBlockEditable.md) | A actions definition block, typically contained within a resource type definition block.         The actions represents the ways you can interact with a protected resource. | [optional]
**attributes** | [**array<string,\OpenAPI\Client\Model\AttributeBlockEditable>**](AttributeBlockEditable.md) | Attributes that each resource of this type defines, and can be used in your ABAC policies. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
