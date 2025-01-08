# OpenAPI\Client\AccountsApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountsGet()**](AccountsApi.md#accountsGet) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/accounts | Gets list of accounts |
| [**accountsGetByCode()**](AccountsApi.md#accountsGetByCode) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/accounts/bycode/{code} | Gets account by code |
| [**accountsGetStatement()**](AccountsApi.md#accountsGetStatement) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/accounts/{id}/statement | get account statement |
| [**accountsGetStatementDataView()**](AccountsApi.md#accountsGetStatementDataView) | **POST** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/accounts/{id}/statement/dataview | get account statement with filtering, sorting and pagination. |
| [**accountsGetSummary()**](AccountsApi.md#accountsGetSummary) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/accounts/{id}/summary | get account summary |
| [**accountsGet_0()**](AccountsApi.md#accountsGet_0) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/accounts/{id} | Gets account by id |


## `accountsGet()`

```php
accountsGet($client_id, $fiscal_year_id): \OpenAPI\Client\Model\Account[]
```

Gets list of accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->accountsGet($client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Account[]**](../Model/Account.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGetByCode()`

```php
accountsGetByCode($code, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Account
```

Gets account by code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->accountsGetByCode($code, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetByCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Account**](../Model/Account.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGetStatement()`

```php
accountsGetStatement($id, $date_from, $date_until, $client_id, $fiscal_year_id, $select_contra_postings): \OpenAPI\Client\Model\BalancePosting[]
```

get account statement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$date_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$date_until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string
$select_contra_postings = True; // bool

try {
    $result = $apiInstance->accountsGetStatement($id, $date_from, $date_until, $client_id, $fiscal_year_id, $select_contra_postings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **date_from** | **\DateTime**|  | |
| **date_until** | **\DateTime**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |
| **select_contra_postings** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BalancePosting[]**](../Model/BalancePosting.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGetStatementDataView()`

```php
accountsGetStatementDataView($id, $date_from, $date_until, $client_id, $fiscal_year_id, $data_view, $select_contra_postings): \OpenAPI\Client\Model\DataViewBalancePosting
```

get account statement with filtering, sorting and pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$date_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$date_until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string
$data_view = new \OpenAPI\Client\Model\DataViewBalancePosting(); // \OpenAPI\Client\Model\DataViewBalancePosting
$select_contra_postings = True; // bool

try {
    $result = $apiInstance->accountsGetStatementDataView($id, $date_from, $date_until, $client_id, $fiscal_year_id, $data_view, $select_contra_postings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetStatementDataView: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **date_from** | **\DateTime**|  | |
| **date_until** | **\DateTime**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |
| **data_view** | [**\OpenAPI\Client\Model\DataViewBalancePosting**](../Model/DataViewBalancePosting.md)|  | |
| **select_contra_postings** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DataViewBalancePosting**](../Model/DataViewBalancePosting.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGetSummary()`

```php
accountsGetSummary($id, $date_from, $date_until, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\AccountSummary
```

get account summary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$date_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$date_until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->accountsGetSummary($id, $date_from, $date_until, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **date_from** | **\DateTime**|  | |
| **date_until** | **\DateTime**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AccountSummary**](../Model/AccountSummary.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGet_0()`

```php
accountsGet_0($id, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Account
```

Gets account by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->accountsGet_0($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Account**](../Model/Account.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
