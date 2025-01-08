# OpenAPI\Client\UserGroupApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**userGroupGet()**](UserGroupApi.md#userGroupGet) | **GET** /api/v1/usergroups | Retreives list of user accounts |
| [**userGroupGetDetail()**](UserGroupApi.md#userGroupGetDetail) | **GET** /api/v1/usergroups/permissions | Retreives list of user accounts |


## `userGroupGet()`

```php
userGroupGet(): \OpenAPI\Client\Model\UserGroup[]
```

Retreives list of user accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->userGroupGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupApi->userGroupGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\UserGroup[]**](../Model/UserGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userGroupGetDetail()`

```php
userGroupGetDetail($name): \OpenAPI\Client\Model\UserGroup
```

Retreives list of user accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string

try {
    $result = $apiInstance->userGroupGetDetail($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupApi->userGroupGetDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\UserGroup**](../Model/UserGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
