# OpenAPI\Client\FiscalYearApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fiscalYearDelete()**](FiscalYearApi.md#fiscalYearDelete) | **DELETE** /api/v1/clients/{clientId}/fiscalyears/{id} | delete fiscal year by id |
| [**fiscalYearGet()**](FiscalYearApi.md#fiscalYearGet) | **GET** /api/v1/clients/{clientId}/fiscalyears | Retreives list of fiscal years |
| [**fiscalYearGet_0()**](FiscalYearApi.md#fiscalYearGet_0) | **GET** /api/v1/clients/{clientId}/fiscalyears/{id} | get fiscal year by id |
| [**fiscalYearPost()**](FiscalYearApi.md#fiscalYearPost) | **POST** /api/v1/clients/{clientId}/fiscalyears | saves fiscal year |


## `fiscalYearDelete()`

```php
fiscalYearDelete($id, $client_id): object
```

delete fiscal year by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalYearApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->fiscalYearDelete($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearApi->fiscalYearDelete: ', $e->getMessage(), PHP_EOL;
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

## `fiscalYearGet()`

```php
fiscalYearGet($client_id): \OpenAPI\Client\Model\FiscalYear[]
```

Retreives list of fiscal years

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalYearApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->fiscalYearGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearApi->fiscalYearGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\FiscalYear[]**](../Model/FiscalYear.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fiscalYearGet_0()`

```php
fiscalYearGet_0($id, $client_id): \OpenAPI\Client\Model\FiscalYear
```

get fiscal year by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalYearApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->fiscalYearGet_0($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearApi->fiscalYearGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **client_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\FiscalYear**](../Model/FiscalYear.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fiscalYearPost()`

```php
fiscalYearPost($client_id, $fiscal_year): \OpenAPI\Client\Model\FiscalYear
```

saves fiscal year

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FiscalYearApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year = new \OpenAPI\Client\Model\FiscalYear(); // \OpenAPI\Client\Model\FiscalYear

try {
    $result = $apiInstance->fiscalYearPost($client_id, $fiscal_year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearApi->fiscalYearPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **fiscal_year** | [**\OpenAPI\Client\Model\FiscalYear**](../Model/FiscalYear.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FiscalYear**](../Model/FiscalYear.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
