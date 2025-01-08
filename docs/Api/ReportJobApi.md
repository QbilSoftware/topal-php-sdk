# OpenAPI\Client\ReportJobApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**reportJobGet()**](ReportJobApi.md#reportJobGet) | **GET** /api/v1/clients/{clientId}/reportjobs | Retreives list of report jobs |
| [**reportJobGet_0()**](ReportJobApi.md#reportJobGet_0) | **GET** /api/v1/clients/{clientId}/reportjobs/{id} | get report job by id |


## `reportJobGet()`

```php
reportJobGet($client_id): \OpenAPI\Client\Model\ReportJob[]
```

Retreives list of report jobs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReportJobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->reportJobGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportJobApi->reportJobGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ReportJob[]**](../Model/ReportJob.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportJobGet_0()`

```php
reportJobGet_0($id, $client_id): \OpenAPI\Client\Model\ReportJob
```

get report job by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReportJobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->reportJobGet_0($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportJobApi->reportJobGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **client_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ReportJob**](../Model/ReportJob.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
