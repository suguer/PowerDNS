# Swagger\Client\ZonecryptokeyApi

All URIs are relative to *https://localhost/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCryptokey**](ZonecryptokeyApi.md#createCryptokey) | **POST** /servers/{server_id}/zones/{zone_id}/cryptokeys | Creates a Cryptokey
[**deleteCryptokey**](ZonecryptokeyApi.md#deleteCryptokey) | **DELETE** /servers/{server_id}/zones/{zone_id}/cryptokeys/{cryptokey_id} | This method deletes a key specified by cryptokey_id.
[**getCryptokey**](ZonecryptokeyApi.md#getCryptokey) | **GET** /servers/{server_id}/zones/{zone_id}/cryptokeys/{cryptokey_id} | Returns all data about the CryptoKey, including the privatekey.
[**listCryptokeys**](ZonecryptokeyApi.md#listCryptokeys) | **GET** /servers/{server_id}/zones/{zone_id}/cryptokeys | Get all CryptoKeys for a zone, except the privatekey
[**modifyCryptokey**](ZonecryptokeyApi.md#modifyCryptokey) | **PUT** /servers/{server_id}/zones/{zone_id}/cryptokeys/{cryptokey_id} | This method (de)activates a key from zone_name specified by cryptokey_id


# **createCryptokey**
> \Swagger\Client\Model\Cryptokey createCryptokey($server_id, $zone_id, $cryptokey)

Creates a Cryptokey

This method adds a new key to a zone. The key can either be generated or imported by supplying the content parameter. if content, bits and algo are null, a key will be generated based on the default-ksk-algorithm and default-ksk-size settings for a KSK and the default-zsk-algorithm and default-zsk-size options for a ZSK.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ZonecryptokeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = "server_id_example"; // string | The id of the server to retrieve
$zone_id = "zone_id_example"; // string | 
$cryptokey = new \Swagger\Client\Model\Cryptokey(); // \Swagger\Client\Model\Cryptokey | Add a Cryptokey

try {
    $result = $apiInstance->createCryptokey($server_id, $zone_id, $cryptokey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonecryptokeyApi->createCryptokey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **string**| The id of the server to retrieve |
 **zone_id** | **string**|  |
 **cryptokey** | [**\Swagger\Client\Model\Cryptokey**](../Model/Cryptokey.md)| Add a Cryptokey |

### Return type

[**\Swagger\Client\Model\Cryptokey**](../Model/Cryptokey.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCryptokey**
> deleteCryptokey($server_id, $zone_id, $cryptokey_id)

This method deletes a key specified by cryptokey_id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ZonecryptokeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = "server_id_example"; // string | The id of the server to retrieve
$zone_id = "zone_id_example"; // string | The id of the zone to retrieve
$cryptokey_id = "cryptokey_id_example"; // string | The id value of the Cryptokey

try {
    $apiInstance->deleteCryptokey($server_id, $zone_id, $cryptokey_id);
} catch (Exception $e) {
    echo 'Exception when calling ZonecryptokeyApi->deleteCryptokey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **string**| The id of the server to retrieve |
 **zone_id** | **string**| The id of the zone to retrieve |
 **cryptokey_id** | **string**| The id value of the Cryptokey |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCryptokey**
> \Swagger\Client\Model\Cryptokey getCryptokey($server_id, $zone_id, $cryptokey_id)

Returns all data about the CryptoKey, including the privatekey.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ZonecryptokeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = "server_id_example"; // string | The id of the server to retrieve
$zone_id = "zone_id_example"; // string | The id of the zone to retrieve
$cryptokey_id = "cryptokey_id_example"; // string | The id value of the CryptoKey

try {
    $result = $apiInstance->getCryptokey($server_id, $zone_id, $cryptokey_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonecryptokeyApi->getCryptokey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **string**| The id of the server to retrieve |
 **zone_id** | **string**| The id of the zone to retrieve |
 **cryptokey_id** | **string**| The id value of the CryptoKey |

### Return type

[**\Swagger\Client\Model\Cryptokey**](../Model/Cryptokey.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCryptokeys**
> \Swagger\Client\Model\Cryptokey[] listCryptokeys($server_id, $zone_id)

Get all CryptoKeys for a zone, except the privatekey

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ZonecryptokeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = "server_id_example"; // string | The id of the server to retrieve
$zone_id = "zone_id_example"; // string | The id of the zone to retrieve

try {
    $result = $apiInstance->listCryptokeys($server_id, $zone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonecryptokeyApi->listCryptokeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **string**| The id of the server to retrieve |
 **zone_id** | **string**| The id of the zone to retrieve |

### Return type

[**\Swagger\Client\Model\Cryptokey[]**](../Model/Cryptokey.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyCryptokey**
> modifyCryptokey($server_id, $zone_id, $cryptokey_id, $cryptokey)

This method (de)activates a key from zone_name specified by cryptokey_id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ZonecryptokeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = "server_id_example"; // string | The id of the server to retrieve
$zone_id = "zone_id_example"; // string | 
$cryptokey_id = "cryptokey_id_example"; // string | Cryptokey to manipulate
$cryptokey = new \Swagger\Client\Model\Cryptokey(); // \Swagger\Client\Model\Cryptokey | the Cryptokey

try {
    $apiInstance->modifyCryptokey($server_id, $zone_id, $cryptokey_id, $cryptokey);
} catch (Exception $e) {
    echo 'Exception when calling ZonecryptokeyApi->modifyCryptokey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **string**| The id of the server to retrieve |
 **zone_id** | **string**|  |
 **cryptokey_id** | **string**| Cryptokey to manipulate |
 **cryptokey** | [**\Swagger\Client\Model\Cryptokey**](../Model/Cryptokey.md)| the Cryptokey |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

