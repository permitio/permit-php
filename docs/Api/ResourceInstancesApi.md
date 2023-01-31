# OpenAPI\Client\ResourceInstancesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createResourceInstance()**](ResourceInstancesApi.md#createResourceInstance) | **POST** /v2/facts/{proj_id}/{env_id}/resource_instances | Create Resource Instance |
| [**deleteResourceInstance()**](ResourceInstancesApi.md#deleteResourceInstance) | **DELETE** /v2/facts/{proj_id}/{env_id}/resource_instances/{instance_id} | Delete Resource Instance |
| [**getResourceInstance()**](ResourceInstancesApi.md#getResourceInstance) | **GET** /v2/facts/{proj_id}/{env_id}/resource_instances/{instance_id} | Get Resource Instance |
| [**listResourceInstances()**](ResourceInstancesApi.md#listResourceInstances) | **GET** /v2/facts/{proj_id}/{env_id}/resource_instances | List Resource Instances |
| [**updateResourceInstance()**](ResourceInstancesApi.md#updateResourceInstance) | **PATCH** /v2/facts/{proj_id}/{env_id}/resource_instances/{instance_id} | Update Resource Instance |


## `createResourceInstance()`

```php
createResourceInstance($proj_id, $env_id, $resource_instance_create): \OpenAPI\Client\Model\ResourceInstanceRead
```

Create Resource Instance

Creates a new instance inside the Permit.io system.  If the instance is already created: will return 200 instead of 201, and will return the existing instance object in the response body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_instance_create = new \OpenAPI\Client\Model\ResourceInstanceCreate(); // \OpenAPI\Client\Model\ResourceInstanceCreate

try {
    $result = $apiInstance->createResourceInstance($proj_id, $env_id, $resource_instance_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceInstancesApi->createResourceInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_instance_create** | [**\OpenAPI\Client\Model\ResourceInstanceCreate**](../Model/ResourceInstanceCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ResourceInstanceRead**](../Model/ResourceInstanceRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteResourceInstance()`

```php
deleteResourceInstance($proj_id, $env_id, $instance_id)
```

Delete Resource Instance

Deletes the instance and all its related data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$instance_id = 'instance_id_example'; // string | Either the unique id of the resource instance, or the URL-friendly key of the resource instance (i.e: the \"slug\").

try {
    $apiInstance->deleteResourceInstance($proj_id, $env_id, $instance_id);
} catch (Exception $e) {
    echo 'Exception when calling ResourceInstancesApi->deleteResourceInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **instance_id** | **string**| Either the unique id of the resource instance, or the URL-friendly key of the resource instance (i.e: the \&quot;slug\&quot;). | |

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

## `getResourceInstance()`

```php
getResourceInstance($proj_id, $env_id, $instance_id): \OpenAPI\Client\Model\ResourceInstanceRead
```

Get Resource Instance

Gets a instance, if such instance exists. Otherwise returns 404.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$instance_id = 'instance_id_example'; // string | Either the unique id of the resource instance, or the URL-friendly key of the resource instance (i.e: the \"slug\").

try {
    $result = $apiInstance->getResourceInstance($proj_id, $env_id, $instance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceInstancesApi->getResourceInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **instance_id** | **string**| Either the unique id of the resource instance, or the URL-friendly key of the resource instance (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\ResourceInstanceRead**](../Model/ResourceInstanceRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listResourceInstances()`

```php
listResourceInstances($proj_id, $env_id, $page, $per_page): \OpenAPI\Client\Model\ResourceInstanceRead[]
```

List Resource Instances

Lists all the resource instances defined within an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listResourceInstances($proj_id, $env_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceInstancesApi->listResourceInstances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\ResourceInstanceRead[]**](../Model/ResourceInstanceRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateResourceInstance()`

```php
updateResourceInstance($proj_id, $env_id, $instance_id, $resource_instance_update): \OpenAPI\Client\Model\ResourceInstanceRead
```

Update Resource Instance

Partially updates the instance definition. Fields that will be provided will be completely overwritten.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$instance_id = 'instance_id_example'; // string | Either the unique id of the resource instance, or the URL-friendly key of the resource instance (i.e: the \"slug\").
$resource_instance_update = new \OpenAPI\Client\Model\ResourceInstanceUpdate(); // \OpenAPI\Client\Model\ResourceInstanceUpdate

try {
    $result = $apiInstance->updateResourceInstance($proj_id, $env_id, $instance_id, $resource_instance_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceInstancesApi->updateResourceInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **instance_id** | **string**| Either the unique id of the resource instance, or the URL-friendly key of the resource instance (i.e: the \&quot;slug\&quot;). | |
| **resource_instance_update** | [**\OpenAPI\Client\Model\ResourceInstanceUpdate**](../Model/ResourceInstanceUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ResourceInstanceRead**](../Model/ResourceInstanceRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
