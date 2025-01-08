# OpenAPI\Client\ChartsApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**chartsGetCCStatement()**](ChartsApi.md#chartsGetCCStatement) | **GET** /api/v1/clients/{clientId}/charts/statement/costcenters | Gets accouht cost cetner balance witin given period  periods: year, quarter, month, day  maximum periods count - 12 |
| [**chartsGetFormulaList()**](ChartsApi.md#chartsGetFormulaList) | **GET** /api/v1/clients/{clientId}/charts/formula/templates | Gets list of MIS formulas trees of client |
| [**chartsGetFormulaStatement()**](ChartsApi.md#chartsGetFormulaStatement) | **GET** /api/v1/clients/{clientId}/charts/formula | Gets period values of given formula  periods: year, quarter, month, day  maximum periods count - 12 |
| [**chartsGetStatement()**](ChartsApi.md#chartsGetStatement) | **GET** /api/v1/clients/{clientId}/charts/statement | Gets list of COA balances within given period  periods: year, quarter, month, day  maximum periods count - 12 |
| [**chartsValidateFormula()**](ChartsApi.md#chartsValidateFormula) | **GET** /api/v1/clients/{clientId}/charts/formula/validate | Validates given formula for errors |


## `chartsGetCCStatement()`

```php
chartsGetCCStatement($account_code, $cost_center_code, $date, $period_name, $periods_count, $client_id): \OpenAPI\Client\Model\Statement
```

Gets accouht cost cetner balance witin given period  periods: year, quarter, month, day  maximum periods count - 12

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_code = 'account_code_example'; // string
$cost_center_code = 'cost_center_code_example'; // string
$date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$period_name = 'period_name_example'; // string
$periods_count = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->chartsGetCCStatement($account_code, $cost_center_code, $date, $period_name, $periods_count, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->chartsGetCCStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_code** | **string**|  | |
| **cost_center_code** | **string**|  | |
| **date** | **\DateTime**|  | |
| **period_name** | **string**|  | |
| **periods_count** | **int**|  | |
| **client_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Statement**](../Model/Statement.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chartsGetFormulaList()`

```php
chartsGetFormulaList($client_id): \OpenAPI\Client\Model\MisFormulaTree[]
```

Gets list of MIS formulas trees of client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->chartsGetFormulaList($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->chartsGetFormulaList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\MisFormulaTree[]**](../Model/MisFormulaTree.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chartsGetFormulaStatement()`

```php
chartsGetFormulaStatement($formula, $date, $period_name, $periods_count, $client_id): \OpenAPI\Client\Model\FormulaStatement
```

Gets period values of given formula  periods: year, quarter, month, day  maximum periods count - 12

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$formula = 'formula_example'; // string
$date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$period_name = 'period_name_example'; // string
$periods_count = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->chartsGetFormulaStatement($formula, $date, $period_name, $periods_count, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->chartsGetFormulaStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **formula** | **string**|  | |
| **date** | **\DateTime**|  | |
| **period_name** | **string**|  | |
| **periods_count** | **int**|  | |
| **client_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\FormulaStatement**](../Model/FormulaStatement.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chartsGetStatement()`

```php
chartsGetStatement($code, $date, $period_name, $periods_count, $client_id): \OpenAPI\Client\Model\Statement
```

Gets list of COA balances within given period  periods: year, quarter, month, day  maximum periods count - 12

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string
$date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$period_name = 'period_name_example'; // string
$periods_count = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->chartsGetStatement($code, $date, $period_name, $periods_count, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->chartsGetStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | |
| **date** | **\DateTime**|  | |
| **period_name** | **string**|  | |
| **periods_count** | **int**|  | |
| **client_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Statement**](../Model/Statement.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chartsValidateFormula()`

```php
chartsValidateFormula($formula, $client_id): string
```

Validates given formula for errors

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$formula = 'formula_example'; // string
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->chartsValidateFormula($formula, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->chartsValidateFormula: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **formula** | **string**|  | |
| **client_id** | **string**|  | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
