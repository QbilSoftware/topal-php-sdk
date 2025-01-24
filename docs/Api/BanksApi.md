# OpenAPI\Client\BanksApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**banksDelete()**](BanksApi.md#banksDelete) | **DELETE** /api/v1/clients/{clientId}/banks/{id} | Delete bank |
| [**banksGet()**](BanksApi.md#banksGet) | **GET** /api/v1/clients/{clientId}/banks | Retreives list of banks |
| [**banksGetByCode()**](BanksApi.md#banksGetByCode) | **GET** /api/v1/clients/{clientId}/banks/bycode/{code} | Get bank by code |
| [**banksGet_0()**](BanksApi.md#banksGet_0) | **GET** /api/v1/clients/{clientId}/banks/{id} | Get bank by id |
| [**banksPost()**](BanksApi.md#banksPost) | **POST** /api/v1/clients/{clientId}/banks | Save bank |


## `banksDelete()`

```php
banksDelete($id, $client_id): object
```

Delete bank

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\BanksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->banksDelete($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BanksApi->banksDelete: ', $e->getMessage(), PHP_EOL;
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

## `banksGet()`

```php
banksGet($client_id): \Topal\Client\Model\Bank[]
```

Retreives list of banks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\BanksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->banksGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BanksApi->banksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\Bank[]**](../Model/Bank.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `banksGetByCode()`

```php
banksGetByCode($code, $client_id): \Topal\Client\Model\Bank
```

Get bank by code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\BanksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->banksGetByCode($code, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BanksApi->banksGetByCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | |
| **client_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\Bank**](../Model/Bank.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `banksGet_0()`

```php
banksGet_0($id, $client_id): \Topal\Client\Model\Bank
```

Get bank by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\BanksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->banksGet_0($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BanksApi->banksGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **client_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\Bank**](../Model/Bank.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `banksPost()`

```php
banksPost($client_id, $bank): \Topal\Client\Model\Bank
```

Save bank

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\BanksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$bank = new \Topal\Client\Model\Bank(); // \Topal\Client\Model\Bank

try {
    $result = $apiInstance->banksPost($client_id, $bank);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BanksApi->banksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **bank** | [**\Topal\Client\Model\Bank**](../Model/Bank.md)|  | |

### Return type

[**\Topal\Client\Model\Bank**](../Model/Bank.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
