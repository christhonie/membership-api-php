# Idealogic\MembershipAPI\MembershipCriteriaResourceApi

All URIs are relative to *https://http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**countMembershipCriteriaUsingGET**](MembershipCriteriaResourceApi.md#countMembershipCriteriaUsingGET) | **GET** /api/membership-criteria/count | countMembershipCriteria
[**createMembershipCriteriaUsingPOST**](MembershipCriteriaResourceApi.md#createMembershipCriteriaUsingPOST) | **POST** /api/membership-criteria | createMembershipCriteria
[**deleteMembershipCriteriaUsingDELETE**](MembershipCriteriaResourceApi.md#deleteMembershipCriteriaUsingDELETE) | **DELETE** /api/membership-criteria/{id} | deleteMembershipCriteria
[**getAllMembershipCriteriaUsingGET**](MembershipCriteriaResourceApi.md#getAllMembershipCriteriaUsingGET) | **GET** /api/membership-criteria | getAllMembershipCriteria
[**getMembershipCriteriaUsingGET**](MembershipCriteriaResourceApi.md#getMembershipCriteriaUsingGET) | **GET** /api/membership-criteria/{id} | getMembershipCriteria
[**updateMembershipCriteriaUsingPUT**](MembershipCriteriaResourceApi.md#updateMembershipCriteriaUsingPUT) | **PUT** /api/membership-criteria | updateMembershipCriteria


# **countMembershipCriteriaUsingGET**
> int countMembershipCriteriaUsingGET($gender_equals, $gender_in, $gender_not_equals, $gender_specified, $id_equals, $id_greater_than, $id_greater_than_or_equal, $id_in, $id_less_than, $id_less_than_or_equal, $id_not_equals, $id_specified, $max_age_equals, $max_age_greater_than, $max_age_greater_than_or_equal, $max_age_in, $max_age_less_than, $max_age_less_than_or_equal, $max_age_not_equals, $max_age_specified, $min_age_equals, $min_age_greater_than, $min_age_greater_than_or_equal, $min_age_in, $min_age_less_than, $min_age_less_than_or_equal, $min_age_not_equals, $min_age_specified, $name_contains, $name_does_not_contain, $name_equals, $name_in, $name_not_equals, $name_specified, $number_type_id_equals, $number_type_id_greater_than, $number_type_id_greater_than_or_equal, $number_type_id_in, $number_type_id_less_than, $number_type_id_less_than_or_equal, $number_type_id_not_equals, $number_type_id_specified, $period_id_equals, $period_id_greater_than, $period_id_greater_than_or_equal, $period_id_in, $period_id_less_than, $period_id_less_than_or_equal, $period_id_not_equals, $period_id_specified, $product_id_equals, $product_id_greater_than, $product_id_greater_than_or_equal, $product_id_in, $product_id_less_than, $product_id_less_than_or_equal, $product_id_not_equals, $product_id_specified)

countMembershipCriteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipCriteriaResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gender_equals = "gender_equals_example"; // string | 
$gender_in = array("gender_in_example"); // string[] | 
$gender_not_equals = "gender_not_equals_example"; // string | 
$gender_specified = true; // bool | 
$id_equals = 789; // int | 
$id_greater_than = 789; // int | 
$id_greater_than_or_equal = 789; // int | 
$id_in = array(56); // int[] | 
$id_less_than = 789; // int | 
$id_less_than_or_equal = 789; // int | 
$id_not_equals = 789; // int | 
$id_specified = true; // bool | 
$max_age_equals = 56; // int | 
$max_age_greater_than = 56; // int | 
$max_age_greater_than_or_equal = 56; // int | 
$max_age_in = array(56); // int[] | 
$max_age_less_than = 56; // int | 
$max_age_less_than_or_equal = 56; // int | 
$max_age_not_equals = 56; // int | 
$max_age_specified = true; // bool | 
$min_age_equals = 56; // int | 
$min_age_greater_than = 56; // int | 
$min_age_greater_than_or_equal = 56; // int | 
$min_age_in = array(56); // int[] | 
$min_age_less_than = 56; // int | 
$min_age_less_than_or_equal = 56; // int | 
$min_age_not_equals = 56; // int | 
$min_age_specified = true; // bool | 
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
$period_id_equals = 789; // int | 
$period_id_greater_than = 789; // int | 
$period_id_greater_than_or_equal = 789; // int | 
$period_id_in = array(56); // int[] | 
$period_id_less_than = 789; // int | 
$period_id_less_than_or_equal = 789; // int | 
$period_id_not_equals = 789; // int | 
$period_id_specified = true; // bool | 
$product_id_equals = 789; // int | 
$product_id_greater_than = 789; // int | 
$product_id_greater_than_or_equal = 789; // int | 
$product_id_in = array(56); // int[] | 
$product_id_less_than = 789; // int | 
$product_id_less_than_or_equal = 789; // int | 
$product_id_not_equals = 789; // int | 
$product_id_specified = true; // bool | 

try {
    $result = $apiInstance->countMembershipCriteriaUsingGET($gender_equals, $gender_in, $gender_not_equals, $gender_specified, $id_equals, $id_greater_than, $id_greater_than_or_equal, $id_in, $id_less_than, $id_less_than_or_equal, $id_not_equals, $id_specified, $max_age_equals, $max_age_greater_than, $max_age_greater_than_or_equal, $max_age_in, $max_age_less_than, $max_age_less_than_or_equal, $max_age_not_equals, $max_age_specified, $min_age_equals, $min_age_greater_than, $min_age_greater_than_or_equal, $min_age_in, $min_age_less_than, $min_age_less_than_or_equal, $min_age_not_equals, $min_age_specified, $name_contains, $name_does_not_contain, $name_equals, $name_in, $name_not_equals, $name_specified, $number_type_id_equals, $number_type_id_greater_than, $number_type_id_greater_than_or_equal, $number_type_id_in, $number_type_id_less_than, $number_type_id_less_than_or_equal, $number_type_id_not_equals, $number_type_id_specified, $period_id_equals, $period_id_greater_than, $period_id_greater_than_or_equal, $period_id_in, $period_id_less_than, $period_id_less_than_or_equal, $period_id_not_equals, $period_id_specified, $product_id_equals, $product_id_greater_than, $product_id_greater_than_or_equal, $product_id_in, $product_id_less_than, $product_id_less_than_or_equal, $product_id_not_equals, $product_id_specified);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipCriteriaResourceApi->countMembershipCriteriaUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gender_equals** | **string**|  | [optional]
 **gender_in** | [**string[]**](../Model/string.md)|  | [optional]
 **gender_not_equals** | **string**|  | [optional]
 **gender_specified** | **bool**|  | [optional]
 **id_equals** | **int**|  | [optional]
 **id_greater_than** | **int**|  | [optional]
 **id_greater_than_or_equal** | **int**|  | [optional]
 **id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **id_less_than** | **int**|  | [optional]
 **id_less_than_or_equal** | **int**|  | [optional]
 **id_not_equals** | **int**|  | [optional]
 **id_specified** | **bool**|  | [optional]
 **max_age_equals** | **int**|  | [optional]
 **max_age_greater_than** | **int**|  | [optional]
 **max_age_greater_than_or_equal** | **int**|  | [optional]
 **max_age_in** | [**int[]**](../Model/int.md)|  | [optional]
 **max_age_less_than** | **int**|  | [optional]
 **max_age_less_than_or_equal** | **int**|  | [optional]
 **max_age_not_equals** | **int**|  | [optional]
 **max_age_specified** | **bool**|  | [optional]
 **min_age_equals** | **int**|  | [optional]
 **min_age_greater_than** | **int**|  | [optional]
 **min_age_greater_than_or_equal** | **int**|  | [optional]
 **min_age_in** | [**int[]**](../Model/int.md)|  | [optional]
 **min_age_less_than** | **int**|  | [optional]
 **min_age_less_than_or_equal** | **int**|  | [optional]
 **min_age_not_equals** | **int**|  | [optional]
 **min_age_specified** | **bool**|  | [optional]
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
 **period_id_equals** | **int**|  | [optional]
 **period_id_greater_than** | **int**|  | [optional]
 **period_id_greater_than_or_equal** | **int**|  | [optional]
 **period_id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **period_id_less_than** | **int**|  | [optional]
 **period_id_less_than_or_equal** | **int**|  | [optional]
 **period_id_not_equals** | **int**|  | [optional]
 **period_id_specified** | **bool**|  | [optional]
 **product_id_equals** | **int**|  | [optional]
 **product_id_greater_than** | **int**|  | [optional]
 **product_id_greater_than_or_equal** | **int**|  | [optional]
 **product_id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **product_id_less_than** | **int**|  | [optional]
 **product_id_less_than_or_equal** | **int**|  | [optional]
 **product_id_not_equals** | **int**|  | [optional]
 **product_id_specified** | **bool**|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMembershipCriteriaUsingPOST**
> \Idealogic\MembershipAPI\Model\MembershipCriteriaDTO createMembershipCriteriaUsingPOST($membership_criteria_dto)

createMembershipCriteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipCriteriaResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membership_criteria_dto = new \Idealogic\MembershipAPI\Model\MembershipCriteriaDTO(); // \Idealogic\MembershipAPI\Model\MembershipCriteriaDTO | membershipCriteriaDTO

try {
    $result = $apiInstance->createMembershipCriteriaUsingPOST($membership_criteria_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipCriteriaResourceApi->createMembershipCriteriaUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membership_criteria_dto** | [**\Idealogic\MembershipAPI\Model\MembershipCriteriaDTO**](../Model/MembershipCriteriaDTO.md)| membershipCriteriaDTO |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipCriteriaDTO**](../Model/MembershipCriteriaDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMembershipCriteriaUsingDELETE**
> deleteMembershipCriteriaUsingDELETE($id)

deleteMembershipCriteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipCriteriaResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | id

try {
    $apiInstance->deleteMembershipCriteriaUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling MembershipCriteriaResourceApi->deleteMembershipCriteriaUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllMembershipCriteriaUsingGET**
> \Idealogic\MembershipAPI\Model\MembershipCriteriaDTO[] getAllMembershipCriteriaUsingGET($gender_equals, $gender_in, $gender_not_equals, $gender_specified, $id_equals, $id_greater_than, $id_greater_than_or_equal, $id_in, $id_less_than, $id_less_than_or_equal, $id_not_equals, $id_specified, $max_age_equals, $max_age_greater_than, $max_age_greater_than_or_equal, $max_age_in, $max_age_less_than, $max_age_less_than_or_equal, $max_age_not_equals, $max_age_specified, $min_age_equals, $min_age_greater_than, $min_age_greater_than_or_equal, $min_age_in, $min_age_less_than, $min_age_less_than_or_equal, $min_age_not_equals, $min_age_specified, $name_contains, $name_does_not_contain, $name_equals, $name_in, $name_not_equals, $name_specified, $number_type_id_equals, $number_type_id_greater_than, $number_type_id_greater_than_or_equal, $number_type_id_in, $number_type_id_less_than, $number_type_id_less_than_or_equal, $number_type_id_not_equals, $number_type_id_specified, $page, $period_id_equals, $period_id_greater_than, $period_id_greater_than_or_equal, $period_id_in, $period_id_less_than, $period_id_less_than_or_equal, $period_id_not_equals, $period_id_specified, $product_id_equals, $product_id_greater_than, $product_id_greater_than_or_equal, $product_id_in, $product_id_less_than, $product_id_less_than_or_equal, $product_id_not_equals, $product_id_specified, $size, $sort)

getAllMembershipCriteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipCriteriaResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gender_equals = "gender_equals_example"; // string | 
$gender_in = array("gender_in_example"); // string[] | 
$gender_not_equals = "gender_not_equals_example"; // string | 
$gender_specified = true; // bool | 
$id_equals = 789; // int | 
$id_greater_than = 789; // int | 
$id_greater_than_or_equal = 789; // int | 
$id_in = array(56); // int[] | 
$id_less_than = 789; // int | 
$id_less_than_or_equal = 789; // int | 
$id_not_equals = 789; // int | 
$id_specified = true; // bool | 
$max_age_equals = 56; // int | 
$max_age_greater_than = 56; // int | 
$max_age_greater_than_or_equal = 56; // int | 
$max_age_in = array(56); // int[] | 
$max_age_less_than = 56; // int | 
$max_age_less_than_or_equal = 56; // int | 
$max_age_not_equals = 56; // int | 
$max_age_specified = true; // bool | 
$min_age_equals = 56; // int | 
$min_age_greater_than = 56; // int | 
$min_age_greater_than_or_equal = 56; // int | 
$min_age_in = array(56); // int[] | 
$min_age_less_than = 56; // int | 
$min_age_less_than_or_equal = 56; // int | 
$min_age_not_equals = 56; // int | 
$min_age_specified = true; // bool | 
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
$page = 56; // int | Page number of the requested page
$period_id_equals = 789; // int | 
$period_id_greater_than = 789; // int | 
$period_id_greater_than_or_equal = 789; // int | 
$period_id_in = array(56); // int[] | 
$period_id_less_than = 789; // int | 
$period_id_less_than_or_equal = 789; // int | 
$period_id_not_equals = 789; // int | 
$period_id_specified = true; // bool | 
$product_id_equals = 789; // int | 
$product_id_greater_than = 789; // int | 
$product_id_greater_than_or_equal = 789; // int | 
$product_id_in = array(56); // int[] | 
$product_id_less_than = 789; // int | 
$product_id_less_than_or_equal = 789; // int | 
$product_id_not_equals = 789; // int | 
$product_id_specified = true; // bool | 
$size = 56; // int | Size of a page
$sort = array("sort_example"); // string[] | Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported.

try {
    $result = $apiInstance->getAllMembershipCriteriaUsingGET($gender_equals, $gender_in, $gender_not_equals, $gender_specified, $id_equals, $id_greater_than, $id_greater_than_or_equal, $id_in, $id_less_than, $id_less_than_or_equal, $id_not_equals, $id_specified, $max_age_equals, $max_age_greater_than, $max_age_greater_than_or_equal, $max_age_in, $max_age_less_than, $max_age_less_than_or_equal, $max_age_not_equals, $max_age_specified, $min_age_equals, $min_age_greater_than, $min_age_greater_than_or_equal, $min_age_in, $min_age_less_than, $min_age_less_than_or_equal, $min_age_not_equals, $min_age_specified, $name_contains, $name_does_not_contain, $name_equals, $name_in, $name_not_equals, $name_specified, $number_type_id_equals, $number_type_id_greater_than, $number_type_id_greater_than_or_equal, $number_type_id_in, $number_type_id_less_than, $number_type_id_less_than_or_equal, $number_type_id_not_equals, $number_type_id_specified, $page, $period_id_equals, $period_id_greater_than, $period_id_greater_than_or_equal, $period_id_in, $period_id_less_than, $period_id_less_than_or_equal, $period_id_not_equals, $period_id_specified, $product_id_equals, $product_id_greater_than, $product_id_greater_than_or_equal, $product_id_in, $product_id_less_than, $product_id_less_than_or_equal, $product_id_not_equals, $product_id_specified, $size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipCriteriaResourceApi->getAllMembershipCriteriaUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gender_equals** | **string**|  | [optional]
 **gender_in** | [**string[]**](../Model/string.md)|  | [optional]
 **gender_not_equals** | **string**|  | [optional]
 **gender_specified** | **bool**|  | [optional]
 **id_equals** | **int**|  | [optional]
 **id_greater_than** | **int**|  | [optional]
 **id_greater_than_or_equal** | **int**|  | [optional]
 **id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **id_less_than** | **int**|  | [optional]
 **id_less_than_or_equal** | **int**|  | [optional]
 **id_not_equals** | **int**|  | [optional]
 **id_specified** | **bool**|  | [optional]
 **max_age_equals** | **int**|  | [optional]
 **max_age_greater_than** | **int**|  | [optional]
 **max_age_greater_than_or_equal** | **int**|  | [optional]
 **max_age_in** | [**int[]**](../Model/int.md)|  | [optional]
 **max_age_less_than** | **int**|  | [optional]
 **max_age_less_than_or_equal** | **int**|  | [optional]
 **max_age_not_equals** | **int**|  | [optional]
 **max_age_specified** | **bool**|  | [optional]
 **min_age_equals** | **int**|  | [optional]
 **min_age_greater_than** | **int**|  | [optional]
 **min_age_greater_than_or_equal** | **int**|  | [optional]
 **min_age_in** | [**int[]**](../Model/int.md)|  | [optional]
 **min_age_less_than** | **int**|  | [optional]
 **min_age_less_than_or_equal** | **int**|  | [optional]
 **min_age_not_equals** | **int**|  | [optional]
 **min_age_specified** | **bool**|  | [optional]
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
 **page** | **int**| Page number of the requested page | [optional]
 **period_id_equals** | **int**|  | [optional]
 **period_id_greater_than** | **int**|  | [optional]
 **period_id_greater_than_or_equal** | **int**|  | [optional]
 **period_id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **period_id_less_than** | **int**|  | [optional]
 **period_id_less_than_or_equal** | **int**|  | [optional]
 **period_id_not_equals** | **int**|  | [optional]
 **period_id_specified** | **bool**|  | [optional]
 **product_id_equals** | **int**|  | [optional]
 **product_id_greater_than** | **int**|  | [optional]
 **product_id_greater_than_or_equal** | **int**|  | [optional]
 **product_id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **product_id_less_than** | **int**|  | [optional]
 **product_id_less_than_or_equal** | **int**|  | [optional]
 **product_id_not_equals** | **int**|  | [optional]
 **product_id_specified** | **bool**|  | [optional]
 **size** | **int**| Size of a page | [optional]
 **sort** | [**string[]**](../Model/string.md)| Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported. | [optional]

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipCriteriaDTO[]**](../Model/MembershipCriteriaDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMembershipCriteriaUsingGET**
> \Idealogic\MembershipAPI\Model\MembershipCriteriaDTO getMembershipCriteriaUsingGET($id)

getMembershipCriteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipCriteriaResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | id

try {
    $result = $apiInstance->getMembershipCriteriaUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipCriteriaResourceApi->getMembershipCriteriaUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipCriteriaDTO**](../Model/MembershipCriteriaDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMembershipCriteriaUsingPUT**
> \Idealogic\MembershipAPI\Model\MembershipCriteriaDTO updateMembershipCriteriaUsingPUT($membership_criteria_dto)

updateMembershipCriteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipCriteriaResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membership_criteria_dto = new \Idealogic\MembershipAPI\Model\MembershipCriteriaDTO(); // \Idealogic\MembershipAPI\Model\MembershipCriteriaDTO | membershipCriteriaDTO

try {
    $result = $apiInstance->updateMembershipCriteriaUsingPUT($membership_criteria_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipCriteriaResourceApi->updateMembershipCriteriaUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membership_criteria_dto** | [**\Idealogic\MembershipAPI\Model\MembershipCriteriaDTO**](../Model/MembershipCriteriaDTO.md)| membershipCriteriaDTO |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipCriteriaDTO**](../Model/MembershipCriteriaDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

