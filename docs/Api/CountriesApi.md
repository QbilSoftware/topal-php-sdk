# OpenAPI\Client\CountriesApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countriesDelete()**](CountriesApi.md#countriesDelete) | **DELETE** /api/v1/clients/{clientId}/countries/{id} | Delete country |
| [**countriesGet()**](CountriesApi.md#countriesGet) | **GET** /api/v1/clients/{clientId}/countries | Retreives list of countries |
| [**countriesGetByCode()**](CountriesApi.md#countriesGetByCode) | **GET** /api/v1/clients/{clientId}/countries/bycode/{code} | Get country by code |
| [**countriesGet_0()**](CountriesApi.md#countriesGet_0) | **GET** /api/v1/clients/{clientId}/countries/{id} | Get country by id |
| [**countriesPost()**](CountriesApi.md#countriesPost) | **POST** /api/v1/clients/{clientId}/countries | Save country |


## `countriesDelete()`

```php
countriesDelete($id, $client_id): object
```

Delete country

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\CountriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->countriesDelete($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountriesApi->countriesDelete: ', $e->getMessage(), PHP_EOL;
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

## `countriesGet()`

```php
countriesGet($client_id): \Topal\Client\Model\Country[]
```

Retreives list of countries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\CountriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->countriesGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountriesApi->countriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\Country[]**](../Model/Country.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countriesGetByCode()`

```php
countriesGetByCode($code, $client_id): \Topal\Client\Model\Country
```

Get country by code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\CountriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->countriesGetByCode($code, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountriesApi->countriesGetByCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | |
| **client_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\Country**](../Model/Country.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countriesGet_0()`

```php
countriesGet_0($id, $client_id): \Topal\Client\Model\Country
```

Get country by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\CountriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->countriesGet_0($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountriesApi->countriesGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **client_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\Country**](../Model/Country.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countriesPost()`

```php
countriesPost($client_id, $country): \Topal\Client\Model\Country
```

Save country

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\CountriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$country = new \Topal\Client\Model\Country(); // \Topal\Client\Model\Country

try {
    $result = $apiInstance->countriesPost($client_id, $country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountriesApi->countriesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **country** | [**\Topal\Client\Model\Country**](../Model/Country.md)|  | |

### Return type

[**\Topal\Client\Model\Country**](../Model/Country.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
