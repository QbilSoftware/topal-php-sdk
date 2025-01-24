# OpenAPI\Client\PartiesApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**partiesDelete()**](PartiesApi.md#partiesDelete) | **DELETE** /api/v1/clients/{clientId}/parties/{id} | Delete party by id |
| [**partiesDeleteCreditor()**](PartiesApi.md#partiesDeleteCreditor) | **DELETE** /api/v1/clients/{clientId}/parties/{id}/creditor | Delete creditor by party id |
| [**partiesDeleteDebtor()**](PartiesApi.md#partiesDeleteDebtor) | **DELETE** /api/v1/clients/{clientId}/parties/{id}/debtor | Delete debtor by party id |
| [**partiesGet()**](PartiesApi.md#partiesGet) | **GET** /api/v1/clients/{clientId}/parties | Retreives list of parties |
| [**partiesGetByFreeNumber()**](PartiesApi.md#partiesGetByFreeNumber) | **GET** /api/v1/clients/{clientId}/parties/byfreenumber/{freePartyNum} | Get party by freePartyNum |
| [**partiesGetByNumber()**](PartiesApi.md#partiesGetByNumber) | **GET** /api/v1/clients/{clientId}/parties/bynumber/{partyNum} | Get party by partyNum |
| [**partiesGet_0()**](PartiesApi.md#partiesGet_0) | **GET** /api/v1/clients/{clientId}/parties/{id} | Get party by id |
| [**partiesPost()**](PartiesApi.md#partiesPost) | **POST** /api/v1/clients/{clientId}/parties | Save party |
| [**partiesPost_0()**](PartiesApi.md#partiesPost_0) | **POST** /api/v1/clients/{clientId}/parties/{id}/creditor | Assign creditor to party creditor |
| [**partiesPost_1()**](PartiesApi.md#partiesPost_1) | **POST** /api/v1/clients/{clientId}/parties/{id}/debtor | Assign debtor to party |


## `partiesDelete()`

```php
partiesDelete($id, $client_id): object
```

Delete party by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\PartiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->partiesDelete($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartiesApi->partiesDelete: ', $e->getMessage(), PHP_EOL;
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

## `partiesDeleteCreditor()`

```php
partiesDeleteCreditor($id, $client_id): object
```

Delete creditor by party id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\PartiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->partiesDeleteCreditor($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartiesApi->partiesDeleteCreditor: ', $e->getMessage(), PHP_EOL;
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

## `partiesDeleteDebtor()`

```php
partiesDeleteDebtor($id, $client_id): object
```

Delete debtor by party id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\PartiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->partiesDeleteDebtor($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartiesApi->partiesDeleteDebtor: ', $e->getMessage(), PHP_EOL;
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

## `partiesGet()`

```php
partiesGet($client_id): \Topal\Client\Model\Party[]
```

Retreives list of parties

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\PartiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->partiesGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartiesApi->partiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\Party[]**](../Model/Party.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partiesGetByFreeNumber()`

```php
partiesGetByFreeNumber($free_party_num, $client_id): \Topal\Client\Model\Party
```

Get party by freePartyNum

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\PartiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$free_party_num = 'free_party_num_example'; // string
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->partiesGetByFreeNumber($free_party_num, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartiesApi->partiesGetByFreeNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **free_party_num** | **string**|  | |
| **client_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\Party**](../Model/Party.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partiesGetByNumber()`

```php
partiesGetByNumber($party_num, $client_id): \Topal\Client\Model\Party
```

Get party by partyNum

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\PartiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$party_num = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->partiesGetByNumber($party_num, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartiesApi->partiesGetByNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **party_num** | **int**|  | |
| **client_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\Party**](../Model/Party.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partiesGet_0()`

```php
partiesGet_0($id, $client_id): \Topal\Client\Model\Party
```

Get party by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\PartiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->partiesGet_0($id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartiesApi->partiesGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **client_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\Party**](../Model/Party.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partiesPost()`

```php
partiesPost($client_id, $party): \Topal\Client\Model\Party
```

Save party

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\PartiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$party = new \Topal\Client\Model\Party(); // \Topal\Client\Model\Party

try {
    $result = $apiInstance->partiesPost($client_id, $party);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartiesApi->partiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **party** | [**\Topal\Client\Model\Party**](../Model/Party.md)|  | |

### Return type

[**\Topal\Client\Model\Party**](../Model/Party.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partiesPost_0()`

```php
partiesPost_0($id, $client_id, $creditor): \Topal\Client\Model\Creditor
```

Assign creditor to party creditor

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\PartiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string
$creditor = new \Topal\Client\Model\Creditor(); // \Topal\Client\Model\Creditor

try {
    $result = $apiInstance->partiesPost_0($id, $client_id, $creditor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartiesApi->partiesPost_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **client_id** | **string**|  | |
| **creditor** | [**\Topal\Client\Model\Creditor**](../Model/Creditor.md)|  | |

### Return type

[**\Topal\Client\Model\Creditor**](../Model/Creditor.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partiesPost_1()`

```php
partiesPost_1($id, $client_id, $debtor): \Topal\Client\Model\Debtor
```

Assign debtor to party

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\PartiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string
$debtor = new \Topal\Client\Model\Debtor(); // \Topal\Client\Model\Debtor

try {
    $result = $apiInstance->partiesPost_1($id, $client_id, $debtor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartiesApi->partiesPost_1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **client_id** | **string**|  | |
| **debtor** | [**\Topal\Client\Model\Debtor**](../Model/Debtor.md)|  | |

### Return type

[**\Topal\Client\Model\Debtor**](../Model/Debtor.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
