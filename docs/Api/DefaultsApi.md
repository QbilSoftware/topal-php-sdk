# OpenAPI\Client\DefaultsApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**defaultsGet()**](DefaultsApi.md#defaultsGet) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/defaults | Gets current defaults |


## `defaultsGet()`

```php
defaultsGet($client_id, $fiscal_year_id): \OpenAPI\Client\Model\Defaults
```

Gets current defaults

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->defaultsGet($client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultsApi->defaultsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Defaults**](../Model/Defaults.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
