# OpenAPI\Client\RoleAssignmentsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignRole()**](RoleAssignmentsApi.md#assignRole) | **POST** /v2/facts/{proj_id}/{env_id}/role_assignments | Assign Role |
| [**listRoleAssignments()**](RoleAssignmentsApi.md#listRoleAssignments) | **GET** /v2/facts/{proj_id}/{env_id}/role_assignments | List Role Assignments |
| [**unassignRole()**](RoleAssignmentsApi.md#unassignRole) | **DELETE** /v2/facts/{proj_id}/{env_id}/role_assignments | Unassign Role |


## `assignRole()`

```php
assignRole($proj_id, $env_id, $role_assignment_create): \OpenAPI\Client\Model\RoleAssignmentRead
```

Assign Role

Assigns a role to a user within a tenant.  The tenant defines the scope of the assignment. In other words, the role is effective only within the tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RoleAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$role_assignment_create = new \OpenAPI\Client\Model\RoleAssignmentCreate(); // \OpenAPI\Client\Model\RoleAssignmentCreate

try {
    $result = $apiInstance->assignRole($proj_id, $env_id, $role_assignment_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleAssignmentsApi->assignRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **role_assignment_create** | [**\OpenAPI\Client\Model\RoleAssignmentCreate**](../Model/RoleAssignmentCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RoleAssignmentRead**](../Model/RoleAssignmentRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRoleAssignments()`

```php
listRoleAssignments($proj_id, $env_id, $user, $role, $tenant, $page, $per_page): \OpenAPI\Client\Model\RoleAssignmentRead[]
```

List Role Assignments

Lists the role assignments defined within an environment.  - If the `user` filter is present, will only return the role assignments of that user. - If the `tenant` filter is present, will only return the role assignments in that tenant. - If the `role` filter is present, will only return role assignments that are granting that role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RoleAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$user = 'user_example'; // string | optional user filter, will only return role assignments granted to this user.
$role = 'role_example'; // string | optional role filter, will only return role assignments granting this role.
$tenant = 'tenant_example'; // string | optional tenant filter, will only return role assignments granted in that tenant.
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listRoleAssignments($proj_id, $env_id, $user, $role, $tenant, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleAssignmentsApi->listRoleAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **user** | **string**| optional user filter, will only return role assignments granted to this user. | [optional] |
| **role** | **string**| optional role filter, will only return role assignments granting this role. | [optional] |
| **tenant** | **string**| optional tenant filter, will only return role assignments granted in that tenant. | [optional] |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\RoleAssignmentRead[]**](../Model/RoleAssignmentRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unassignRole()`

```php
unassignRole($proj_id, $env_id, $role_assignment_remove)
```

Unassign Role

Unassigns a user role within a tenant.  The tenant defines the scope of the assignment. In other words, the role is effective only within the tenant.  If the role is not actually assigned, will return 404.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RoleAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$role_assignment_remove = new \OpenAPI\Client\Model\RoleAssignmentRemove(); // \OpenAPI\Client\Model\RoleAssignmentRemove

try {
    $apiInstance->unassignRole($proj_id, $env_id, $role_assignment_remove);
} catch (Exception $e) {
    echo 'Exception when calling RoleAssignmentsApi->unassignRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **role_assignment_remove** | [**\OpenAPI\Client\Model\RoleAssignmentRemove**](../Model/RoleAssignmentRemove.md)|  | |

### Return type

void (empty response body)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
