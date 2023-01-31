# OpenAPI\Client\RolesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addParentRole()**](RolesApi.md#addParentRole) | **PUT** /v2/schema/{proj_id}/{env_id}/roles/{role_id}/parents/{parent_role_id} | Add Parent Role |
| [**assignPermissionsToRole()**](RolesApi.md#assignPermissionsToRole) | **POST** /v2/schema/{proj_id}/{env_id}/roles/{role_id}/permissions | Assign Permissions To Role |
| [**createRole()**](RolesApi.md#createRole) | **POST** /v2/schema/{proj_id}/{env_id}/roles | Create Role |
| [**deleteRole()**](RolesApi.md#deleteRole) | **DELETE** /v2/schema/{proj_id}/{env_id}/roles/{role_id} | Delete Role |
| [**getRole()**](RolesApi.md#getRole) | **GET** /v2/schema/{proj_id}/{env_id}/roles/{role_id} | Get Role |
| [**listRoles()**](RolesApi.md#listRoles) | **GET** /v2/schema/{proj_id}/{env_id}/roles | List Roles |
| [**removeParentRole()**](RolesApi.md#removeParentRole) | **DELETE** /v2/schema/{proj_id}/{env_id}/roles/{role_id}/parents/{parent_role_id} | Remove Parent Role |
| [**removePermissionsFromRole()**](RolesApi.md#removePermissionsFromRole) | **DELETE** /v2/schema/{proj_id}/{env_id}/roles/{role_id}/permissions | Remove Permissions From Role |
| [**updateRole()**](RolesApi.md#updateRole) | **PATCH** /v2/schema/{proj_id}/{env_id}/roles/{role_id} | Update Role |


## `addParentRole()`

```php
addParentRole($proj_id, $env_id, $role_id, $parent_role_id): \OpenAPI\Client\Model\RoleRead
```

Add Parent Role

This endpoint is part of the role hierarchy feature.  Makes role with id `role_id` extend the role with id `parent_role_id`. In other words, `role_id` will automatically be assigned any permissions that are granted to `parent_role_id`.  We can say the `role_id` **extends** `parent_role_id` or **inherits** from `parent_role_id`.  If `role_id` is already an ancestor of `parent_role_id`, the request will fail with HTTP 400 to prevent a cycle in the role hierarchy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$role_id = 'role_id_example'; // string | Either the unique id of the role, or the URL-friendly key of the role (i.e: the \"slug\").
$parent_role_id = 'parent_role_id_example'; // string | Either the unique id of the parent role, or the URL-friendly key of the parent role (i.e: the \"slug\").

try {
    $result = $apiInstance->addParentRole($proj_id, $env_id, $role_id, $parent_role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->addParentRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **role_id** | **string**| Either the unique id of the role, or the URL-friendly key of the role (i.e: the \&quot;slug\&quot;). | |
| **parent_role_id** | **string**| Either the unique id of the parent role, or the URL-friendly key of the parent role (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\RoleRead**](../Model/RoleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assignPermissionsToRole()`

```php
assignPermissionsToRole($proj_id, $env_id, $role_id, $add_role_permissions): \OpenAPI\Client\Model\RoleRead
```

Assign Permissions To Role

Assign permissions to role.  If some of the permissions specified are already unassigned, will skip them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$role_id = 'role_id_example'; // string | Either the unique id of the role, or the URL-friendly key of the role (i.e: the \"slug\").
$add_role_permissions = new \OpenAPI\Client\Model\AddRolePermissions(); // \OpenAPI\Client\Model\AddRolePermissions

try {
    $result = $apiInstance->assignPermissionsToRole($proj_id, $env_id, $role_id, $add_role_permissions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->assignPermissionsToRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **role_id** | **string**| Either the unique id of the role, or the URL-friendly key of the role (i.e: the \&quot;slug\&quot;). | |
| **add_role_permissions** | [**\OpenAPI\Client\Model\AddRolePermissions**](../Model/AddRolePermissions.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RoleRead**](../Model/RoleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRole()`

```php
createRole($proj_id, $env_id, $role_create): \OpenAPI\Client\Model\RoleRead
```

Create Role

Creates a new tenant role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$role_create = new \OpenAPI\Client\Model\RoleCreate(); // \OpenAPI\Client\Model\RoleCreate

try {
    $result = $apiInstance->createRole($proj_id, $env_id, $role_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->createRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **role_create** | [**\OpenAPI\Client\Model\RoleCreate**](../Model/RoleCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RoleRead**](../Model/RoleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRole()`

```php
deleteRole($proj_id, $env_id, $role_id)
```

Delete Role

Deletes a tenant role and all its related data. This includes any permissions granted to said role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$role_id = 'role_id_example'; // string | Either the unique id of the role, or the URL-friendly key of the role (i.e: the \"slug\").

try {
    $apiInstance->deleteRole($proj_id, $env_id, $role_id);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->deleteRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
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

## `getRole()`

```php
getRole($proj_id, $env_id, $role_id): \OpenAPI\Client\Model\RoleRead
```

Get Role

Gets a single tenant role, if such role exists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$role_id = 'role_id_example'; // string | Either the unique id of the role, or the URL-friendly key of the role (i.e: the \"slug\").

try {
    $result = $apiInstance->getRole($proj_id, $env_id, $role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->getRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **role_id** | **string**| Either the unique id of the role, or the URL-friendly key of the role (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\RoleRead**](../Model/RoleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRoles()`

```php
listRoles($proj_id, $env_id, $page, $per_page): \OpenAPI\Client\Model\RoleRead[]
```

List Roles

Lists all tenant roles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
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
    $result = $apiInstance->listRoles($proj_id, $env_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->listRoles: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\RoleRead[]**](../Model/RoleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeParentRole()`

```php
removeParentRole($proj_id, $env_id, $role_id, $parent_role_id): \OpenAPI\Client\Model\RoleRead
```

Remove Parent Role

This endpoint is part of the role hierarchy feature.  Removes `parent_role_id` from the list of parent roles of role with id `role_id`. In other words, `role_id` will no longer be automatically assigned permissions that are granted to `parent_role_id`.  We can say the `role_id` **not longer extends** `parent_role_id` or **no longer inherits** from `parent_role_id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$role_id = 'role_id_example'; // string | Either the unique id of the role, or the URL-friendly key of the role (i.e: the \"slug\").
$parent_role_id = 'parent_role_id_example'; // string | Either the unique id of the parent role, or the URL-friendly key of the parent role (i.e: the \"slug\").

try {
    $result = $apiInstance->removeParentRole($proj_id, $env_id, $role_id, $parent_role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->removeParentRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **role_id** | **string**| Either the unique id of the role, or the URL-friendly key of the role (i.e: the \&quot;slug\&quot;). | |
| **parent_role_id** | **string**| Either the unique id of the parent role, or the URL-friendly key of the parent role (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\RoleRead**](../Model/RoleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removePermissionsFromRole()`

```php
removePermissionsFromRole($proj_id, $env_id, $role_id, $remove_role_permissions): \OpenAPI\Client\Model\RoleRead
```

Remove Permissions From Role

Remove permissions from role.  If some of the permissions specified are already unassigned, will skip them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$role_id = 'role_id_example'; // string | Either the unique id of the role, or the URL-friendly key of the role (i.e: the \"slug\").
$remove_role_permissions = new \OpenAPI\Client\Model\RemoveRolePermissions(); // \OpenAPI\Client\Model\RemoveRolePermissions

try {
    $result = $apiInstance->removePermissionsFromRole($proj_id, $env_id, $role_id, $remove_role_permissions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->removePermissionsFromRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **role_id** | **string**| Either the unique id of the role, or the URL-friendly key of the role (i.e: the \&quot;slug\&quot;). | |
| **remove_role_permissions** | [**\OpenAPI\Client\Model\RemoveRolePermissions**](../Model/RemoveRolePermissions.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RoleRead**](../Model/RoleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRole()`

```php
updateRole($proj_id, $env_id, $role_id, $role_update): \OpenAPI\Client\Model\RoleRead
```

Update Role

Partially updates a tenant role. Fields that will be provided will be completely overwritten.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$role_id = 'role_id_example'; // string | Either the unique id of the role, or the URL-friendly key of the role (i.e: the \"slug\").
$role_update = new \OpenAPI\Client\Model\RoleUpdate(); // \OpenAPI\Client\Model\RoleUpdate

try {
    $result = $apiInstance->updateRole($proj_id, $env_id, $role_id, $role_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->updateRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **role_id** | **string**| Either the unique id of the role, or the URL-friendly key of the role (i.e: the \&quot;slug\&quot;). | |
| **role_update** | [**\OpenAPI\Client\Model\RoleUpdate**](../Model/RoleUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RoleRead**](../Model/RoleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
