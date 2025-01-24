# OpenAPI\Client\PayTypeApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**payTypeGet()**](PayTypeApi.md#payTypeGet) | **GET** /api/v1/clients/{clientId}/paytypes | Retreives list of payTypes |
| [**payTypeGetByCode()**](PayTypeApi.md#payTypeGetByCode) | **GET** /api/v1/clients/{clientId}/paytypes/byname/{name} | Get payType by name |
| [**payTypeGet_0()**](PayTypeApi.md#payTypeGet_0) | **GET** /api/v1/clients/{clientId}/paytypes/{id} | Get payType by id |


## `payTypeGet()`

```php
payTypeGet($client_id): \Topal\Client\Model\PayType[]
```

Retreives list of payTypes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\PayTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->payTypeGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayTypeApi->payTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\PayType[]**](../Model/PayType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payTypeGetByCode()`

```php
payTypeGetByCode($name, $client_id): \Topal\Client\Model\PayType
```

Get payType by name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\PayTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->payTypeGetByCode($name, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayTypeApi->payTypeGetByCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
| **client_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\PayType**](../Model/PayType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payTypeGet_0()`

```php
payTypeGet_0($id, $client_id): \Topal\Client\Model\PayType
```

Get payType by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\PayTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->payTypeGet_0($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayTypeApi->payTypeGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **client_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\PayType**](../Model/PayType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
