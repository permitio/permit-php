# OpenAPI\Client\ResourceAttributesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createResourceAttribute()**](ResourceAttributesApi.md#createResourceAttribute) | **POST** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/attributes | Create Resource Attribute |
| [**deleteResourceAttribute()**](ResourceAttributesApi.md#deleteResourceAttribute) | **DELETE** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/attributes/{attribute_id} | Delete Resource Attribute |
| [**getResourceAttribute()**](ResourceAttributesApi.md#getResourceAttribute) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/attributes/{attribute_id} | Get Resource Attribute |
| [**listResourceAttributes()**](ResourceAttributesApi.md#listResourceAttributes) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/attributes | List Resource Attributes |
| [**updateResourceAttribute()**](ResourceAttributesApi.md#updateResourceAttribute) | **PATCH** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/attributes/{attribute_id} | Update Resource Attribute |


## `createResourceAttribute()`

```php
createResourceAttribute($proj_id, $env_id, $resource_id, $resource_attribute_create): \OpenAPI\Client\Model\ResourceAttributeRead
```

Create Resource Attribute

Creates a new attribute as part of the resource definition.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$resource_attribute_create = new \OpenAPI\Client\Model\ResourceAttributeCreate(); // \OpenAPI\Client\Model\ResourceAttributeCreate

try {
    $result = $apiInstance->createResourceAttribute($proj_id, $env_id, $resource_id, $resource_attribute_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceAttributesApi->createResourceAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **resource_attribute_create** | [**\OpenAPI\Client\Model\ResourceAttributeCreate**](../Model/ResourceAttributeCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ResourceAttributeRead**](../Model/ResourceAttributeRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteResourceAttribute()`

```php
deleteResourceAttribute($proj_id, $env_id, $resource_id, $attribute_id, $page, $per_page)
```

Delete Resource Attribute

Deletes the attribute and all its related data.  Note: If the attribute is used by policies, removing it will cause the attribute to evaluate as `undefined`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$attribute_id = 'attribute_id_example'; // string | Either the unique id of the attribute, or the URL-friendly key of the attribute (i.e: the \"slug\").
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $apiInstance->deleteResourceAttribute($proj_id, $env_id, $resource_id, $attribute_id, $page, $per_page);
} catch (Exception $e) {
    echo 'Exception when calling ResourceAttributesApi->deleteResourceAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **attribute_id** | **string**| Either the unique id of the attribute, or the URL-friendly key of the attribute (i.e: the \&quot;slug\&quot;). | |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

void (empty response body)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResourceAttribute()`

```php
getResourceAttribute($proj_id, $env_id, $resource_id, $attribute_id): \OpenAPI\Client\Model\ResourceAttributeRead
```

Get Resource Attribute

Gets a single attribute defined on the resource, if such attribute exists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$attribute_id = 'attribute_id_example'; // string | Either the unique id of the attribute, or the URL-friendly key of the attribute (i.e: the \"slug\").

try {
    $result = $apiInstance->getResourceAttribute($proj_id, $env_id, $resource_id, $attribute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceAttributesApi->getResourceAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **attribute_id** | **string**| Either the unique id of the attribute, or the URL-friendly key of the attribute (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\ResourceAttributeRead**](../Model/ResourceAttributeRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listResourceAttributes()`

```php
listResourceAttributes($proj_id, $env_id, $resource_id, $page, $per_page): \OpenAPI\Client\Model\ResourceAttributeRead[]
```

List Resource Attributes

Lists all the attributes defined on the resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listResourceAttributes($proj_id, $env_id, $resource_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceAttributesApi->listResourceAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\ResourceAttributeRead[]**](../Model/ResourceAttributeRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateResourceAttribute()`

```php
updateResourceAttribute($proj_id, $env_id, $resource_id, $attribute_id, $resource_attribute_update): \OpenAPI\Client\Model\ResourceAttributeRead
```

Update Resource Attribute

Partially updates the attribute defined on a resource. Fields that will be provided will be completely overwritten.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$attribute_id = 'attribute_id_example'; // string | Either the unique id of the attribute, or the URL-friendly key of the attribute (i.e: the \"slug\").
$resource_attribute_update = new \OpenAPI\Client\Model\ResourceAttributeUpdate(); // \OpenAPI\Client\Model\ResourceAttributeUpdate

try {
    $result = $apiInstance->updateResourceAttribute($proj_id, $env_id, $resource_id, $attribute_id, $resource_attribute_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceAttributesApi->updateResourceAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **attribute_id** | **string**| Either the unique id of the attribute, or the URL-friendly key of the attribute (i.e: the \&quot;slug\&quot;). | |
| **resource_attribute_update** | [**\OpenAPI\Client\Model\ResourceAttributeUpdate**](../Model/ResourceAttributeUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ResourceAttributeRead**](../Model/ResourceAttributeRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
