# Idealogic\MembershipAPI\MembershipPeriodResourceApi

All URIs are relative to *https://http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**countMembershipPeriodsUsingGET**](MembershipPeriodResourceApi.md#countMembershipPeriodsUsingGET) | **GET** /api/membership-periods/count | countMembershipPeriods
[**createMembershipPeriodUsingPOST**](MembershipPeriodResourceApi.md#createMembershipPeriodUsingPOST) | **POST** /api/membership-periods | createMembershipPeriod
[**deleteMembershipPeriodUsingDELETE**](MembershipPeriodResourceApi.md#deleteMembershipPeriodUsingDELETE) | **DELETE** /api/membership-periods/{id} | deleteMembershipPeriod
[**getAllMembershipPeriodsUsingGET**](MembershipPeriodResourceApi.md#getAllMembershipPeriodsUsingGET) | **GET** /api/membership-periods | getAllMembershipPeriods
[**getMembershipPeriodUsingGET**](MembershipPeriodResourceApi.md#getMembershipPeriodUsingGET) | **GET** /api/membership-periods/{id} | getMembershipPeriod
[**updateMembershipPeriodUsingPUT**](MembershipPeriodResourceApi.md#updateMembershipPeriodUsingPUT) | **PUT** /api/membership-periods | updateMembershipPeriod


# **countMembershipPeriodsUsingGET**
> int countMembershipPeriodsUsingGET($id_equals, $id_greater_than, $id_greater_than_or_equal, $id_in, $id_less_than, $id_less_than_or_equal, $id_not_equals, $id_specified, $membership_type_id_equals, $membership_type_id_greater_than, $membership_type_id_greater_than_or_equal, $membership_type_id_in, $membership_type_id_less_than, $membership_type_id_less_than_or_equal, $membership_type_id_not_equals, $membership_type_id_specified, $name_contains, $name_does_not_contain, $name_equals, $name_in, $name_not_equals, $name_specified, $number_type_id_equals, $number_type_id_greater_than, $number_type_id_greater_than_or_equal, $number_type_id_in, $number_type_id_less_than, $number_type_id_less_than_or_equal, $number_type_id_not_equals, $number_type_id_specified, $valid_from_equals, $valid_from_greater_than, $valid_from_greater_than_or_equal, $valid_from_in_0_chronology_calendar_type, $valid_from_in_0_chronology_id, $valid_from_in_0_day_of_month, $valid_from_in_0_day_of_week, $valid_from_in_0_day_of_year, $valid_from_in_0_era_value, $valid_from_in_0_leap_year, $valid_from_in_0_month, $valid_from_in_0_month_value, $valid_from_in_0_year, $valid_from_less_than, $valid_from_less_than_or_equal, $valid_from_not_equals, $valid_from_specified, $valid_to_equals, $valid_to_greater_than, $valid_to_greater_than_or_equal, $valid_to_in_0_chronology_calendar_type, $valid_to_in_0_chronology_id, $valid_to_in_0_day_of_month, $valid_to_in_0_day_of_week, $valid_to_in_0_day_of_year, $valid_to_in_0_era_value, $valid_to_in_0_leap_year, $valid_to_in_0_month, $valid_to_in_0_month_value, $valid_to_in_0_year, $valid_to_less_than, $valid_to_less_than_or_equal, $valid_to_not_equals, $valid_to_specified)

countMembershipPeriods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipPeriodResourceApi(
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
$membership_type_id_equals = 789; // int | 
$membership_type_id_greater_than = 789; // int | 
$membership_type_id_greater_than_or_equal = 789; // int | 
$membership_type_id_in = array(56); // int[] | 
$membership_type_id_less_than = 789; // int | 
$membership_type_id_less_than_or_equal = 789; // int | 
$membership_type_id_not_equals = 789; // int | 
$membership_type_id_specified = true; // bool | 
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
    $result = $apiInstance->countMembershipPeriodsUsingGET($id_equals, $id_greater_than, $id_greater_than_or_equal, $id_in, $id_less_than, $id_less_than_or_equal, $id_not_equals, $id_specified, $membership_type_id_equals, $membership_type_id_greater_than, $membership_type_id_greater_than_or_equal, $membership_type_id_in, $membership_type_id_less_than, $membership_type_id_less_than_or_equal, $membership_type_id_not_equals, $membership_type_id_specified, $name_contains, $name_does_not_contain, $name_equals, $name_in, $name_not_equals, $name_specified, $number_type_id_equals, $number_type_id_greater_than, $number_type_id_greater_than_or_equal, $number_type_id_in, $number_type_id_less_than, $number_type_id_less_than_or_equal, $number_type_id_not_equals, $number_type_id_specified, $valid_from_equals, $valid_from_greater_than, $valid_from_greater_than_or_equal, $valid_from_in_0_chronology_calendar_type, $valid_from_in_0_chronology_id, $valid_from_in_0_day_of_month, $valid_from_in_0_day_of_week, $valid_from_in_0_day_of_year, $valid_from_in_0_era_value, $valid_from_in_0_leap_year, $valid_from_in_0_month, $valid_from_in_0_month_value, $valid_from_in_0_year, $valid_from_less_than, $valid_from_less_than_or_equal, $valid_from_not_equals, $valid_from_specified, $valid_to_equals, $valid_to_greater_than, $valid_to_greater_than_or_equal, $valid_to_in_0_chronology_calendar_type, $valid_to_in_0_chronology_id, $valid_to_in_0_day_of_month, $valid_to_in_0_day_of_week, $valid_to_in_0_day_of_year, $valid_to_in_0_era_value, $valid_to_in_0_leap_year, $valid_to_in_0_month, $valid_to_in_0_month_value, $valid_to_in_0_year, $valid_to_less_than, $valid_to_less_than_or_equal, $valid_to_not_equals, $valid_to_specified);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipPeriodResourceApi->countMembershipPeriodsUsingGET: ', $e->getMessage(), PHP_EOL;
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
 **membership_type_id_equals** | **int**|  | [optional]
 **membership_type_id_greater_than** | **int**|  | [optional]
 **membership_type_id_greater_than_or_equal** | **int**|  | [optional]
 **membership_type_id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **membership_type_id_less_than** | **int**|  | [optional]
 **membership_type_id_less_than_or_equal** | **int**|  | [optional]
 **membership_type_id_not_equals** | **int**|  | [optional]
 **membership_type_id_specified** | **bool**|  | [optional]
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

# **createMembershipPeriodUsingPOST**
> \Idealogic\MembershipAPI\Model\MembershipPeriodDTO createMembershipPeriodUsingPOST($membership_period_dto)

createMembershipPeriod

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipPeriodResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membership_period_dto = new \Idealogic\MembershipAPI\Model\MembershipPeriodDTO(); // \Idealogic\MembershipAPI\Model\MembershipPeriodDTO | membershipPeriodDTO

try {
    $result = $apiInstance->createMembershipPeriodUsingPOST($membership_period_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipPeriodResourceApi->createMembershipPeriodUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membership_period_dto** | [**\Idealogic\MembershipAPI\Model\MembershipPeriodDTO**](../Model/MembershipPeriodDTO.md)| membershipPeriodDTO |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipPeriodDTO**](../Model/MembershipPeriodDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMembershipPeriodUsingDELETE**
> deleteMembershipPeriodUsingDELETE($id)

deleteMembershipPeriod

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipPeriodResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | id

try {
    $apiInstance->deleteMembershipPeriodUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling MembershipPeriodResourceApi->deleteMembershipPeriodUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllMembershipPeriodsUsingGET**
> \Idealogic\MembershipAPI\Model\MembershipPeriodDTO[] getAllMembershipPeriodsUsingGET($id_equals, $id_greater_than, $id_greater_than_or_equal, $id_in, $id_less_than, $id_less_than_or_equal, $id_not_equals, $id_specified, $membership_type_id_equals, $membership_type_id_greater_than, $membership_type_id_greater_than_or_equal, $membership_type_id_in, $membership_type_id_less_than, $membership_type_id_less_than_or_equal, $membership_type_id_not_equals, $membership_type_id_specified, $name_contains, $name_does_not_contain, $name_equals, $name_in, $name_not_equals, $name_specified, $number_type_id_equals, $number_type_id_greater_than, $number_type_id_greater_than_or_equal, $number_type_id_in, $number_type_id_less_than, $number_type_id_less_than_or_equal, $number_type_id_not_equals, $number_type_id_specified, $page, $size, $sort, $valid_from_equals, $valid_from_greater_than, $valid_from_greater_than_or_equal, $valid_from_in_0_chronology_calendar_type, $valid_from_in_0_chronology_id, $valid_from_in_0_day_of_month, $valid_from_in_0_day_of_week, $valid_from_in_0_day_of_year, $valid_from_in_0_era_value, $valid_from_in_0_leap_year, $valid_from_in_0_month, $valid_from_in_0_month_value, $valid_from_in_0_year, $valid_from_less_than, $valid_from_less_than_or_equal, $valid_from_not_equals, $valid_from_specified, $valid_to_equals, $valid_to_greater_than, $valid_to_greater_than_or_equal, $valid_to_in_0_chronology_calendar_type, $valid_to_in_0_chronology_id, $valid_to_in_0_day_of_month, $valid_to_in_0_day_of_week, $valid_to_in_0_day_of_year, $valid_to_in_0_era_value, $valid_to_in_0_leap_year, $valid_to_in_0_month, $valid_to_in_0_month_value, $valid_to_in_0_year, $valid_to_less_than, $valid_to_less_than_or_equal, $valid_to_not_equals, $valid_to_specified)

getAllMembershipPeriods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipPeriodResourceApi(
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
$membership_type_id_equals = 789; // int | 
$membership_type_id_greater_than = 789; // int | 
$membership_type_id_greater_than_or_equal = 789; // int | 
$membership_type_id_in = array(56); // int[] | 
$membership_type_id_less_than = 789; // int | 
$membership_type_id_less_than_or_equal = 789; // int | 
$membership_type_id_not_equals = 789; // int | 
$membership_type_id_specified = true; // bool | 
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
$size = 56; // int | Size of a page
$sort = array("sort_example"); // string[] | Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported.
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
    $result = $apiInstance->getAllMembershipPeriodsUsingGET($id_equals, $id_greater_than, $id_greater_than_or_equal, $id_in, $id_less_than, $id_less_than_or_equal, $id_not_equals, $id_specified, $membership_type_id_equals, $membership_type_id_greater_than, $membership_type_id_greater_than_or_equal, $membership_type_id_in, $membership_type_id_less_than, $membership_type_id_less_than_or_equal, $membership_type_id_not_equals, $membership_type_id_specified, $name_contains, $name_does_not_contain, $name_equals, $name_in, $name_not_equals, $name_specified, $number_type_id_equals, $number_type_id_greater_than, $number_type_id_greater_than_or_equal, $number_type_id_in, $number_type_id_less_than, $number_type_id_less_than_or_equal, $number_type_id_not_equals, $number_type_id_specified, $page, $size, $sort, $valid_from_equals, $valid_from_greater_than, $valid_from_greater_than_or_equal, $valid_from_in_0_chronology_calendar_type, $valid_from_in_0_chronology_id, $valid_from_in_0_day_of_month, $valid_from_in_0_day_of_week, $valid_from_in_0_day_of_year, $valid_from_in_0_era_value, $valid_from_in_0_leap_year, $valid_from_in_0_month, $valid_from_in_0_month_value, $valid_from_in_0_year, $valid_from_less_than, $valid_from_less_than_or_equal, $valid_from_not_equals, $valid_from_specified, $valid_to_equals, $valid_to_greater_than, $valid_to_greater_than_or_equal, $valid_to_in_0_chronology_calendar_type, $valid_to_in_0_chronology_id, $valid_to_in_0_day_of_month, $valid_to_in_0_day_of_week, $valid_to_in_0_day_of_year, $valid_to_in_0_era_value, $valid_to_in_0_leap_year, $valid_to_in_0_month, $valid_to_in_0_month_value, $valid_to_in_0_year, $valid_to_less_than, $valid_to_less_than_or_equal, $valid_to_not_equals, $valid_to_specified);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipPeriodResourceApi->getAllMembershipPeriodsUsingGET: ', $e->getMessage(), PHP_EOL;
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
 **membership_type_id_equals** | **int**|  | [optional]
 **membership_type_id_greater_than** | **int**|  | [optional]
 **membership_type_id_greater_than_or_equal** | **int**|  | [optional]
 **membership_type_id_in** | [**int[]**](../Model/int.md)|  | [optional]
 **membership_type_id_less_than** | **int**|  | [optional]
 **membership_type_id_less_than_or_equal** | **int**|  | [optional]
 **membership_type_id_not_equals** | **int**|  | [optional]
 **membership_type_id_specified** | **bool**|  | [optional]
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
 **size** | **int**| Size of a page | [optional]
 **sort** | [**string[]**](../Model/string.md)| Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported. | [optional]
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

[**\Idealogic\MembershipAPI\Model\MembershipPeriodDTO[]**](../Model/MembershipPeriodDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMembershipPeriodUsingGET**
> \Idealogic\MembershipAPI\Model\MembershipPeriodDTO getMembershipPeriodUsingGET($id)

getMembershipPeriod

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipPeriodResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | id

try {
    $result = $apiInstance->getMembershipPeriodUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipPeriodResourceApi->getMembershipPeriodUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipPeriodDTO**](../Model/MembershipPeriodDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMembershipPeriodUsingPUT**
> \Idealogic\MembershipAPI\Model\MembershipPeriodDTO updateMembershipPeriodUsingPUT($membership_period_dto)

updateMembershipPeriod

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\MembershipPeriodResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membership_period_dto = new \Idealogic\MembershipAPI\Model\MembershipPeriodDTO(); // \Idealogic\MembershipAPI\Model\MembershipPeriodDTO | membershipPeriodDTO

try {
    $result = $apiInstance->updateMembershipPeriodUsingPUT($membership_period_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipPeriodResourceApi->updateMembershipPeriodUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membership_period_dto** | [**\Idealogic\MembershipAPI\Model\MembershipPeriodDTO**](../Model/MembershipPeriodDTO.md)| membershipPeriodDTO |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipPeriodDTO**](../Model/MembershipPeriodDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

