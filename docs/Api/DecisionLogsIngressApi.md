# OpenAPI\Client\DecisionLogsIngressApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**insertOpaDecisionLogs()**](DecisionLogsIngressApi.md#insertOpaDecisionLogs) | **POST** /v2/decision-logs/ingress | OPA Decision Logs Ingress |


## `insertOpaDecisionLogs()`

```php
insertOpaDecisionLogs($request_body)
```

OPA Decision Logs Ingress

This ingress endpoint captures OPA decision logs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DecisionLogsIngressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array(new \stdClass); // object[]

try {
    $apiInstance->insertOpaDecisionLogs($request_body);
} catch (Exception $e) {
    echo 'Exception when calling DecisionLogsIngressApi->insertOpaDecisionLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**object[]**](../Model/object.md)|  | |

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
