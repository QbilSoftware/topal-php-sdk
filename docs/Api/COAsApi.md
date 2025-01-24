# OpenAPI\Client\COAsApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cOAsDelete()**](COAsApi.md#cOAsDelete) | **DELETE** /api/v1/clients/{clientId}/coas/{id} | Delete coa |
| [**cOAsGet()**](COAsApi.md#cOAsGet) | **GET** /api/v1/clients/{clientId}/coas | get list of coas |
| [**cOAsGet_0()**](COAsApi.md#cOAsGet_0) | **GET** /api/v1/clients/{clientId}/coas/{id} | gets coa by id |
| [**cOAsPost()**](COAsApi.md#cOAsPost) | **POST** /api/v1/clients/{clientId}/coas | Save coa |


## `cOAsDelete()`

```php
cOAsDelete($id, $client_id): object
```

Delete coa

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\COAsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->cOAsDelete($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling COAsApi->cOAsDelete: ', $e->getMessage(), PHP_EOL;
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

## `cOAsGet()`

```php
cOAsGet($client_id): \Topal\Client\Model\COA[]
```

get list of coas

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\COAsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->cOAsGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling COAsApi->cOAsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\COA[]**](../Model/COA.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cOAsGet_0()`

```php
cOAsGet_0($id, $client_id): \Topal\Client\Model\COA
```

gets coa by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\COAsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->cOAsGet_0($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling COAsApi->cOAsGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **client_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\COA**](../Model/COA.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cOAsPost()`

```php
cOAsPost($client_id, $coa): \Topal\Client\Model\COA
```

Save coa

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\COAsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$coa = new \Topal\Client\Model\COA(); // \Topal\Client\Model\COA

try {
    $result = $apiInstance->cOAsPost($client_id, $coa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling COAsApi->cOAsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **coa** | [**\Topal\Client\Model\COA**](../Model/COA.md)|  | |

### Return type

[**\Topal\Client\Model\COA**](../Model/COA.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
