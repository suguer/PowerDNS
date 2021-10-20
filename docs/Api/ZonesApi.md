# Swagger\Client\ZonesApi

All URIs are relative to *https://localhost/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**axfrExportZone**](ZonesApi.md#axfrExportZone) | **GET** /servers/{server_id}/zones/{zone_id}/export | Returns the zone in AXFR format.
[**axfrRetrieveZone**](ZonesApi.md#axfrRetrieveZone) | **PUT** /servers/{server_id}/zones/{zone_id}/axfr-retrieve | Retrieve slave zone from its master.
[**createZone**](ZonesApi.md#createZone) | **POST** /servers/{server_id}/zones | Creates a new domain, returns the Zone on creation.
[**deleteZone**](ZonesApi.md#deleteZone) | **DELETE** /servers/{server_id}/zones/{zone_id} | Deletes this zone, all attached metadata and rrsets.
[**listZone**](ZonesApi.md#listZone) | **GET** /servers/{server_id}/zones/{zone_id} | zone managed by a server
[**listZones**](ZonesApi.md#listZones) | **GET** /servers/{server_id}/zones | List all Zones in a server
[**notifyZone**](ZonesApi.md#notifyZone) | **PUT** /servers/{server_id}/zones/{zone_id}/notify | Send a DNS NOTIFY to all slaves.
[**patchZone**](ZonesApi.md#patchZone) | **PATCH** /servers/{server_id}/zones/{zone_id} | Creates/modifies/deletes RRsets present in the payload and their comments. Returns 204 No Content on success.
[**putZone**](ZonesApi.md#putZone) | **PUT** /servers/{server_id}/zones/{zone_id} | Modifies basic zone data.
[**rectifyZone**](ZonesApi.md#rectifyZone) | **PUT** /servers/{server_id}/zones/{zone_id}/rectify | Rectify the zone data.


# **axfrExportZone**
> string axfrExportZone($server_id, $zone_id)

Returns the zone in AXFR format.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = "server_id_example"; // string | The id of the server to retrieve
$zone_id = "zone_id_example"; // string | The id of the zone to retrieve

try {
    $result = $apiInstance->axfrExportZone($server_id, $zone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->axfrExportZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **string**| The id of the server to retrieve |
 **zone_id** | **string**| The id of the zone to retrieve |

### Return type

**string**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **axfrRetrieveZone**
> axfrRetrieveZone($server_id, $zone_id)

Retrieve slave zone from its master.

Fails when zone kind is not Slave, or slave is disabled in the configuration. Clients MUST NOT send a body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = "server_id_example"; // string | The id of the server to retrieve
$zone_id = "zone_id_example"; // string | The id of the zone to retrieve

try {
    $apiInstance->axfrRetrieveZone($server_id, $zone_id);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->axfrRetrieveZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **string**| The id of the server to retrieve |
 **zone_id** | **string**| The id of the zone to retrieve |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createZone**
> \Swagger\Client\Model\Zone createZone($server_id, $zone_struct, $rrsets)

Creates a new domain, returns the Zone on creation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = "server_id_example"; // string | The id of the server to retrieve
$zone_struct = new \Swagger\Client\Model\Zone(); // \Swagger\Client\Model\Zone | The zone struct to patch with
$rrsets = true; // bool | “true” (default) or “false”, whether to include the “rrsets” in the response Zone object.

try {
    $result = $apiInstance->createZone($server_id, $zone_struct, $rrsets);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->createZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **string**| The id of the server to retrieve |
 **zone_struct** | [**\Swagger\Client\Model\Zone**](../Model/Zone.md)| The zone struct to patch with |
 **rrsets** | **bool**| “true” (default) or “false”, whether to include the “rrsets” in the response Zone object. | [optional] [default to true]

### Return type

[**\Swagger\Client\Model\Zone**](../Model/Zone.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteZone**
> deleteZone($server_id, $zone_id)

Deletes this zone, all attached metadata and rrsets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = "server_id_example"; // string | The id of the server to retrieve
$zone_id = "zone_id_example"; // string | The id of the zone to retrieve

try {
    $apiInstance->deleteZone($server_id, $zone_id);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->deleteZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **string**| The id of the server to retrieve |
 **zone_id** | **string**| The id of the zone to retrieve |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listZone**
> \Swagger\Client\Model\Zone listZone($server_id, $zone_id, $rrsets)

zone managed by a server

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = "server_id_example"; // string | The id of the server to retrieve
$zone_id = "zone_id_example"; // string | The id of the zone to retrieve
$rrsets = true; // bool | “true” (default) or “false”, whether to include the “rrsets” in the response Zone object.

try {
    $result = $apiInstance->listZone($server_id, $zone_id, $rrsets);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->listZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **string**| The id of the server to retrieve |
 **zone_id** | **string**| The id of the zone to retrieve |
 **rrsets** | **bool**| “true” (default) or “false”, whether to include the “rrsets” in the response Zone object. | [optional] [default to true]

### Return type

[**\Swagger\Client\Model\Zone**](../Model/Zone.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listZones**
> \Swagger\Client\Model\Zone[] listZones($server_id, $zone, $dnssec)

List all Zones in a server

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = "server_id_example"; // string | The id of the server to retrieve
$zone = "zone_example"; // string | When set to the name of a zone, only this zone is returned. If no zone with that name exists, the response is an empty array. This can e.g. be used to check if a zone exists in the database without having to guess/encode the zone's id or to check if a zone exists.
$dnssec = true; // bool | “true” (default) or “false”, whether to include the “dnssec” and ”edited_serial” fields in the Zone objects. Setting this to ”false” will make the query a lot faster.

try {
    $result = $apiInstance->listZones($server_id, $zone, $dnssec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->listZones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **string**| The id of the server to retrieve |
 **zone** | **string**| When set to the name of a zone, only this zone is returned. If no zone with that name exists, the response is an empty array. This can e.g. be used to check if a zone exists in the database without having to guess/encode the zone&#39;s id or to check if a zone exists. | [optional]
 **dnssec** | **bool**| “true” (default) or “false”, whether to include the “dnssec” and ”edited_serial” fields in the Zone objects. Setting this to ”false” will make the query a lot faster. | [optional] [default to true]

### Return type

[**\Swagger\Client\Model\Zone[]**](../Model/Zone.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notifyZone**
> notifyZone($server_id, $zone_id)

Send a DNS NOTIFY to all slaves.

Fails when zone kind is not Master or Slave, or master and slave are disabled in the configuration. Only works for Slave if renotify is on. Clients MUST NOT send a body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = "server_id_example"; // string | The id of the server to retrieve
$zone_id = "zone_id_example"; // string | The id of the zone to retrieve

try {
    $apiInstance->notifyZone($server_id, $zone_id);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->notifyZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **string**| The id of the server to retrieve |
 **zone_id** | **string**| The id of the zone to retrieve |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchZone**
> patchZone($server_id, $zone_id, $zone_struct)

Creates/modifies/deletes RRsets present in the payload and their comments. Returns 204 No Content on success.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = "server_id_example"; // string | The id of the server to retrieve
$zone_id = "zone_id_example"; // string | 
$zone_struct = new \Swagger\Client\Model\Zone(); // \Swagger\Client\Model\Zone | The zone struct to patch with

try {
    $apiInstance->patchZone($server_id, $zone_id, $zone_struct);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->patchZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **string**| The id of the server to retrieve |
 **zone_id** | **string**|  |
 **zone_struct** | [**\Swagger\Client\Model\Zone**](../Model/Zone.md)| The zone struct to patch with |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putZone**
> putZone($server_id, $zone_id, $zone_struct)

Modifies basic zone data.

The only fields in the zone structure which can be modified are: kind, masters, account, soa_edit, soa_edit_api, api_rectify, dnssec, and nsec3param. All other fields are ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = "server_id_example"; // string | The id of the server to retrieve
$zone_id = "zone_id_example"; // string | 
$zone_struct = new \Swagger\Client\Model\Zone(); // \Swagger\Client\Model\Zone | The zone struct to patch with

try {
    $apiInstance->putZone($server_id, $zone_id, $zone_struct);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->putZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **string**| The id of the server to retrieve |
 **zone_id** | **string**|  |
 **zone_struct** | [**\Swagger\Client\Model\Zone**](../Model/Zone.md)| The zone struct to patch with |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rectifyZone**
> string rectifyZone($server_id, $zone_id)

Rectify the zone data.

This does not take into account the API-RECTIFY metadata. Fails on slave zones and zones that do not have DNSSEC.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = "server_id_example"; // string | The id of the server to retrieve
$zone_id = "zone_id_example"; // string | The id of the zone to retrieve

try {
    $result = $apiInstance->rectifyZone($server_id, $zone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->rectifyZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_id** | **string**| The id of the server to retrieve |
 **zone_id** | **string**| The id of the zone to retrieve |

### Return type

**string**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

