# OpenAPI\Client\AuthenticationApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**devLogin()**](AuthenticationApi.md#devLogin) | **POST** /v2/auth/devlogin | (DEV MODE) Login |
| [**elementsLoginAs()**](AuthenticationApi.md#elementsLoginAs) | **POST** /v2/auth/elements_login_as | Elements Login As |
| [**login()**](AuthenticationApi.md#login) | **POST** /v2/auth/login | Login |
| [**loginElements()**](AuthenticationApi.md#loginElements) | **GET** /v2/auth/login_elements | Login Elements |
| [**logoutGet()**](AuthenticationApi.md#logoutGet) | **GET** /v2/auth/logout | Logout Get |
| [**logoutPost()**](AuthenticationApi.md#logoutPost) | **POST** /v2/auth/logout | Logout Post |
| [**me()**](AuthenticationApi.md#me) | **GET** /v2/auth/me | Me |
| [**switchOrganization()**](AuthenticationApi.md#switchOrganization) | **POST** /v2/auth/switch_org/{org_id} | Switch Organization |


## `devLogin()`

```php
devLogin($dev_login)
```

(DEV MODE) Login

The dev-login endpoints allows a developer inside permit.io to log in with an email address.  THIS IS ONLY AVAILABLE IN DEV MODE.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dev_login = new \OpenAPI\Client\Model\DevLogin(); // \OpenAPI\Client\Model\DevLogin

try {
    $apiInstance->devLogin($dev_login);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->devLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dev_login** | [**\OpenAPI\Client\Model\DevLogin**](../Model/DevLogin.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `elementsLoginAs()`

```php
elementsLoginAs($user_login_request_input): \OpenAPI\Client\Model\EmbeddedLoginRequestOutput
```

Elements Login As

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_login_request_input = new \OpenAPI\Client\Model\UserLoginRequestInput(); // \OpenAPI\Client\Model\UserLoginRequestInput

try {
    $result = $apiInstance->elementsLoginAs($user_login_request_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->elementsLoginAs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_login_request_input** | [**\OpenAPI\Client\Model\UserLoginRequestInput**](../Model/UserLoginRequestInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EmbeddedLoginRequestOutput**](../Model/EmbeddedLoginRequestOutput.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `login()`

```php
login($invite_code): \OpenAPI\Client\Model\LoginResult
```

Login

The login endpoint allows the frontend app to exchange a user JWT with a user session. The user session is stored on an httpOnly + secure cookie.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invite_code = 'invite_code_example'; // string | An optional invite code to an existing organization. If the invite code is provided and is valid, the member will gain access to that organization.

try {
    $result = $apiInstance->login($invite_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->login: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invite_code** | **string**| An optional invite code to an existing organization. If the invite code is provided and is valid, the member will gain access to that organization. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoginResult**](../Model/LoginResult.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loginElements()`

```php
loginElements($token): \OpenAPI\Client\Model\LoginResult
```

Login Elements

The login endpoint allows the frontend app to exchange a user JWT with a user session. The user session is stored on an httpOnly + secure cookie.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->loginElements($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->loginElements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\LoginResult**](../Model/LoginResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logoutGet()`

```php
logoutGet()
```

Logout Get

The logout endpoint deletes the session cookie of a logged in user and invalidates cached VCs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->logoutGet();
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->logoutGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logoutPost()`

```php
logoutPost()
```

Logout Post

The logout endpoint deletes the session cookie of a logged in user and invalidates cached VCs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->logoutPost();
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->logoutPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `me()`

```php
me(): \OpenAPI\Client\Model\AuthnMeRead
```

Me

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->me();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->me: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AuthnMeRead**](../Model/AuthnMeRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `switchOrganization()`

```php
switchOrganization($org_id): \OpenAPI\Client\Model\LoginResult
```

Switch Organization

Allows the user to switch his active organization (manipulates the user's login session).  This route will return a new login cookie to the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | the organization id the user wishes to switch to as the active org on the session

try {
    $result = $apiInstance->switchOrganization($org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->switchOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| the organization id the user wishes to switch to as the active org on the session | |

### Return type

[**\OpenAPI\Client\Model\LoginResult**](../Model/LoginResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
