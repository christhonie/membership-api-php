# Idealogic\MembershipAPI\OrderResourceApi

All URIs are relative to *https://http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**countOrdersUsingGET**](OrderResourceApi.md#countOrdersUsingGET) | **GET** /api/orders/count | countOrders
[**createOrderUsingPOST**](OrderResourceApi.md#createOrderUsingPOST) | **POST** /api/orders | createOrder
[**deleteOrderUsingDELETE**](OrderResourceApi.md#deleteOrderUsingDELETE) | **DELETE** /api/orders/{id} | deleteOrder
[**getAllOrdersUsingGET**](OrderResourceApi.md#getAllOrdersUsingGET) | **GET** /api/orders | getAllOrders
[**getOrderUsingGET**](OrderResourceApi.md#getOrderUsingGET) | **GET** /api/orders/{id} | getOrder
[**updateOrderUsingPUT**](OrderResourceApi.md#updateOrderUsingPUT) | **PUT** /api/orders | updateOrder


# **countOrdersUsingGET**
> int countOrdersUsingGET($external_id_contains, $external_id_does_not_contain, $external_id_equals, $external_id_in, $external_id_not_equals, $external_id_specified, $id_equals, $id_greater_than, $id_greater_than_or_equal, $id_in, $id_less_than, $id_less_than_or_equal, $id_not_equals, $id_specified, $number_contains, $number_does_not_contain, $number_equals, $number_in, $number_not_equals, $number_specified, $status_equals, $status_in, $status_not_equals, $status_specified)

countOrders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\OrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_id_contains = "external_id_contains_example"; // string | 
$external_id_does_not_contain = "external_id_does_not_contain_example"; // string | 
$external_id_equals = "external_id_equals_example"; // string | 
$external_id_in = array("external_id_in_example"); // string[] | 
$external_id_not_equals = "external_id_not_equals_example"; // string | 
$external_id_specified = true; // bool | 
$id_equals = 789; // int | 
$id_greater_than = 789; // int | 
$id_greater_than_or_equal = 789; // int | 
$id_in = array(56); // int[] | 
$id_less_than = 789; // int | 
$id_less_than_or_equal = 789; // int | 
$id_not_equals = 789; // int | 
$id_specified = true; // bool | 
$number_contains = "number_contains_example"; // string | 
$number_does_not_contain = "number_does_not_contain_example"; // string | 
$number_equals = "number_equals_example"; // string | 
$number_in = array("number_in_example"); // string[] | 
$number_not_equals = "number_not_equals_example"; // string | 
$number_specified = true; // bool | 
$status_equals = "status_equals_example"; // string | 
$status_in = array("status_in_example"); // string[] | 
$status_not_equals = "status_not_equals_example"; // string | 
$status_specified = true; // bool | 

try {
    $result = $apiInstance->countOrdersUsingGET($external_id_contains, $external_id_does_not_contain, $external_id_equals, $external_id_in, $external_id_not_equals, $external_id_specified, $id_equals, $id_greater_than, $id_greater_than_or_equal, $id_in, $id_less_than, $id_less_than_or_equal, $id_not_equals, $id_specified, $number_contains, $number_does_not_contain, $number_equals, $number_in, $number_not_equals, $number_specified, $status_equals, $status_in, $status_not_equals, $status_specified);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderResourceApi->countOrdersUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_id_contains** | **string**|  | [optional]
 **external_id_does_not_contain** | **string**|  | [optional]
 **external_id_equals** | **string**|  | [optional]
 **external_id_in** | [**string[]**](../Model/string.md)|  | [optional]
 **external_id_not_equals** | **string**|  | [optional]
 **external_id_specified** | **bool**|  | [optional]
 **id_equals** | **int**|  | [optional]
 **id_greater_than** | **int**|  | [optional]
 **id_greater_than_or_equal** | **int**|  | [optional]
 **id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **id_less_than** | **int**|  | [optional]
 **id_less_than_or_equal** | **int**|  | [optional]
 **id_not_equals** | **int**|  | [optional]
 **id_specified** | **bool**|  | [optional]
 **number_contains** | **string**|  | [optional]
 **number_does_not_contain** | **string**|  | [optional]
 **number_equals** | **string**|  | [optional]
 **number_in** | [**string[]**](../Model/string.md)|  | [optional]
 **number_not_equals** | **string**|  | [optional]
 **number_specified** | **bool**|  | [optional]
 **status_equals** | **string**|  | [optional]
 **status_in** | [**string[]**](../Model/string.md)|  | [optional]
 **status_not_equals** | **string**|  | [optional]
 **status_specified** | **bool**|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrderUsingPOST**
> \Idealogic\MembershipAPI\Model\OrderDTO createOrderUsingPOST($order_dto)

createOrder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\OrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_dto = new \Idealogic\MembershipAPI\Model\OrderDTO(); // \Idealogic\MembershipAPI\Model\OrderDTO | orderDTO

try {
    $result = $apiInstance->createOrderUsingPOST($order_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderResourceApi->createOrderUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_dto** | [**\Idealogic\MembershipAPI\Model\OrderDTO**](../Model/OrderDTO.md)| orderDTO |

### Return type

[**\Idealogic\MembershipAPI\Model\OrderDTO**](../Model/OrderDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderUsingDELETE**
> deleteOrderUsingDELETE($id)

deleteOrder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\OrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | id

try {
    $apiInstance->deleteOrderUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderResourceApi->deleteOrderUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllOrdersUsingGET**
> \Idealogic\MembershipAPI\Model\OrderDTO[] getAllOrdersUsingGET($external_id_contains, $external_id_does_not_contain, $external_id_equals, $external_id_in, $external_id_not_equals, $external_id_specified, $id_equals, $id_greater_than, $id_greater_than_or_equal, $id_in, $id_less_than, $id_less_than_or_equal, $id_not_equals, $id_specified, $number_contains, $number_does_not_contain, $number_equals, $number_in, $number_not_equals, $number_specified, $page, $size, $sort, $status_equals, $status_in, $status_not_equals, $status_specified)

getAllOrders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\OrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_id_contains = "external_id_contains_example"; // string | 
$external_id_does_not_contain = "external_id_does_not_contain_example"; // string | 
$external_id_equals = "external_id_equals_example"; // string | 
$external_id_in = array("external_id_in_example"); // string[] | 
$external_id_not_equals = "external_id_not_equals_example"; // string | 
$external_id_specified = true; // bool | 
$id_equals = 789; // int | 
$id_greater_than = 789; // int | 
$id_greater_than_or_equal = 789; // int | 
$id_in = array(56); // int[] | 
$id_less_than = 789; // int | 
$id_less_than_or_equal = 789; // int | 
$id_not_equals = 789; // int | 
$id_specified = true; // bool | 
$number_contains = "number_contains_example"; // string | 
$number_does_not_contain = "number_does_not_contain_example"; // string | 
$number_equals = "number_equals_example"; // string | 
$number_in = array("number_in_example"); // string[] | 
$number_not_equals = "number_not_equals_example"; // string | 
$number_specified = true; // bool | 
$page = 56; // int | Page number of the requested page
$size = 56; // int | Size of a page
$sort = array("sort_example"); // string[] | Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported.
$status_equals = "status_equals_example"; // string | 
$status_in = array("status_in_example"); // string[] | 
$status_not_equals = "status_not_equals_example"; // string | 
$status_specified = true; // bool | 

try {
    $result = $apiInstance->getAllOrdersUsingGET($external_id_contains, $external_id_does_not_contain, $external_id_equals, $external_id_in, $external_id_not_equals, $external_id_specified, $id_equals, $id_greater_than, $id_greater_than_or_equal, $id_in, $id_less_than, $id_less_than_or_equal, $id_not_equals, $id_specified, $number_contains, $number_does_not_contain, $number_equals, $number_in, $number_not_equals, $number_specified, $page, $size, $sort, $status_equals, $status_in, $status_not_equals, $status_specified);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderResourceApi->getAllOrdersUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_id_contains** | **string**|  | [optional]
 **external_id_does_not_contain** | **string**|  | [optional]
 **external_id_equals** | **string**|  | [optional]
 **external_id_in** | [**string[]**](../Model/string.md)|  | [optional]
 **external_id_not_equals** | **string**|  | [optional]
 **external_id_specified** | **bool**|  | [optional]
 **id_equals** | **int**|  | [optional]
 **id_greater_than** | **int**|  | [optional]
 **id_greater_than_or_equal** | **int**|  | [optional]
 **id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **id_less_than** | **int**|  | [optional]
 **id_less_than_or_equal** | **int**|  | [optional]
 **id_not_equals** | **int**|  | [optional]
 **id_specified** | **bool**|  | [optional]
 **number_contains** | **string**|  | [optional]
 **number_does_not_contain** | **string**|  | [optional]
 **number_equals** | **string**|  | [optional]
 **number_in** | [**string[]**](../Model/string.md)|  | [optional]
 **number_not_equals** | **string**|  | [optional]
 **number_specified** | **bool**|  | [optional]
 **page** | **int**| Page number of the requested page | [optional]
 **size** | **int**| Size of a page | [optional]
 **sort** | [**string[]**](../Model/string.md)| Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported. | [optional]
 **status_equals** | **string**|  | [optional]
 **status_in** | [**string[]**](../Model/string.md)|  | [optional]
 **status_not_equals** | **string**|  | [optional]
 **status_specified** | **bool**|  | [optional]

### Return type

[**\Idealogic\MembershipAPI\Model\OrderDTO[]**](../Model/OrderDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderUsingGET**
> \Idealogic\MembershipAPI\Model\OrderDTO getOrderUsingGET($id)

getOrder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\OrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | id

try {
    $result = $apiInstance->getOrderUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderResourceApi->getOrderUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Idealogic\MembershipAPI\Model\OrderDTO**](../Model/OrderDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderUsingPUT**
> \Idealogic\MembershipAPI\Model\OrderDTO updateOrderUsingPUT($order_dto)

updateOrder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\OrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_dto = new \Idealogic\MembershipAPI\Model\OrderDTO(); // \Idealogic\MembershipAPI\Model\OrderDTO | orderDTO

try {
    $result = $apiInstance->updateOrderUsingPUT($order_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderResourceApi->updateOrderUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_dto** | [**\Idealogic\MembershipAPI\Model\OrderDTO**](../Model/OrderDTO.md)| orderDTO |

### Return type

[**\Idealogic\MembershipAPI\Model\OrderDTO**](../Model/OrderDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

