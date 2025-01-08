# OpenAPI\Client\CustomSettingsApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**customSettingsDelete()**](CustomSettingsApi.md#customSettingsDelete) | **DELETE** /api/v1/customsettings/{name} | Delete settings by name |
| [**customSettingsGet()**](CustomSettingsApi.md#customSettingsGet) | **GET** /api/v1/customsettings/{name} | Retreives custom settings by name |
| [**customSettingsGet_0()**](CustomSettingsApi.md#customSettingsGet_0) | **GET** /api/v1/customsettings | Retreives custom settings list |
| [**customSettingsPost()**](CustomSettingsApi.md#customSettingsPost) | **POST** /api/v1/customsettings/{name} | Save custom settings |


## `customSettingsDelete()`

```php
customSettingsDelete($name): object
```

Delete settings by name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string

try {
    $result = $apiInstance->customSettingsDelete($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSettingsApi->customSettingsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |

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

## `customSettingsGet()`

```php
customSettingsGet($name): object
```

Retreives custom settings by name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string

try {
    $result = $apiInstance->customSettingsGet($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSettingsApi->customSettingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |

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

## `customSettingsGet_0()`

```php
customSettingsGet_0(): object
```

Retreives custom settings list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->customSettingsGet_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSettingsApi->customSettingsGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `customSettingsPost()`

```php
customSettingsPost($name, $settings): object
```

Save custom settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string
$settings = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->customSettingsPost($name, $settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSettingsApi->customSettingsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
| **settings** | **object**|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
