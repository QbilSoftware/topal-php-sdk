# OpenAPI\Client\COAViewsApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cOAViewsDelete()**](COAViewsApi.md#cOAViewsDelete) | **DELETE** /api/v1/clients/{clientId}/coaViews/{id} | Delete coaView |
| [**cOAViewsGet()**](COAViewsApi.md#cOAViewsGet) | **GET** /api/v1/clients/{clientId}/coaviews | get list of coaViews |
| [**cOAViewsGet_0()**](COAViewsApi.md#cOAViewsGet_0) | **GET** /api/v1/clients/{clientId}/coaviews/{id} | Get coaView by id |
| [**cOAViewsPost()**](COAViewsApi.md#cOAViewsPost) | **POST** /api/v1/clients/{clientId}/coaViews | Save coaView |


## `cOAViewsDelete()`

```php
cOAViewsDelete($id, $client_id): object
```

Delete coaView

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\COAViewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->cOAViewsDelete($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling COAViewsApi->cOAViewsDelete: ', $e->getMessage(), PHP_EOL;
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

## `cOAViewsGet()`

```php
cOAViewsGet($client_id): \OpenAPI\Client\Model\COAView[]
```

get list of coaViews

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\COAViewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->cOAViewsGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling COAViewsApi->cOAViewsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\COAView[]**](../Model/COAView.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cOAViewsGet_0()`

```php
cOAViewsGet_0($id, $client_id): \OpenAPI\Client\Model\COAView
```

Get coaView by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\COAViewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->cOAViewsGet_0($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling COAViewsApi->cOAViewsGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **client_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\COAView**](../Model/COAView.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cOAViewsPost()`

```php
cOAViewsPost($client_id, $coa_view): \OpenAPI\Client\Model\COAView
```

Save coaView

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\COAViewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$coa_view = new \OpenAPI\Client\Model\COAView(); // \OpenAPI\Client\Model\COAView

try {
    $result = $apiInstance->cOAViewsPost($client_id, $coa_view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling COAViewsApi->cOAViewsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **coa_view** | [**\OpenAPI\Client\Model\COAView**](../Model/COAView.md)|  | |

### Return type

[**\OpenAPI\Client\Model\COAView**](../Model/COAView.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
