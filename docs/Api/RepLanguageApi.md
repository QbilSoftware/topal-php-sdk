# OpenAPI\Client\RepLanguageApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**repLanguageGet()**](RepLanguageApi.md#repLanguageGet) | **GET** /api/v1/clients/{clientId}/replanguages | Retreives list of report languages |
| [**repLanguageGet_0()**](RepLanguageApi.md#repLanguageGet_0) | **GET** /api/v1/clients/{clientId}/replanguages/{id} | get report language by id |


## `repLanguageGet()`

```php
repLanguageGet($client_id): \Topal\Client\Model\RepLanguage[]
```

Retreives list of report languages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\RepLanguageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->repLanguageGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepLanguageApi->repLanguageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\RepLanguage[]**](../Model/RepLanguage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `repLanguageGet_0()`

```php
repLanguageGet_0($id, $client_id): \Topal\Client\Model\RepLanguage
```

get report language by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\RepLanguageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->repLanguageGet_0($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepLanguageApi->repLanguageGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **client_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\RepLanguage**](../Model/RepLanguage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
