# OpenAPI\Client\PayTermApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**payTermDelete()**](PayTermApi.md#payTermDelete) | **DELETE** /api/v1/clients/{clientId}/payTerms/{id} | Delete payTerm |
| [**payTermGet()**](PayTermApi.md#payTermGet) | **GET** /api/v1/clients/{clientId}/payterms | Retreives list of payterms |
| [**payTermGetByCode()**](PayTermApi.md#payTermGetByCode) | **GET** /api/v1/clients/{clientId}/payterms/bycode/{code} | Get payTerm by code |
| [**payTermGet_0()**](PayTermApi.md#payTermGet_0) | **GET** /api/v1/clients/{clientId}/payterms/{id} | Get payTerm by id |
| [**payTermPost()**](PayTermApi.md#payTermPost) | **POST** /api/v1/clients/{clientId}/payTerms | Save payTerm |


## `payTermDelete()`

```php
payTermDelete($id, $client_id): object
```

Delete payTerm

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\PayTermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->payTermDelete($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayTermApi->payTermDelete: ', $e->getMessage(), PHP_EOL;
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

## `payTermGet()`

```php
payTermGet($client_id): \Topal\Client\Model\PayTerm[]
```

Retreives list of payterms

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\PayTermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->payTermGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayTermApi->payTermGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\PayTerm[]**](../Model/PayTerm.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payTermGetByCode()`

```php
payTermGetByCode($code, $client_id): \Topal\Client\Model\PayTerm
```

Get payTerm by code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\PayTermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->payTermGetByCode($code, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayTermApi->payTermGetByCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | |
| **client_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\PayTerm**](../Model/PayTerm.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payTermGet_0()`

```php
payTermGet_0($id, $client_id): \Topal\Client\Model\PayTerm
```

Get payTerm by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\PayTermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->payTermGet_0($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayTermApi->payTermGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **client_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\PayTerm**](../Model/PayTerm.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payTermPost()`

```php
payTermPost($client_id, $pay_term): \Topal\Client\Model\PayTerm
```

Save payTerm

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\PayTermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$pay_term = new \Topal\Client\Model\PayTerm(); // \Topal\Client\Model\PayTerm

try {
    $result = $apiInstance->payTermPost($client_id, $pay_term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayTermApi->payTermPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **pay_term** | [**\Topal\Client\Model\PayTerm**](../Model/PayTerm.md)|  | |

### Return type

[**\Topal\Client\Model\PayTerm**](../Model/PayTerm.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
