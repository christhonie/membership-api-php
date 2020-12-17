# Idealogic\MembershipAPI\NumberTypeResourceApi

All URIs are relative to *https://http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNumberTypeUsingPOST**](NumberTypeResourceApi.md#createNumberTypeUsingPOST) | **POST** /api/number-types | createNumberType
[**deleteNumberTypeUsingDELETE**](NumberTypeResourceApi.md#deleteNumberTypeUsingDELETE) | **DELETE** /api/number-types/{id} | deleteNumberType
[**getAllNumberTypesUsingGET**](NumberTypeResourceApi.md#getAllNumberTypesUsingGET) | **GET** /api/number-types | getAllNumberTypes
[**getNumberTypeUsingGET**](NumberTypeResourceApi.md#getNumberTypeUsingGET) | **GET** /api/number-types/{id} | getNumberType
[**updateNumberTypeUsingPUT**](NumberTypeResourceApi.md#updateNumberTypeUsingPUT) | **PUT** /api/number-types | updateNumberType


# **createNumberTypeUsingPOST**
> \Idealogic\MembershipAPI\Model\NumberTypeDTO createNumberTypeUsingPOST($number_type_dto)

createNumberType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\NumberTypeResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number_type_dto = new \Idealogic\MembershipAPI\Model\NumberTypeDTO(); // \Idealogic\MembershipAPI\Model\NumberTypeDTO | numberTypeDTO

try {
    $result = $apiInstance->createNumberTypeUsingPOST($number_type_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberTypeResourceApi->createNumberTypeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number_type_dto** | [**\Idealogic\MembershipAPI\Model\NumberTypeDTO**](../Model/NumberTypeDTO.md)| numberTypeDTO |

### Return type

[**\Idealogic\MembershipAPI\Model\NumberTypeDTO**](../Model/NumberTypeDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNumberTypeUsingDELETE**
> deleteNumberTypeUsingDELETE($id)

deleteNumberType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\NumberTypeResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $apiInstance->deleteNumberTypeUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling NumberTypeResourceApi->deleteNumberTypeUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllNumberTypesUsingGET**
> \Idealogic\MembershipAPI\Model\NumberTypeDTO[] getAllNumberTypesUsingGET($page, $size, $sort)

getAllNumberTypes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\NumberTypeResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 56; // int | Page number of the requested page
$size = 56; // int | Size of a page
$sort = array("sort_example"); // string[] | Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported.

try {
    $result = $apiInstance->getAllNumberTypesUsingGET($page, $size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberTypeResourceApi->getAllNumberTypesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number of the requested page | [optional]
 **size** | **int**| Size of a page | [optional]
 **sort** | [**string[]**](../Model/string.md)| Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported. | [optional]

### Return type

[**\Idealogic\MembershipAPI\Model\NumberTypeDTO[]**](../Model/NumberTypeDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNumberTypeUsingGET**
> \Idealogic\MembershipAPI\Model\NumberTypeDTO getNumberTypeUsingGET($id)

getNumberType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\NumberTypeResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->getNumberTypeUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberTypeResourceApi->getNumberTypeUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Idealogic\MembershipAPI\Model\NumberTypeDTO**](../Model/NumberTypeDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNumberTypeUsingPUT**
> \Idealogic\MembershipAPI\Model\NumberTypeDTO updateNumberTypeUsingPUT($number_type_dto)

updateNumberType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\NumberTypeResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number_type_dto = new \Idealogic\MembershipAPI\Model\NumberTypeDTO(); // \Idealogic\MembershipAPI\Model\NumberTypeDTO | numberTypeDTO

try {
    $result = $apiInstance->updateNumberTypeUsingPUT($number_type_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberTypeResourceApi->updateNumberTypeUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number_type_dto** | [**\Idealogic\MembershipAPI\Model\NumberTypeDTO**](../Model/NumberTypeDTO.md)| numberTypeDTO |

### Return type

[**\Idealogic\MembershipAPI\Model\NumberTypeDTO**](../Model/NumberTypeDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

