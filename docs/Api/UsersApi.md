# OpenAPI\Client\UsersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignRoleToUser()**](UsersApi.md#assignRoleToUser) | **POST** /v2/facts/{proj_id}/{env_id}/users/{user_id}/roles | Assign Role To User |
| [**createUser()**](UsersApi.md#createUser) | **POST** /v2/facts/{proj_id}/{env_id}/users | Create User |
| [**deleteUser()**](UsersApi.md#deleteUser) | **DELETE** /v2/facts/{proj_id}/{env_id}/users/{user_id} | Delete User |
| [**getUser()**](UsersApi.md#getUser) | **GET** /v2/facts/{proj_id}/{env_id}/users/{user_id} | Get User |
| [**listUsers()**](UsersApi.md#listUsers) | **GET** /v2/facts/{proj_id}/{env_id}/users | List Users |
| [**replaceUser()**](UsersApi.md#replaceUser) | **PUT** /v2/facts/{proj_id}/{env_id}/users/{user_id} | Replace User |
| [**unassignRoleFromUser()**](UsersApi.md#unassignRoleFromUser) | **DELETE** /v2/facts/{proj_id}/{env_id}/users/{user_id}/roles | Unassign Role From User |
| [**updateUser()**](UsersApi.md#updateUser) | **PATCH** /v2/facts/{proj_id}/{env_id}/users/{user_id} | Update User |


## `assignRoleToUser()`

```php
assignRoleToUser($proj_id, $env_id, $user_id, $user_role_create): \OpenAPI\Client\Model\RoleAssignmentRead
```

Assign Role To User

Assigns a role to the user within the tenant.  The tenant defines the scope of the assignment. In other words, the role is effective only within the tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$user_id = 'user_id_example'; // string | Either the unique id of the user, or the URL-friendly key of the user (i.e: the \"slug\").
$user_role_create = new \OpenAPI\Client\Model\UserRoleCreate(); // \OpenAPI\Client\Model\UserRoleCreate

try {
    $result = $apiInstance->assignRoleToUser($proj_id, $env_id, $user_id, $user_role_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->assignRoleToUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **user_id** | **string**| Either the unique id of the user, or the URL-friendly key of the user (i.e: the \&quot;slug\&quot;). | |
| **user_role_create** | [**\OpenAPI\Client\Model\UserRoleCreate**](../Model/UserRoleCreate.md)|  | |

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

## `createUser()`

```php
createUser($proj_id, $env_id, $user_create): \OpenAPI\Client\Model\UserRead
```

Create User

Creates a new user inside the Permit.io system, from that point forward you may run permission checks on that user.  If the user is already created: will return 200 instead of 201, and will return the existing user object in the response body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$user_create = new \OpenAPI\Client\Model\UserCreate(); // \OpenAPI\Client\Model\UserCreate

try {
    $result = $apiInstance->createUser($proj_id, $env_id, $user_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->createUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **user_create** | [**\OpenAPI\Client\Model\UserCreate**](../Model/UserCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UserRead**](../Model/UserRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUser()`

```php
deleteUser($proj_id, $env_id, $user_id)
```

Delete User

Deletes the user and all its related data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$user_id = 'user_id_example'; // string | Either the unique id of the user, or the URL-friendly key of the user (i.e: the \"slug\").

try {
    $apiInstance->deleteUser($proj_id, $env_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **user_id** | **string**| Either the unique id of the user, or the URL-friendly key of the user (i.e: the \&quot;slug\&quot;). | |

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

## `getUser()`

```php
getUser($proj_id, $env_id, $user_id): \OpenAPI\Client\Model\UserRead
```

Get User

Gets a user, if such user exists. Otherwise returns 404.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$user_id = 'user_id_example'; // string | Either the unique id of the user, or the URL-friendly key of the user (i.e: the \"slug\").

try {
    $result = $apiInstance->getUser($proj_id, $env_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **user_id** | **string**| Either the unique id of the user, or the URL-friendly key of the user (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\UserRead**](../Model/UserRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUsers()`

```php
listUsers($proj_id, $env_id, $search, $page, $per_page): \OpenAPI\Client\Model\PaginatedResultUserRead
```

List Users

Lists all the users defined within an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$search = 'search_example'; // string | Text search for the email field
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listUsers($proj_id, $env_id, $search, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **search** | **string**| Text search for the email field | [optional] |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\PaginatedResultUserRead**](../Model/PaginatedResultUserRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replaceUser()`

```php
replaceUser($proj_id, $env_id, $user_id, $user_create): \OpenAPI\Client\Model\UserRead
```

Replace User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$user_id = 'user_id_example'; // string | Either the unique id of the user, or the URL-friendly key of the user (i.e: the \"slug\").
$user_create = new \OpenAPI\Client\Model\UserCreate(); // \OpenAPI\Client\Model\UserCreate

try {
    $result = $apiInstance->replaceUser($proj_id, $env_id, $user_id, $user_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->replaceUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **user_id** | **string**| Either the unique id of the user, or the URL-friendly key of the user (i.e: the \&quot;slug\&quot;). | |
| **user_create** | [**\OpenAPI\Client\Model\UserCreate**](../Model/UserCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UserRead**](../Model/UserRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unassignRoleFromUser()`

```php
unassignRoleFromUser($proj_id, $env_id, $user_id, $user_role_remove): \OpenAPI\Client\Model\UserRead
```

Unassign Role From User

Unassigns the role from the user within the tenant.  The tenant defines the scope of the assignment. In other words, the role is effective only within the tenant.  If the role is not actually assigned, will return 404.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$user_id = 'user_id_example'; // string | Either the unique id of the user, or the URL-friendly key of the user (i.e: the \"slug\").
$user_role_remove = new \OpenAPI\Client\Model\UserRoleRemove(); // \OpenAPI\Client\Model\UserRoleRemove

try {
    $result = $apiInstance->unassignRoleFromUser($proj_id, $env_id, $user_id, $user_role_remove);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->unassignRoleFromUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **user_id** | **string**| Either the unique id of the user, or the URL-friendly key of the user (i.e: the \&quot;slug\&quot;). | |
| **user_role_remove** | [**\OpenAPI\Client\Model\UserRoleRemove**](../Model/UserRoleRemove.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UserRead**](../Model/UserRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUser()`

```php
updateUser($proj_id, $env_id, $user_id, $user_update): \OpenAPI\Client\Model\UserRead
```

Update User

Partially updates the user definition. Fields that will be provided will be completely overwritten.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$user_id = 'user_id_example'; // string | Either the unique id of the user, or the URL-friendly key of the user (i.e: the \"slug\").
$user_update = new \OpenAPI\Client\Model\UserUpdate(); // \OpenAPI\Client\Model\UserUpdate

try {
    $result = $apiInstance->updateUser($proj_id, $env_id, $user_id, $user_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **user_id** | **string**| Either the unique id of the user, or the URL-friendly key of the user (i.e: the \&quot;slug\&quot;). | |
| **user_update** | [**\OpenAPI\Client\Model\UserUpdate**](../Model/UserUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UserRead**](../Model/UserRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
