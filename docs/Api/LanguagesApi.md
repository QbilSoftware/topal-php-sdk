# OpenAPI\Client\LanguagesApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**languagesGet()**](LanguagesApi.md#languagesGet) | **GET** /api/v1/clients/{clientId}/languages | Retreives list of languages |
| [**languagesGetByCode()**](LanguagesApi.md#languagesGetByCode) | **GET** /api/v1/clients/{clientId}/languages/bycode/{code} | Get language by code |
| [**languagesGet_0()**](LanguagesApi.md#languagesGet_0) | **GET** /api/v1/clients/{clientId}/languages/{id} | Get language by id |


## `languagesGet()`

```php
languagesGet($client_id): \OpenAPI\Client\Model\Language[]
```

Retreives list of languages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->languagesGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguagesApi->languagesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Language[]**](../Model/Language.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `languagesGetByCode()`

```php
languagesGetByCode($code, $client_id): \OpenAPI\Client\Model\Language
```

Get language by code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->languagesGetByCode($code, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguagesApi->languagesGetByCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | |
| **client_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Language**](../Model/Language.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `languagesGet_0()`

```php
languagesGet_0($id, $client_id): \OpenAPI\Client\Model\Language
```

Get language by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->languagesGet_0($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguagesApi->languagesGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **client_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Language**](../Model/Language.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
