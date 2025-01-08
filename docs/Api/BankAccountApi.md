# OpenAPI\Client\BankAccountApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bankAccountDelete()**](BankAccountApi.md#bankAccountDelete) | **DELETE** /api/v1/clients/{clientId}/bankaccounts/{id} | Delete bankAccount |
| [**bankAccountGet()**](BankAccountApi.md#bankAccountGet) | **GET** /api/v1/clients/{clientId}/bankaccounts | Retreives list of bankAccounts |
| [**bankAccountGet_0()**](BankAccountApi.md#bankAccountGet_0) | **GET** /api/v1/clients/{clientId}/bankaccounts/{id} | Get bankAccount by id |
| [**bankAccountGet_1()**](BankAccountApi.md#bankAccountGet_1) | **GET** /api/v1/clients/{clientId}/bankaccounts/byname/{name} | Get bankAccount by name |
| [**bankAccountPost()**](BankAccountApi.md#bankAccountPost) | **POST** /api/v1/clients/{clientId}/bankaccounts | Save bankAccount |


## `bankAccountDelete()`

```php
bankAccountDelete($id, $client_id): object
```

Delete bankAccount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->bankAccountDelete($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->bankAccountDelete: ', $e->getMessage(), PHP_EOL;
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

## `bankAccountGet()`

```php
bankAccountGet($client_id): \OpenAPI\Client\Model\BankAccount[]
```

Retreives list of bankAccounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->bankAccountGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->bankAccountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\BankAccount[]**](../Model/BankAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankAccountGet_0()`

```php
bankAccountGet_0($id, $client_id): \OpenAPI\Client\Model\BankAccount
```

Get bankAccount by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->bankAccountGet_0($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->bankAccountGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **client_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\BankAccount**](../Model/BankAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankAccountGet_1()`

```php
bankAccountGet_1($name, $client_id): \OpenAPI\Client\Model\BankAccount
```

Get bankAccount by name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->bankAccountGet_1($name, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->bankAccountGet_1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
| **client_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\BankAccount**](../Model/BankAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankAccountPost()`

```php
bankAccountPost($client_id, $bank_account): \OpenAPI\Client\Model\BankAccount
```

Save bankAccount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$bank_account = new \OpenAPI\Client\Model\BankAccount(); // \OpenAPI\Client\Model\BankAccount

try {
    $result = $apiInstance->bankAccountPost($client_id, $bank_account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->bankAccountPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **bank_account** | [**\OpenAPI\Client\Model\BankAccount**](../Model/BankAccount.md)|  | |

### Return type

[**\OpenAPI\Client\Model\BankAccount**](../Model/BankAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
