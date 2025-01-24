# OpenAPI\Client\ReportsApi

All URIs are relative to https://topal.vitan.ch:9001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**reportsDownload()**](ReportsApi.md#reportsDownload) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/reports/{id}/download | download report |
| [**reportsDownloadWithFilter()**](ReportsApi.md#reportsDownloadWithFilter) | **POST** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/reports/{id}/downloadwithfilter | Post report filter and apply it to report |
| [**reportsGet()**](ReportsApi.md#reportsGet) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/reports | get list of reports |
| [**reportsGetReportFilter()**](ReportsApi.md#reportsGetReportFilter) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/reports/{id}/reportfilter | gets report filter |
| [**reportsGet_0()**](ReportsApi.md#reportsGet_0) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/reports/{id} | get list of reports |
| [**reportsPostReportFilter()**](ReportsApi.md#reportsPostReportFilter) | **POST** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/reports/{id}/reportfilter | gets report filter |
| [**reportsPreview()**](ReportsApi.md#reportsPreview) | **GET** /api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/reports/{id}/preview | preview report |


## `reportsDownload()`

```php
reportsDownload($id, $client_id, $fiscal_year_id): object
```

download report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->reportsDownload($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsDownload: ', $e->getMessage(), PHP_EOL;
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

## `reportsDownloadWithFilter()`

```php
reportsDownloadWithFilter($id, $client_id, $fiscal_year_id, $report_filter, $save_filter): object
```

Post report filter and apply it to report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | report Id
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string
$report_filter = array('key' => new \stdClass); // object | report filter (depend on report type)
$save_filter = True; // bool | wether to save filter

try {
    $result = $apiInstance->reportsDownloadWithFilter($id, $client_id, $fiscal_year_id, $report_filter, $save_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsDownloadWithFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| report Id | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |
| **report_filter** | **object**| report filter (depend on report type) | |
| **save_filter** | **bool**| wether to save filter | [optional] |

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

## `reportsGet()`

```php
reportsGet($client_id, $fiscal_year_id): \Topal\Client\Model\Report[]
```

get list of reports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->reportsGet($client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\Report[]**](../Model/Report.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportsGetReportFilter()`

```php
reportsGetReportFilter($id, $client_id, $fiscal_year_id): \Topal\Client\Model\ReportFilter
```

gets report filter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->reportsGetReportFilter($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsGetReportFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\ReportFilter**](../Model/ReportFilter.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportsGet_0()`

```php
reportsGet_0($id, $client_id, $fiscal_year_id): \Topal\Client\Model\Report
```

get list of reports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->reportsGet_0($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |

### Return type

[**\Topal\Client\Model\Report**](../Model/Report.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportsPostReportFilter()`

```php
reportsPostReportFilter($id, $client_id, $fiscal_year_id, $report_filter): \Topal\Client\Model\ReportFilter
```

gets report filter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string
$report_filter = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->reportsPostReportFilter($id, $client_id, $fiscal_year_id, $report_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsPostReportFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **client_id** | **string**|  | |
| **fiscal_year_id** | **string**|  | |
| **report_filter** | **object**|  | |

### Return type

[**\Topal\Client\Model\ReportFilter**](../Model/ReportFilter.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportsPreview()`

```php
reportsPreview($id, $client_id, $fiscal_year_id): object
```

preview report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Topal\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$client_id = 'client_id_example'; // string
$fiscal_year_id = 'fiscal_year_id_example'; // string

try {
    $result = $apiInstance->reportsPreview($id, $client_id, $fiscal_year_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsPreview: ', $e->getMessage(), PHP_EOL;
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
