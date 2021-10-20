# Swagger\Client\StatsApi

All URIs are relative to *https://localhost/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStats**](StatsApi.md#getStats) | **GET** /servers/{server_id}/statistics | Query statistics.


# **getStats**
> object[] getStats($server_id, $statistic, $includerings)

Query statistics.

Query PowerDNS internal statistics.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = "server_id_example"; // string | The id of the server to retrieve
$statistic = "statistic_example"; // string | When set to the name of a specific statistic, only this value is returned. If no statistic with that name exists, the response has a 422 status and an error message.
$includerings = true; // bool | “true” (default) or “false”, whether to include the Ring items, which can contain thousands of log messages or queried domains. Setting this to ”false” may make the response a lot smaller.

try {
    $result = $apiInstance->getStats($server_id, $statistic, $includerings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->getStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **string**| The id of the server to retrieve |
 **statistic** | **string**| When set to the name of a specific statistic, only this value is returned. If no statistic with that name exists, the response has a 422 status and an error message. | [optional]
 **includerings** | **bool**| “true” (default) or “false”, whether to include the Ring items, which can contain thousands of log messages or queried domains. Setting this to ”false” may make the response a lot smaller. | [optional] [default to true]

### Return type

**object[]**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

