# OpenAPI\Client\MembersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteOrganizationMember()**](MembersApi.md#deleteOrganizationMember) | **DELETE** /v2/members/{member_id} | Delete Organization Member |
| [**getAuthenticatedMember()**](MembersApi.md#getAuthenticatedMember) | **GET** /v2/members/me | Get the authenticated account member |
| [**getOrganizationMember()**](MembersApi.md#getOrganizationMember) | **GET** /v2/members/{member_id} | Get Organization Member |
| [**listOrganizationMembers()**](MembersApi.md#listOrganizationMembers) | **GET** /v2/members | List Organization Members |
| [**updateOrganizationMember()**](MembersApi.md#updateOrganizationMember) | **PATCH** /v2/members/{member_id} | Update Organization Member |


## `deleteOrganizationMember()`

```php
deleteOrganizationMember($member_id)
```

Delete Organization Member

Deletes an account member matching the given id or email address. The member will be removed from the active account in permit.io.  If the member is the only member in its account (organization), returns 400 (bad request), due to nobody remains with access to the account, meaning deletion of the entire account (org). To completely remove an account, call DELETE `/orgs/{org}`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_id = 'member_id_example'; // string | Either the unique id (UUID) of the account member, or the email address of the account member.

try {
    $apiInstance->deleteOrganizationMember($member_id);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->deleteOrganizationMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_id** | **string**| Either the unique id (UUID) of the account member, or the email address of the account member. | |

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

## `getAuthenticatedMember()`

```php
getAuthenticatedMember(): \OpenAPI\Client\Model\OrgMemberRead
```

Get the authenticated account member

Gets the authenticated account member's details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAuthenticatedMember();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getAuthenticatedMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\OrgMemberRead**](../Model/OrgMemberRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationMember()`

```php
getOrganizationMember($member_id): \OpenAPI\Client\Model\OrgMemberRead
```

Get Organization Member

Gets a single account member by its id or email address. matching the given member, if no such member exists under the current active account (organization), returns 404.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_id = 'member_id_example'; // string | Either the unique id (UUID) of the account member, or the email address of the account member.

try {
    $result = $apiInstance->getOrganizationMember($member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getOrganizationMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_id** | **string**| Either the unique id (UUID) of the account member, or the email address of the account member. | |

### Return type

[**\OpenAPI\Client\Model\OrgMemberRead**](../Model/OrgMemberRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrganizationMembers()`

```php
listOrganizationMembers($page, $per_page): \OpenAPI\Client\Model\OrgMemberRead[]
```

List Organization Members

Lists all the account members that have access to the current active account. The active account/organization is determined by the API Key used or by the authenticated session id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listOrganizationMembers($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->listOrganizationMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\OrgMemberRead[]**](../Model/OrgMemberRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationMember()`

```php
updateOrganizationMember($member_id, $org_member_update): \OpenAPI\Client\Model\OrgMemberRead
```

Update Organization Member

Updates an account member's settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_id = 'member_id_example'; // string | Either the unique id (UUID) of the account member, or the email address of the account member.
$org_member_update = new \OpenAPI\Client\Model\OrgMemberUpdate(); // \OpenAPI\Client\Model\OrgMemberUpdate

try {
    $result = $apiInstance->updateOrganizationMember($member_id, $org_member_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->updateOrganizationMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_id** | **string**| Either the unique id (UUID) of the account member, or the email address of the account member. | |
| **org_member_update** | [**\OpenAPI\Client\Model\OrgMemberUpdate**](../Model/OrgMemberUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrgMemberRead**](../Model/OrgMemberRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
