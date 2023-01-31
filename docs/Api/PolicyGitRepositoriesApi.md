# OpenAPI\Client\PolicyGitRepositoriesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activatePolicyRepo()**](PolicyGitRepositoriesApi.md#activatePolicyRepo) | **PUT** /v2/projects/{proj_id}/repos/{repo_id}/activate | Activate Policy Repo |
| [**createPolicyRepo()**](PolicyGitRepositoriesApi.md#createPolicyRepo) | **POST** /v2/projects/{proj_id}/repos | Create Policy Repo |
| [**deletePolicyRepo()**](PolicyGitRepositoriesApi.md#deletePolicyRepo) | **DELETE** /v2/projects/{proj_id}/repos/{repo_id} | Delete Policy Repo |
| [**disableActivePolicyRepo()**](PolicyGitRepositoriesApi.md#disableActivePolicyRepo) | **PUT** /v2/projects/{proj_id}/repos/disable | Disable Active Policy Repo |
| [**getActivePolicyRepo()**](PolicyGitRepositoriesApi.md#getActivePolicyRepo) | **GET** /v2/projects/{proj_id}/repos/active | Get Active Policy Repo |
| [**getPolicyRepo()**](PolicyGitRepositoriesApi.md#getPolicyRepo) | **GET** /v2/projects/{proj_id}/repos/{repo_id} | Get Policy Repo |
| [**listPolicyRepos()**](PolicyGitRepositoriesApi.md#listPolicyRepos) | **GET** /v2/projects/{proj_id}/repos | List Policy Repos |


## `activatePolicyRepo()`

```php
activatePolicyRepo($proj_id, $repo_id): \OpenAPI\Client\Model\ProjectRead
```

Activate Policy Repo

Disable the currently active policy repo, this action means to turn off the gitops feature. If there is no active policy repo, this action will do nothing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PolicyGitRepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$repo_id = 'repo_id_example'; // string | Either the unique id of the policy repo, or the URL-friendly key of the policy repo (i.e: the \"slug\").

try {
    $result = $apiInstance->activatePolicyRepo($proj_id, $repo_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyGitRepositoriesApi->activatePolicyRepo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **repo_id** | **string**| Either the unique id of the policy repo, or the URL-friendly key of the policy repo (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\ProjectRead**](../Model/ProjectRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPolicyRepo()`

```php
createPolicyRepo($proj_id, $policy_repo_create): \OpenAPI\Client\Model\PolicyRepoRead
```

Create Policy Repo

Creates a new policy repository configuration under a given project. The given repository is created with status 'pending', it will be changed and used as the 'active' repository for the policy only after a successful attempt to use it. The repository main branch must be present in the remote.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PolicyGitRepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$policy_repo_create = new \OpenAPI\Client\Model\PolicyRepoCreate(); // \OpenAPI\Client\Model\PolicyRepoCreate

try {
    $result = $apiInstance->createPolicyRepo($proj_id, $policy_repo_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyGitRepositoriesApi->createPolicyRepo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **policy_repo_create** | [**\OpenAPI\Client\Model\PolicyRepoCreate**](../Model/PolicyRepoCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PolicyRepoRead**](../Model/PolicyRepoRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePolicyRepo()`

```php
deletePolicyRepo($proj_id, $repo_id)
```

Delete Policy Repo

Deletes an environment and all its related data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PolicyGitRepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$repo_id = 'repo_id_example'; // string | Either the unique id of the policy repo, or the URL-friendly key of the policy repo (i.e: the \"slug\").

try {
    $apiInstance->deletePolicyRepo($proj_id, $repo_id);
} catch (Exception $e) {
    echo 'Exception when calling PolicyGitRepositoriesApi->deletePolicyRepo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **repo_id** | **string**| Either the unique id of the policy repo, or the URL-friendly key of the policy repo (i.e: the \&quot;slug\&quot;). | |

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

## `disableActivePolicyRepo()`

```php
disableActivePolicyRepo($proj_id): \OpenAPI\Client\Model\ProjectRead
```

Disable Active Policy Repo

Disable the currently active policy repo, this action means to turn off the gitops feature. If there is no active policy repo, this action will do nothing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PolicyGitRepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").

try {
    $result = $apiInstance->disableActivePolicyRepo($proj_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyGitRepositoriesApi->disableActivePolicyRepo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\ProjectRead**](../Model/ProjectRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getActivePolicyRepo()`

```php
getActivePolicyRepo($proj_id): \OpenAPI\Client\Model\PolicyRepoRead
```

Get Active Policy Repo

Gets the currently active repository, if such repository exists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PolicyGitRepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").

try {
    $result = $apiInstance->getActivePolicyRepo($proj_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyGitRepositoriesApi->getActivePolicyRepo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\PolicyRepoRead**](../Model/PolicyRepoRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPolicyRepo()`

```php
getPolicyRepo($proj_id, $repo_id): \OpenAPI\Client\Model\PolicyRepoRead
```

Get Policy Repo

Gets a single repository matching the given repo_id, if such repository exists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PolicyGitRepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$repo_id = 'repo_id_example'; // string | Either the unique id of the policy repo, or the URL-friendly key of the policy repo (i.e: the \"slug\").

try {
    $result = $apiInstance->getPolicyRepo($proj_id, $repo_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyGitRepositoriesApi->getPolicyRepo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **repo_id** | **string**| Either the unique id of the policy repo, or the URL-friendly key of the policy repo (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\PolicyRepoRead**](../Model/PolicyRepoRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPolicyRepos()`

```php
listPolicyRepos($proj_id, $page, $per_page): \OpenAPI\Client\Model\PolicyRepoRead[]
```

List Policy Repos

Lists all the policy repositories under a given project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PolicyGitRepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listPolicyRepos($proj_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyGitRepositoriesApi->listPolicyRepos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\PolicyRepoRead[]**](../Model/PolicyRepoRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
