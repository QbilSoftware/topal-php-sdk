# OpenAPI\Client\ClientSettingsApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**clientSettingsDelete()**](ClientSettingsApi.md#clientSettingsDelete) | **DELETE** /api/v1/clients/{clientId}/settings/{name} | Delete settings by name |
| [**clientSettingsGet()**](ClientSettingsApi.md#clientSettingsGet) | **GET** /api/v1/clients/{clientId}/settings | get list of settings names |
| [**clientSettingsGet_0()**](ClientSettingsApi.md#clientSettingsGet_0) | **GET** /api/v1/clients/{clientId}/settings/{name} | get settings by names |
| [**clientSettingsPost()**](ClientSettingsApi.md#clientSettingsPost) | **POST** /api/v1/clients/{clientId}/settings/{name} | save settings by name |


## `clientSettingsDelete()`

```php
clientSettingsDelete($name, $client_id): object
```

Delete settings by name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClientSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->clientSettingsDelete($name, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientSettingsApi->clientSettingsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
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

## `clientSettingsGet()`

```php
clientSettingsGet($client_id): string[]
```

get list of settings names

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClientSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->clientSettingsGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientSettingsApi->clientSettingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientSettingsGet_0()`

```php
clientSettingsGet_0($name, $client_id): string
```

get settings by names

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClientSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->clientSettingsGet_0($name, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientSettingsApi->clientSettingsGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
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

## `clientSettingsPost()`

```php
clientSettingsPost($name, $client_id, $value): string
```

save settings by name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClientSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string
$client_id = 'client_id_example'; // string
$value = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->clientSettingsPost($name, $client_id, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientSettingsApi->clientSettingsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
| **client_id** | **string**|  | |
| **value** | **object**|  | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
