# Idealogic\MembershipAPI\MembershipTypeResourceApi

All URIs are relative to *https://http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**countMembershipTypesUsingGET**](MembershipTypeResourceApi.md#countMembershipTypesUsingGET) | **GET** /api/membership-types/count | countMembershipTypes
[**createMembershipTypeUsingPOST**](MembershipTypeResourceApi.md#createMembershipTypeUsingPOST) | **POST** /api/membership-types | createMembershipType
[**deleteMembershipTypeUsingDELETE**](MembershipTypeResourceApi.md#deleteMembershipTypeUsingDELETE) | **DELETE** /api/membership-types/{id} | deleteMembershipType
[**getAllMembershipTypesUsingGET**](MembershipTypeResourceApi.md#getAllMembershipTypesUsingGET) | **GET** /api/membership-types | getAllMembershipTypes
[**getMembershipTypeUsingGET**](MembershipTypeResourceApi.md#getMembershipTypeUsingGET) | **GET** /api/membership-types/{id} | getMembershipType
[**updateMembershipTypeUsingPUT**](MembershipTypeResourceApi.md#updateMembershipTypeUsingPUT) | **PUT** /api/membership-types | updateMembershipType


# **countMembershipTypesUsingGET**
> int countMembershipTypesUsingGET($id_equals, $id_greater_than, $id_greater_than_or_equal, $id_in, $id_less_than, $id_less_than_or_equal, $id_not_equals, $id_specified, $name_contains, $name_does_not_contain, $name_equals, $name_in, $name_not_equals, $name_specified, $number_type_id_equals, $number_type_id_greater_than, $number_type_id_greater_than_or_equal, $number_type_id_in, $number_type_id_less_than, $number_type_id_less_than_or_equal, $number_type_id_not_equals, $number_type_id_specified, $organisation_id)

countMembershipTypes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipTypeResourceApi(
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
$name_contains = "name_contains_example"; // string | 
$name_does_not_contain = "name_does_not_contain_example"; // string | 
$name_equals = "name_equals_example"; // string | 
$name_in = array("name_in_example"); // string[] | 
$name_not_equals = "name_not_equals_example"; // string | 
$name_specified = true; // bool | 
$number_type_id_equals = 56; // int | 
$number_type_id_greater_than = 56; // int | 
$number_type_id_greater_than_or_equal = 56; // int | 
$number_type_id_in = array(56); // int[] | 
$number_type_id_less_than = 56; // int | 
$number_type_id_less_than_or_equal = 56; // int | 
$number_type_id_not_equals = 56; // int | 
$number_type_id_specified = true; // bool | 
$organisation_id = 789; // int | 

try {
    $result = $apiInstance->countMembershipTypesUsingGET($id_equals, $id_greater_than, $id_greater_than_or_equal, $id_in, $id_less_than, $id_less_than_or_equal, $id_not_equals, $id_specified, $name_contains, $name_does_not_contain, $name_equals, $name_in, $name_not_equals, $name_specified, $number_type_id_equals, $number_type_id_greater_than, $number_type_id_greater_than_or_equal, $number_type_id_in, $number_type_id_less_than, $number_type_id_less_than_or_equal, $number_type_id_not_equals, $number_type_id_specified, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipTypeResourceApi->countMembershipTypesUsingGET: ', $e->getMessage(), PHP_EOL;
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
 **name_contains** | **string**|  | [optional]
 **name_does_not_contain** | **string**|  | [optional]
 **name_equals** | **string**|  | [optional]
 **name_in** | [**string[]**](../Model/string.md)|  | [optional]
 **name_not_equals** | **string**|  | [optional]
 **name_specified** | **bool**|  | [optional]
 **number_type_id_equals** | **int**|  | [optional]
 **number_type_id_greater_than** | **int**|  | [optional]
 **number_type_id_greater_than_or_equal** | **int**|  | [optional]
 **number_type_id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **number_type_id_less_than** | **int**|  | [optional]
 **number_type_id_less_than_or_equal** | **int**|  | [optional]
 **number_type_id_not_equals** | **int**|  | [optional]
 **number_type_id_specified** | **bool**|  | [optional]
 **organisation_id** | **int**|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMembershipTypeUsingPOST**
> \Idealogic\MembershipAPI\Model\MembershipTypeDTO createMembershipTypeUsingPOST($membership_type_dto)

createMembershipType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipTypeResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membership_type_dto = new \Idealogic\MembershipAPI\Model\MembershipTypeDTO(); // \Idealogic\MembershipAPI\Model\MembershipTypeDTO | membershipTypeDTO

try {
    $result = $apiInstance->createMembershipTypeUsingPOST($membership_type_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipTypeResourceApi->createMembershipTypeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membership_type_dto** | [**\Idealogic\MembershipAPI\Model\MembershipTypeDTO**](../Model/MembershipTypeDTO.md)| membershipTypeDTO |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipTypeDTO**](../Model/MembershipTypeDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMembershipTypeUsingDELETE**
> deleteMembershipTypeUsingDELETE($id)

deleteMembershipType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipTypeResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | id

try {
    $apiInstance->deleteMembershipTypeUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling MembershipTypeResourceApi->deleteMembershipTypeUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllMembershipTypesUsingGET**
> \Idealogic\MembershipAPI\Model\MembershipTypeDTO[] getAllMembershipTypesUsingGET($id_equals, $id_greater_than, $id_greater_than_or_equal, $id_in, $id_less_than, $id_less_than_or_equal, $id_not_equals, $id_specified, $name_contains, $name_does_not_contain, $name_equals, $name_in, $name_not_equals, $name_specified, $number_type_id_equals, $number_type_id_greater_than, $number_type_id_greater_than_or_equal, $number_type_id_in, $number_type_id_less_than, $number_type_id_less_than_or_equal, $number_type_id_not_equals, $number_type_id_specified, $organisation_id, $page, $size, $sort)

getAllMembershipTypes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipTypeResourceApi(
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
$name_contains = "name_contains_example"; // string | 
$name_does_not_contain = "name_does_not_contain_example"; // string | 
$name_equals = "name_equals_example"; // string | 
$name_in = array("name_in_example"); // string[] | 
$name_not_equals = "name_not_equals_example"; // string | 
$name_specified = true; // bool | 
$number_type_id_equals = 56; // int | 
$number_type_id_greater_than = 56; // int | 
$number_type_id_greater_than_or_equal = 56; // int | 
$number_type_id_in = array(56); // int[] | 
$number_type_id_less_than = 56; // int | 
$number_type_id_less_than_or_equal = 56; // int | 
$number_type_id_not_equals = 56; // int | 
$number_type_id_specified = true; // bool | 
$organisation_id = 789; // int | 
$page = 56; // int | Page number of the requested page
$size = 56; // int | Size of a page
$sort = array("sort_example"); // string[] | Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported.

try {
    $result = $apiInstance->getAllMembershipTypesUsingGET($id_equals, $id_greater_than, $id_greater_than_or_equal, $id_in, $id_less_than, $id_less_than_or_equal, $id_not_equals, $id_specified, $name_contains, $name_does_not_contain, $name_equals, $name_in, $name_not_equals, $name_specified, $number_type_id_equals, $number_type_id_greater_than, $number_type_id_greater_than_or_equal, $number_type_id_in, $number_type_id_less_than, $number_type_id_less_than_or_equal, $number_type_id_not_equals, $number_type_id_specified, $organisation_id, $page, $size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipTypeResourceApi->getAllMembershipTypesUsingGET: ', $e->getMessage(), PHP_EOL;
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
 **name_contains** | **string**|  | [optional]
 **name_does_not_contain** | **string**|  | [optional]
 **name_equals** | **string**|  | [optional]
 **name_in** | [**string[]**](../Model/string.md)|  | [optional]
 **name_not_equals** | **string**|  | [optional]
 **name_specified** | **bool**|  | [optional]
 **number_type_id_equals** | **int**|  | [optional]
 **number_type_id_greater_than** | **int**|  | [optional]
 **number_type_id_greater_than_or_equal** | **int**|  | [optional]
 **number_type_id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **number_type_id_less_than** | **int**|  | [optional]
 **number_type_id_less_than_or_equal** | **int**|  | [optional]
 **number_type_id_not_equals** | **int**|  | [optional]
 **number_type_id_specified** | **bool**|  | [optional]
 **organisation_id** | **int**|  | [optional]
 **page** | **int**| Page number of the requested page | [optional]
 **size** | **int**| Size of a page | [optional]
 **sort** | [**string[]**](../Model/string.md)| Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported. | [optional]

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipTypeDTO[]**](../Model/MembershipTypeDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMembershipTypeUsingGET**
> \Idealogic\MembershipAPI\Model\MembershipTypeDTO getMembershipTypeUsingGET($id)

getMembershipType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipTypeResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | id

try {
    $result = $apiInstance->getMembershipTypeUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipTypeResourceApi->getMembershipTypeUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipTypeDTO**](../Model/MembershipTypeDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMembershipTypeUsingPUT**
> \Idealogic\MembershipAPI\Model\MembershipTypeDTO updateMembershipTypeUsingPUT($membership_type_dto)

updateMembershipType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipTypeResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membership_type_dto = new \Idealogic\MembershipAPI\Model\MembershipTypeDTO(); // \Idealogic\MembershipAPI\Model\MembershipTypeDTO | membershipTypeDTO

try {
    $result = $apiInstance->updateMembershipTypeUsingPUT($membership_type_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipTypeResourceApi->updateMembershipTypeUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membership_type_dto** | [**\Idealogic\MembershipAPI\Model\MembershipTypeDTO**](../Model/MembershipTypeDTO.md)| membershipTypeDTO |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipTypeDTO**](../Model/MembershipTypeDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

