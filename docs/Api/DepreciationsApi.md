# OpenAPI\Client\DepreciationsApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**depreciationsGet()**](DepreciationsApi.md#depreciationsGet) | **GET** /api/v1/clients/{clientId}/depreciations | gets list of depreciations |
| [**depreciationsGet_0()**](DepreciationsApi.md#depreciationsGet_0) | **GET** /api/v1/clients/{clientId}/depreciations/{id} | Get depreciation by id |


## `depreciationsGet()`

```php
depreciationsGet($client_id): \Topal\Client\Model\Depreciation[]
```

gets list of depreciations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\DepreciationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->depreciationsGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepreciationsApi->depreciationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\Depreciation[]**](../Model/Depreciation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `depreciationsGet_0()`

```php
depreciationsGet_0($id, $client_id): \Topal\Client\Model\Depreciation
```

Get depreciation by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\DepreciationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->depreciationsGet_0($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepreciationsApi->depreciationsGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **client_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\Depreciation**](../Model/Depreciation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
