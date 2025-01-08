# OpenAPI\Client\AccountAreasApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountAreasDelete()**](AccountAreasApi.md#accountAreasDelete) | **DELETE** /api/v1/clients/{clientId}/accountAreas/{id} | Delete AccountArea |
| [**accountAreasGet()**](AccountAreasApi.md#accountAreasGet) | **GET** /api/v1/clients/{clientId}/accountareas | get list of accountAreas |
| [**accountAreasGet_0()**](AccountAreasApi.md#accountAreasGet_0) | **GET** /api/v1/clients/{clientId}/accountareas/{id} | Get accountArea by id |
| [**accountAreasPost()**](AccountAreasApi.md#accountAreasPost) | **POST** /api/v1/clients/{clientId}/accountAreas | Save AccountArea |


## `accountAreasDelete()`

```php
accountAreasDelete($id, $client_id): object
```

Delete AccountArea

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountAreasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->accountAreasDelete($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountAreasApi->accountAreasDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **client_id** | **string**|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountAreasGet()`

```php
accountAreasGet($client_id): \OpenAPI\Client\Model\AccountArea[]
```

get list of accountAreas

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountAreasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->accountAreasGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountAreasApi->accountAreasGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AccountArea[]**](../Model/AccountArea.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountAreasGet_0()`

```php
accountAreasGet_0($id, $client_id): \OpenAPI\Client\Model\AccountArea
```

Get accountArea by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountAreasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->accountAreasGet_0($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountAreasApi->accountAreasGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **client_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AccountArea**](../Model/AccountArea.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountAreasPost()`

```php
accountAreasPost($client_id, $account_area): \OpenAPI\Client\Model\AccountArea
```

Save AccountArea

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountAreasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$account_area = new \OpenAPI\Client\Model\AccountArea(); // \OpenAPI\Client\Model\AccountArea

try {
    $result = $apiInstance->accountAreasPost($client_id, $account_area);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountAreasApi->accountAreasPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **account_area** | [**\OpenAPI\Client\Model\AccountArea**](../Model/AccountArea.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AccountArea**](../Model/AccountArea.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
