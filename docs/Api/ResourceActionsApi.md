# OpenAPI\Client\ResourceActionsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createResourceAction()**](ResourceActionsApi.md#createResourceAction) | **POST** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/actions | Create Resource Action |
| [**deleteResourceAction()**](ResourceActionsApi.md#deleteResourceAction) | **DELETE** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/actions/{action_id} | Delete Resource Action |
| [**getResourceAction()**](ResourceActionsApi.md#getResourceAction) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/actions/{action_id} | Get Resource Action |
| [**listResourceActions()**](ResourceActionsApi.md#listResourceActions) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/actions | List Resource Actions |
| [**updateResourceAction()**](ResourceActionsApi.md#updateResourceAction) | **PATCH** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/actions/{action_id} | Update Resource Action |


## `createResourceAction()`

```php
createResourceAction($proj_id, $env_id, $resource_id, $resource_action_create): \OpenAPI\Client\Model\ResourceActionRead
```

Create Resource Action

Creates a new action that can affect the resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$resource_action_create = new \OpenAPI\Client\Model\ResourceActionCreate(); // \OpenAPI\Client\Model\ResourceActionCreate

try {
    $result = $apiInstance->createResourceAction($proj_id, $env_id, $resource_id, $resource_action_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceActionsApi->createResourceAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **resource_action_create** | [**\OpenAPI\Client\Model\ResourceActionCreate**](../Model/ResourceActionCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ResourceActionRead**](../Model/ResourceActionRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteResourceAction()`

```php
deleteResourceAction($proj_id, $env_id, $resource_id, $action_id)
```

Delete Resource Action

Deletes the action and all its related data. This includes any permissions granted to perform the action.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$action_id = 'action_id_example'; // string | Either the unique id of the action, or the URL-friendly key of the action (i.e: the \"slug\").

try {
    $apiInstance->deleteResourceAction($proj_id, $env_id, $resource_id, $action_id);
} catch (Exception $e) {
    echo 'Exception when calling ResourceActionsApi->deleteResourceAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **action_id** | **string**| Either the unique id of the action, or the URL-friendly key of the action (i.e: the \&quot;slug\&quot;). | |

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

## `getResourceAction()`

```php
getResourceAction($proj_id, $env_id, $resource_id, $action_id): \OpenAPI\Client\Model\ResourceActionRead
```

Get Resource Action

Gets a single action defined on the resource, if such action exists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$action_id = 'action_id_example'; // string | Either the unique id of the action, or the URL-friendly key of the action (i.e: the \"slug\").

try {
    $result = $apiInstance->getResourceAction($proj_id, $env_id, $resource_id, $action_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceActionsApi->getResourceAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **action_id** | **string**| Either the unique id of the action, or the URL-friendly key of the action (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\ResourceActionRead**](../Model/ResourceActionRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listResourceActions()`

```php
listResourceActions($proj_id, $env_id, $resource_id, $page, $per_page): \OpenAPI\Client\Model\ResourceActionRead[]
```

List Resource Actions

Lists all the actions defined on the resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceActionsApi(
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
    $result = $apiInstance->listResourceActions($proj_id, $env_id, $resource_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceActionsApi->listResourceActions: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ResourceActionRead[]**](../Model/ResourceActionRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateResourceAction()`

```php
updateResourceAction($proj_id, $env_id, $resource_id, $action_id, $resource_action_update): \OpenAPI\Client\Model\ResourceActionRead
```

Update Resource Action

Partially updates the action defined on a resource. Fields that will be provided will be completely overwritten.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$action_id = 'action_id_example'; // string | Either the unique id of the action, or the URL-friendly key of the action (i.e: the \"slug\").
$resource_action_update = new \OpenAPI\Client\Model\ResourceActionUpdate(); // \OpenAPI\Client\Model\ResourceActionUpdate

try {
    $result = $apiInstance->updateResourceAction($proj_id, $env_id, $resource_id, $action_id, $resource_action_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceActionsApi->updateResourceAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **action_id** | **string**| Either the unique id of the action, or the URL-friendly key of the action (i.e: the \&quot;slug\&quot;). | |
| **resource_action_update** | [**\OpenAPI\Client\Model\ResourceActionUpdate**](../Model/ResourceActionUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ResourceActionRead**](../Model/ResourceActionRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
