# OpenAPI\Client\ElementsConfigsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createElementsConfig()**](ElementsConfigsApi.md#createElementsConfig) | **POST** /v2/elements/{proj_id}/{env_id}/config | Create Elements Config |
| [**deleteElementsConfig()**](ElementsConfigsApi.md#deleteElementsConfig) | **DELETE** /v2/elements/{proj_id}/{env_id}/{elements_config_id} | Delete Elements Config |
| [**getElementsConfig()**](ElementsConfigsApi.md#getElementsConfig) | **GET** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id} | Get Elements Config |
| [**getElementsConfigRuntime()**](ElementsConfigsApi.md#getElementsConfigRuntime) | **GET** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/runtime | Get Elements Config Runtime |
| [**getElementsTypeConfig()**](ElementsConfigsApi.md#getElementsTypeConfig) | **GET** /v2/elements/{proj_id}/{env_id}/{element_type} | Get Elements Type Config |
| [**listElementsConfigs()**](ElementsConfigsApi.md#listElementsConfigs) | **GET** /v2/elements/{proj_id}/{env_id}/config | List Elements Configs |
| [**updateElementsConfig()**](ElementsConfigsApi.md#updateElementsConfig) | **PATCH** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id} | Update Elements Config |
| [**updateElementsTypePermissions()**](ElementsConfigsApi.md#updateElementsTypePermissions) | **PATCH** /v2/elements/{proj_id}/{env_id}/{element_type} | Update Elements Type Permissions |


## `createElementsConfig()`

```php
createElementsConfig($proj_id, $env_id, $elements_config_create): \OpenAPI\Client\Model\ElementsConfigRead
```

Create Elements Config

Creates a new elements_config under the active organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElementsConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_config_create = new \OpenAPI\Client\Model\ElementsConfigCreate(); // \OpenAPI\Client\Model\ElementsConfigCreate

try {
    $result = $apiInstance->createElementsConfig($proj_id, $env_id, $elements_config_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementsConfigsApi->createElementsConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_config_create** | [**\OpenAPI\Client\Model\ElementsConfigCreate**](../Model/ElementsConfigCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ElementsConfigRead**](../Model/ElementsConfigRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteElementsConfig()`

```php
deleteElementsConfig($elements_config_id, $proj_id, $env_id)
```

Delete Elements Config

Deletes the elements_config and all its related data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElementsConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").

try {
    $apiInstance->deleteElementsConfig($elements_config_id, $proj_id, $env_id);
} catch (Exception $e) {
    echo 'Exception when calling ElementsConfigsApi->deleteElementsConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |

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

## `getElementsConfig()`

```php
getElementsConfig($proj_id, $env_id, $elements_config_id): \OpenAPI\Client\Model\ElementsConfigRead
```

Get Elements Config

Gets a single elements_config matching the given elements_config_id, if such elements_config exists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElementsConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").

try {
    $result = $apiInstance->getElementsConfig($proj_id, $env_id, $elements_config_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementsConfigsApi->getElementsConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\ElementsConfigRead**](../Model/ElementsConfigRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElementsConfigRuntime()`

```php
getElementsConfigRuntime($proj_id, $env_id, $elements_config_id): \OpenAPI\Client\Model\ElementsConfigRuntimeRead
```

Get Elements Config Runtime

Gets a single elements_config matching the given elements_config_id, if such elements_config exists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElementsConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").

try {
    $result = $apiInstance->getElementsConfigRuntime($proj_id, $env_id, $elements_config_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementsConfigsApi->getElementsConfigRuntime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\ElementsConfigRuntimeRead**](../Model/ElementsConfigRuntimeRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElementsTypeConfig()`

```php
getElementsTypeConfig($proj_id, $env_id, $element_type): \OpenAPI\Client\Model\ElementsEnvTypeRead
```

Get Elements Type Config

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElementsConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$element_type = new \OpenAPI\Client\Model\ElementsType(); // ElementsType | Either the unique id of the elements_type, or the URL-friendly key of the elements_type (i.e: the \"slug\").

try {
    $result = $apiInstance->getElementsTypeConfig($proj_id, $env_id, $element_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementsConfigsApi->getElementsTypeConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **element_type** | [**ElementsType**](../Model/.md)| Either the unique id of the elements_type, or the URL-friendly key of the elements_type (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\ElementsEnvTypeRead**](../Model/ElementsEnvTypeRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listElementsConfigs()`

```php
listElementsConfigs($proj_id, $env_id, $page, $per_page): \OpenAPI\Client\Model\PaginatedResultElementsConfigRead
```

List Elements Configs

Lists all the elements_configs under the active organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElementsConfigsApi(
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
    $result = $apiInstance->listElementsConfigs($proj_id, $env_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementsConfigsApi->listElementsConfigs: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\PaginatedResultElementsConfigRead**](../Model/PaginatedResultElementsConfigRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateElementsConfig()`

```php
updateElementsConfig($elements_config_id, $proj_id, $env_id, $elements_config_update): \OpenAPI\Client\Model\ElementsConfigRead
```

Update Elements Config

Updates the elements_config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElementsConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_config_update = new \OpenAPI\Client\Model\ElementsConfigUpdate(); // \OpenAPI\Client\Model\ElementsConfigUpdate

try {
    $result = $apiInstance->updateElementsConfig($elements_config_id, $proj_id, $env_id, $elements_config_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementsConfigsApi->updateElementsConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_config_update** | [**\OpenAPI\Client\Model\ElementsConfigUpdate**](../Model/ElementsConfigUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ElementsConfigRead**](../Model/ElementsConfigRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateElementsTypePermissions()`

```php
updateElementsTypePermissions($element_type, $proj_id, $env_id, $elements_env_type_update): \OpenAPI\Client\Model\ElementsEnvTypeRead
```

Update Elements Type Permissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElementsConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$element_type = new \OpenAPI\Client\Model\ElementsType(); // ElementsType | Either the unique id of the elements_type, or the URL-friendly key of the elements_type (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_env_type_update = new \OpenAPI\Client\Model\ElementsEnvTypeUpdate(); // \OpenAPI\Client\Model\ElementsEnvTypeUpdate

try {
    $result = $apiInstance->updateElementsTypePermissions($element_type, $proj_id, $env_id, $elements_env_type_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementsConfigsApi->updateElementsTypePermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **element_type** | [**ElementsType**](../Model/.md)| Either the unique id of the elements_type, or the URL-friendly key of the elements_type (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_env_type_update** | [**\OpenAPI\Client\Model\ElementsEnvTypeUpdate**](../Model/ElementsEnvTypeUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ElementsEnvTypeRead**](../Model/ElementsEnvTypeRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
