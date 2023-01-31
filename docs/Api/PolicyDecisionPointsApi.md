# OpenAPI\Client\PolicyDecisionPointsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAuthenticatingPdpConfigValues()**](PolicyDecisionPointsApi.md#getAuthenticatingPdpConfigValues) | **POST** /v2/pdps/me/config | Get connected PDP configuration and push state |
| [**getAuthenticatingPdpConfigValuesLegacy()**](PolicyDecisionPointsApi.md#getAuthenticatingPdpConfigValuesLegacy) | **GET** /v2/pdps/me/config | Get connected PDP configuration |
| [**getPdpConfigValues()**](PolicyDecisionPointsApi.md#getPdpConfigValues) | **GET** /v2/pdps/{proj_id}/{env_id}/configs/{pdp_id}/values | Get PDP configuration |
| [**listPdpConfigs()**](PolicyDecisionPointsApi.md#listPdpConfigs) | **GET** /v2/pdps/{proj_id}/{env_id}/configs | List PDP configurations |
| [**rotatePdpApiKey()**](PolicyDecisionPointsApi.md#rotatePdpApiKey) | **POST** /v2/pdps/{proj_id}/{env_id}/configs/{pdp_id}/rotate-api-key | Rotate PDP API Key |


## `getAuthenticatingPdpConfigValues()`

```php
getAuthenticatingPdpConfigValues($pdp_state_update): \OpenAPI\Client\Model\RemoteConfig
```

Get connected PDP configuration and push state

Gets the configuration values for the currently authenticated PDP container.  The PDP authenticates with an API key scoped to a given Permit.io environment. The system identifies the PDP via its API key and then returns all the configuration values required for the container to run correctly.  The config values returned are considered \"overrides\", meaning they are overriding any default values given to the container by the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PolicyDecisionPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pdp_state_update = new \OpenAPI\Client\Model\PDPStateUpdate(); // \OpenAPI\Client\Model\PDPStateUpdate

try {
    $result = $apiInstance->getAuthenticatingPdpConfigValues($pdp_state_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyDecisionPointsApi->getAuthenticatingPdpConfigValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pdp_state_update** | [**\OpenAPI\Client\Model\PDPStateUpdate**](../Model/PDPStateUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RemoteConfig**](../Model/RemoteConfig.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAuthenticatingPdpConfigValuesLegacy()`

```php
getAuthenticatingPdpConfigValuesLegacy(): \OpenAPI\Client\Model\RemoteConfig
```

Get connected PDP configuration

Gets the configuration values for the currently authenticated PDP container.  The PDP authenticates with an API key scoped to a given Permit.io environment. The system identifies the PDP via its API key and then returns all the configuration values required for the container to run correctly.  The config values returned are considered \"overrides\", meaning they are overriding any default values given to the container by the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PolicyDecisionPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAuthenticatingPdpConfigValuesLegacy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyDecisionPointsApi->getAuthenticatingPdpConfigValuesLegacy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\RemoteConfig**](../Model/RemoteConfig.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPdpConfigValues()`

```php
getPdpConfigValues($proj_id, $env_id, $pdp_id): \OpenAPI\Client\Model\RemoteConfig
```

Get PDP configuration

Gets the configuration values for the PDP container with id `pdp_id`.  The config values returned are considered \"overrides\", meaning they are overriding any default values given to the container by the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PolicyDecisionPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$pdp_id = 'pdp_id_example'; // string | The unique id of the pdp

try {
    $result = $apiInstance->getPdpConfigValues($proj_id, $env_id, $pdp_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyDecisionPointsApi->getPdpConfigValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **pdp_id** | **string**| The unique id of the pdp | |

### Return type

[**\OpenAPI\Client\Model\RemoteConfig**](../Model/RemoteConfig.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPdpConfigs()`

```php
listPdpConfigs($proj_id, $env_id, $page, $per_page): \OpenAPI\Client\Model\PDPConfigRead[]
```

List PDP configurations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PolicyDecisionPointsApi(
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
    $result = $apiInstance->listPdpConfigs($proj_id, $env_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyDecisionPointsApi->listPdpConfigs: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\PDPConfigRead[]**](../Model/PDPConfigRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rotatePdpApiKey()`

```php
rotatePdpApiKey($proj_id, $env_id, $pdp_id): \OpenAPI\Client\Model\PDPConfigRead
```

Rotate PDP API Key

Rotates the API key of the PDP container with id `pdp_id`.  The rotation of the API key revokes the old API key and issues a new API key to the PDP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PolicyDecisionPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$pdp_id = 'pdp_id_example'; // string | The unique id of the pdp

try {
    $result = $apiInstance->rotatePdpApiKey($proj_id, $env_id, $pdp_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyDecisionPointsApi->rotatePdpApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **pdp_id** | **string**| The unique id of the pdp | |

### Return type

[**\OpenAPI\Client\Model\PDPConfigRead**](../Model/PDPConfigRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
