# OpenAPI\Client\BudgetApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**budgetGet()**](BudgetApi.md#budgetGet) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/budgets | Retreives list of buget |
| [**budgetGet_0()**](BudgetApi.md#budgetGet_0) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/budgets/{id} | Get budget by id |


## `budgetGet()`

```php
budgetGet($client_id, $fiscal_year_id): \OpenAPI\Client\Model\Budget[]
```

Retreives list of buget

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BudgetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->budgetGet($client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BudgetApi->budgetGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Budget[]**](../Model/Budget.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `budgetGet_0()`

```php
budgetGet_0($id, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Budget
```

Get budget by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BudgetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->budgetGet_0($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BudgetApi->budgetGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Budget**](../Model/Budget.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
