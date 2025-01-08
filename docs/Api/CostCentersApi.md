# OpenAPI\Client\CostCentersApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**costCentersGet()**](CostCentersApi.md#costCentersGet) | **GET** /api/v1/clients/{clientId}/costcenters | gets list of costCenters |
| [**costCentersGetByCode()**](CostCentersApi.md#costCentersGetByCode) | **GET** /api/v1/clients/{clientId}/costcenters/byCode/{code} | Get costCenter by code |
| [**costCentersGet_0()**](CostCentersApi.md#costCentersGet_0) | **GET** /api/v1/clients/{clientId}/costcenters/{id} | Get costCenter by id |
| [**costCentersPost()**](CostCentersApi.md#costCentersPost) | **POST** /api/v1/clients/{clientId}/costcenters | Save costCenter |


## `costCentersGet()`

```php
costCentersGet($client_id): \OpenAPI\Client\Model\CostCenter[]
```

gets list of costCenters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CostCentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->costCentersGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentersApi->costCentersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\CostCenter[]**](../Model/CostCenter.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `costCentersGetByCode()`

```php
costCentersGetByCode($code, $client_id): \OpenAPI\Client\Model\CostCenter
```

Get costCenter by code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CostCentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->costCentersGetByCode($code, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentersApi->costCentersGetByCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | |
| **client_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\CostCenter**](../Model/CostCenter.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `costCentersGet_0()`

```php
costCentersGet_0($id, $client_id): \OpenAPI\Client\Model\CostCenter
```

Get costCenter by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CostCentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->costCentersGet_0($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentersApi->costCentersGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **client_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\CostCenter**](../Model/CostCenter.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `costCentersPost()`

```php
costCentersPost($client_id, $cost_center): \OpenAPI\Client\Model\CostCenter
```

Save costCenter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CostCentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$cost_center = new \OpenAPI\Client\Model\CostCenter(); // \OpenAPI\Client\Model\CostCenter

try {
    $result = $apiInstance->costCentersPost($client_id, $cost_center);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentersApi->costCentersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **cost_center** | [**\OpenAPI\Client\Model\CostCenter**](../Model/CostCenter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CostCenter**](../Model/CostCenter.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
