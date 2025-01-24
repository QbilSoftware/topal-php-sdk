# OpenAPI\Client\PartnersApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**partnersGet()**](PartnersApi.md#partnersGet) | **GET** /api/v1/clients/{clientId}/partners | get list of partners |
| [**partnersGet_0()**](PartnersApi.md#partnersGet_0) | **GET** /api/v1/clients/{clientId}/partners/{id} | Get partner by id |


## `partnersGet()`

```php
partnersGet($client_id): \Topal\Client\Model\Partner[]
```

get list of partners

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\PartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->partnersGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\Partner[]**](../Model/Partner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partnersGet_0()`

```php
partnersGet_0($id, $client_id): \Topal\Client\Model\Partner
```

Get partner by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\PartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->partnersGet_0($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **client_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\Partner**](../Model/Partner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
