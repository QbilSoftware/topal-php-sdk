# OpenAPI\Client\ClientsApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**clientsGet()**](ClientsApi.md#clientsGet) | **GET** /api/v1/clients | Retreives list of client |
| [**clientsGet_0()**](ClientsApi.md#clientsGet_0) | **GET** /api/v1/clients/{id} | Retreives a client with specified unique identifier |
| [**clientsPost()**](ClientsApi.md#clientsPost) | **POST** /api/v1/clients | Save client |
| [**clientsUnprotect()**](ClientsApi.md#clientsUnprotect) | **POST** /api/v1/clients/{id}/unprotect | Unprotects client protected by password |


## `clientsGet()`

```php
clientsGet(): \OpenAPI\Client\Model\Client[]
```

Retreives list of client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->clientsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Client[]**](../Model/Client.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientsGet_0()`

```php
clientsGet_0($id): \OpenAPI\Client\Model\Client
```

Retreives a client with specified unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The uniue id of the client to retrieve

try {
    $result = $apiInstance->clientsGet_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientsGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The uniue id of the client to retrieve | |

### Return type

[**\OpenAPI\Client\Model\Client**](../Model/Client.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientsPost()`

```php
clientsPost($client): \OpenAPI\Client\Model\Client
```

Save client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client = new \OpenAPI\Client\Model\Client(); // \OpenAPI\Client\Model\Client

try {
    $result = $apiInstance->clientsPost($client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client** | [**\OpenAPI\Client\Model\Client**](../Model/Client.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Client**](../Model/Client.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientsUnprotect()`

```php
clientsUnprotect($id, $password): object
```

Unprotects client protected by password

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | id of the client to unprotect
$password = 'password_example'; // string | password

try {
    $result = $apiInstance->clientsUnprotect($id, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientsUnprotect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| id of the client to unprotect | |
| **password** | **string**| password | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
