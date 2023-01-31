# OpenAPI\Client\DefaultApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**dummy()**](DefaultApi.md#dummy) | **GET** /v2/stress/dummy | Dummy |
| [**dummyDb()**](DefaultApi.md#dummyDb) | **GET** /v2/stress/db/dummy | Dummy Db |
| [**getOrganizationV2StressDbOrganizationGet()**](DefaultApi.md#getOrganizationV2StressDbOrganizationGet) | **GET** /v2/stress/db/organization | Get Organization |
| [**getOrganizationWithAuthn()**](DefaultApi.md#getOrganizationWithAuthn) | **GET** /v2/stress/db/organization_auth | Get Organization With Authn |
| [**getOrganizationWithAuthz()**](DefaultApi.md#getOrganizationWithAuthz) | **GET** /v2/stress/db/organization_authz | Get Organization With Authz |


## `dummy()`

```php
dummy(): mixed
```

Dummy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->dummy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->dummy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dummyDb()`

```php
dummyDb(): mixed
```

Dummy Db

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->dummyDb();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->dummyDb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationV2StressDbOrganizationGet()`

```php
getOrganizationV2StressDbOrganizationGet(): \OpenAPI\Client\Model\OrganizationRead
```

Get Organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getOrganizationV2StressDbOrganizationGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOrganizationV2StressDbOrganizationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\OrganizationRead**](../Model/OrganizationRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWithAuthn()`

```php
getOrganizationWithAuthn(): \OpenAPI\Client\Model\OrganizationRead
```

Get Organization With Authn

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOrganizationWithAuthn();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOrganizationWithAuthn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\OrganizationRead**](../Model/OrganizationRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWithAuthz()`

```php
getOrganizationWithAuthz(): \OpenAPI\Client\Model\OrganizationRead
```

Get Organization With Authz

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOrganizationWithAuthz();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOrganizationWithAuthz: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\OrganizationRead**](../Model/OrganizationRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
