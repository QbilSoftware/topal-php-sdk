# OpenAPI\Client\DocumentsApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**documentsDelete()**](DocumentsApi.md#documentsDelete) | **DELETE** /api/v1/clients/{clientId}/documents | download report |
| [**documentsDownload()**](DocumentsApi.md#documentsDownload) | **GET** /api/v1/clients/{clientId}/documents/download | download report |


## `documentsDelete()`

```php
documentsDelete($id, $client_id): object
```

download report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->documentsDelete($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
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

## `documentsDownload()`

```php
documentsDownload($id, $client_id): object
```

download report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->documentsDownload($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsDownload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
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
