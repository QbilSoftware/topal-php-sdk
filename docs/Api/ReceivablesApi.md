# OpenAPI\Client\ReceivablesApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**receivablesDelete()**](ReceivablesApi.md#receivablesDelete) | **DELETE** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/invoices/{id} | Delete receivables invoice by id |
| [**receivablesDeleteDocument()**](ReceivablesApi.md#receivablesDeleteDocument) | **DELETE** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/{id}/document | delete document |
| [**receivablesDeleteManualPayment()**](ReceivablesApi.md#receivablesDeleteManualPayment) | **DELETE** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/manualpayments/{id} | delete manualPayment by id |
| [**receivablesDownloadDocument()**](ReceivablesApi.md#receivablesDownloadDocument) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/{id}/document | download document |
| [**receivablesGet()**](ReceivablesApi.md#receivablesGet) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/invoices | Retreives list of receivables invoices |
| [**receivablesGetAll()**](ReceivablesApi.md#receivablesGetAll) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/invoices/all | Retreives list of receivables invoices |
| [**receivablesGetAllPartyInvoices()**](ReceivablesApi.md#receivablesGetAllPartyInvoices) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/parties/{id}/invoices/all | Retreives list of party all receivables invoices |
| [**receivablesGetByFreeInvoiceNum()**](ReceivablesApi.md#receivablesGetByFreeInvoiceNum) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/invoices/byfreeinvoicenum/{freeInvoiceNum} | Get receivables invoice by freeInvoiceNum, return error if there is more than one invoice with this number |
| [**receivablesGetByFreeInvoicesNum()**](ReceivablesApi.md#receivablesGetByFreeInvoicesNum) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/invoices/byfreeinvoicenum/{freeInvoiceNum}/all | Get list of receivables invoices by freeInvoiceNum |
| [**receivablesGetByInvoiceNum()**](ReceivablesApi.md#receivablesGetByInvoiceNum) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/invoices/byinvoicenum/{invoiceNum} | Get receivables invoice by invoiceNum |
| [**receivablesGetInvoicesByPeriod()**](ReceivablesApi.md#receivablesGetInvoicesByPeriod) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/invoices/byperiod | Retreives list of receivables invoices by period |
| [**receivablesGetManualPayment()**](ReceivablesApi.md#receivablesGetManualPayment) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/manualpayments/{id} | get manualPayment by id |
| [**receivablesGetManualPayments()**](ReceivablesApi.md#receivablesGetManualPayments) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/manualpayments | Retreives list of Manual Payments |
| [**receivablesGetOpen()**](ReceivablesApi.md#receivablesGetOpen) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/invoices/open | Retreives list of receivables invoices |
| [**receivablesGetOpenInvoicesByPeriod()**](ReceivablesApi.md#receivablesGetOpenInvoicesByPeriod) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/invoices/open/byperiod | Retreives list of receivables invoices by period |
| [**receivablesGetOpenPartyInvoices()**](ReceivablesApi.md#receivablesGetOpenPartyInvoices) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/parties/{id}/invoices/open | Retreives list of party open receivables invoices |
| [**receivablesGetPartyInvoiceByFreeInvoiceNum()**](ReceivablesApi.md#receivablesGetPartyInvoiceByFreeInvoiceNum) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/parties/{partyID}/invoices/byfreeinvoicenum/{freeInvoiceNum} | Get receivables invoice by party ID and freeInvoiceNum, return error if there is more than one invoice with this number |
| [**receivablesGetPartyInvoices()**](ReceivablesApi.md#receivablesGetPartyInvoices) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/parties/{id}/invoices | Retreives list of party receivables invoices |
| [**receivablesGetPartyInvoicesByFreeInvoiceNum()**](ReceivablesApi.md#receivablesGetPartyInvoicesByFreeInvoiceNum) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/parties/{partyID}/invoices/byfreeinvoicenum/{freeInvoiceNum}/all | Get list of receivables invoices by partyFID freeInvoiceNum |
| [**receivablesGet_0()**](ReceivablesApi.md#receivablesGet_0) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/invoices/{id} | Get receivables invoice by id |
| [**receivablesLinkDocument()**](ReceivablesApi.md#receivablesLinkDocument) | **POST** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/{id}/document | link document |
| [**receivablesNew()**](ReceivablesApi.md#receivablesNew) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/invoices/new | creates new invoice |
| [**receivablesPayInvoice()**](ReceivablesApi.md#receivablesPayInvoice) | **POST** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/invoices/{id}/pay | pay invoice by id |
| [**receivablesPost()**](ReceivablesApi.md#receivablesPost) | **POST** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/invoices | Save receivables invouce |
| [**receivablesPostManualPayment()**](ReceivablesApi.md#receivablesPostManualPayment) | **POST** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/receivables/manualpayments | saves manualPayment |


## `receivablesDelete()`

```php
receivablesDelete($id, $client_id, $fiscal_year_id): object
```

Delete receivables invoice by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->receivablesDelete($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

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

## `receivablesDeleteDocument()`

```php
receivablesDeleteDocument($id, $client_id, $fiscal_year_id): object
```

delete document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->receivablesDeleteDocument($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesDeleteDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

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

## `receivablesDeleteManualPayment()`

```php
receivablesDeleteManualPayment($id, $client_id, $fiscal_year_id): object
```

delete manualPayment by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->receivablesDeleteManualPayment($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesDeleteManualPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

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

## `receivablesDownloadDocument()`

```php
receivablesDownloadDocument($id, $client_id, $fiscal_year_id): object
```

download document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->receivablesDownloadDocument($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesDownloadDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

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

## `receivablesGet()`

```php
receivablesGet($only_open, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice[]
```

Retreives list of receivables invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$only_open = True; // bool
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->receivablesGet($only_open, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **only_open** | **bool**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Invoice[]**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receivablesGetAll()`

```php
receivablesGetAll($client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice[]
```

Retreives list of receivables invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->receivablesGetAll($client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Invoice[]**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receivablesGetAllPartyInvoices()`

```php
receivablesGetAllPartyInvoices($id, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice[]
```

Retreives list of party all receivables invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->receivablesGetAllPartyInvoices($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesGetAllPartyInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Invoice[]**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receivablesGetByFreeInvoiceNum()`

```php
receivablesGetByFreeInvoiceNum($free_invoice_num, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice
```

Get receivables invoice by freeInvoiceNum, return error if there is more than one invoice with this number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$free_invoice_num = 'free_invoice_num_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->receivablesGetByFreeInvoiceNum($free_invoice_num, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesGetByFreeInvoiceNum: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **free_invoice_num** | **string**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receivablesGetByFreeInvoicesNum()`

```php
receivablesGetByFreeInvoicesNum($free_invoice_num, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice[]
```

Get list of receivables invoices by freeInvoiceNum

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$free_invoice_num = 'free_invoice_num_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->receivablesGetByFreeInvoicesNum($free_invoice_num, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesGetByFreeInvoicesNum: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **free_invoice_num** | **string**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Invoice[]**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receivablesGetByInvoiceNum()`

```php
receivablesGetByInvoiceNum($invoice_num, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice
```

Get receivables invoice by invoiceNum

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_num = 56; // int
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->receivablesGetByInvoiceNum($invoice_num, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesGetByInvoiceNum: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_num** | **int**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receivablesGetInvoicesByPeriod()`

```php
receivablesGetInvoicesByPeriod($date_from, $date_until, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice[]
```

Retreives list of receivables invoices by period

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$date_until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->receivablesGetInvoicesByPeriod($date_from, $date_until, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesGetInvoicesByPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_from** | **\DateTime**|  | |
| **date_until** | **\DateTime**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Invoice[]**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receivablesGetManualPayment()`

```php
receivablesGetManualPayment($id, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Payment
```

get manualPayment by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->receivablesGetManualPayment($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesGetManualPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Payment**](../Model/Payment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receivablesGetManualPayments()`

```php
receivablesGetManualPayments($client_id, $fiscal_year_id): \OpenAPI\Client\Model\Payment[]
```

Retreives list of Manual Payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->receivablesGetManualPayments($client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesGetManualPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Payment[]**](../Model/Payment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receivablesGetOpen()`

```php
receivablesGetOpen($client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice[]
```

Retreives list of receivables invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->receivablesGetOpen($client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesGetOpen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Invoice[]**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receivablesGetOpenInvoicesByPeriod()`

```php
receivablesGetOpenInvoicesByPeriod($date_from, $date_until, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice[]
```

Retreives list of receivables invoices by period

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$date_until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->receivablesGetOpenInvoicesByPeriod($date_from, $date_until, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesGetOpenInvoicesByPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_from** | **\DateTime**|  | |
| **date_until** | **\DateTime**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Invoice[]**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receivablesGetOpenPartyInvoices()`

```php
receivablesGetOpenPartyInvoices($id, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice[]
```

Retreives list of party open receivables invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->receivablesGetOpenPartyInvoices($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesGetOpenPartyInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Invoice[]**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receivablesGetPartyInvoiceByFreeInvoiceNum()`

```php
receivablesGetPartyInvoiceByFreeInvoiceNum($party_id, $free_invoice_num, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice
```

Get receivables invoice by party ID and freeInvoiceNum, return error if there is more than one invoice with this number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$party_id = 56; // int
$free_invoice_num = 'free_invoice_num_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->receivablesGetPartyInvoiceByFreeInvoiceNum($party_id, $free_invoice_num, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesGetPartyInvoiceByFreeInvoiceNum: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **party_id** | **int**|  | |
| **free_invoice_num** | **string**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receivablesGetPartyInvoices()`

```php
receivablesGetPartyInvoices($id, $only_open, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice[]
```

Retreives list of party receivables invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$only_open = True; // bool
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->receivablesGetPartyInvoices($id, $only_open, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesGetPartyInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **only_open** | **bool**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Invoice[]**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receivablesGetPartyInvoicesByFreeInvoiceNum()`

```php
receivablesGetPartyInvoicesByFreeInvoiceNum($party_id, $free_invoice_num, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice[]
```

Get list of receivables invoices by partyFID freeInvoiceNum

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$party_id = 56; // int
$free_invoice_num = 'free_invoice_num_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->receivablesGetPartyInvoicesByFreeInvoiceNum($party_id, $free_invoice_num, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesGetPartyInvoicesByFreeInvoiceNum: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **party_id** | **int**|  | |
| **free_invoice_num** | **string**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Invoice[]**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receivablesGet_0()`

```php
receivablesGet_0($id, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice
```

Get receivables invoice by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->receivablesGet_0($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receivablesLinkDocument()`

```php
receivablesLinkDocument($id, $client_id, $fiscal_year_id): object
```

link document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->receivablesLinkDocument($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesLinkDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

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

## `receivablesNew()`

```php
receivablesNew($client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice
```

creates new invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->receivablesNew($client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesNew: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receivablesPayInvoice()`

```php
receivablesPayInvoice($id, $date, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Payment
```

pay invoice by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->receivablesPayInvoice($id, $date, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesPayInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **date** | **\DateTime**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Payment**](../Model/Payment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receivablesPost()`

```php
receivablesPost($client_id, $fiscal_year_id, $invoice): \OpenAPI\Client\Model\Invoice
```

Save receivables invouce

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string
$invoice = new \OpenAPI\Client\Model\Invoice(); // \OpenAPI\Client\Model\Invoice

try {
    $result = $apiInstance->receivablesPost($client_id, $fiscal_year_id, $invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |
| **invoice** | [**\OpenAPI\Client\Model\Invoice**](../Model/Invoice.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receivablesPostManualPayment()`

```php
receivablesPostManualPayment($client_id, $fiscal_year_id, $payment): \OpenAPI\Client\Model\Payment
```

saves manualPayment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string
$payment = new \OpenAPI\Client\Model\Payment(); // \OpenAPI\Client\Model\Payment

try {
    $result = $apiInstance->receivablesPostManualPayment($client_id, $fiscal_year_id, $payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->receivablesPostManualPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |
| **payment** | [**\OpenAPI\Client\Model\Payment**](../Model/Payment.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Payment**](../Model/Payment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
