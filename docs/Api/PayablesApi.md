# OpenAPI\Client\PayablesApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**payablesDelete()**](PayablesApi.md#payablesDelete) | **DELETE** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/invoices/{id} | Delete payables invoice by id |
| [**payablesDeleteDocument()**](PayablesApi.md#payablesDeleteDocument) | **DELETE** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/{id}/document | delete document |
| [**payablesDeleteManualPayment()**](PayablesApi.md#payablesDeleteManualPayment) | **DELETE** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/manualpayments/{id} | delete manualPayment by id |
| [**payablesDownloadDocument()**](PayablesApi.md#payablesDownloadDocument) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/{id}/document | download document |
| [**payablesGet()**](PayablesApi.md#payablesGet) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/invoices | Retreives list of payables invoices |
| [**payablesGetAll()**](PayablesApi.md#payablesGetAll) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/invoices/all | Retreives list of payables invoices |
| [**payablesGetAllPartyInvoices()**](PayablesApi.md#payablesGetAllPartyInvoices) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/parties/{id}/invoices/all | Retreives list of party all payables invoices |
| [**payablesGetByFreeInvoiceNum()**](PayablesApi.md#payablesGetByFreeInvoiceNum) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/invoices/byfreeinvoicenum/{freeInvoiceNum} | Get payables invoice by freeInvoiceNum, return error if there is more than one invoice with this number |
| [**payablesGetByFreeInvoicesNum()**](PayablesApi.md#payablesGetByFreeInvoicesNum) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/invoices/byfreeinvoicenum/{freeInvoiceNum}/all | Get list of payables invoices by freeInvoiceNum |
| [**payablesGetByInvoiceNum()**](PayablesApi.md#payablesGetByInvoiceNum) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/invoices/byinvoicenum/{invoiceNum} | Get payables invoice by invoiceNum |
| [**payablesGetInvoicesByPeriod()**](PayablesApi.md#payablesGetInvoicesByPeriod) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/invoices/byperiod | Retreives list of payables invoices by period |
| [**payablesGetManualPayment()**](PayablesApi.md#payablesGetManualPayment) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/manualpayments/{id} | get manualPayment by id |
| [**payablesGetManualPayments()**](PayablesApi.md#payablesGetManualPayments) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/manualpayments | Retreives list of Manual Payments |
| [**payablesGetOpen()**](PayablesApi.md#payablesGetOpen) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/invoices/open | Retreives list of payables invoices |
| [**payablesGetOpenInvoicesByPeriod()**](PayablesApi.md#payablesGetOpenInvoicesByPeriod) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/invoices/open/byperiod | Retreives list of payables invoices by period |
| [**payablesGetOpenPartyInvoices()**](PayablesApi.md#payablesGetOpenPartyInvoices) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/parties/{id}/invoices/open | Retreives list of party open payables invoices |
| [**payablesGetPartyInvoiceByFreeInvoiceNum()**](PayablesApi.md#payablesGetPartyInvoiceByFreeInvoiceNum) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/parties/{partyID}/invoices/byfreeinvoicenum/{freeInvoiceNum} | Get payables invoice by party ID and freeInvoiceNum, return error if there is more than one invoice with this number |
| [**payablesGetPartyInvoices()**](PayablesApi.md#payablesGetPartyInvoices) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/parties/{id}/invoices | Retreives list of party payables invoices |
| [**payablesGetPartyInvoicesByFreeInvoiceNum()**](PayablesApi.md#payablesGetPartyInvoicesByFreeInvoiceNum) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/parties/{partyID}/invoices/byfreeinvoicenum/{freeInvoiceNum}/all | Get list of payables invoices by partyFID freeInvoiceNum |
| [**payablesGetPendingDocuments()**](PayablesApi.md#payablesGetPendingDocuments) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/documents/pending | get not procssed documents from dms |
| [**payablesGet_0()**](PayablesApi.md#payablesGet_0) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/invoices/{id} | Get payables invoice by id |
| [**payablesLinkDocument()**](PayablesApi.md#payablesLinkDocument) | **POST** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/{id}/document | link document |
| [**payablesNew()**](PayablesApi.md#payablesNew) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/invoices/new | creates new invoice |
| [**payablesPayInvoice()**](PayablesApi.md#payablesPayInvoice) | **POST** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/invoices/{id}/pay | pay invoice by id |
| [**payablesPost()**](PayablesApi.md#payablesPost) | **POST** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/invoices | Save payables invouce |
| [**payablesPostFromQrBill()**](PayablesApi.md#payablesPostFromQrBill) | **POST** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/invoices/qrbill | Creates payables invoice out of QrBill |
| [**payablesPostManualPayment()**](PayablesApi.md#payablesPostManualPayment) | **POST** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/manualpayments | saves manualPayment |
| [**payablesUpload()**](PayablesApi.md#payablesUpload) | **POST** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/payables/documents | create invoice from qrBill and save document to DMS |


## `payablesDelete()`

```php
payablesDelete($id, $client_id, $fiscal_year_id): object
```

Delete payables invoice by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesDelete($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesDelete: ', $e->getMessage(), PHP_EOL;
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

## `payablesDeleteDocument()`

```php
payablesDeleteDocument($id, $client_id, $fiscal_year_id): object
```

delete document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesDeleteDocument($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesDeleteDocument: ', $e->getMessage(), PHP_EOL;
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

## `payablesDeleteManualPayment()`

```php
payablesDeleteManualPayment($id, $client_id, $fiscal_year_id): object
```

delete manualPayment by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesDeleteManualPayment($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesDeleteManualPayment: ', $e->getMessage(), PHP_EOL;
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

## `payablesDownloadDocument()`

```php
payablesDownloadDocument($id, $client_id, $fiscal_year_id): object
```

download document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesDownloadDocument($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesDownloadDocument: ', $e->getMessage(), PHP_EOL;
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

## `payablesGet()`

```php
payablesGet($only_open, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice[]
```

Retreives list of payables invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$only_open = True; // bool
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesGet($only_open, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesGet: ', $e->getMessage(), PHP_EOL;
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

## `payablesGetAll()`

```php
payablesGetAll($client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice[]
```

Retreives list of payables invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesGetAll($client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesGetAll: ', $e->getMessage(), PHP_EOL;
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

## `payablesGetAllPartyInvoices()`

```php
payablesGetAllPartyInvoices($id, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice[]
```

Retreives list of party all payables invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesGetAllPartyInvoices($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesGetAllPartyInvoices: ', $e->getMessage(), PHP_EOL;
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

## `payablesGetByFreeInvoiceNum()`

```php
payablesGetByFreeInvoiceNum($free_invoice_num, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice
```

Get payables invoice by freeInvoiceNum, return error if there is more than one invoice with this number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$free_invoice_num = 'free_invoice_num_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesGetByFreeInvoiceNum($free_invoice_num, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesGetByFreeInvoiceNum: ', $e->getMessage(), PHP_EOL;
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

## `payablesGetByFreeInvoicesNum()`

```php
payablesGetByFreeInvoicesNum($free_invoice_num, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice[]
```

Get list of payables invoices by freeInvoiceNum

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$free_invoice_num = 'free_invoice_num_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesGetByFreeInvoicesNum($free_invoice_num, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesGetByFreeInvoicesNum: ', $e->getMessage(), PHP_EOL;
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

## `payablesGetByInvoiceNum()`

```php
payablesGetByInvoiceNum($invoice_num, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice
```

Get payables invoice by invoiceNum

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_num = 56; // int
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesGetByInvoiceNum($invoice_num, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesGetByInvoiceNum: ', $e->getMessage(), PHP_EOL;
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

## `payablesGetInvoicesByPeriod()`

```php
payablesGetInvoicesByPeriod($date_from, $date_until, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice[]
```

Retreives list of payables invoices by period

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$date_until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesGetInvoicesByPeriod($date_from, $date_until, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesGetInvoicesByPeriod: ', $e->getMessage(), PHP_EOL;
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

## `payablesGetManualPayment()`

```php
payablesGetManualPayment($id, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Payment
```

get manualPayment by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesGetManualPayment($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesGetManualPayment: ', $e->getMessage(), PHP_EOL;
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

## `payablesGetManualPayments()`

```php
payablesGetManualPayments($client_id, $fiscal_year_id): \OpenAPI\Client\Model\Payment[]
```

Retreives list of Manual Payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesGetManualPayments($client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesGetManualPayments: ', $e->getMessage(), PHP_EOL;
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

## `payablesGetOpen()`

```php
payablesGetOpen($client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice[]
```

Retreives list of payables invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesGetOpen($client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesGetOpen: ', $e->getMessage(), PHP_EOL;
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

## `payablesGetOpenInvoicesByPeriod()`

```php
payablesGetOpenInvoicesByPeriod($date_from, $date_until, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice[]
```

Retreives list of payables invoices by period

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$date_until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesGetOpenInvoicesByPeriod($date_from, $date_until, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesGetOpenInvoicesByPeriod: ', $e->getMessage(), PHP_EOL;
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

## `payablesGetOpenPartyInvoices()`

```php
payablesGetOpenPartyInvoices($id, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice[]
```

Retreives list of party open payables invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesGetOpenPartyInvoices($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesGetOpenPartyInvoices: ', $e->getMessage(), PHP_EOL;
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

## `payablesGetPartyInvoiceByFreeInvoiceNum()`

```php
payablesGetPartyInvoiceByFreeInvoiceNum($party_id, $free_invoice_num, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice
```

Get payables invoice by party ID and freeInvoiceNum, return error if there is more than one invoice with this number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$party_id = 56; // int
$free_invoice_num = 'free_invoice_num_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesGetPartyInvoiceByFreeInvoiceNum($party_id, $free_invoice_num, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesGetPartyInvoiceByFreeInvoiceNum: ', $e->getMessage(), PHP_EOL;
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

## `payablesGetPartyInvoices()`

```php
payablesGetPartyInvoices($id, $only_open, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice[]
```

Retreives list of party payables invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$only_open = True; // bool
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesGetPartyInvoices($id, $only_open, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesGetPartyInvoices: ', $e->getMessage(), PHP_EOL;
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

## `payablesGetPartyInvoicesByFreeInvoiceNum()`

```php
payablesGetPartyInvoicesByFreeInvoiceNum($party_id, $free_invoice_num, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice[]
```

Get list of payables invoices by partyFID freeInvoiceNum

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$party_id = 56; // int
$free_invoice_num = 'free_invoice_num_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesGetPartyInvoicesByFreeInvoiceNum($party_id, $free_invoice_num, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesGetPartyInvoicesByFreeInvoiceNum: ', $e->getMessage(), PHP_EOL;
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

## `payablesGetPendingDocuments()`

```php
payablesGetPendingDocuments($client_id, $fiscal_year_id): \OpenAPI\Client\Model\Document[]
```

get not procssed documents from dms

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesGetPendingDocuments($client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesGetPendingDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Document[]**](../Model/Document.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payablesGet_0()`

```php
payablesGet_0($id, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice
```

Get payables invoice by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesGet_0($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesGet_0: ', $e->getMessage(), PHP_EOL;
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

## `payablesLinkDocument()`

```php
payablesLinkDocument($id, $client_id, $fiscal_year_id): object
```

link document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesLinkDocument($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesLinkDocument: ', $e->getMessage(), PHP_EOL;
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

## `payablesNew()`

```php
payablesNew($client_id, $fiscal_year_id): \OpenAPI\Client\Model\Invoice
```

creates new invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesNew($client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesNew: ', $e->getMessage(), PHP_EOL;
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

## `payablesPayInvoice()`

```php
payablesPayInvoice($id, $date, $client_id, $fiscal_year_id): \OpenAPI\Client\Model\Payment
```

pay invoice by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesPayInvoice($id, $date, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesPayInvoice: ', $e->getMessage(), PHP_EOL;
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

## `payablesPost()`

```php
payablesPost($client_id, $fiscal_year_id, $invoice): \OpenAPI\Client\Model\Invoice
```

Save payables invouce

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string
$invoice = new \OpenAPI\Client\Model\Invoice(); // \OpenAPI\Client\Model\Invoice

try {
    $result = $apiInstance->payablesPost($client_id, $fiscal_year_id, $invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesPost: ', $e->getMessage(), PHP_EOL;
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

## `payablesPostFromQrBill()`

```php
payablesPostFromQrBill($client_id, $fiscal_year_id, $qr_bill): \OpenAPI\Client\Model\Invoice
```

Creates payables invoice out of QrBill

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string
$qr_bill = new \OpenAPI\Client\Model\QrBill(); // \OpenAPI\Client\Model\QrBill

try {
    $result = $apiInstance->payablesPostFromQrBill($client_id, $fiscal_year_id, $qr_bill);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesPostFromQrBill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |
| **qr_bill** | [**\OpenAPI\Client\Model\QrBill**](../Model/QrBill.md)|  | |

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

## `payablesPostManualPayment()`

```php
payablesPostManualPayment($client_id, $fiscal_year_id, $payment): \OpenAPI\Client\Model\Payment
```

saves manualPayment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string
$payment = new \OpenAPI\Client\Model\Payment(); // \OpenAPI\Client\Model\Payment

try {
    $result = $apiInstance->payablesPostManualPayment($client_id, $fiscal_year_id, $payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesPostManualPayment: ', $e->getMessage(), PHP_EOL;
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

## `payablesUpload()`

```php
payablesUpload($client_id, $fiscal_year_id): object
```

create invoice from qrBill and save document to DMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->payablesUpload($client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->payablesUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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
