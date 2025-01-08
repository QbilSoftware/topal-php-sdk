# OpenAPI\Client\UserAccountApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**userAccountChangePassword()**](UserAccountApi.md#userAccountChangePassword) | **POST** /api/v1/useraccount/changepassword | Change user password |
| [**userAccountGet()**](UserAccountApi.md#userAccountGet) | **GET** /api/v1/useraccounts | Retreives list of user accounts |
| [**userAccountGetLocalization()**](UserAccountApi.md#userAccountGetLocalization) | **GET** /api/v1/useraccount/localization | Get current user localization |
| [**userAccountLogout()**](UserAccountApi.md#userAccountLogout) | **GET** /api/v1/useraccount/logout | Disconnects from topal server |
| [**userAccountProfile()**](UserAccountApi.md#userAccountProfile) | **GET** /api/v1/useraccount/profile | Get user profile data |
| [**userAccountSaveLocalization()**](UserAccountApi.md#userAccountSaveLocalization) | **POST** /api/v1/useraccount/localization/{localization} | Change user localization |
| [**userAccountSaveProfile()**](UserAccountApi.md#userAccountSaveProfile) | **POST** /api/v1/useraccount/profile | Save user profile data |


## `userAccountChangePassword()`

```php
userAccountChangePassword($change_password): object
```

Change user password

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$change_password = new \OpenAPI\Client\Model\ChangePassword(); // \OpenAPI\Client\Model\ChangePassword

try {
    $result = $apiInstance->userAccountChangePassword($change_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAccountApi->userAccountChangePassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **change_password** | [**\OpenAPI\Client\Model\ChangePassword**](../Model/ChangePassword.md)|  | |

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

## `userAccountGet()`

```php
userAccountGet(): \OpenAPI\Client\Model\UserAccount[]
```

Retreives list of user accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->userAccountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAccountApi->userAccountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\UserAccount[]**](../Model/UserAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userAccountGetLocalization()`

```php
userAccountGetLocalization(): string
```

Get current user localization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->userAccountGetLocalization();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAccountApi->userAccountGetLocalization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `userAccountLogout()`

```php
userAccountLogout(): object
```

Disconnects from topal server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->userAccountLogout();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAccountApi->userAccountLogout: ', $e->getMessage(), PHP_EOL;
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

## `userAccountProfile()`

```php
userAccountProfile(): \OpenAPI\Client\Model\UserAccount
```

Get user profile data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->userAccountProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAccountApi->userAccountProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\UserAccount**](../Model/UserAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userAccountSaveLocalization()`

```php
userAccountSaveLocalization($localization): string
```

Change user localization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$localization = 'localization_example'; // string

try {
    $result = $apiInstance->userAccountSaveLocalization($localization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAccountApi->userAccountSaveLocalization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **localization** | **string**|  | |

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

## `userAccountSaveProfile()`

```php
userAccountSaveProfile($user_profile): object
```

Save user profile data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_profile = new \OpenAPI\Client\Model\UserAccount(); // \OpenAPI\Client\Model\UserAccount

try {
    $result = $apiInstance->userAccountSaveProfile($user_profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAccountApi->userAccountSaveProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_profile** | [**\OpenAPI\Client\Model\UserAccount**](../Model/UserAccount.md)|  | |

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
