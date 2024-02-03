# Idealogic\MembershipAPI\MembershipPeriodResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countMembershipPeriods()**](MembershipPeriodResourceApi.md#countMembershipPeriods) | **GET** /api/membership-periods/count |  |
| [**createMembershipPeriod()**](MembershipPeriodResourceApi.md#createMembershipPeriod) | **POST** /api/membership-periods |  |
| [**deleteMembershipPeriod()**](MembershipPeriodResourceApi.md#deleteMembershipPeriod) | **DELETE** /api/membership-periods/{id} |  |
| [**getAllMembershipPeriods()**](MembershipPeriodResourceApi.md#getAllMembershipPeriods) | **GET** /api/membership-periods |  |
| [**getMembershipPeriod()**](MembershipPeriodResourceApi.md#getMembershipPeriod) | **GET** /api/membership-periods/{id} |  |
| [**partialUpdateMembershipPeriod()**](MembershipPeriodResourceApi.md#partialUpdateMembershipPeriod) | **PATCH** /api/membership-periods/{id} |  |
| [**updateMembershipPeriod()**](MembershipPeriodResourceApi.md#updateMembershipPeriod) | **PUT** /api/membership-periods |  |
| [**updateMembershipPeriod1()**](MembershipPeriodResourceApi.md#updateMembershipPeriod1) | **PUT** /api/membership-periods/{id} |  |


## `countMembershipPeriods()`

```php
countMembershipPeriods($id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $name_contains, $name_does_not_contain, $name_equals, $name_not_equals, $name_specified, $name_in, $name_not_in, $valid_from_greater_than, $valid_from_less_than, $valid_from_greater_than_or_equal, $valid_from_less_than_or_equal, $valid_from_equals, $valid_from_not_equals, $valid_from_specified, $valid_from_in, $valid_from_not_in, $valid_to_greater_than, $valid_to_less_than, $valid_to_greater_than_or_equal, $valid_to_less_than_or_equal, $valid_to_equals, $valid_to_not_equals, $valid_to_specified, $valid_to_in, $valid_to_not_in, $membership_type_id_greater_than, $membership_type_id_less_than, $membership_type_id_greater_than_or_equal, $membership_type_id_less_than_or_equal, $membership_type_id_equals, $membership_type_id_not_equals, $membership_type_id_specified, $membership_type_id_in, $membership_type_id_not_in, $number_type_id_greater_than, $number_type_id_less_than, $number_type_id_greater_than_or_equal, $number_type_id_less_than_or_equal, $number_type_id_equals, $number_type_id_not_equals, $number_type_id_specified, $number_type_id_in, $number_type_id_not_in, $distinct): int
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipPeriodResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_greater_than = 56; // int
$id_less_than = 56; // int
$id_greater_than_or_equal = 56; // int
$id_less_than_or_equal = 56; // int
$id_equals = 56; // int
$id_not_equals = 56; // int
$id_specified = True; // bool
$id_in = array(56); // int[]
$id_not_in = array(56); // int[]
$name_contains = 'name_contains_example'; // string
$name_does_not_contain = 'name_does_not_contain_example'; // string
$name_equals = 'name_equals_example'; // string
$name_not_equals = 'name_not_equals_example'; // string
$name_specified = True; // bool
$name_in = array('name_in_example'); // string[]
$name_not_in = array('name_not_in_example'); // string[]
$valid_from_greater_than = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$valid_from_less_than = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$valid_from_greater_than_or_equal = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$valid_from_less_than_or_equal = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$valid_from_equals = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$valid_from_not_equals = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$valid_from_specified = True; // bool
$valid_from_in = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$valid_from_not_in = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$valid_to_greater_than = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$valid_to_less_than = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$valid_to_greater_than_or_equal = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$valid_to_less_than_or_equal = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$valid_to_equals = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$valid_to_not_equals = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$valid_to_specified = True; // bool
$valid_to_in = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$valid_to_not_in = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$membership_type_id_greater_than = 56; // int
$membership_type_id_less_than = 56; // int
$membership_type_id_greater_than_or_equal = 56; // int
$membership_type_id_less_than_or_equal = 56; // int
$membership_type_id_equals = 56; // int
$membership_type_id_not_equals = 56; // int
$membership_type_id_specified = True; // bool
$membership_type_id_in = array(56); // int[]
$membership_type_id_not_in = array(56); // int[]
$number_type_id_greater_than = 56; // int
$number_type_id_less_than = 56; // int
$number_type_id_greater_than_or_equal = 56; // int
$number_type_id_less_than_or_equal = 56; // int
$number_type_id_equals = 56; // int
$number_type_id_not_equals = 56; // int
$number_type_id_specified = True; // bool
$number_type_id_in = array(56); // int[]
$number_type_id_not_in = array(56); // int[]
$distinct = True; // bool

try {
    $result = $apiInstance->countMembershipPeriods($id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $name_contains, $name_does_not_contain, $name_equals, $name_not_equals, $name_specified, $name_in, $name_not_in, $valid_from_greater_than, $valid_from_less_than, $valid_from_greater_than_or_equal, $valid_from_less_than_or_equal, $valid_from_equals, $valid_from_not_equals, $valid_from_specified, $valid_from_in, $valid_from_not_in, $valid_to_greater_than, $valid_to_less_than, $valid_to_greater_than_or_equal, $valid_to_less_than_or_equal, $valid_to_equals, $valid_to_not_equals, $valid_to_specified, $valid_to_in, $valid_to_not_in, $membership_type_id_greater_than, $membership_type_id_less_than, $membership_type_id_greater_than_or_equal, $membership_type_id_less_than_or_equal, $membership_type_id_equals, $membership_type_id_not_equals, $membership_type_id_specified, $membership_type_id_in, $membership_type_id_not_in, $number_type_id_greater_than, $number_type_id_less_than, $number_type_id_greater_than_or_equal, $number_type_id_less_than_or_equal, $number_type_id_equals, $number_type_id_not_equals, $number_type_id_specified, $number_type_id_in, $number_type_id_not_in, $distinct);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipPeriodResourceApi->countMembershipPeriods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id_greater_than** | **int**|  | [optional] |
| **id_less_than** | **int**|  | [optional] |
| **id_greater_than_or_equal** | **int**|  | [optional] |
| **id_less_than_or_equal** | **int**|  | [optional] |
| **id_equals** | **int**|  | [optional] |
| **id_not_equals** | **int**|  | [optional] |
| **id_specified** | **bool**|  | [optional] |
| **id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **name_contains** | **string**|  | [optional] |
| **name_does_not_contain** | **string**|  | [optional] |
| **name_equals** | **string**|  | [optional] |
| **name_not_equals** | **string**|  | [optional] |
| **name_specified** | **bool**|  | [optional] |
| **name_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **name_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **valid_from_greater_than** | **\DateTime**|  | [optional] |
| **valid_from_less_than** | **\DateTime**|  | [optional] |
| **valid_from_greater_than_or_equal** | **\DateTime**|  | [optional] |
| **valid_from_less_than_or_equal** | **\DateTime**|  | [optional] |
| **valid_from_equals** | **\DateTime**|  | [optional] |
| **valid_from_not_equals** | **\DateTime**|  | [optional] |
| **valid_from_specified** | **bool**|  | [optional] |
| **valid_from_in** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **valid_from_not_in** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **valid_to_greater_than** | **\DateTime**|  | [optional] |
| **valid_to_less_than** | **\DateTime**|  | [optional] |
| **valid_to_greater_than_or_equal** | **\DateTime**|  | [optional] |
| **valid_to_less_than_or_equal** | **\DateTime**|  | [optional] |
| **valid_to_equals** | **\DateTime**|  | [optional] |
| **valid_to_not_equals** | **\DateTime**|  | [optional] |
| **valid_to_specified** | **bool**|  | [optional] |
| **valid_to_in** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **valid_to_not_in** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **membership_type_id_greater_than** | **int**|  | [optional] |
| **membership_type_id_less_than** | **int**|  | [optional] |
| **membership_type_id_greater_than_or_equal** | **int**|  | [optional] |
| **membership_type_id_less_than_or_equal** | **int**|  | [optional] |
| **membership_type_id_equals** | **int**|  | [optional] |
| **membership_type_id_not_equals** | **int**|  | [optional] |
| **membership_type_id_specified** | **bool**|  | [optional] |
| **membership_type_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **membership_type_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **number_type_id_greater_than** | **int**|  | [optional] |
| **number_type_id_less_than** | **int**|  | [optional] |
| **number_type_id_greater_than_or_equal** | **int**|  | [optional] |
| **number_type_id_less_than_or_equal** | **int**|  | [optional] |
| **number_type_id_equals** | **int**|  | [optional] |
| **number_type_id_not_equals** | **int**|  | [optional] |
| **number_type_id_specified** | **bool**|  | [optional] |
| **number_type_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **number_type_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **distinct** | **bool**|  | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMembershipPeriod()`

```php
createMembershipPeriod($membership_period_dto): \Idealogic\MembershipAPI\Model\MembershipPeriodDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipPeriodResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membership_period_dto = new \Idealogic\MembershipAPI\Model\MembershipPeriodDTO(); // \Idealogic\MembershipAPI\Model\MembershipPeriodDTO

try {
    $result = $apiInstance->createMembershipPeriod($membership_period_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipPeriodResourceApi->createMembershipPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **membership_period_dto** | [**\Idealogic\MembershipAPI\Model\MembershipPeriodDTO**](../Model/MembershipPeriodDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipPeriodDTO**](../Model/MembershipPeriodDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMembershipPeriod()`

```php
deleteMembershipPeriod($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipPeriodResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $apiInstance->deleteMembershipPeriod($id);
} catch (Exception $e) {
    echo 'Exception when calling MembershipPeriodResourceApi->deleteMembershipPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllMembershipPeriods()`

```php
getAllMembershipPeriods($pageable, $id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $name_contains, $name_does_not_contain, $name_equals, $name_not_equals, $name_specified, $name_in, $name_not_in, $valid_from_greater_than, $valid_from_less_than, $valid_from_greater_than_or_equal, $valid_from_less_than_or_equal, $valid_from_equals, $valid_from_not_equals, $valid_from_specified, $valid_from_in, $valid_from_not_in, $valid_to_greater_than, $valid_to_less_than, $valid_to_greater_than_or_equal, $valid_to_less_than_or_equal, $valid_to_equals, $valid_to_not_equals, $valid_to_specified, $valid_to_in, $valid_to_not_in, $membership_type_id_greater_than, $membership_type_id_less_than, $membership_type_id_greater_than_or_equal, $membership_type_id_less_than_or_equal, $membership_type_id_equals, $membership_type_id_not_equals, $membership_type_id_specified, $membership_type_id_in, $membership_type_id_not_in, $number_type_id_greater_than, $number_type_id_less_than, $number_type_id_greater_than_or_equal, $number_type_id_less_than_or_equal, $number_type_id_equals, $number_type_id_not_equals, $number_type_id_specified, $number_type_id_in, $number_type_id_not_in, $distinct): \Idealogic\MembershipAPI\Model\MembershipPeriodDTO[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipPeriodResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pageable = new \Idealogic\MembershipAPI\Model\Pageable(); // Pageable
$id_greater_than = 56; // int
$id_less_than = 56; // int
$id_greater_than_or_equal = 56; // int
$id_less_than_or_equal = 56; // int
$id_equals = 56; // int
$id_not_equals = 56; // int
$id_specified = True; // bool
$id_in = array(56); // int[]
$id_not_in = array(56); // int[]
$name_contains = 'name_contains_example'; // string
$name_does_not_contain = 'name_does_not_contain_example'; // string
$name_equals = 'name_equals_example'; // string
$name_not_equals = 'name_not_equals_example'; // string
$name_specified = True; // bool
$name_in = array('name_in_example'); // string[]
$name_not_in = array('name_not_in_example'); // string[]
$valid_from_greater_than = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$valid_from_less_than = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$valid_from_greater_than_or_equal = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$valid_from_less_than_or_equal = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$valid_from_equals = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$valid_from_not_equals = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$valid_from_specified = True; // bool
$valid_from_in = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$valid_from_not_in = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$valid_to_greater_than = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$valid_to_less_than = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$valid_to_greater_than_or_equal = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$valid_to_less_than_or_equal = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$valid_to_equals = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$valid_to_not_equals = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$valid_to_specified = True; // bool
$valid_to_in = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$valid_to_not_in = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$membership_type_id_greater_than = 56; // int
$membership_type_id_less_than = 56; // int
$membership_type_id_greater_than_or_equal = 56; // int
$membership_type_id_less_than_or_equal = 56; // int
$membership_type_id_equals = 56; // int
$membership_type_id_not_equals = 56; // int
$membership_type_id_specified = True; // bool
$membership_type_id_in = array(56); // int[]
$membership_type_id_not_in = array(56); // int[]
$number_type_id_greater_than = 56; // int
$number_type_id_less_than = 56; // int
$number_type_id_greater_than_or_equal = 56; // int
$number_type_id_less_than_or_equal = 56; // int
$number_type_id_equals = 56; // int
$number_type_id_not_equals = 56; // int
$number_type_id_specified = True; // bool
$number_type_id_in = array(56); // int[]
$number_type_id_not_in = array(56); // int[]
$distinct = True; // bool

try {
    $result = $apiInstance->getAllMembershipPeriods($pageable, $id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $name_contains, $name_does_not_contain, $name_equals, $name_not_equals, $name_specified, $name_in, $name_not_in, $valid_from_greater_than, $valid_from_less_than, $valid_from_greater_than_or_equal, $valid_from_less_than_or_equal, $valid_from_equals, $valid_from_not_equals, $valid_from_specified, $valid_from_in, $valid_from_not_in, $valid_to_greater_than, $valid_to_less_than, $valid_to_greater_than_or_equal, $valid_to_less_than_or_equal, $valid_to_equals, $valid_to_not_equals, $valid_to_specified, $valid_to_in, $valid_to_not_in, $membership_type_id_greater_than, $membership_type_id_less_than, $membership_type_id_greater_than_or_equal, $membership_type_id_less_than_or_equal, $membership_type_id_equals, $membership_type_id_not_equals, $membership_type_id_specified, $membership_type_id_in, $membership_type_id_not_in, $number_type_id_greater_than, $number_type_id_less_than, $number_type_id_greater_than_or_equal, $number_type_id_less_than_or_equal, $number_type_id_equals, $number_type_id_not_equals, $number_type_id_specified, $number_type_id_in, $number_type_id_not_in, $distinct);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipPeriodResourceApi->getAllMembershipPeriods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pageable** | [**Pageable**](../Model/.md)|  | |
| **id_greater_than** | **int**|  | [optional] |
| **id_less_than** | **int**|  | [optional] |
| **id_greater_than_or_equal** | **int**|  | [optional] |
| **id_less_than_or_equal** | **int**|  | [optional] |
| **id_equals** | **int**|  | [optional] |
| **id_not_equals** | **int**|  | [optional] |
| **id_specified** | **bool**|  | [optional] |
| **id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **name_contains** | **string**|  | [optional] |
| **name_does_not_contain** | **string**|  | [optional] |
| **name_equals** | **string**|  | [optional] |
| **name_not_equals** | **string**|  | [optional] |
| **name_specified** | **bool**|  | [optional] |
| **name_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **name_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **valid_from_greater_than** | **\DateTime**|  | [optional] |
| **valid_from_less_than** | **\DateTime**|  | [optional] |
| **valid_from_greater_than_or_equal** | **\DateTime**|  | [optional] |
| **valid_from_less_than_or_equal** | **\DateTime**|  | [optional] |
| **valid_from_equals** | **\DateTime**|  | [optional] |
| **valid_from_not_equals** | **\DateTime**|  | [optional] |
| **valid_from_specified** | **bool**|  | [optional] |
| **valid_from_in** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **valid_from_not_in** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **valid_to_greater_than** | **\DateTime**|  | [optional] |
| **valid_to_less_than** | **\DateTime**|  | [optional] |
| **valid_to_greater_than_or_equal** | **\DateTime**|  | [optional] |
| **valid_to_less_than_or_equal** | **\DateTime**|  | [optional] |
| **valid_to_equals** | **\DateTime**|  | [optional] |
| **valid_to_not_equals** | **\DateTime**|  | [optional] |
| **valid_to_specified** | **bool**|  | [optional] |
| **valid_to_in** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **valid_to_not_in** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **membership_type_id_greater_than** | **int**|  | [optional] |
| **membership_type_id_less_than** | **int**|  | [optional] |
| **membership_type_id_greater_than_or_equal** | **int**|  | [optional] |
| **membership_type_id_less_than_or_equal** | **int**|  | [optional] |
| **membership_type_id_equals** | **int**|  | [optional] |
| **membership_type_id_not_equals** | **int**|  | [optional] |
| **membership_type_id_specified** | **bool**|  | [optional] |
| **membership_type_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **membership_type_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **number_type_id_greater_than** | **int**|  | [optional] |
| **number_type_id_less_than** | **int**|  | [optional] |
| **number_type_id_greater_than_or_equal** | **int**|  | [optional] |
| **number_type_id_less_than_or_equal** | **int**|  | [optional] |
| **number_type_id_equals** | **int**|  | [optional] |
| **number_type_id_not_equals** | **int**|  | [optional] |
| **number_type_id_specified** | **bool**|  | [optional] |
| **number_type_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **number_type_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **distinct** | **bool**|  | [optional] |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipPeriodDTO[]**](../Model/MembershipPeriodDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMembershipPeriod()`

```php
getMembershipPeriod($id): \Idealogic\MembershipAPI\Model\MembershipPeriodDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipPeriodResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->getMembershipPeriod($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipPeriodResourceApi->getMembershipPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipPeriodDTO**](../Model/MembershipPeriodDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partialUpdateMembershipPeriod()`

```php
partialUpdateMembershipPeriod($id, $membership_period_dto): \Idealogic\MembershipAPI\Model\MembershipPeriodDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipPeriodResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$membership_period_dto = new \Idealogic\MembershipAPI\Model\MembershipPeriodDTO(); // \Idealogic\MembershipAPI\Model\MembershipPeriodDTO

try {
    $result = $apiInstance->partialUpdateMembershipPeriod($id, $membership_period_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipPeriodResourceApi->partialUpdateMembershipPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **membership_period_dto** | [**\Idealogic\MembershipAPI\Model\MembershipPeriodDTO**](../Model/MembershipPeriodDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipPeriodDTO**](../Model/MembershipPeriodDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMembershipPeriod()`

```php
updateMembershipPeriod($membership_period_dto): \Idealogic\MembershipAPI\Model\MembershipPeriodDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipPeriodResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membership_period_dto = new \Idealogic\MembershipAPI\Model\MembershipPeriodDTO(); // \Idealogic\MembershipAPI\Model\MembershipPeriodDTO

try {
    $result = $apiInstance->updateMembershipPeriod($membership_period_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipPeriodResourceApi->updateMembershipPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **membership_period_dto** | [**\Idealogic\MembershipAPI\Model\MembershipPeriodDTO**](../Model/MembershipPeriodDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipPeriodDTO**](../Model/MembershipPeriodDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMembershipPeriod1()`

```php
updateMembershipPeriod1($id, $membership_period_dto): \Idealogic\MembershipAPI\Model\MembershipPeriodDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipPeriodResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$membership_period_dto = new \Idealogic\MembershipAPI\Model\MembershipPeriodDTO(); // \Idealogic\MembershipAPI\Model\MembershipPeriodDTO

try {
    $result = $apiInstance->updateMembershipPeriod1($id, $membership_period_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipPeriodResourceApi->updateMembershipPeriod1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **membership_period_dto** | [**\Idealogic\MembershipAPI\Model\MembershipPeriodDTO**](../Model/MembershipPeriodDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipPeriodDTO**](../Model/MembershipPeriodDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
