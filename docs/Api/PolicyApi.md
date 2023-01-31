# OpenAPI\Client\PolicyApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOpalDataSources()**](PolicyApi.md#getOpalDataSources) | **GET** /v2/opal/data/config | Get Opal Data Sources |
| [**getOpalDataSourcesOpalDataConfigGet()**](PolicyApi.md#getOpalDataSourcesOpalDataConfigGet) | **GET** /opal/data/config | Get Opal Data Sources |


## `getOpalDataSources()`

```php
getOpalDataSources($token): \OpenAPI\Client\Model\DataSourceConfig
```

Get Opal Data Sources

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->getOpalDataSources($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyApi->getOpalDataSources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DataSourceConfig**](../Model/DataSourceConfig.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOpalDataSourcesOpalDataConfigGet()`

```php
getOpalDataSourcesOpalDataConfigGet($token): \OpenAPI\Client\Model\DataSourceConfig
```

Get Opal Data Sources

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->getOpalDataSourcesOpalDataConfigGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyApi->getOpalDataSourcesOpalDataConfigGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DataSourceConfig**](../Model/DataSourceConfig.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
