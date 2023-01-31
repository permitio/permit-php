# OpenAPI\Client\OrganizationsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelInvite()**](OrganizationsApi.md#cancelInvite) | **DELETE** /v2/orgs/{org_id}/invites/{invite_id} | Cancel Invite |
| [**createOrganization()**](OrganizationsApi.md#createOrganization) | **POST** /v2/orgs | Create Organization |
| [**deleteOrganization()**](OrganizationsApi.md#deleteOrganization) | **DELETE** /v2/orgs/{org_id} | Delete Organization |
| [**getActiveOrganization()**](OrganizationsApi.md#getActiveOrganization) | **GET** /v2/orgs/active/org | Get Active Organization |
| [**getOrganization()**](OrganizationsApi.md#getOrganization) | **GET** /v2/orgs/{org_id} | Get Organization |
| [**inviteMembersToOrganization()**](OrganizationsApi.md#inviteMembersToOrganization) | **POST** /v2/orgs/{org_id}/invites | Invite Members To Organization |
| [**listOrganizationInvites()**](OrganizationsApi.md#listOrganizationInvites) | **GET** /v2/orgs/{org_id}/invites | List Organization Invites |
| [**listOrganizations()**](OrganizationsApi.md#listOrganizations) | **GET** /v2/orgs | List Organizations |
| [**updateOrganization()**](OrganizationsApi.md#updateOrganization) | **PATCH** /v2/orgs/{org_id} | Update Organization |


## `cancelInvite()`

```php
cancelInvite($org_id, $invite_id)
```

Cancel Invite

Cancels an invite that was sent to a new member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \"slug\").
$invite_id = 'invite_id_example'; // string | Id of the invite to cancel

try {
    $apiInstance->cancelInvite($org_id, $invite_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->cancelInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \&quot;slug\&quot;). | |
| **invite_id** | **string**| Id of the invite to cancel | |

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

## `createOrganization()`

```php
createOrganization($organization_create): \OpenAPI\Client\Model\OrganizationReadWithAPIKey
```

Create Organization

Creates a new organization that will be owned by the authenticated actor (i.e: human team member or api key).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_create = new \OpenAPI\Client\Model\OrganizationCreate(); // \OpenAPI\Client\Model\OrganizationCreate

try {
    $result = $apiInstance->createOrganization($organization_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->createOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_create** | [**\OpenAPI\Client\Model\OrganizationCreate**](../Model/OrganizationCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrganizationReadWithAPIKey**](../Model/OrganizationReadWithAPIKey.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrganization()`

```php
deleteOrganization($org_id)
```

Delete Organization

Deletes an organization (Permit.io account) and all its related data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \"slug\").

try {
    $apiInstance->deleteOrganization($org_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \&quot;slug\&quot;). | |

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

## `getActiveOrganization()`

```php
getActiveOrganization(): \OpenAPI\Client\Model\OrganizationRead
```

Get Active Organization

Gets a single organization (Permit.io account) matching the given org_id, if such org exists and can be accessed by the authenticated actor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getActiveOrganization();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getActiveOrganization: ', $e->getMessage(), PHP_EOL;
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

## `getOrganization()`

```php
getOrganization($org_id): \OpenAPI\Client\Model\OrganizationRead
```

Get Organization

Gets a single organization (Permit.io account) matching the given org_id, if such org exists and can be accessed by the authenticated actor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \"slug\").

try {
    $result = $apiInstance->getOrganization($org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \&quot;slug\&quot;). | |

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

## `inviteMembersToOrganization()`

```php
inviteMembersToOrganization($org_id, $invite_create, $inviter_name, $inviter_email): \OpenAPI\Client\Model\MultiInviteResult
```

Invite Members To Organization

Invite new members into the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \"slug\").
$invite_create = array(new \OpenAPI\Client\Model\InviteCreate()); // \OpenAPI\Client\Model\InviteCreate[]
$inviter_name = 'inviter_name_example'; // string
$inviter_email = 'inviter_email_example'; // string

try {
    $result = $apiInstance->inviteMembersToOrganization($org_id, $invite_create, $inviter_name, $inviter_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->inviteMembersToOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \&quot;slug\&quot;). | |
| **invite_create** | [**\OpenAPI\Client\Model\InviteCreate[]**](../Model/InviteCreate.md)|  | |
| **inviter_name** | **string**|  | [optional] |
| **inviter_email** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MultiInviteResult**](../Model/MultiInviteResult.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrganizationInvites()`

```php
listOrganizationInvites($org_id, $page, $per_page): \OpenAPI\Client\Model\InviteRead[]
```

List Organization Invites

Lists pending organization invites

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \"slug\").
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listOrganizationInvites($org_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->listOrganizationInvites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \&quot;slug\&quot;). | |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\InviteRead[]**](../Model/InviteRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrganizations()`

```php
listOrganizations($page, $per_page): \OpenAPI\Client\Model\OrganizationRead[]
```

List Organizations

Lists all the organizations that can be accessed by the authenticated actor (i.e: human team member or api key).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listOrganizations($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->listOrganizations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\OrganizationRead[]**](../Model/OrganizationRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganization()`

```php
updateOrganization($org_id, $organization_update): \OpenAPI\Client\Model\OrganizationRead
```

Update Organization

Updates the organization's profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \"slug\").
$organization_update = new \OpenAPI\Client\Model\OrganizationUpdate(); // \OpenAPI\Client\Model\OrganizationUpdate

try {
    $result = $apiInstance->updateOrganization($org_id, $organization_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \&quot;slug\&quot;). | |
| **organization_update** | [**\OpenAPI\Client\Model\OrganizationUpdate**](../Model/OrganizationUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrganizationRead**](../Model/OrganizationRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
