# OpenAPI\Client\AuditLogsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDetailedAuditLog()**](AuditLogsApi.md#getDetailedAuditLog) | **GET** /v2/pdps/{proj_id}/{env_id}/audit_logs/{log_id} | Get detailed audit log |
| [**listAuditLogs()**](AuditLogsApi.md#listAuditLogs) | **GET** /v2/pdps/{proj_id}/{env_id}/audit_logs | List Audit Logs |


## `getDetailedAuditLog()`

```php
getDetailedAuditLog($proj_id, $env_id, $log_id): \OpenAPI\Client\Model\DetailedAuditLog
```

Get detailed audit log

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuditLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$log_id = 'log_id_example'; // string | The unique id of the audit log

try {
    $result = $apiInstance->getDetailedAuditLog($proj_id, $env_id, $log_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditLogsApi->getDetailedAuditLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **log_id** | **string**| The unique id of the audit log | |

### Return type

[**\OpenAPI\Client\Model\DetailedAuditLog**](../Model/DetailedAuditLog.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAuditLogs()`

```php
listAuditLogs($proj_id, $env_id, $pdp_id, $users, $decision, $resources, $tenant, $action, $timestamp_from, $timestamp_to, $page, $per_page): \OpenAPI\Client\Model\PaginatedResultAuditLog
```

List Audit Logs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuditLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$pdp_id = 'pdp_id_example'; // string | Filter by pdp config id
$users = array('users_example'); // string[] | List of user keys or emails to filter by
$decision = True; // bool | Filter by decision result
$resources = array('resources_example'); // string[] | Filter by resources
$tenant = 'tenant_example'; // string | Filter by tenant
$action = 'action_example'; // string | Filter by action
$timestamp_from = 56; // int | Filter by timestamp from
$timestamp_to = 56; // int | Filter by timestamp to
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listAuditLogs($proj_id, $env_id, $pdp_id, $users, $decision, $resources, $tenant, $action, $timestamp_from, $timestamp_to, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditLogsApi->listAuditLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **pdp_id** | **string**| Filter by pdp config id | [optional] |
| **users** | [**string[]**](../Model/string.md)| List of user keys or emails to filter by | [optional] |
| **decision** | **bool**| Filter by decision result | [optional] |
| **resources** | [**string[]**](../Model/string.md)| Filter by resources | [optional] |
| **tenant** | **string**| Filter by tenant | [optional] |
| **action** | **string**| Filter by action | [optional] |
| **timestamp_from** | **int**| Filter by timestamp from | [optional] |
| **timestamp_to** | **int**| Filter by timestamp to | [optional] |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\PaginatedResultAuditLog**](../Model/PaginatedResultAuditLog.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
