# OpenAPI\Client\TransactionsApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**transactionsCreatePosting()**](TransactionsApi.md#transactionsCreatePosting) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/posting | create posting based on optinal parameters |
| [**transactionsDelete()**](TransactionsApi.md#transactionsDelete) | **DELETE** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/transactions/{id} | delete transaction |
| [**transactionsDeleteDocument()**](TransactionsApi.md#transactionsDeleteDocument) | **DELETE** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/transactions/{id}/document | delete document |
| [**transactionsDownloadDocument()**](TransactionsApi.md#transactionsDownloadDocument) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/transactions/{id}/document | download document |
| [**transactionsGet()**](TransactionsApi.md#transactionsGet) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/transactions/{id} | get transaction by id |
| [**transactionsGetByDocNum()**](TransactionsApi.md#transactionsGetByDocNum) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/transactions/bydocnum/{docNum} | get transaction by docNum |
| [**transactionsGetPendingDocuments()**](TransactionsApi.md#transactionsGetPendingDocuments) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/transactions/documents/pending | get not procssed documents from dms |
| [**transactionsGetVatPosting()**](TransactionsApi.md#transactionsGetVatPosting) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/vatPosting | create posting with calculated vat amounts |
| [**transactionsGet_0()**](TransactionsApi.md#transactionsGet_0) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/transactions | get all transactions within fiscal year |
| [**transactionsLinkDocument()**](TransactionsApi.md#transactionsLinkDocument) | **POST** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/transactions/{id}/document | link document |
| [**transactionsNew()**](TransactionsApi.md#transactionsNew) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/transactions/new/{transactionType} | creates new transaction of given type |
| [**transactionsPost()**](TransactionsApi.md#transactionsPost) | **POST** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/transactions | saves transaction |
| [**transactionsUpload()**](TransactionsApi.md#transactionsUpload) | **POST** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/transactions/documents | save  document to DMS as unrecognized transaction |


## `transactionsCreatePosting()`

```php
transactionsCreatePosting($client_id, $fiscal_year_id, $date, $account_code, $amount, $fc_amount, $exchange_rate, $vat_code, $is_inclusive): \Topal\Client\Model\Posting
```

create posting based on optinal parameters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string
$date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$account_code = 'account_code_example'; // string
$amount = 3.4; // float
$fc_amount = 3.4; // float
$exchange_rate = 3.4; // float
$vat_code = 'vat_code_example'; // string
$is_inclusive = True; // bool

try {
    $result = $apiInstance->transactionsCreatePosting($client_id, $fiscal_year_id, $date, $account_code, $amount, $fc_amount, $exchange_rate, $vat_code, $is_inclusive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->transactionsCreatePosting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |
| **date** | **\DateTime**|  | [optional] |
| **account_code** | **string**|  | [optional] |
| **amount** | **float**|  | [optional] |
| **fc_amount** | **float**|  | [optional] |
| **exchange_rate** | **float**|  | [optional] |
| **vat_code** | **string**|  | [optional] |
| **is_inclusive** | **bool**|  | [optional] |

### Return type

[**\Topal\Client\Model\Posting**](../Model/Posting.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionsDelete()`

```php
transactionsDelete($id, $client_id, $fiscal_year_id, $delete_doc): object
```

delete transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string
$delete_doc = True; // bool | when not set and transaction has linked document return error

try {
    $result = $apiInstance->transactionsDelete($id, $client_id, $fiscal_year_id, $delete_doc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->transactionsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |
| **delete_doc** | **bool**| when not set and transaction has linked document return error | [optional] |

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

## `transactionsDeleteDocument()`

```php
transactionsDeleteDocument($id, $client_id, $fiscal_year_id): object
```

delete document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->transactionsDeleteDocument($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->transactionsDeleteDocument: ', $e->getMessage(), PHP_EOL;
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

## `transactionsDownloadDocument()`

```php
transactionsDownloadDocument($id, $client_id, $fiscal_year_id): object
```

download document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->transactionsDownloadDocument($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->transactionsDownloadDocument: ', $e->getMessage(), PHP_EOL;
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

## `transactionsGet()`

```php
transactionsGet($id, $client_id, $fiscal_year_id): \Topal\Client\Model\Transaction
```

get transaction by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->transactionsGet($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->transactionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionsGetByDocNum()`

```php
transactionsGetByDocNum($doc_num, $client_id, $fiscal_year_id): \Topal\Client\Model\Transaction
```

get transaction by docNum

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$doc_num = 56; // int
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->transactionsGetByDocNum($doc_num, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->transactionsGetByDocNum: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **doc_num** | **int**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionsGetPendingDocuments()`

```php
transactionsGetPendingDocuments($client_id, $fiscal_year_id): \Topal\Client\Model\Document[]
```

get not procssed documents from dms

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->transactionsGetPendingDocuments($client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->transactionsGetPendingDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\Document[]**](../Model/Document.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionsGetVatPosting()`

```php
transactionsGetVatPosting($vat_code, $gross_amount, $gross_fc_amount, $client_id, $fiscal_year_id, $is_inclusive): \Topal\Client\Model\Posting
```

create posting with calculated vat amounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vat_code = 'vat_code_example'; // string
$gross_amount = 3.4; // float
$gross_fc_amount = 3.4; // float
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string
$is_inclusive = True; // bool

try {
    $result = $apiInstance->transactionsGetVatPosting($vat_code, $gross_amount, $gross_fc_amount, $client_id, $fiscal_year_id, $is_inclusive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->transactionsGetVatPosting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vat_code** | **string**|  | |
| **gross_amount** | **float**|  | |
| **gross_fc_amount** | **float**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |
| **is_inclusive** | **bool**|  | [optional] |

### Return type

[**\Topal\Client\Model\Posting**](../Model/Posting.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionsGet_0()`

```php
transactionsGet_0($client_id, $fiscal_year_id): \Topal\Client\Model\Transaction[]
```

get all transactions within fiscal year

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->transactionsGet_0($client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->transactionsGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\Transaction[]**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionsLinkDocument()`

```php
transactionsLinkDocument($id, $client_id, $fiscal_year_id): object
```

link document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->transactionsLinkDocument($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->transactionsLinkDocument: ', $e->getMessage(), PHP_EOL;
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

## `transactionsNew()`

```php
transactionsNew($transaction_type, $client_id, $fiscal_year_id): \Topal\Client\Model\Transaction
```

creates new transaction of given type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transaction_type = 56; // int
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->transactionsNew($transaction_type, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->transactionsNew: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_type** | **int**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionsPost()`

```php
transactionsPost($client_id, $fiscal_year_id, $transaction): \Topal\Client\Model\Transaction
```

saves transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string
$transaction = new \Topal\Client\Model\Transaction(); // \Topal\Client\Model\Transaction

try {
    $result = $apiInstance->transactionsPost($client_id, $fiscal_year_id, $transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->transactionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |
| **transaction** | [**\Topal\Client\Model\Transaction**](../Model/Transaction.md)|  | |

### Return type

[**\Topal\Client\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionsUpload()`

```php
transactionsUpload($client_id, $fiscal_year_id): object
```

save  document to DMS as unrecognized transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->transactionsUpload($client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->transactionsUpload: ', $e->getMessage(), PHP_EOL;
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
