# OpenAPI\Client\COATreeViewsApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cOATreeViewsDelete()**](COATreeViewsApi.md#cOATreeViewsDelete) | **DELETE** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/coaTreeViews/{id} | Delete coaTreeViewTreeView |
| [**cOATreeViewsGet()**](COATreeViewsApi.md#cOATreeViewsGet) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/coatreeviews | get list of coatreeViews |
| [**cOATreeViewsGetByCOA()**](COATreeViewsApi.md#cOATreeViewsGetByCOA) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/coas/{coaId}/coatreeviews | Get coaTreeView by id within given coa |
| [**cOATreeViewsGet_0()**](COATreeViewsApi.md#cOATreeViewsGet_0) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/coatreeviews/{id} | Get coaTreeView by id |
| [**cOATreeViewsGet_1()**](COATreeViewsApi.md#cOATreeViewsGet_1) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/coatreeviews/byCode/{code} | Get coaTreeView by code |
| [**cOATreeViewsPost()**](COATreeViewsApi.md#cOATreeViewsPost) | **POST** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/coatreeviews | saves CoaTreeView   COATreeView item type:  - Account &#x3D; 1  - COA Group &#x3D; 2  - Counter &#x3D; 3  - Mirror Account &#x3D; 4  - Account Copy &#x3D; 5  - Result &#x3D; 6  - Commentary Line &#x3D; 7 |


## `cOATreeViewsDelete()`

```php
cOATreeViewsDelete($id, $client_id, $fiscal_year_id): object
```

Delete coaTreeViewTreeView

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\COATreeViewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->cOATreeViewsDelete($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling COATreeViewsApi->cOATreeViewsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
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

## `cOATreeViewsGet()`

```php
cOATreeViewsGet($client_id, $fiscal_year_id): \Topal\Client\Model\COATreeView[]
```

get list of coatreeViews

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\COATreeViewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->cOATreeViewsGet($client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling COATreeViewsApi->cOATreeViewsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\COATreeView[]**](../Model/COATreeView.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cOATreeViewsGetByCOA()`

```php
cOATreeViewsGetByCOA($coa_id, $client_id, $fiscal_year_id): \Topal\Client\Model\COATreeView[]
```

Get coaTreeView by id within given coa

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\COATreeViewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coa_id = 56; // int
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->cOATreeViewsGetByCOA($coa_id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling COATreeViewsApi->cOATreeViewsGetByCOA: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coa_id** | **int**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\COATreeView[]**](../Model/COATreeView.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cOATreeViewsGet_0()`

```php
cOATreeViewsGet_0($id, $client_id, $fiscal_year_id): \Topal\Client\Model\COATreeView
```

Get coaTreeView by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\COATreeViewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->cOATreeViewsGet_0($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling COATreeViewsApi->cOATreeViewsGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\COATreeView**](../Model/COATreeView.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cOATreeViewsGet_1()`

```php
cOATreeViewsGet_1($code, $client_id, $fiscal_year_id): \Topal\Client\Model\COATreeView
```

Get coaTreeView by code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\COATreeViewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->cOATreeViewsGet_1($code, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling COATreeViewsApi->cOATreeViewsGet_1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\COATreeView**](../Model/COATreeView.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cOATreeViewsPost()`

```php
cOATreeViewsPost($client_id, $fiscal_year_id, $coa_tree_view, $parent_group_code): \Topal\Client\Model\COATreeView
```

saves CoaTreeView   COATreeView item type:  - Account = 1  - COA Group = 2  - Counter = 3  - Mirror Account = 4  - Account Copy = 5  - Result = 6  - Commentary Line = 7

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\COATreeViewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string
$coa_tree_view = new \Topal\Client\Model\COATreeView(); // \Topal\Client\Model\COATreeView
$parent_group_code = 'parent_group_code_example'; // string | parent group

try {
    $result = $apiInstance->cOATreeViewsPost($client_id, $fiscal_year_id, $coa_tree_view, $parent_group_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling COATreeViewsApi->cOATreeViewsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |
| **coa_tree_view** | [**\Topal\Client\Model\COATreeView**](../Model/COATreeView.md)|  | |
| **parent_group_code** | **string**| parent group | [optional] |

### Return type

[**\Topal\Client\Model\COATreeView**](../Model/COATreeView.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
