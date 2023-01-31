# OpenAPI\Client\ResourceRolesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addParentResourceRole()**](ResourceRolesApi.md#addParentResourceRole) | **PUT** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id}/parents/{parent_role_id} | Add Parent Role |
| [**assignPermissionsToResourceRole()**](ResourceRolesApi.md#assignPermissionsToResourceRole) | **POST** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id}/permissions | Assign Permissions to Role |
| [**createResourceRole()**](ResourceRolesApi.md#createResourceRole) | **POST** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles | Create Resource Role |
| [**deleteResourceRole()**](ResourceRolesApi.md#deleteResourceRole) | **DELETE** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id} | Delete Resource Role |
| [**getResourceRole()**](ResourceRolesApi.md#getResourceRole) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id} | Get Resource Role |
| [**listResourceRoles()**](ResourceRolesApi.md#listResourceRoles) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles | List Resource Roles |
| [**removeParentResourceRole()**](ResourceRolesApi.md#removeParentResourceRole) | **DELETE** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id}/parents/{parent_role_id} | Remove Parent Role |
| [**removePermissionsFromResourceRole()**](ResourceRolesApi.md#removePermissionsFromResourceRole) | **DELETE** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id}/permissions | Remove Permissions from Role |
| [**updateResourceRole()**](ResourceRolesApi.md#updateResourceRole) | **PATCH** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id} | Update Resource Role |


## `addParentResourceRole()`

```php
addParentResourceRole($proj_id, $env_id, $resource_id, $role_id, $parent_role_id): \OpenAPI\Client\Model\ResourceRoleRead
```

Add Parent Role

This endpoint is part of the role hierarchy feature.  Makes role with id `role_id` extend the role with id `parent_role_id`. In other words, `role_id` will automatically be assigned any permissions that are granted to `parent_role_id`.  We can say the `role_id` **extends** `parent_role_id` or **inherits** from `parent_role_id`.  If `role_id` is already an ancestor of `parent_role_id`, the request will fail with HTTP 400 to prevent a cycle in the role hierarchy.  Both roles must be defined on the same resource, identified by id `resource_id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$role_id = 'role_id_example'; // string | Either the unique id of the role, or the URL-friendly key of the role (i.e: the \"slug\").
$parent_role_id = 'parent_role_id_example'; // string | Either the unique id of the parent role, or the URL-friendly key of the parent role (i.e: the \"slug\").

try {
    $result = $apiInstance->addParentResourceRole($proj_id, $env_id, $resource_id, $role_id, $parent_role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceRolesApi->addParentResourceRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **role_id** | **string**| Either the unique id of the role, or the URL-friendly key of the role (i.e: the \&quot;slug\&quot;). | |
| **parent_role_id** | **string**| Either the unique id of the parent role, or the URL-friendly key of the parent role (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\ResourceRoleRead**](../Model/ResourceRoleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assignPermissionsToResourceRole()`

```php
assignPermissionsToResourceRole($proj_id, $env_id, $resource_id, $role_id, $add_role_permissions): \OpenAPI\Client\Model\ResourceRoleRead
```

Assign Permissions to Role

Assign permissions to role.  If some of the permissions specified are already unassigned, will skip them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$role_id = 'role_id_example'; // string | Either the unique id of the role, or the URL-friendly key of the role (i.e: the \"slug\").
$add_role_permissions = new \OpenAPI\Client\Model\AddRolePermissions(); // \OpenAPI\Client\Model\AddRolePermissions

try {
    $result = $apiInstance->assignPermissionsToResourceRole($proj_id, $env_id, $resource_id, $role_id, $add_role_permissions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceRolesApi->assignPermissionsToResourceRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **role_id** | **string**| Either the unique id of the role, or the URL-friendly key of the role (i.e: the \&quot;slug\&quot;). | |
| **add_role_permissions** | [**\OpenAPI\Client\Model\AddRolePermissions**](../Model/AddRolePermissions.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ResourceRoleRead**](../Model/ResourceRoleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createResourceRole()`

```php
createResourceRole($proj_id, $env_id, $resource_id, $resource_role_create): \OpenAPI\Client\Model\ResourceRoleRead
```

Create Resource Role

Creates a new role associated with the resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$resource_role_create = new \OpenAPI\Client\Model\ResourceRoleCreate(); // \OpenAPI\Client\Model\ResourceRoleCreate

try {
    $result = $apiInstance->createResourceRole($proj_id, $env_id, $resource_id, $resource_role_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceRolesApi->createResourceRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **resource_role_create** | [**\OpenAPI\Client\Model\ResourceRoleCreate**](../Model/ResourceRoleCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ResourceRoleRead**](../Model/ResourceRoleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteResourceRole()`

```php
deleteResourceRole($proj_id, $env_id, $resource_id, $role_id)
```

Delete Resource Role

Deletes the role and all its related data. This includes any permissions granted to said role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$role_id = 'role_id_example'; // string | Either the unique id of the role, or the URL-friendly key of the role (i.e: the \"slug\").

try {
    $apiInstance->deleteResourceRole($proj_id, $env_id, $resource_id, $role_id);
} catch (Exception $e) {
    echo 'Exception when calling ResourceRolesApi->deleteResourceRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **role_id** | **string**| Either the unique id of the role, or the URL-friendly key of the role (i.e: the \&quot;slug\&quot;). | |

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

## `getResourceRole()`

```php
getResourceRole($proj_id, $env_id, $resource_id, $role_id): \OpenAPI\Client\Model\ResourceRoleRead
```

Get Resource Role

Gets a single role defined on the resource, if such role exists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$role_id = 'role_id_example'; // string | Either the unique id of the role, or the URL-friendly key of the role (i.e: the \"slug\").

try {
    $result = $apiInstance->getResourceRole($proj_id, $env_id, $resource_id, $role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceRolesApi->getResourceRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **role_id** | **string**| Either the unique id of the role, or the URL-friendly key of the role (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\ResourceRoleRead**](../Model/ResourceRoleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listResourceRoles()`

```php
listResourceRoles($proj_id, $env_id, $resource_id, $page, $per_page): \OpenAPI\Client\Model\ResourceRoleRead[]
```

List Resource Roles

Lists all the roles defined on the resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceRolesApi(
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
    $result = $apiInstance->listResourceRoles($proj_id, $env_id, $resource_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceRolesApi->listResourceRoles: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ResourceRoleRead[]**](../Model/ResourceRoleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeParentResourceRole()`

```php
removeParentResourceRole($proj_id, $env_id, $resource_id, $role_id, $parent_role_id): \OpenAPI\Client\Model\ResourceRoleRead
```

Remove Parent Role

This endpoint is part of the role hierarchy feature.  Removes `parent_role_id` from the list of parent roles of role with id `role_id`. In other words, `role_id` will no longer be automatically assigned permissions that are granted to `parent_role_id`.  We can say the `role_id` **not longer extends** `parent_role_id` or **no longer inherits** from `parent_role_id`.  Both roles must be defined on the same resource, identified by id `resource_id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$role_id = 'role_id_example'; // string | Either the unique id of the role, or the URL-friendly key of the role (i.e: the \"slug\").
$parent_role_id = 'parent_role_id_example'; // string | Either the unique id of the parent role, or the URL-friendly key of the parent role (i.e: the \"slug\").

try {
    $result = $apiInstance->removeParentResourceRole($proj_id, $env_id, $resource_id, $role_id, $parent_role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceRolesApi->removeParentResourceRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **role_id** | **string**| Either the unique id of the role, or the URL-friendly key of the role (i.e: the \&quot;slug\&quot;). | |
| **parent_role_id** | **string**| Either the unique id of the parent role, or the URL-friendly key of the parent role (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\ResourceRoleRead**](../Model/ResourceRoleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removePermissionsFromResourceRole()`

```php
removePermissionsFromResourceRole($proj_id, $env_id, $resource_id, $role_id, $remove_role_permissions): \OpenAPI\Client\Model\ResourceRoleRead
```

Remove Permissions from Role

Remove permissions from role.  If some of the permissions specified are already unassigned, will skip them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$role_id = 'role_id_example'; // string | Either the unique id of the role, or the URL-friendly key of the role (i.e: the \"slug\").
$remove_role_permissions = new \OpenAPI\Client\Model\RemoveRolePermissions(); // \OpenAPI\Client\Model\RemoveRolePermissions

try {
    $result = $apiInstance->removePermissionsFromResourceRole($proj_id, $env_id, $resource_id, $role_id, $remove_role_permissions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceRolesApi->removePermissionsFromResourceRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **role_id** | **string**| Either the unique id of the role, or the URL-friendly key of the role (i.e: the \&quot;slug\&quot;). | |
| **remove_role_permissions** | [**\OpenAPI\Client\Model\RemoveRolePermissions**](../Model/RemoveRolePermissions.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ResourceRoleRead**](../Model/ResourceRoleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateResourceRole()`

```php
updateResourceRole($proj_id, $env_id, $resource_id, $role_id, $resource_role_update): \OpenAPI\Client\Model\ResourceRoleRead
```

Update Resource Role

Partially updates the role defined on a resource. Fields that will be provided will be completely overwritten.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$role_id = 'role_id_example'; // string | Either the unique id of the role, or the URL-friendly key of the role (i.e: the \"slug\").
$resource_role_update = new \OpenAPI\Client\Model\ResourceRoleUpdate(); // \OpenAPI\Client\Model\ResourceRoleUpdate

try {
    $result = $apiInstance->updateResourceRole($proj_id, $env_id, $resource_id, $role_id, $resource_role_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceRolesApi->updateResourceRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **role_id** | **string**| Either the unique id of the role, or the URL-friendly key of the role (i.e: the \&quot;slug\&quot;). | |
| **resource_role_update** | [**\OpenAPI\Client\Model\ResourceRoleUpdate**](../Model/ResourceRoleUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ResourceRoleRead**](../Model/ResourceRoleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
