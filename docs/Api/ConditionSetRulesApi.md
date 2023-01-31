# OpenAPI\Client\ConditionSetRulesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignSetPermissions()**](ConditionSetRulesApi.md#assignSetPermissions) | **POST** /v2/facts/{proj_id}/{env_id}/set_rules | Assign Set Permissions |
| [**listSetPermissions()**](ConditionSetRulesApi.md#listSetPermissions) | **GET** /v2/facts/{proj_id}/{env_id}/set_rules | List Set Permissions |
| [**unassignSetPermissions()**](ConditionSetRulesApi.md#unassignSetPermissions) | **DELETE** /v2/facts/{proj_id}/{env_id}/set_rules | Unassign Set Permissions |


## `assignSetPermissions()`

```php
assignSetPermissions($proj_id, $env_id, $condition_set_rule_create): \OpenAPI\Client\Model\ConditionSetRuleRead[]
```

Assign Set Permissions

Grant permissions to a user set *on* a resource set.  If the permission is already granted, it is skipped.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConditionSetRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$condition_set_rule_create = new \OpenAPI\Client\Model\ConditionSetRuleCreate(); // \OpenAPI\Client\Model\ConditionSetRuleCreate

try {
    $result = $apiInstance->assignSetPermissions($proj_id, $env_id, $condition_set_rule_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConditionSetRulesApi->assignSetPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **condition_set_rule_create** | [**\OpenAPI\Client\Model\ConditionSetRuleCreate**](../Model/ConditionSetRuleCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConditionSetRuleRead[]**](../Model/ConditionSetRuleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSetPermissions()`

```php
listSetPermissions($proj_id, $env_id, $user_set, $permission, $resource_set, $page, $per_page): \OpenAPI\Client\Model\ConditionSetRuleRead[]
```

List Set Permissions

Lists the condition set rules matching the filter. - If the `user_set` filter is present, will only return the permissions set of that user set. - If the `permission` filter is present, will only return the permissions sets that equals to the queried permission. - If the `resource_set` filter is present, will only return the permissions set of that resource set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConditionSetRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$user_set = 'user_set_example'; // string | optional user set filter, will only return rules where the permission is granted to this user set
$permission = 'permission_example'; // string | optional permission filter, will only return condition set rules granting this permission
$resource_set = 'resource_set_example'; // string | optional resource set filter, will only return rules where the permission is granted on this resource set
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listSetPermissions($proj_id, $env_id, $user_set, $permission, $resource_set, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConditionSetRulesApi->listSetPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **user_set** | **string**| optional user set filter, will only return rules where the permission is granted to this user set | [optional] |
| **permission** | **string**| optional permission filter, will only return condition set rules granting this permission | [optional] |
| **resource_set** | **string**| optional resource set filter, will only return rules where the permission is granted on this resource set | [optional] |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\ConditionSetRuleRead[]**](../Model/ConditionSetRuleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unassignSetPermissions()`

```php
unassignSetPermissions($proj_id, $env_id, $condition_set_rule_remove)
```

Unassign Set Permissions

Revokes permissions to a user set *on* a resource set.  If the permission is not granted, it is skipped.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConditionSetRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$condition_set_rule_remove = new \OpenAPI\Client\Model\ConditionSetRuleRemove(); // \OpenAPI\Client\Model\ConditionSetRuleRemove

try {
    $apiInstance->unassignSetPermissions($proj_id, $env_id, $condition_set_rule_remove);
} catch (Exception $e) {
    echo 'Exception when calling ConditionSetRulesApi->unassignSetPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **condition_set_rule_remove** | [**\OpenAPI\Client\Model\ConditionSetRuleRemove**](../Model/ConditionSetRuleRemove.md)|  | |

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
