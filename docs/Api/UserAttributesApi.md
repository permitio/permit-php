# OpenAPI\Client\UserAttributesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createUserAttribute()**](UserAttributesApi.md#createUserAttribute) | **POST** /v2/schema/{proj_id}/{env_id}/users/attributes | Create User Attribute |
| [**deleteUserAttribute()**](UserAttributesApi.md#deleteUserAttribute) | **DELETE** /v2/schema/{proj_id}/{env_id}/users/attributes/{attribute_id} | Delete User Attribute |
| [**getUserAttribute()**](UserAttributesApi.md#getUserAttribute) | **GET** /v2/schema/{proj_id}/{env_id}/users/attributes/{attribute_id} | Get User Attribute |
| [**listUserAttributes()**](UserAttributesApi.md#listUserAttributes) | **GET** /v2/schema/{proj_id}/{env_id}/users/attributes | List User Attributes |
| [**updateUserAttribute()**](UserAttributesApi.md#updateUserAttribute) | **PATCH** /v2/schema/{proj_id}/{env_id}/users/attributes/{attribute_id} | Update User Attribute |


## `createUserAttribute()`

```php
createUserAttribute($proj_id, $env_id, $resource_attribute_create, $resource_id): \OpenAPI\Client\Model\ResourceAttributeRead
```

Create User Attribute

Creates a new attribute for the User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_attribute_create = new \OpenAPI\Client\Model\ResourceAttributeCreate(); // \OpenAPI\Client\Model\ResourceAttributeCreate
$resource_id = '__user'; // string

try {
    $result = $apiInstance->createUserAttribute($proj_id, $env_id, $resource_attribute_create, $resource_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAttributesApi->createUserAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_attribute_create** | [**\OpenAPI\Client\Model\ResourceAttributeCreate**](../Model/ResourceAttributeCreate.md)|  | |
| **resource_id** | **string**|  | [optional] [default to &#39;__user&#39;] |

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

## `deleteUserAttribute()`

```php
deleteUserAttribute($proj_id, $env_id, $attribute_id, $resource_id, $page, $per_page)
```

Delete User Attribute

Deletes the attribute and all its related data.  Note: If the attribute is used by policies, removing it will cause the attribute to evaluate as `undefined`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$attribute_id = 'attribute_id_example'; // string | Either the unique id of the attribute, or the URL-friendly key of the attribute (i.e: the \"slug\").
$resource_id = '__user'; // string
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $apiInstance->deleteUserAttribute($proj_id, $env_id, $attribute_id, $resource_id, $page, $per_page);
} catch (Exception $e) {
    echo 'Exception when calling UserAttributesApi->deleteUserAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **attribute_id** | **string**| Either the unique id of the attribute, or the URL-friendly key of the attribute (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**|  | [optional] [default to &#39;__user&#39;] |
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

## `getUserAttribute()`

```php
getUserAttribute($proj_id, $env_id, $attribute_id, $resource_id): \OpenAPI\Client\Model\ResourceAttributeRead
```

Get User Attribute

Gets a single attribute defined on the User resource, if such attribute exists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$attribute_id = 'attribute_id_example'; // string | Either the unique id of the attribute, or the URL-friendly key of the attribute (i.e: the \"slug\").
$resource_id = '__user'; // string

try {
    $result = $apiInstance->getUserAttribute($proj_id, $env_id, $attribute_id, $resource_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAttributesApi->getUserAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **attribute_id** | **string**| Either the unique id of the attribute, or the URL-friendly key of the attribute (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**|  | [optional] [default to &#39;__user&#39;] |

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

## `listUserAttributes()`

```php
listUserAttributes($proj_id, $env_id, $resource_id, $page, $per_page): \OpenAPI\Client\Model\ResourceAttributeRead[]
```

List User Attributes

Lists all the attributes defined on the User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_id = '__user'; // string
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listUserAttributes($proj_id, $env_id, $resource_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAttributesApi->listUserAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**|  | [optional] [default to &#39;__user&#39;] |
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

## `updateUserAttribute()`

```php
updateUserAttribute($proj_id, $env_id, $attribute_id, $resource_attribute_update, $resource_id): \OpenAPI\Client\Model\ResourceAttributeRead
```

Update User Attribute

Partially updates the attribute defined on the User resource. Fields that will be provided will be completely overwritten.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$attribute_id = 'attribute_id_example'; // string | Either the unique id of the attribute, or the URL-friendly key of the attribute (i.e: the \"slug\").
$resource_attribute_update = new \OpenAPI\Client\Model\ResourceAttributeUpdate(); // \OpenAPI\Client\Model\ResourceAttributeUpdate
$resource_id = '__user'; // string

try {
    $result = $apiInstance->updateUserAttribute($proj_id, $env_id, $attribute_id, $resource_attribute_update, $resource_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAttributesApi->updateUserAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **attribute_id** | **string**| Either the unique id of the attribute, or the URL-friendly key of the attribute (i.e: the \&quot;slug\&quot;). | |
| **resource_attribute_update** | [**\OpenAPI\Client\Model\ResourceAttributeUpdate**](../Model/ResourceAttributeUpdate.md)|  | |
| **resource_id** | **string**|  | [optional] [default to &#39;__user&#39;] |

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
