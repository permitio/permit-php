# OpenAPI\Client\DecisionLogsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listPdpDecisionLogs()**](DecisionLogsApi.md#listPdpDecisionLogs) | **GET** /v2/pdps/{proj_id}/{env_id}/decision-logs/{pdp_id} | List PDP Decisions |


## `listPdpDecisionLogs()`

```php
listPdpDecisionLogs($proj_id, $env_id, $pdp_id, $users, $approved, $resources, $timestamp_from, $timestamp_to, $page, $per_page): \OpenAPI\Client\Model\PaginatedResultOPADecisionLog
```

List PDP Decisions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DecisionLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$pdp_id = 'pdp_id_example'; // string | The unique id of the pdp
$users = array('users_example'); // string[] | List of user IDs to filter by
$approved = True; // bool | Filter by approved decisions
$resources = array('resources_example'); // string[] | Filter by resources
$timestamp_from = 56; // int | Filter by timestamp from
$timestamp_to = 56; // int | Filter by timestamp to
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listPdpDecisionLogs($proj_id, $env_id, $pdp_id, $users, $approved, $resources, $timestamp_from, $timestamp_to, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionLogsApi->listPdpDecisionLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **pdp_id** | **string**| The unique id of the pdp | |
| **users** | [**string[]**](../Model/string.md)| List of user IDs to filter by | [optional] |
| **approved** | **bool**| Filter by approved decisions | [optional] |
| **resources** | [**string[]**](../Model/string.md)| Filter by resources | [optional] |
| **timestamp_from** | **int**| Filter by timestamp from | [optional] |
| **timestamp_to** | **int**| Filter by timestamp to | [optional] |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\PaginatedResultOPADecisionLog**](../Model/PaginatedResultOPADecisionLog.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
