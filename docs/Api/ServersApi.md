# Swagger\Client\ServersApi

All URIs are relative to *https://localhost/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cacheFlushByName**](ServersApi.md#cacheFlushByName) | **PUT** /servers/{server_id}/cache/flush | Flush a cache-entry by name
[**listServer**](ServersApi.md#listServer) | **GET** /servers/{server_id} | List a server
[**listServers**](ServersApi.md#listServers) | **GET** /servers | List all servers


# **cacheFlushByName**
> \Swagger\Client\Model\CacheFlushResult cacheFlushByName($server_id, $domain)

Flush a cache-entry by name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = "server_id_example"; // string | The id of the server to retrieve
$domain = "domain_example"; // string | The domain name to flush from the cache

try {
    $result = $apiInstance->cacheFlushByName($server_id, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->cacheFlushByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **string**| The id of the server to retrieve |
 **domain** | **string**| The domain name to flush from the cache |

### Return type

[**\Swagger\Client\Model\CacheFlushResult**](../Model/CacheFlushResult.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listServer**
> \Swagger\Client\Model\Server listServer($server_id)

List a server

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = "server_id_example"; // string | The id of the server to retrieve

try {
    $result = $apiInstance->listServer($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->listServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **string**| The id of the server to retrieve |

### Return type

[**\Swagger\Client\Model\Server**](../Model/Server.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listServers**
> \Swagger\Client\Model\Server[] listServers()

List all servers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listServers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->listServers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Server[]**](../Model/Server.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

