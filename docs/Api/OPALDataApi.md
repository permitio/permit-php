# OpenAPI\Client\OPALDataApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllData()**](OPALDataApi.md#getAllData) | **GET** /v2/internal/opal_data/{org_id}/{proj_id}/{env_id} | Get All Data |
| [**getDataForRole()**](OPALDataApi.md#getDataForRole) | **GET** /v2/internal/opal_data/{org_id}/{proj_id}/{env_id}/roles/{role_id} | Get Data For Role |
| [**getDataForSetRule()**](OPALDataApi.md#getDataForSetRule) | **GET** /v2/internal/opal_data/{org_id}/{proj_id}/{env_id}/condition_set_rules/{user_set_id}/{resource_set_id} | Get Data For Set Rule |
| [**getDataForUser()**](OPALDataApi.md#getDataForUser) | **GET** /v2/internal/opal_data/{org_id}/{proj_id}/{env_id}/users/{user_id} | Get Data For User |


## `getAllData()`

```php
getAllData($org_id, $proj_id, $env_id, $__internal_update_cache): \OpenAPI\Client\Model\FullData
```

Get All Data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OPALDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$__internal_update_cache = false; // bool

try {
    $result = $apiInstance->getAllData($org_id, $proj_id, $env_id, $__internal_update_cache);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OPALDataApi->getAllData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **__internal_update_cache** | **bool**|  | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\FullData**](../Model/FullData.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDataForRole()`

```php
getDataForRole($org_id, $proj_id, $env_id, $role_id): \OpenAPI\Client\Model\RoleData
```

Get Data For Role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OPALDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$role_id = 'role_id_example'; // string

try {
    $result = $apiInstance->getDataForRole($org_id, $proj_id, $env_id, $role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OPALDataApi->getDataForRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **role_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\RoleData**](../Model/RoleData.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDataForSetRule()`

```php
getDataForSetRule($org_id, $proj_id, $env_id, $user_set_id, $resource_set_id): array<string,string[]>
```

Get Data For Set Rule

return permission assignment data between user sets and resource sets (i.e: condition set rules data)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OPALDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$user_set_id = 'user_set_id_example'; // string
$resource_set_id = 'resource_set_id_example'; // string

try {
    $result = $apiInstance->getDataForSetRule($org_id, $proj_id, $env_id, $user_set_id, $resource_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OPALDataApi->getDataForSetRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **user_set_id** | **string**|  | |
| **resource_set_id** | **string**|  | |

### Return type

**array<string,string[]>**

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDataForUser()`

```php
getDataForUser($org_id, $proj_id, $env_id, $user_id): \OpenAPI\Client\Model\UserData
```

Get Data For User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OPALDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->getDataForUser($org_id, $proj_id, $env_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OPALDataApi->getDataForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **user_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\UserData**](../Model/UserData.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
