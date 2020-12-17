# Idealogic\MembershipAPI\LinkedPersonResourceApi

All URIs are relative to *https://http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**countLinkedPeopleUsingGET**](LinkedPersonResourceApi.md#countLinkedPeopleUsingGET) | **GET** /api/linked-people/count | countLinkedPeople
[**createLinkedPersonUsingPOST**](LinkedPersonResourceApi.md#createLinkedPersonUsingPOST) | **POST** /api/linked-people | createLinkedPerson
[**deleteLinkedPersonUsingDELETE**](LinkedPersonResourceApi.md#deleteLinkedPersonUsingDELETE) | **DELETE** /api/linked-people/{id} | deleteLinkedPerson
[**getAllLinkedPeopleUsingGET**](LinkedPersonResourceApi.md#getAllLinkedPeopleUsingGET) | **GET** /api/linked-people | getAllLinkedPeople
[**getLinkedPersonUsingGET**](LinkedPersonResourceApi.md#getLinkedPersonUsingGET) | **GET** /api/linked-people/{id} | getLinkedPerson
[**updateLinkedPersonUsingPUT**](LinkedPersonResourceApi.md#updateLinkedPersonUsingPUT) | **PUT** /api/linked-people | updateLinkedPerson


# **countLinkedPeopleUsingGET**
> int countLinkedPeopleUsingGET($id_equals, $id_greater_than, $id_greater_than_or_equal, $id_in, $id_less_than, $id_less_than_or_equal, $id_not_equals, $id_specified, $linked_member_id_equals, $linked_member_id_greater_than, $linked_member_id_greater_than_or_equal, $linked_member_id_in, $linked_member_id_less_than, $linked_member_id_less_than_or_equal, $linked_member_id_not_equals, $linked_member_id_specified, $principal_id_equals, $principal_id_greater_than, $principal_id_greater_than_or_equal, $principal_id_in, $principal_id_less_than, $principal_id_less_than_or_equal, $principal_id_not_equals, $principal_id_specified, $type_equals, $type_in, $type_not_equals, $type_specified)

countLinkedPeople

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\LinkedPersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_equals = 789; // int | 
$id_greater_than = 789; // int | 
$id_greater_than_or_equal = 789; // int | 
$id_in = array(56); // int[] | 
$id_less_than = 789; // int | 
$id_less_than_or_equal = 789; // int | 
$id_not_equals = 789; // int | 
$id_specified = true; // bool | 
$linked_member_id_equals = 789; // int | 
$linked_member_id_greater_than = 789; // int | 
$linked_member_id_greater_than_or_equal = 789; // int | 
$linked_member_id_in = array(56); // int[] | 
$linked_member_id_less_than = 789; // int | 
$linked_member_id_less_than_or_equal = 789; // int | 
$linked_member_id_not_equals = 789; // int | 
$linked_member_id_specified = true; // bool | 
$principal_id_equals = 789; // int | 
$principal_id_greater_than = 789; // int | 
$principal_id_greater_than_or_equal = 789; // int | 
$principal_id_in = array(56); // int[] | 
$principal_id_less_than = 789; // int | 
$principal_id_less_than_or_equal = 789; // int | 
$principal_id_not_equals = 789; // int | 
$principal_id_specified = true; // bool | 
$type_equals = "type_equals_example"; // string | 
$type_in = array("type_in_example"); // string[] | 
$type_not_equals = "type_not_equals_example"; // string | 
$type_specified = true; // bool | 

try {
    $result = $apiInstance->countLinkedPeopleUsingGET($id_equals, $id_greater_than, $id_greater_than_or_equal, $id_in, $id_less_than, $id_less_than_or_equal, $id_not_equals, $id_specified, $linked_member_id_equals, $linked_member_id_greater_than, $linked_member_id_greater_than_or_equal, $linked_member_id_in, $linked_member_id_less_than, $linked_member_id_less_than_or_equal, $linked_member_id_not_equals, $linked_member_id_specified, $principal_id_equals, $principal_id_greater_than, $principal_id_greater_than_or_equal, $principal_id_in, $principal_id_less_than, $principal_id_less_than_or_equal, $principal_id_not_equals, $principal_id_specified, $type_equals, $type_in, $type_not_equals, $type_specified);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkedPersonResourceApi->countLinkedPeopleUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_equals** | **int**|  | [optional]
 **id_greater_than** | **int**|  | [optional]
 **id_greater_than_or_equal** | **int**|  | [optional]
 **id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **id_less_than** | **int**|  | [optional]
 **id_less_than_or_equal** | **int**|  | [optional]
 **id_not_equals** | **int**|  | [optional]
 **id_specified** | **bool**|  | [optional]
 **linked_member_id_equals** | **int**|  | [optional]
 **linked_member_id_greater_than** | **int**|  | [optional]
 **linked_member_id_greater_than_or_equal** | **int**|  | [optional]
 **linked_member_id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **linked_member_id_less_than** | **int**|  | [optional]
 **linked_member_id_less_than_or_equal** | **int**|  | [optional]
 **linked_member_id_not_equals** | **int**|  | [optional]
 **linked_member_id_specified** | **bool**|  | [optional]
 **principal_id_equals** | **int**|  | [optional]
 **principal_id_greater_than** | **int**|  | [optional]
 **principal_id_greater_than_or_equal** | **int**|  | [optional]
 **principal_id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **principal_id_less_than** | **int**|  | [optional]
 **principal_id_less_than_or_equal** | **int**|  | [optional]
 **principal_id_not_equals** | **int**|  | [optional]
 **principal_id_specified** | **bool**|  | [optional]
 **type_equals** | **string**|  | [optional]
 **type_in** | [**string[]**](../Model/string.md)|  | [optional]
 **type_not_equals** | **string**|  | [optional]
 **type_specified** | **bool**|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLinkedPersonUsingPOST**
> \Idealogic\MembershipAPI\Model\LinkedPersonDTO createLinkedPersonUsingPOST($linked_person_dto)

createLinkedPerson

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\LinkedPersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$linked_person_dto = new \Idealogic\MembershipAPI\Model\LinkedPersonDTO(); // \Idealogic\MembershipAPI\Model\LinkedPersonDTO | linkedPersonDTO

try {
    $result = $apiInstance->createLinkedPersonUsingPOST($linked_person_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkedPersonResourceApi->createLinkedPersonUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **linked_person_dto** | [**\Idealogic\MembershipAPI\Model\LinkedPersonDTO**](../Model/LinkedPersonDTO.md)| linkedPersonDTO |

### Return type

[**\Idealogic\MembershipAPI\Model\LinkedPersonDTO**](../Model/LinkedPersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLinkedPersonUsingDELETE**
> deleteLinkedPersonUsingDELETE($id)

deleteLinkedPerson

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\LinkedPersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | id

try {
    $apiInstance->deleteLinkedPersonUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling LinkedPersonResourceApi->deleteLinkedPersonUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllLinkedPeopleUsingGET**
> \Idealogic\MembershipAPI\Model\LinkedPersonDTO[] getAllLinkedPeopleUsingGET($id_equals, $id_greater_than, $id_greater_than_or_equal, $id_in, $id_less_than, $id_less_than_or_equal, $id_not_equals, $id_specified, $linked_member_id_equals, $linked_member_id_greater_than, $linked_member_id_greater_than_or_equal, $linked_member_id_in, $linked_member_id_less_than, $linked_member_id_less_than_or_equal, $linked_member_id_not_equals, $linked_member_id_specified, $page, $principal_id_equals, $principal_id_greater_than, $principal_id_greater_than_or_equal, $principal_id_in, $principal_id_less_than, $principal_id_less_than_or_equal, $principal_id_not_equals, $principal_id_specified, $size, $sort, $type_equals, $type_in, $type_not_equals, $type_specified)

getAllLinkedPeople

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\LinkedPersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_equals = 789; // int | 
$id_greater_than = 789; // int | 
$id_greater_than_or_equal = 789; // int | 
$id_in = array(56); // int[] | 
$id_less_than = 789; // int | 
$id_less_than_or_equal = 789; // int | 
$id_not_equals = 789; // int | 
$id_specified = true; // bool | 
$linked_member_id_equals = 789; // int | 
$linked_member_id_greater_than = 789; // int | 
$linked_member_id_greater_than_or_equal = 789; // int | 
$linked_member_id_in = array(56); // int[] | 
$linked_member_id_less_than = 789; // int | 
$linked_member_id_less_than_or_equal = 789; // int | 
$linked_member_id_not_equals = 789; // int | 
$linked_member_id_specified = true; // bool | 
$page = 56; // int | Page number of the requested page
$principal_id_equals = 789; // int | 
$principal_id_greater_than = 789; // int | 
$principal_id_greater_than_or_equal = 789; // int | 
$principal_id_in = array(56); // int[] | 
$principal_id_less_than = 789; // int | 
$principal_id_less_than_or_equal = 789; // int | 
$principal_id_not_equals = 789; // int | 
$principal_id_specified = true; // bool | 
$size = 56; // int | Size of a page
$sort = array("sort_example"); // string[] | Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported.
$type_equals = "type_equals_example"; // string | 
$type_in = array("type_in_example"); // string[] | 
$type_not_equals = "type_not_equals_example"; // string | 
$type_specified = true; // bool | 

try {
    $result = $apiInstance->getAllLinkedPeopleUsingGET($id_equals, $id_greater_than, $id_greater_than_or_equal, $id_in, $id_less_than, $id_less_than_or_equal, $id_not_equals, $id_specified, $linked_member_id_equals, $linked_member_id_greater_than, $linked_member_id_greater_than_or_equal, $linked_member_id_in, $linked_member_id_less_than, $linked_member_id_less_than_or_equal, $linked_member_id_not_equals, $linked_member_id_specified, $page, $principal_id_equals, $principal_id_greater_than, $principal_id_greater_than_or_equal, $principal_id_in, $principal_id_less_than, $principal_id_less_than_or_equal, $principal_id_not_equals, $principal_id_specified, $size, $sort, $type_equals, $type_in, $type_not_equals, $type_specified);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkedPersonResourceApi->getAllLinkedPeopleUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_equals** | **int**|  | [optional]
 **id_greater_than** | **int**|  | [optional]
 **id_greater_than_or_equal** | **int**|  | [optional]
 **id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **id_less_than** | **int**|  | [optional]
 **id_less_than_or_equal** | **int**|  | [optional]
 **id_not_equals** | **int**|  | [optional]
 **id_specified** | **bool**|  | [optional]
 **linked_member_id_equals** | **int**|  | [optional]
 **linked_member_id_greater_than** | **int**|  | [optional]
 **linked_member_id_greater_than_or_equal** | **int**|  | [optional]
 **linked_member_id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **linked_member_id_less_than** | **int**|  | [optional]
 **linked_member_id_less_than_or_equal** | **int**|  | [optional]
 **linked_member_id_not_equals** | **int**|  | [optional]
 **linked_member_id_specified** | **bool**|  | [optional]
 **page** | **int**| Page number of the requested page | [optional]
 **principal_id_equals** | **int**|  | [optional]
 **principal_id_greater_than** | **int**|  | [optional]
 **principal_id_greater_than_or_equal** | **int**|  | [optional]
 **principal_id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **principal_id_less_than** | **int**|  | [optional]
 **principal_id_less_than_or_equal** | **int**|  | [optional]
 **principal_id_not_equals** | **int**|  | [optional]
 **principal_id_specified** | **bool**|  | [optional]
 **size** | **int**| Size of a page | [optional]
 **sort** | [**string[]**](../Model/string.md)| Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported. | [optional]
 **type_equals** | **string**|  | [optional]
 **type_in** | [**string[]**](../Model/string.md)|  | [optional]
 **type_not_equals** | **string**|  | [optional]
 **type_specified** | **bool**|  | [optional]

### Return type

[**\Idealogic\MembershipAPI\Model\LinkedPersonDTO[]**](../Model/LinkedPersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLinkedPersonUsingGET**
> \Idealogic\MembershipAPI\Model\LinkedPersonDTO getLinkedPersonUsingGET($id)

getLinkedPerson

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\LinkedPersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | id

try {
    $result = $apiInstance->getLinkedPersonUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkedPersonResourceApi->getLinkedPersonUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Idealogic\MembershipAPI\Model\LinkedPersonDTO**](../Model/LinkedPersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLinkedPersonUsingPUT**
> \Idealogic\MembershipAPI\Model\LinkedPersonDTO updateLinkedPersonUsingPUT($linked_person_dto)

updateLinkedPerson

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\LinkedPersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$linked_person_dto = new \Idealogic\MembershipAPI\Model\LinkedPersonDTO(); // \Idealogic\MembershipAPI\Model\LinkedPersonDTO | linkedPersonDTO

try {
    $result = $apiInstance->updateLinkedPersonUsingPUT($linked_person_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkedPersonResourceApi->updateLinkedPersonUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **linked_person_dto** | [**\Idealogic\MembershipAPI\Model\LinkedPersonDTO**](../Model/LinkedPersonDTO.md)| linkedPersonDTO |

### Return type

[**\Idealogic\MembershipAPI\Model\LinkedPersonDTO**](../Model/LinkedPersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

