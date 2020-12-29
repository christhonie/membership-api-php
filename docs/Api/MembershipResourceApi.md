# Idealogic\MembershipAPI\MembershipResourceApi

All URIs are relative to *https://http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**countMembershipsUsingGET**](MembershipResourceApi.md#countMembershipsUsingGET) | **GET** /api/memberships/count | countMemberships
[**createMembershipUsingPOST**](MembershipResourceApi.md#createMembershipUsingPOST) | **POST** /api/memberships | createMembership
[**deleteMembershipUsingDELETE**](MembershipResourceApi.md#deleteMembershipUsingDELETE) | **DELETE** /api/memberships/{id} | deleteMembership
[**getAllMembershipsUsingGET**](MembershipResourceApi.md#getAllMembershipsUsingGET) | **GET** /api/memberships | getAllMemberships
[**getLinkedMembersUsingGET**](MembershipResourceApi.md#getLinkedMembersUsingGET) | **GET** /api/memberships/linkedStatus/{externalPersonId} | getLinkedMembers
[**getMainMemberUsingGET**](MembershipResourceApi.md#getMainMemberUsingGET) | **GET** /api/memberships/status/{externalPersonId} | getMainMember
[**getMembershipUsingGET**](MembershipResourceApi.md#getMembershipUsingGET) | **GET** /api/memberships/{id} | getMembership
[**updateMembershipUsingPUT**](MembershipResourceApi.md#updateMembershipUsingPUT) | **PUT** /api/memberships | updateMembership


# **countMembershipsUsingGET**
> int countMembershipsUsingGET($criteria_id_equals, $criteria_id_greater_than, $criteria_id_greater_than_or_equal, $criteria_id_in, $criteria_id_less_than, $criteria_id_less_than_or_equal, $criteria_id_not_equals, $criteria_id_specified, $id_equals, $id_greater_than, $id_greater_than_or_equal, $id_in, $id_less_than, $id_less_than_or_equal, $id_not_equals, $id_specified, $membership_period_id_equals, $membership_period_id_greater_than, $membership_period_id_greater_than_or_equal, $membership_period_id_in, $membership_period_id_less_than, $membership_period_id_less_than_or_equal, $membership_period_id_not_equals, $membership_period_id_specified, $number_id_equals, $number_id_greater_than, $number_id_greater_than_or_equal, $number_id_in, $number_id_less_than, $number_id_less_than_or_equal, $number_id_not_equals, $number_id_specified, $order_id_equals, $order_id_greater_than, $order_id_greater_than_or_equal, $order_id_in, $order_id_less_than, $order_id_less_than_or_equal, $order_id_not_equals, $order_id_specified, $person_id_equals, $person_id_greater_than, $person_id_greater_than_or_equal, $person_id_in, $person_id_less_than, $person_id_less_than_or_equal, $person_id_not_equals, $person_id_specified, $status_equals, $status_in, $status_not_equals, $status_specified, $valid_from_equals, $valid_from_greater_than, $valid_from_greater_than_or_equal, $valid_from_in_0_chronology_calendar_type, $valid_from_in_0_chronology_id, $valid_from_in_0_day_of_month, $valid_from_in_0_day_of_week, $valid_from_in_0_day_of_year, $valid_from_in_0_era_value, $valid_from_in_0_leap_year, $valid_from_in_0_month, $valid_from_in_0_month_value, $valid_from_in_0_year, $valid_from_less_than, $valid_from_less_than_or_equal, $valid_from_not_equals, $valid_from_specified, $valid_to_equals, $valid_to_greater_than, $valid_to_greater_than_or_equal, $valid_to_in_0_chronology_calendar_type, $valid_to_in_0_chronology_id, $valid_to_in_0_day_of_month, $valid_to_in_0_day_of_week, $valid_to_in_0_day_of_year, $valid_to_in_0_era_value, $valid_to_in_0_leap_year, $valid_to_in_0_month, $valid_to_in_0_month_value, $valid_to_in_0_year, $valid_to_less_than, $valid_to_less_than_or_equal, $valid_to_not_equals, $valid_to_specified)

countMemberships

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$criteria_id_equals = 789; // int | 
$criteria_id_greater_than = 789; // int | 
$criteria_id_greater_than_or_equal = 789; // int | 
$criteria_id_in = array(56); // int[] | 
$criteria_id_less_than = 789; // int | 
$criteria_id_less_than_or_equal = 789; // int | 
$criteria_id_not_equals = 789; // int | 
$criteria_id_specified = true; // bool | 
$id_equals = 789; // int | 
$id_greater_than = 789; // int | 
$id_greater_than_or_equal = 789; // int | 
$id_in = array(56); // int[] | 
$id_less_than = 789; // int | 
$id_less_than_or_equal = 789; // int | 
$id_not_equals = 789; // int | 
$id_specified = true; // bool | 
$membership_period_id_equals = 789; // int | 
$membership_period_id_greater_than = 789; // int | 
$membership_period_id_greater_than_or_equal = 789; // int | 
$membership_period_id_in = array(56); // int[] | 
$membership_period_id_less_than = 789; // int | 
$membership_period_id_less_than_or_equal = 789; // int | 
$membership_period_id_not_equals = 789; // int | 
$membership_period_id_specified = true; // bool | 
$number_id_equals = 56; // int | 
$number_id_greater_than = 56; // int | 
$number_id_greater_than_or_equal = 56; // int | 
$number_id_in = array(56); // int[] | 
$number_id_less_than = 56; // int | 
$number_id_less_than_or_equal = 56; // int | 
$number_id_not_equals = 56; // int | 
$number_id_specified = true; // bool | 
$order_id_equals = 789; // int | 
$order_id_greater_than = 789; // int | 
$order_id_greater_than_or_equal = 789; // int | 
$order_id_in = array(56); // int[] | 
$order_id_less_than = 789; // int | 
$order_id_less_than_or_equal = 789; // int | 
$order_id_not_equals = 789; // int | 
$order_id_specified = true; // bool | 
$person_id_equals = 789; // int | 
$person_id_greater_than = 789; // int | 
$person_id_greater_than_or_equal = 789; // int | 
$person_id_in = array(56); // int[] | 
$person_id_less_than = 789; // int | 
$person_id_less_than_or_equal = 789; // int | 
$person_id_not_equals = 789; // int | 
$person_id_specified = true; // bool | 
$status_equals = "status_equals_example"; // string | 
$status_in = array("status_in_example"); // string[] | 
$status_not_equals = "status_not_equals_example"; // string | 
$status_specified = true; // bool | 
$valid_from_equals = new \DateTime("2013-10-20"); // \DateTime | 
$valid_from_greater_than = new \DateTime("2013-10-20"); // \DateTime | 
$valid_from_greater_than_or_equal = new \DateTime("2013-10-20"); // \DateTime | 
$valid_from_in_0_chronology_calendar_type = "valid_from_in_0_chronology_calendar_type_example"; // string | 
$valid_from_in_0_chronology_id = "valid_from_in_0_chronology_id_example"; // string | 
$valid_from_in_0_day_of_month = 56; // int | 
$valid_from_in_0_day_of_week = "valid_from_in_0_day_of_week_example"; // string | 
$valid_from_in_0_day_of_year = 56; // int | 
$valid_from_in_0_era_value = 56; // int | 
$valid_from_in_0_leap_year = true; // bool | 
$valid_from_in_0_month = "valid_from_in_0_month_example"; // string | 
$valid_from_in_0_month_value = 56; // int | 
$valid_from_in_0_year = 56; // int | 
$valid_from_less_than = new \DateTime("2013-10-20"); // \DateTime | 
$valid_from_less_than_or_equal = new \DateTime("2013-10-20"); // \DateTime | 
$valid_from_not_equals = new \DateTime("2013-10-20"); // \DateTime | 
$valid_from_specified = true; // bool | 
$valid_to_equals = new \DateTime("2013-10-20"); // \DateTime | 
$valid_to_greater_than = new \DateTime("2013-10-20"); // \DateTime | 
$valid_to_greater_than_or_equal = new \DateTime("2013-10-20"); // \DateTime | 
$valid_to_in_0_chronology_calendar_type = "valid_to_in_0_chronology_calendar_type_example"; // string | 
$valid_to_in_0_chronology_id = "valid_to_in_0_chronology_id_example"; // string | 
$valid_to_in_0_day_of_month = 56; // int | 
$valid_to_in_0_day_of_week = "valid_to_in_0_day_of_week_example"; // string | 
$valid_to_in_0_day_of_year = 56; // int | 
$valid_to_in_0_era_value = 56; // int | 
$valid_to_in_0_leap_year = true; // bool | 
$valid_to_in_0_month = "valid_to_in_0_month_example"; // string | 
$valid_to_in_0_month_value = 56; // int | 
$valid_to_in_0_year = 56; // int | 
$valid_to_less_than = new \DateTime("2013-10-20"); // \DateTime | 
$valid_to_less_than_or_equal = new \DateTime("2013-10-20"); // \DateTime | 
$valid_to_not_equals = new \DateTime("2013-10-20"); // \DateTime | 
$valid_to_specified = true; // bool | 

try {
    $result = $apiInstance->countMembershipsUsingGET($criteria_id_equals, $criteria_id_greater_than, $criteria_id_greater_than_or_equal, $criteria_id_in, $criteria_id_less_than, $criteria_id_less_than_or_equal, $criteria_id_not_equals, $criteria_id_specified, $id_equals, $id_greater_than, $id_greater_than_or_equal, $id_in, $id_less_than, $id_less_than_or_equal, $id_not_equals, $id_specified, $membership_period_id_equals, $membership_period_id_greater_than, $membership_period_id_greater_than_or_equal, $membership_period_id_in, $membership_period_id_less_than, $membership_period_id_less_than_or_equal, $membership_period_id_not_equals, $membership_period_id_specified, $number_id_equals, $number_id_greater_than, $number_id_greater_than_or_equal, $number_id_in, $number_id_less_than, $number_id_less_than_or_equal, $number_id_not_equals, $number_id_specified, $order_id_equals, $order_id_greater_than, $order_id_greater_than_or_equal, $order_id_in, $order_id_less_than, $order_id_less_than_or_equal, $order_id_not_equals, $order_id_specified, $person_id_equals, $person_id_greater_than, $person_id_greater_than_or_equal, $person_id_in, $person_id_less_than, $person_id_less_than_or_equal, $person_id_not_equals, $person_id_specified, $status_equals, $status_in, $status_not_equals, $status_specified, $valid_from_equals, $valid_from_greater_than, $valid_from_greater_than_or_equal, $valid_from_in_0_chronology_calendar_type, $valid_from_in_0_chronology_id, $valid_from_in_0_day_of_month, $valid_from_in_0_day_of_week, $valid_from_in_0_day_of_year, $valid_from_in_0_era_value, $valid_from_in_0_leap_year, $valid_from_in_0_month, $valid_from_in_0_month_value, $valid_from_in_0_year, $valid_from_less_than, $valid_from_less_than_or_equal, $valid_from_not_equals, $valid_from_specified, $valid_to_equals, $valid_to_greater_than, $valid_to_greater_than_or_equal, $valid_to_in_0_chronology_calendar_type, $valid_to_in_0_chronology_id, $valid_to_in_0_day_of_month, $valid_to_in_0_day_of_week, $valid_to_in_0_day_of_year, $valid_to_in_0_era_value, $valid_to_in_0_leap_year, $valid_to_in_0_month, $valid_to_in_0_month_value, $valid_to_in_0_year, $valid_to_less_than, $valid_to_less_than_or_equal, $valid_to_not_equals, $valid_to_specified);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceApi->countMembershipsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **criteria_id_equals** | **int**|  | [optional]
 **criteria_id_greater_than** | **int**|  | [optional]
 **criteria_id_greater_than_or_equal** | **int**|  | [optional]
 **criteria_id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **criteria_id_less_than** | **int**|  | [optional]
 **criteria_id_less_than_or_equal** | **int**|  | [optional]
 **criteria_id_not_equals** | **int**|  | [optional]
 **criteria_id_specified** | **bool**|  | [optional]
 **id_equals** | **int**|  | [optional]
 **id_greater_than** | **int**|  | [optional]
 **id_greater_than_or_equal** | **int**|  | [optional]
 **id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **id_less_than** | **int**|  | [optional]
 **id_less_than_or_equal** | **int**|  | [optional]
 **id_not_equals** | **int**|  | [optional]
 **id_specified** | **bool**|  | [optional]
 **membership_period_id_equals** | **int**|  | [optional]
 **membership_period_id_greater_than** | **int**|  | [optional]
 **membership_period_id_greater_than_or_equal** | **int**|  | [optional]
 **membership_period_id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **membership_period_id_less_than** | **int**|  | [optional]
 **membership_period_id_less_than_or_equal** | **int**|  | [optional]
 **membership_period_id_not_equals** | **int**|  | [optional]
 **membership_period_id_specified** | **bool**|  | [optional]
 **number_id_equals** | **int**|  | [optional]
 **number_id_greater_than** | **int**|  | [optional]
 **number_id_greater_than_or_equal** | **int**|  | [optional]
 **number_id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **number_id_less_than** | **int**|  | [optional]
 **number_id_less_than_or_equal** | **int**|  | [optional]
 **number_id_not_equals** | **int**|  | [optional]
 **number_id_specified** | **bool**|  | [optional]
 **order_id_equals** | **int**|  | [optional]
 **order_id_greater_than** | **int**|  | [optional]
 **order_id_greater_than_or_equal** | **int**|  | [optional]
 **order_id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **order_id_less_than** | **int**|  | [optional]
 **order_id_less_than_or_equal** | **int**|  | [optional]
 **order_id_not_equals** | **int**|  | [optional]
 **order_id_specified** | **bool**|  | [optional]
 **person_id_equals** | **int**|  | [optional]
 **person_id_greater_than** | **int**|  | [optional]
 **person_id_greater_than_or_equal** | **int**|  | [optional]
 **person_id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **person_id_less_than** | **int**|  | [optional]
 **person_id_less_than_or_equal** | **int**|  | [optional]
 **person_id_not_equals** | **int**|  | [optional]
 **person_id_specified** | **bool**|  | [optional]
 **status_equals** | **string**|  | [optional]
 **status_in** | [**string[]**](../Model/string.md)|  | [optional]
 **status_not_equals** | **string**|  | [optional]
 **status_specified** | **bool**|  | [optional]
 **valid_from_equals** | **\DateTime**|  | [optional]
 **valid_from_greater_than** | **\DateTime**|  | [optional]
 **valid_from_greater_than_or_equal** | **\DateTime**|  | [optional]
 **valid_from_in_0_chronology_calendar_type** | **string**|  | [optional]
 **valid_from_in_0_chronology_id** | **string**|  | [optional]
 **valid_from_in_0_day_of_month** | **int**|  | [optional]
 **valid_from_in_0_day_of_week** | **string**|  | [optional]
 **valid_from_in_0_day_of_year** | **int**|  | [optional]
 **valid_from_in_0_era_value** | **int**|  | [optional]
 **valid_from_in_0_leap_year** | **bool**|  | [optional]
 **valid_from_in_0_month** | **string**|  | [optional]
 **valid_from_in_0_month_value** | **int**|  | [optional]
 **valid_from_in_0_year** | **int**|  | [optional]
 **valid_from_less_than** | **\DateTime**|  | [optional]
 **valid_from_less_than_or_equal** | **\DateTime**|  | [optional]
 **valid_from_not_equals** | **\DateTime**|  | [optional]
 **valid_from_specified** | **bool**|  | [optional]
 **valid_to_equals** | **\DateTime**|  | [optional]
 **valid_to_greater_than** | **\DateTime**|  | [optional]
 **valid_to_greater_than_or_equal** | **\DateTime**|  | [optional]
 **valid_to_in_0_chronology_calendar_type** | **string**|  | [optional]
 **valid_to_in_0_chronology_id** | **string**|  | [optional]
 **valid_to_in_0_day_of_month** | **int**|  | [optional]
 **valid_to_in_0_day_of_week** | **string**|  | [optional]
 **valid_to_in_0_day_of_year** | **int**|  | [optional]
 **valid_to_in_0_era_value** | **int**|  | [optional]
 **valid_to_in_0_leap_year** | **bool**|  | [optional]
 **valid_to_in_0_month** | **string**|  | [optional]
 **valid_to_in_0_month_value** | **int**|  | [optional]
 **valid_to_in_0_year** | **int**|  | [optional]
 **valid_to_less_than** | **\DateTime**|  | [optional]
 **valid_to_less_than_or_equal** | **\DateTime**|  | [optional]
 **valid_to_not_equals** | **\DateTime**|  | [optional]
 **valid_to_specified** | **bool**|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMembershipUsingPOST**
> \Idealogic\MembershipAPI\Model\MembershipDTO createMembershipUsingPOST($membership_dto)

createMembership

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membership_dto = new \Idealogic\MembershipAPI\Model\MembershipDTO(); // \Idealogic\MembershipAPI\Model\MembershipDTO | membershipDTO

try {
    $result = $apiInstance->createMembershipUsingPOST($membership_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceApi->createMembershipUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membership_dto** | [**\Idealogic\MembershipAPI\Model\MembershipDTO**](../Model/MembershipDTO.md)| membershipDTO |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipDTO**](../Model/MembershipDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMembershipUsingDELETE**
> deleteMembershipUsingDELETE($id)

deleteMembership

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | id

try {
    $apiInstance->deleteMembershipUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceApi->deleteMembershipUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllMembershipsUsingGET**
> \Idealogic\MembershipAPI\Model\MembershipDTO[] getAllMembershipsUsingGET($criteria_id_equals, $criteria_id_greater_than, $criteria_id_greater_than_or_equal, $criteria_id_in, $criteria_id_less_than, $criteria_id_less_than_or_equal, $criteria_id_not_equals, $criteria_id_specified, $id_equals, $id_greater_than, $id_greater_than_or_equal, $id_in, $id_less_than, $id_less_than_or_equal, $id_not_equals, $id_specified, $membership_period_id_equals, $membership_period_id_greater_than, $membership_period_id_greater_than_or_equal, $membership_period_id_in, $membership_period_id_less_than, $membership_period_id_less_than_or_equal, $membership_period_id_not_equals, $membership_period_id_specified, $number_id_equals, $number_id_greater_than, $number_id_greater_than_or_equal, $number_id_in, $number_id_less_than, $number_id_less_than_or_equal, $number_id_not_equals, $number_id_specified, $order_id_equals, $order_id_greater_than, $order_id_greater_than_or_equal, $order_id_in, $order_id_less_than, $order_id_less_than_or_equal, $order_id_not_equals, $order_id_specified, $page, $person_id_equals, $person_id_greater_than, $person_id_greater_than_or_equal, $person_id_in, $person_id_less_than, $person_id_less_than_or_equal, $person_id_not_equals, $person_id_specified, $size, $sort, $status_equals, $status_in, $status_not_equals, $status_specified, $valid_from_equals, $valid_from_greater_than, $valid_from_greater_than_or_equal, $valid_from_in_0_chronology_calendar_type, $valid_from_in_0_chronology_id, $valid_from_in_0_day_of_month, $valid_from_in_0_day_of_week, $valid_from_in_0_day_of_year, $valid_from_in_0_era_value, $valid_from_in_0_leap_year, $valid_from_in_0_month, $valid_from_in_0_month_value, $valid_from_in_0_year, $valid_from_less_than, $valid_from_less_than_or_equal, $valid_from_not_equals, $valid_from_specified, $valid_to_equals, $valid_to_greater_than, $valid_to_greater_than_or_equal, $valid_to_in_0_chronology_calendar_type, $valid_to_in_0_chronology_id, $valid_to_in_0_day_of_month, $valid_to_in_0_day_of_week, $valid_to_in_0_day_of_year, $valid_to_in_0_era_value, $valid_to_in_0_leap_year, $valid_to_in_0_month, $valid_to_in_0_month_value, $valid_to_in_0_year, $valid_to_less_than, $valid_to_less_than_or_equal, $valid_to_not_equals, $valid_to_specified)

getAllMemberships

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$criteria_id_equals = 789; // int | 
$criteria_id_greater_than = 789; // int | 
$criteria_id_greater_than_or_equal = 789; // int | 
$criteria_id_in = array(56); // int[] | 
$criteria_id_less_than = 789; // int | 
$criteria_id_less_than_or_equal = 789; // int | 
$criteria_id_not_equals = 789; // int | 
$criteria_id_specified = true; // bool | 
$id_equals = 789; // int | 
$id_greater_than = 789; // int | 
$id_greater_than_or_equal = 789; // int | 
$id_in = array(56); // int[] | 
$id_less_than = 789; // int | 
$id_less_than_or_equal = 789; // int | 
$id_not_equals = 789; // int | 
$id_specified = true; // bool | 
$membership_period_id_equals = 789; // int | 
$membership_period_id_greater_than = 789; // int | 
$membership_period_id_greater_than_or_equal = 789; // int | 
$membership_period_id_in = array(56); // int[] | 
$membership_period_id_less_than = 789; // int | 
$membership_period_id_less_than_or_equal = 789; // int | 
$membership_period_id_not_equals = 789; // int | 
$membership_period_id_specified = true; // bool | 
$number_id_equals = 56; // int | 
$number_id_greater_than = 56; // int | 
$number_id_greater_than_or_equal = 56; // int | 
$number_id_in = array(56); // int[] | 
$number_id_less_than = 56; // int | 
$number_id_less_than_or_equal = 56; // int | 
$number_id_not_equals = 56; // int | 
$number_id_specified = true; // bool | 
$order_id_equals = 789; // int | 
$order_id_greater_than = 789; // int | 
$order_id_greater_than_or_equal = 789; // int | 
$order_id_in = array(56); // int[] | 
$order_id_less_than = 789; // int | 
$order_id_less_than_or_equal = 789; // int | 
$order_id_not_equals = 789; // int | 
$order_id_specified = true; // bool | 
$page = 56; // int | Page number of the requested page
$person_id_equals = 789; // int | 
$person_id_greater_than = 789; // int | 
$person_id_greater_than_or_equal = 789; // int | 
$person_id_in = array(56); // int[] | 
$person_id_less_than = 789; // int | 
$person_id_less_than_or_equal = 789; // int | 
$person_id_not_equals = 789; // int | 
$person_id_specified = true; // bool | 
$size = 56; // int | Size of a page
$sort = array("sort_example"); // string[] | Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported.
$status_equals = "status_equals_example"; // string | 
$status_in = array("status_in_example"); // string[] | 
$status_not_equals = "status_not_equals_example"; // string | 
$status_specified = true; // bool | 
$valid_from_equals = new \DateTime("2013-10-20"); // \DateTime | 
$valid_from_greater_than = new \DateTime("2013-10-20"); // \DateTime | 
$valid_from_greater_than_or_equal = new \DateTime("2013-10-20"); // \DateTime | 
$valid_from_in_0_chronology_calendar_type = "valid_from_in_0_chronology_calendar_type_example"; // string | 
$valid_from_in_0_chronology_id = "valid_from_in_0_chronology_id_example"; // string | 
$valid_from_in_0_day_of_month = 56; // int | 
$valid_from_in_0_day_of_week = "valid_from_in_0_day_of_week_example"; // string | 
$valid_from_in_0_day_of_year = 56; // int | 
$valid_from_in_0_era_value = 56; // int | 
$valid_from_in_0_leap_year = true; // bool | 
$valid_from_in_0_month = "valid_from_in_0_month_example"; // string | 
$valid_from_in_0_month_value = 56; // int | 
$valid_from_in_0_year = 56; // int | 
$valid_from_less_than = new \DateTime("2013-10-20"); // \DateTime | 
$valid_from_less_than_or_equal = new \DateTime("2013-10-20"); // \DateTime | 
$valid_from_not_equals = new \DateTime("2013-10-20"); // \DateTime | 
$valid_from_specified = true; // bool | 
$valid_to_equals = new \DateTime("2013-10-20"); // \DateTime | 
$valid_to_greater_than = new \DateTime("2013-10-20"); // \DateTime | 
$valid_to_greater_than_or_equal = new \DateTime("2013-10-20"); // \DateTime | 
$valid_to_in_0_chronology_calendar_type = "valid_to_in_0_chronology_calendar_type_example"; // string | 
$valid_to_in_0_chronology_id = "valid_to_in_0_chronology_id_example"; // string | 
$valid_to_in_0_day_of_month = 56; // int | 
$valid_to_in_0_day_of_week = "valid_to_in_0_day_of_week_example"; // string | 
$valid_to_in_0_day_of_year = 56; // int | 
$valid_to_in_0_era_value = 56; // int | 
$valid_to_in_0_leap_year = true; // bool | 
$valid_to_in_0_month = "valid_to_in_0_month_example"; // string | 
$valid_to_in_0_month_value = 56; // int | 
$valid_to_in_0_year = 56; // int | 
$valid_to_less_than = new \DateTime("2013-10-20"); // \DateTime | 
$valid_to_less_than_or_equal = new \DateTime("2013-10-20"); // \DateTime | 
$valid_to_not_equals = new \DateTime("2013-10-20"); // \DateTime | 
$valid_to_specified = true; // bool | 

try {
    $result = $apiInstance->getAllMembershipsUsingGET($criteria_id_equals, $criteria_id_greater_than, $criteria_id_greater_than_or_equal, $criteria_id_in, $criteria_id_less_than, $criteria_id_less_than_or_equal, $criteria_id_not_equals, $criteria_id_specified, $id_equals, $id_greater_than, $id_greater_than_or_equal, $id_in, $id_less_than, $id_less_than_or_equal, $id_not_equals, $id_specified, $membership_period_id_equals, $membership_period_id_greater_than, $membership_period_id_greater_than_or_equal, $membership_period_id_in, $membership_period_id_less_than, $membership_period_id_less_than_or_equal, $membership_period_id_not_equals, $membership_period_id_specified, $number_id_equals, $number_id_greater_than, $number_id_greater_than_or_equal, $number_id_in, $number_id_less_than, $number_id_less_than_or_equal, $number_id_not_equals, $number_id_specified, $order_id_equals, $order_id_greater_than, $order_id_greater_than_or_equal, $order_id_in, $order_id_less_than, $order_id_less_than_or_equal, $order_id_not_equals, $order_id_specified, $page, $person_id_equals, $person_id_greater_than, $person_id_greater_than_or_equal, $person_id_in, $person_id_less_than, $person_id_less_than_or_equal, $person_id_not_equals, $person_id_specified, $size, $sort, $status_equals, $status_in, $status_not_equals, $status_specified, $valid_from_equals, $valid_from_greater_than, $valid_from_greater_than_or_equal, $valid_from_in_0_chronology_calendar_type, $valid_from_in_0_chronology_id, $valid_from_in_0_day_of_month, $valid_from_in_0_day_of_week, $valid_from_in_0_day_of_year, $valid_from_in_0_era_value, $valid_from_in_0_leap_year, $valid_from_in_0_month, $valid_from_in_0_month_value, $valid_from_in_0_year, $valid_from_less_than, $valid_from_less_than_or_equal, $valid_from_not_equals, $valid_from_specified, $valid_to_equals, $valid_to_greater_than, $valid_to_greater_than_or_equal, $valid_to_in_0_chronology_calendar_type, $valid_to_in_0_chronology_id, $valid_to_in_0_day_of_month, $valid_to_in_0_day_of_week, $valid_to_in_0_day_of_year, $valid_to_in_0_era_value, $valid_to_in_0_leap_year, $valid_to_in_0_month, $valid_to_in_0_month_value, $valid_to_in_0_year, $valid_to_less_than, $valid_to_less_than_or_equal, $valid_to_not_equals, $valid_to_specified);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceApi->getAllMembershipsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **criteria_id_equals** | **int**|  | [optional]
 **criteria_id_greater_than** | **int**|  | [optional]
 **criteria_id_greater_than_or_equal** | **int**|  | [optional]
 **criteria_id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **criteria_id_less_than** | **int**|  | [optional]
 **criteria_id_less_than_or_equal** | **int**|  | [optional]
 **criteria_id_not_equals** | **int**|  | [optional]
 **criteria_id_specified** | **bool**|  | [optional]
 **id_equals** | **int**|  | [optional]
 **id_greater_than** | **int**|  | [optional]
 **id_greater_than_or_equal** | **int**|  | [optional]
 **id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **id_less_than** | **int**|  | [optional]
 **id_less_than_or_equal** | **int**|  | [optional]
 **id_not_equals** | **int**|  | [optional]
 **id_specified** | **bool**|  | [optional]
 **membership_period_id_equals** | **int**|  | [optional]
 **membership_period_id_greater_than** | **int**|  | [optional]
 **membership_period_id_greater_than_or_equal** | **int**|  | [optional]
 **membership_period_id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **membership_period_id_less_than** | **int**|  | [optional]
 **membership_period_id_less_than_or_equal** | **int**|  | [optional]
 **membership_period_id_not_equals** | **int**|  | [optional]
 **membership_period_id_specified** | **bool**|  | [optional]
 **number_id_equals** | **int**|  | [optional]
 **number_id_greater_than** | **int**|  | [optional]
 **number_id_greater_than_or_equal** | **int**|  | [optional]
 **number_id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **number_id_less_than** | **int**|  | [optional]
 **number_id_less_than_or_equal** | **int**|  | [optional]
 **number_id_not_equals** | **int**|  | [optional]
 **number_id_specified** | **bool**|  | [optional]
 **order_id_equals** | **int**|  | [optional]
 **order_id_greater_than** | **int**|  | [optional]
 **order_id_greater_than_or_equal** | **int**|  | [optional]
 **order_id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **order_id_less_than** | **int**|  | [optional]
 **order_id_less_than_or_equal** | **int**|  | [optional]
 **order_id_not_equals** | **int**|  | [optional]
 **order_id_specified** | **bool**|  | [optional]
 **page** | **int**| Page number of the requested page | [optional]
 **person_id_equals** | **int**|  | [optional]
 **person_id_greater_than** | **int**|  | [optional]
 **person_id_greater_than_or_equal** | **int**|  | [optional]
 **person_id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **person_id_less_than** | **int**|  | [optional]
 **person_id_less_than_or_equal** | **int**|  | [optional]
 **person_id_not_equals** | **int**|  | [optional]
 **person_id_specified** | **bool**|  | [optional]
 **size** | **int**| Size of a page | [optional]
 **sort** | [**string[]**](../Model/string.md)| Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported. | [optional]
 **status_equals** | **string**|  | [optional]
 **status_in** | [**string[]**](../Model/string.md)|  | [optional]
 **status_not_equals** | **string**|  | [optional]
 **status_specified** | **bool**|  | [optional]
 **valid_from_equals** | **\DateTime**|  | [optional]
 **valid_from_greater_than** | **\DateTime**|  | [optional]
 **valid_from_greater_than_or_equal** | **\DateTime**|  | [optional]
 **valid_from_in_0_chronology_calendar_type** | **string**|  | [optional]
 **valid_from_in_0_chronology_id** | **string**|  | [optional]
 **valid_from_in_0_day_of_month** | **int**|  | [optional]
 **valid_from_in_0_day_of_week** | **string**|  | [optional]
 **valid_from_in_0_day_of_year** | **int**|  | [optional]
 **valid_from_in_0_era_value** | **int**|  | [optional]
 **valid_from_in_0_leap_year** | **bool**|  | [optional]
 **valid_from_in_0_month** | **string**|  | [optional]
 **valid_from_in_0_month_value** | **int**|  | [optional]
 **valid_from_in_0_year** | **int**|  | [optional]
 **valid_from_less_than** | **\DateTime**|  | [optional]
 **valid_from_less_than_or_equal** | **\DateTime**|  | [optional]
 **valid_from_not_equals** | **\DateTime**|  | [optional]
 **valid_from_specified** | **bool**|  | [optional]
 **valid_to_equals** | **\DateTime**|  | [optional]
 **valid_to_greater_than** | **\DateTime**|  | [optional]
 **valid_to_greater_than_or_equal** | **\DateTime**|  | [optional]
 **valid_to_in_0_chronology_calendar_type** | **string**|  | [optional]
 **valid_to_in_0_chronology_id** | **string**|  | [optional]
 **valid_to_in_0_day_of_month** | **int**|  | [optional]
 **valid_to_in_0_day_of_week** | **string**|  | [optional]
 **valid_to_in_0_day_of_year** | **int**|  | [optional]
 **valid_to_in_0_era_value** | **int**|  | [optional]
 **valid_to_in_0_leap_year** | **bool**|  | [optional]
 **valid_to_in_0_month** | **string**|  | [optional]
 **valid_to_in_0_month_value** | **int**|  | [optional]
 **valid_to_in_0_year** | **int**|  | [optional]
 **valid_to_less_than** | **\DateTime**|  | [optional]
 **valid_to_less_than_or_equal** | **\DateTime**|  | [optional]
 **valid_to_not_equals** | **\DateTime**|  | [optional]
 **valid_to_specified** | **bool**|  | [optional]

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipDTO[]**](../Model/MembershipDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLinkedMembersUsingGET**
> \Idealogic\MembershipAPI\Model\MembershipStatusDTO[] getLinkedMembersUsingGET($external_person_id, $membership_type_id)

getLinkedMembers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_person_id = 789; // int | externalPersonId
$membership_type_id = 789; // int | membershipTypeId

try {
    $result = $apiInstance->getLinkedMembersUsingGET($external_person_id, $membership_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceApi->getLinkedMembersUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_person_id** | **int**| externalPersonId |
 **membership_type_id** | **int**| membershipTypeId | [optional]

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipStatusDTO[]**](../Model/MembershipStatusDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMainMemberUsingGET**
> \Idealogic\MembershipAPI\Model\MembershipStatusDTO[] getMainMemberUsingGET($external_person_id, $membership_type_id)

getMainMember

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_person_id = 789; // int | externalPersonId
$membership_type_id = 789; // int | membershipTypeId

try {
    $result = $apiInstance->getMainMemberUsingGET($external_person_id, $membership_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceApi->getMainMemberUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_person_id** | **int**| externalPersonId |
 **membership_type_id** | **int**| membershipTypeId | [optional]

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipStatusDTO[]**](../Model/MembershipStatusDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMembershipUsingGET**
> \Idealogic\MembershipAPI\Model\MembershipDTO getMembershipUsingGET($id)

getMembership

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | id

try {
    $result = $apiInstance->getMembershipUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceApi->getMembershipUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipDTO**](../Model/MembershipDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMembershipUsingPUT**
> \Idealogic\MembershipAPI\Model\MembershipDTO updateMembershipUsingPUT($membership_dto)

updateMembership

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membership_dto = new \Idealogic\MembershipAPI\Model\MembershipDTO(); // \Idealogic\MembershipAPI\Model\MembershipDTO | membershipDTO

try {
    $result = $apiInstance->updateMembershipUsingPUT($membership_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceApi->updateMembershipUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membership_dto** | [**\Idealogic\MembershipAPI\Model\MembershipDTO**](../Model/MembershipDTO.md)| membershipDTO |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipDTO**](../Model/MembershipDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

