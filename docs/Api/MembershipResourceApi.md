# Idealogic\MembershipAPI\MembershipResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addMembership()**](MembershipResourceApi.md#addMembership) | **POST** /api/memberships/add |  |
| [**addMembershipOrder()**](MembershipResourceApi.md#addMembershipOrder) | **POST** /api/memberships/order |  |
| [**countMemberships()**](MembershipResourceApi.md#countMemberships) | **GET** /api/memberships/count |  |
| [**createMembership()**](MembershipResourceApi.md#createMembership) | **POST** /api/memberships |  |
| [**deleteMembership()**](MembershipResourceApi.md#deleteMembership) | **DELETE** /api/memberships/{id} |  |
| [**enrolMemberships()**](MembershipResourceApi.md#enrolMemberships) | **POST** /api/memberships/enrol |  |
| [**getAllMemberships()**](MembershipResourceApi.md#getAllMemberships) | **GET** /api/memberships |  |
| [**getLinkedMembers()**](MembershipResourceApi.md#getLinkedMembers) | **GET** /api/memberships/linkedStatus/{externalUserId} |  |
| [**getMemberStatusByLatestPeriodForMembershipType()**](MembershipResourceApi.md#getMemberStatusByLatestPeriodForMembershipType) | **GET** /api/memberships/status/latestPeriod |  |
| [**getMembership()**](MembershipResourceApi.md#getMembership) | **GET** /api/memberships/{id} |  |
| [**getMembershipAttachment()**](MembershipResourceApi.md#getMembershipAttachment) | **GET** /api/memberships/attachment/{uuid} |  |
| [**importMembership()**](MembershipResourceApi.md#importMembership) | **PUT** /api/memberships/import |  |
| [**updateMembership()**](MembershipResourceApi.md#updateMembership) | **PUT** /api/memberships |  |


## `addMembership()`

```php
addMembership($membership_add_request_dto, $organisation_id): \Idealogic\MembershipAPI\Model\MembershipAddResponseDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membership_add_request_dto = new \Idealogic\MembershipAPI\Model\MembershipAddRequestDTO(); // \Idealogic\MembershipAPI\Model\MembershipAddRequestDTO
$organisation_id = 56; // int

try {
    $result = $apiInstance->addMembership($membership_add_request_dto, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceApi->addMembership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **membership_add_request_dto** | [**\Idealogic\MembershipAPI\Model\MembershipAddRequestDTO**](../Model/MembershipAddRequestDTO.md)|  | |
| **organisation_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipAddResponseDTO**](../Model/MembershipAddResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addMembershipOrder()`

```php
addMembershipOrder($membership_order_status_request_dto, $organisation_id): \Idealogic\MembershipAPI\Model\MembershipOrderStatusResponseDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membership_order_status_request_dto = new \Idealogic\MembershipAPI\Model\MembershipOrderStatusRequestDTO(); // \Idealogic\MembershipAPI\Model\MembershipOrderStatusRequestDTO
$organisation_id = 56; // int

try {
    $result = $apiInstance->addMembershipOrder($membership_order_status_request_dto, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceApi->addMembershipOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **membership_order_status_request_dto** | [**\Idealogic\MembershipAPI\Model\MembershipOrderStatusRequestDTO**](../Model/MembershipOrderStatusRequestDTO.md)|  | |
| **organisation_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipOrderStatusResponseDTO**](../Model/MembershipOrderStatusResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countMemberships()`

```php
countMemberships($id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $first_name_contains, $first_name_does_not_contain, $first_name_equals, $first_name_not_equals, $first_name_specified, $first_name_in, $first_name_not_in, $last_name_contains, $last_name_does_not_contain, $last_name_equals, $last_name_not_equals, $last_name_specified, $last_name_in, $last_name_not_in, $id_number_contains, $id_number_does_not_contain, $id_number_equals, $id_number_not_equals, $id_number_specified, $id_number_in, $id_number_not_in, $other_number_contains, $other_number_does_not_contain, $other_number_equals, $other_number_not_equals, $other_number_specified, $other_number_in, $other_number_not_in, $dob_greater_than, $dob_less_than, $dob_greater_than_or_equal, $dob_less_than_or_equal, $dob_equals, $dob_not_equals, $dob_specified, $dob_in, $dob_not_in, $status_equals, $status_not_equals, $status_specified, $status_in, $status_not_in, $valid_from_greater_than, $valid_from_less_than, $valid_from_greater_than_or_equal, $valid_from_less_than_or_equal, $valid_from_equals, $valid_from_not_equals, $valid_from_specified, $valid_from_in, $valid_from_not_in, $valid_to_greater_than, $valid_to_less_than, $valid_to_greater_than_or_equal, $valid_to_less_than_or_equal, $valid_to_equals, $valid_to_not_equals, $valid_to_specified, $valid_to_in, $valid_to_not_in, $person_id_greater_than, $person_id_less_than, $person_id_greater_than_or_equal, $person_id_less_than_or_equal, $person_id_equals, $person_id_not_equals, $person_id_specified, $person_id_in, $person_id_not_in, $membership_type_id_greater_than, $membership_type_id_less_than, $membership_type_id_greater_than_or_equal, $membership_type_id_less_than_or_equal, $membership_type_id_equals, $membership_type_id_not_equals, $membership_type_id_specified, $membership_type_id_in, $membership_type_id_not_in, $membership_period_id_greater_than, $membership_period_id_less_than, $membership_period_id_greater_than_or_equal, $membership_period_id_less_than_or_equal, $membership_period_id_equals, $membership_period_id_not_equals, $membership_period_id_specified, $membership_period_id_in, $membership_period_id_not_in, $criteria_id_greater_than, $criteria_id_less_than, $criteria_id_greater_than_or_equal, $criteria_id_less_than_or_equal, $criteria_id_equals, $criteria_id_not_equals, $criteria_id_specified, $criteria_id_in, $criteria_id_not_in, $order_id_greater_than, $order_id_less_than, $order_id_greater_than_or_equal, $order_id_less_than_or_equal, $order_id_equals, $order_id_not_equals, $order_id_specified, $order_id_in, $order_id_not_in, $number_id_greater_than, $number_id_less_than, $number_id_greater_than_or_equal, $number_id_less_than_or_equal, $number_id_equals, $number_id_not_equals, $number_id_specified, $number_id_in, $number_id_not_in, $distinct): int
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipResourceApi(
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
$first_name_contains = 'first_name_contains_example'; // string
$first_name_does_not_contain = 'first_name_does_not_contain_example'; // string
$first_name_equals = 'first_name_equals_example'; // string
$first_name_not_equals = 'first_name_not_equals_example'; // string
$first_name_specified = True; // bool
$first_name_in = array('first_name_in_example'); // string[]
$first_name_not_in = array('first_name_not_in_example'); // string[]
$last_name_contains = 'last_name_contains_example'; // string
$last_name_does_not_contain = 'last_name_does_not_contain_example'; // string
$last_name_equals = 'last_name_equals_example'; // string
$last_name_not_equals = 'last_name_not_equals_example'; // string
$last_name_specified = True; // bool
$last_name_in = array('last_name_in_example'); // string[]
$last_name_not_in = array('last_name_not_in_example'); // string[]
$id_number_contains = 'id_number_contains_example'; // string
$id_number_does_not_contain = 'id_number_does_not_contain_example'; // string
$id_number_equals = 'id_number_equals_example'; // string
$id_number_not_equals = 'id_number_not_equals_example'; // string
$id_number_specified = True; // bool
$id_number_in = array('id_number_in_example'); // string[]
$id_number_not_in = array('id_number_not_in_example'); // string[]
$other_number_contains = 'other_number_contains_example'; // string
$other_number_does_not_contain = 'other_number_does_not_contain_example'; // string
$other_number_equals = 'other_number_equals_example'; // string
$other_number_not_equals = 'other_number_not_equals_example'; // string
$other_number_specified = True; // bool
$other_number_in = array('other_number_in_example'); // string[]
$other_number_not_in = array('other_number_not_in_example'); // string[]
$dob_greater_than = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$dob_less_than = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$dob_greater_than_or_equal = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$dob_less_than_or_equal = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$dob_equals = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$dob_not_equals = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$dob_specified = True; // bool
$dob_in = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$dob_not_in = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$status_equals = 'status_equals_example'; // string
$status_not_equals = 'status_not_equals_example'; // string
$status_specified = True; // bool
$status_in = array('status_in_example'); // string[]
$status_not_in = array('status_not_in_example'); // string[]
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
$person_id_greater_than = 56; // int
$person_id_less_than = 56; // int
$person_id_greater_than_or_equal = 56; // int
$person_id_less_than_or_equal = 56; // int
$person_id_equals = 56; // int
$person_id_not_equals = 56; // int
$person_id_specified = True; // bool
$person_id_in = array(56); // int[]
$person_id_not_in = array(56); // int[]
$membership_type_id_greater_than = 56; // int
$membership_type_id_less_than = 56; // int
$membership_type_id_greater_than_or_equal = 56; // int
$membership_type_id_less_than_or_equal = 56; // int
$membership_type_id_equals = 56; // int
$membership_type_id_not_equals = 56; // int
$membership_type_id_specified = True; // bool
$membership_type_id_in = array(56); // int[]
$membership_type_id_not_in = array(56); // int[]
$membership_period_id_greater_than = 56; // int
$membership_period_id_less_than = 56; // int
$membership_period_id_greater_than_or_equal = 56; // int
$membership_period_id_less_than_or_equal = 56; // int
$membership_period_id_equals = 56; // int
$membership_period_id_not_equals = 56; // int
$membership_period_id_specified = True; // bool
$membership_period_id_in = array(56); // int[]
$membership_period_id_not_in = array(56); // int[]
$criteria_id_greater_than = 56; // int
$criteria_id_less_than = 56; // int
$criteria_id_greater_than_or_equal = 56; // int
$criteria_id_less_than_or_equal = 56; // int
$criteria_id_equals = 56; // int
$criteria_id_not_equals = 56; // int
$criteria_id_specified = True; // bool
$criteria_id_in = array(56); // int[]
$criteria_id_not_in = array(56); // int[]
$order_id_greater_than = 56; // int
$order_id_less_than = 56; // int
$order_id_greater_than_or_equal = 56; // int
$order_id_less_than_or_equal = 56; // int
$order_id_equals = 56; // int
$order_id_not_equals = 56; // int
$order_id_specified = True; // bool
$order_id_in = array(56); // int[]
$order_id_not_in = array(56); // int[]
$number_id_greater_than = 56; // int
$number_id_less_than = 56; // int
$number_id_greater_than_or_equal = 56; // int
$number_id_less_than_or_equal = 56; // int
$number_id_equals = 56; // int
$number_id_not_equals = 56; // int
$number_id_specified = True; // bool
$number_id_in = array(56); // int[]
$number_id_not_in = array(56); // int[]
$distinct = True; // bool

try {
    $result = $apiInstance->countMemberships($id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $first_name_contains, $first_name_does_not_contain, $first_name_equals, $first_name_not_equals, $first_name_specified, $first_name_in, $first_name_not_in, $last_name_contains, $last_name_does_not_contain, $last_name_equals, $last_name_not_equals, $last_name_specified, $last_name_in, $last_name_not_in, $id_number_contains, $id_number_does_not_contain, $id_number_equals, $id_number_not_equals, $id_number_specified, $id_number_in, $id_number_not_in, $other_number_contains, $other_number_does_not_contain, $other_number_equals, $other_number_not_equals, $other_number_specified, $other_number_in, $other_number_not_in, $dob_greater_than, $dob_less_than, $dob_greater_than_or_equal, $dob_less_than_or_equal, $dob_equals, $dob_not_equals, $dob_specified, $dob_in, $dob_not_in, $status_equals, $status_not_equals, $status_specified, $status_in, $status_not_in, $valid_from_greater_than, $valid_from_less_than, $valid_from_greater_than_or_equal, $valid_from_less_than_or_equal, $valid_from_equals, $valid_from_not_equals, $valid_from_specified, $valid_from_in, $valid_from_not_in, $valid_to_greater_than, $valid_to_less_than, $valid_to_greater_than_or_equal, $valid_to_less_than_or_equal, $valid_to_equals, $valid_to_not_equals, $valid_to_specified, $valid_to_in, $valid_to_not_in, $person_id_greater_than, $person_id_less_than, $person_id_greater_than_or_equal, $person_id_less_than_or_equal, $person_id_equals, $person_id_not_equals, $person_id_specified, $person_id_in, $person_id_not_in, $membership_type_id_greater_than, $membership_type_id_less_than, $membership_type_id_greater_than_or_equal, $membership_type_id_less_than_or_equal, $membership_type_id_equals, $membership_type_id_not_equals, $membership_type_id_specified, $membership_type_id_in, $membership_type_id_not_in, $membership_period_id_greater_than, $membership_period_id_less_than, $membership_period_id_greater_than_or_equal, $membership_period_id_less_than_or_equal, $membership_period_id_equals, $membership_period_id_not_equals, $membership_period_id_specified, $membership_period_id_in, $membership_period_id_not_in, $criteria_id_greater_than, $criteria_id_less_than, $criteria_id_greater_than_or_equal, $criteria_id_less_than_or_equal, $criteria_id_equals, $criteria_id_not_equals, $criteria_id_specified, $criteria_id_in, $criteria_id_not_in, $order_id_greater_than, $order_id_less_than, $order_id_greater_than_or_equal, $order_id_less_than_or_equal, $order_id_equals, $order_id_not_equals, $order_id_specified, $order_id_in, $order_id_not_in, $number_id_greater_than, $number_id_less_than, $number_id_greater_than_or_equal, $number_id_less_than_or_equal, $number_id_equals, $number_id_not_equals, $number_id_specified, $number_id_in, $number_id_not_in, $distinct);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceApi->countMemberships: ', $e->getMessage(), PHP_EOL;
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
| **first_name_contains** | **string**|  | [optional] |
| **first_name_does_not_contain** | **string**|  | [optional] |
| **first_name_equals** | **string**|  | [optional] |
| **first_name_not_equals** | **string**|  | [optional] |
| **first_name_specified** | **bool**|  | [optional] |
| **first_name_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **first_name_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **last_name_contains** | **string**|  | [optional] |
| **last_name_does_not_contain** | **string**|  | [optional] |
| **last_name_equals** | **string**|  | [optional] |
| **last_name_not_equals** | **string**|  | [optional] |
| **last_name_specified** | **bool**|  | [optional] |
| **last_name_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **last_name_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **id_number_contains** | **string**|  | [optional] |
| **id_number_does_not_contain** | **string**|  | [optional] |
| **id_number_equals** | **string**|  | [optional] |
| **id_number_not_equals** | **string**|  | [optional] |
| **id_number_specified** | **bool**|  | [optional] |
| **id_number_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **id_number_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **other_number_contains** | **string**|  | [optional] |
| **other_number_does_not_contain** | **string**|  | [optional] |
| **other_number_equals** | **string**|  | [optional] |
| **other_number_not_equals** | **string**|  | [optional] |
| **other_number_specified** | **bool**|  | [optional] |
| **other_number_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **other_number_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **dob_greater_than** | **\DateTime**|  | [optional] |
| **dob_less_than** | **\DateTime**|  | [optional] |
| **dob_greater_than_or_equal** | **\DateTime**|  | [optional] |
| **dob_less_than_or_equal** | **\DateTime**|  | [optional] |
| **dob_equals** | **\DateTime**|  | [optional] |
| **dob_not_equals** | **\DateTime**|  | [optional] |
| **dob_specified** | **bool**|  | [optional] |
| **dob_in** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **dob_not_in** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **status_equals** | **string**|  | [optional] |
| **status_not_equals** | **string**|  | [optional] |
| **status_specified** | **bool**|  | [optional] |
| **status_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **status_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
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
| **person_id_greater_than** | **int**|  | [optional] |
| **person_id_less_than** | **int**|  | [optional] |
| **person_id_greater_than_or_equal** | **int**|  | [optional] |
| **person_id_less_than_or_equal** | **int**|  | [optional] |
| **person_id_equals** | **int**|  | [optional] |
| **person_id_not_equals** | **int**|  | [optional] |
| **person_id_specified** | **bool**|  | [optional] |
| **person_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **person_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **membership_type_id_greater_than** | **int**|  | [optional] |
| **membership_type_id_less_than** | **int**|  | [optional] |
| **membership_type_id_greater_than_or_equal** | **int**|  | [optional] |
| **membership_type_id_less_than_or_equal** | **int**|  | [optional] |
| **membership_type_id_equals** | **int**|  | [optional] |
| **membership_type_id_not_equals** | **int**|  | [optional] |
| **membership_type_id_specified** | **bool**|  | [optional] |
| **membership_type_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **membership_type_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **membership_period_id_greater_than** | **int**|  | [optional] |
| **membership_period_id_less_than** | **int**|  | [optional] |
| **membership_period_id_greater_than_or_equal** | **int**|  | [optional] |
| **membership_period_id_less_than_or_equal** | **int**|  | [optional] |
| **membership_period_id_equals** | **int**|  | [optional] |
| **membership_period_id_not_equals** | **int**|  | [optional] |
| **membership_period_id_specified** | **bool**|  | [optional] |
| **membership_period_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **membership_period_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **criteria_id_greater_than** | **int**|  | [optional] |
| **criteria_id_less_than** | **int**|  | [optional] |
| **criteria_id_greater_than_or_equal** | **int**|  | [optional] |
| **criteria_id_less_than_or_equal** | **int**|  | [optional] |
| **criteria_id_equals** | **int**|  | [optional] |
| **criteria_id_not_equals** | **int**|  | [optional] |
| **criteria_id_specified** | **bool**|  | [optional] |
| **criteria_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **criteria_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **order_id_greater_than** | **int**|  | [optional] |
| **order_id_less_than** | **int**|  | [optional] |
| **order_id_greater_than_or_equal** | **int**|  | [optional] |
| **order_id_less_than_or_equal** | **int**|  | [optional] |
| **order_id_equals** | **int**|  | [optional] |
| **order_id_not_equals** | **int**|  | [optional] |
| **order_id_specified** | **bool**|  | [optional] |
| **order_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **order_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **number_id_greater_than** | **int**|  | [optional] |
| **number_id_less_than** | **int**|  | [optional] |
| **number_id_greater_than_or_equal** | **int**|  | [optional] |
| **number_id_less_than_or_equal** | **int**|  | [optional] |
| **number_id_equals** | **int**|  | [optional] |
| **number_id_not_equals** | **int**|  | [optional] |
| **number_id_specified** | **bool**|  | [optional] |
| **number_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **number_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
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

## `createMembership()`

```php
createMembership($membership_dto): \Idealogic\MembershipAPI\Model\MembershipDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membership_dto = new \Idealogic\MembershipAPI\Model\MembershipDTO(); // \Idealogic\MembershipAPI\Model\MembershipDTO

try {
    $result = $apiInstance->createMembership($membership_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceApi->createMembership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **membership_dto** | [**\Idealogic\MembershipAPI\Model\MembershipDTO**](../Model/MembershipDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipDTO**](../Model/MembershipDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMembership()`

```php
deleteMembership($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $apiInstance->deleteMembership($id);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceApi->deleteMembership: ', $e->getMessage(), PHP_EOL;
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

## `enrolMemberships()`

```php
enrolMemberships($membership_enrol_request_dto, $organisation_id): \Idealogic\MembershipAPI\Model\MembershipStatusDTO[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membership_enrol_request_dto = new \Idealogic\MembershipAPI\Model\MembershipEnrolRequestDTO(); // \Idealogic\MembershipAPI\Model\MembershipEnrolRequestDTO
$organisation_id = 56; // int

try {
    $result = $apiInstance->enrolMemberships($membership_enrol_request_dto, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceApi->enrolMemberships: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **membership_enrol_request_dto** | [**\Idealogic\MembershipAPI\Model\MembershipEnrolRequestDTO**](../Model/MembershipEnrolRequestDTO.md)|  | |
| **organisation_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipStatusDTO[]**](../Model/MembershipStatusDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllMemberships()`

```php
getAllMemberships($pageable, $id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $first_name_contains, $first_name_does_not_contain, $first_name_equals, $first_name_not_equals, $first_name_specified, $first_name_in, $first_name_not_in, $last_name_contains, $last_name_does_not_contain, $last_name_equals, $last_name_not_equals, $last_name_specified, $last_name_in, $last_name_not_in, $id_number_contains, $id_number_does_not_contain, $id_number_equals, $id_number_not_equals, $id_number_specified, $id_number_in, $id_number_not_in, $other_number_contains, $other_number_does_not_contain, $other_number_equals, $other_number_not_equals, $other_number_specified, $other_number_in, $other_number_not_in, $dob_greater_than, $dob_less_than, $dob_greater_than_or_equal, $dob_less_than_or_equal, $dob_equals, $dob_not_equals, $dob_specified, $dob_in, $dob_not_in, $status_equals, $status_not_equals, $status_specified, $status_in, $status_not_in, $valid_from_greater_than, $valid_from_less_than, $valid_from_greater_than_or_equal, $valid_from_less_than_or_equal, $valid_from_equals, $valid_from_not_equals, $valid_from_specified, $valid_from_in, $valid_from_not_in, $valid_to_greater_than, $valid_to_less_than, $valid_to_greater_than_or_equal, $valid_to_less_than_or_equal, $valid_to_equals, $valid_to_not_equals, $valid_to_specified, $valid_to_in, $valid_to_not_in, $person_id_greater_than, $person_id_less_than, $person_id_greater_than_or_equal, $person_id_less_than_or_equal, $person_id_equals, $person_id_not_equals, $person_id_specified, $person_id_in, $person_id_not_in, $membership_type_id_greater_than, $membership_type_id_less_than, $membership_type_id_greater_than_or_equal, $membership_type_id_less_than_or_equal, $membership_type_id_equals, $membership_type_id_not_equals, $membership_type_id_specified, $membership_type_id_in, $membership_type_id_not_in, $membership_period_id_greater_than, $membership_period_id_less_than, $membership_period_id_greater_than_or_equal, $membership_period_id_less_than_or_equal, $membership_period_id_equals, $membership_period_id_not_equals, $membership_period_id_specified, $membership_period_id_in, $membership_period_id_not_in, $criteria_id_greater_than, $criteria_id_less_than, $criteria_id_greater_than_or_equal, $criteria_id_less_than_or_equal, $criteria_id_equals, $criteria_id_not_equals, $criteria_id_specified, $criteria_id_in, $criteria_id_not_in, $order_id_greater_than, $order_id_less_than, $order_id_greater_than_or_equal, $order_id_less_than_or_equal, $order_id_equals, $order_id_not_equals, $order_id_specified, $order_id_in, $order_id_not_in, $number_id_greater_than, $number_id_less_than, $number_id_greater_than_or_equal, $number_id_less_than_or_equal, $number_id_equals, $number_id_not_equals, $number_id_specified, $number_id_in, $number_id_not_in, $distinct): \Idealogic\MembershipAPI\Model\MembershipDTO[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipResourceApi(
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
$first_name_contains = 'first_name_contains_example'; // string
$first_name_does_not_contain = 'first_name_does_not_contain_example'; // string
$first_name_equals = 'first_name_equals_example'; // string
$first_name_not_equals = 'first_name_not_equals_example'; // string
$first_name_specified = True; // bool
$first_name_in = array('first_name_in_example'); // string[]
$first_name_not_in = array('first_name_not_in_example'); // string[]
$last_name_contains = 'last_name_contains_example'; // string
$last_name_does_not_contain = 'last_name_does_not_contain_example'; // string
$last_name_equals = 'last_name_equals_example'; // string
$last_name_not_equals = 'last_name_not_equals_example'; // string
$last_name_specified = True; // bool
$last_name_in = array('last_name_in_example'); // string[]
$last_name_not_in = array('last_name_not_in_example'); // string[]
$id_number_contains = 'id_number_contains_example'; // string
$id_number_does_not_contain = 'id_number_does_not_contain_example'; // string
$id_number_equals = 'id_number_equals_example'; // string
$id_number_not_equals = 'id_number_not_equals_example'; // string
$id_number_specified = True; // bool
$id_number_in = array('id_number_in_example'); // string[]
$id_number_not_in = array('id_number_not_in_example'); // string[]
$other_number_contains = 'other_number_contains_example'; // string
$other_number_does_not_contain = 'other_number_does_not_contain_example'; // string
$other_number_equals = 'other_number_equals_example'; // string
$other_number_not_equals = 'other_number_not_equals_example'; // string
$other_number_specified = True; // bool
$other_number_in = array('other_number_in_example'); // string[]
$other_number_not_in = array('other_number_not_in_example'); // string[]
$dob_greater_than = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$dob_less_than = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$dob_greater_than_or_equal = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$dob_less_than_or_equal = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$dob_equals = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$dob_not_equals = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$dob_specified = True; // bool
$dob_in = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$dob_not_in = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$status_equals = 'status_equals_example'; // string
$status_not_equals = 'status_not_equals_example'; // string
$status_specified = True; // bool
$status_in = array('status_in_example'); // string[]
$status_not_in = array('status_not_in_example'); // string[]
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
$person_id_greater_than = 56; // int
$person_id_less_than = 56; // int
$person_id_greater_than_or_equal = 56; // int
$person_id_less_than_or_equal = 56; // int
$person_id_equals = 56; // int
$person_id_not_equals = 56; // int
$person_id_specified = True; // bool
$person_id_in = array(56); // int[]
$person_id_not_in = array(56); // int[]
$membership_type_id_greater_than = 56; // int
$membership_type_id_less_than = 56; // int
$membership_type_id_greater_than_or_equal = 56; // int
$membership_type_id_less_than_or_equal = 56; // int
$membership_type_id_equals = 56; // int
$membership_type_id_not_equals = 56; // int
$membership_type_id_specified = True; // bool
$membership_type_id_in = array(56); // int[]
$membership_type_id_not_in = array(56); // int[]
$membership_period_id_greater_than = 56; // int
$membership_period_id_less_than = 56; // int
$membership_period_id_greater_than_or_equal = 56; // int
$membership_period_id_less_than_or_equal = 56; // int
$membership_period_id_equals = 56; // int
$membership_period_id_not_equals = 56; // int
$membership_period_id_specified = True; // bool
$membership_period_id_in = array(56); // int[]
$membership_period_id_not_in = array(56); // int[]
$criteria_id_greater_than = 56; // int
$criteria_id_less_than = 56; // int
$criteria_id_greater_than_or_equal = 56; // int
$criteria_id_less_than_or_equal = 56; // int
$criteria_id_equals = 56; // int
$criteria_id_not_equals = 56; // int
$criteria_id_specified = True; // bool
$criteria_id_in = array(56); // int[]
$criteria_id_not_in = array(56); // int[]
$order_id_greater_than = 56; // int
$order_id_less_than = 56; // int
$order_id_greater_than_or_equal = 56; // int
$order_id_less_than_or_equal = 56; // int
$order_id_equals = 56; // int
$order_id_not_equals = 56; // int
$order_id_specified = True; // bool
$order_id_in = array(56); // int[]
$order_id_not_in = array(56); // int[]
$number_id_greater_than = 56; // int
$number_id_less_than = 56; // int
$number_id_greater_than_or_equal = 56; // int
$number_id_less_than_or_equal = 56; // int
$number_id_equals = 56; // int
$number_id_not_equals = 56; // int
$number_id_specified = True; // bool
$number_id_in = array(56); // int[]
$number_id_not_in = array(56); // int[]
$distinct = True; // bool

try {
    $result = $apiInstance->getAllMemberships($pageable, $id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $first_name_contains, $first_name_does_not_contain, $first_name_equals, $first_name_not_equals, $first_name_specified, $first_name_in, $first_name_not_in, $last_name_contains, $last_name_does_not_contain, $last_name_equals, $last_name_not_equals, $last_name_specified, $last_name_in, $last_name_not_in, $id_number_contains, $id_number_does_not_contain, $id_number_equals, $id_number_not_equals, $id_number_specified, $id_number_in, $id_number_not_in, $other_number_contains, $other_number_does_not_contain, $other_number_equals, $other_number_not_equals, $other_number_specified, $other_number_in, $other_number_not_in, $dob_greater_than, $dob_less_than, $dob_greater_than_or_equal, $dob_less_than_or_equal, $dob_equals, $dob_not_equals, $dob_specified, $dob_in, $dob_not_in, $status_equals, $status_not_equals, $status_specified, $status_in, $status_not_in, $valid_from_greater_than, $valid_from_less_than, $valid_from_greater_than_or_equal, $valid_from_less_than_or_equal, $valid_from_equals, $valid_from_not_equals, $valid_from_specified, $valid_from_in, $valid_from_not_in, $valid_to_greater_than, $valid_to_less_than, $valid_to_greater_than_or_equal, $valid_to_less_than_or_equal, $valid_to_equals, $valid_to_not_equals, $valid_to_specified, $valid_to_in, $valid_to_not_in, $person_id_greater_than, $person_id_less_than, $person_id_greater_than_or_equal, $person_id_less_than_or_equal, $person_id_equals, $person_id_not_equals, $person_id_specified, $person_id_in, $person_id_not_in, $membership_type_id_greater_than, $membership_type_id_less_than, $membership_type_id_greater_than_or_equal, $membership_type_id_less_than_or_equal, $membership_type_id_equals, $membership_type_id_not_equals, $membership_type_id_specified, $membership_type_id_in, $membership_type_id_not_in, $membership_period_id_greater_than, $membership_period_id_less_than, $membership_period_id_greater_than_or_equal, $membership_period_id_less_than_or_equal, $membership_period_id_equals, $membership_period_id_not_equals, $membership_period_id_specified, $membership_period_id_in, $membership_period_id_not_in, $criteria_id_greater_than, $criteria_id_less_than, $criteria_id_greater_than_or_equal, $criteria_id_less_than_or_equal, $criteria_id_equals, $criteria_id_not_equals, $criteria_id_specified, $criteria_id_in, $criteria_id_not_in, $order_id_greater_than, $order_id_less_than, $order_id_greater_than_or_equal, $order_id_less_than_or_equal, $order_id_equals, $order_id_not_equals, $order_id_specified, $order_id_in, $order_id_not_in, $number_id_greater_than, $number_id_less_than, $number_id_greater_than_or_equal, $number_id_less_than_or_equal, $number_id_equals, $number_id_not_equals, $number_id_specified, $number_id_in, $number_id_not_in, $distinct);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceApi->getAllMemberships: ', $e->getMessage(), PHP_EOL;
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
| **first_name_contains** | **string**|  | [optional] |
| **first_name_does_not_contain** | **string**|  | [optional] |
| **first_name_equals** | **string**|  | [optional] |
| **first_name_not_equals** | **string**|  | [optional] |
| **first_name_specified** | **bool**|  | [optional] |
| **first_name_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **first_name_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **last_name_contains** | **string**|  | [optional] |
| **last_name_does_not_contain** | **string**|  | [optional] |
| **last_name_equals** | **string**|  | [optional] |
| **last_name_not_equals** | **string**|  | [optional] |
| **last_name_specified** | **bool**|  | [optional] |
| **last_name_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **last_name_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **id_number_contains** | **string**|  | [optional] |
| **id_number_does_not_contain** | **string**|  | [optional] |
| **id_number_equals** | **string**|  | [optional] |
| **id_number_not_equals** | **string**|  | [optional] |
| **id_number_specified** | **bool**|  | [optional] |
| **id_number_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **id_number_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **other_number_contains** | **string**|  | [optional] |
| **other_number_does_not_contain** | **string**|  | [optional] |
| **other_number_equals** | **string**|  | [optional] |
| **other_number_not_equals** | **string**|  | [optional] |
| **other_number_specified** | **bool**|  | [optional] |
| **other_number_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **other_number_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **dob_greater_than** | **\DateTime**|  | [optional] |
| **dob_less_than** | **\DateTime**|  | [optional] |
| **dob_greater_than_or_equal** | **\DateTime**|  | [optional] |
| **dob_less_than_or_equal** | **\DateTime**|  | [optional] |
| **dob_equals** | **\DateTime**|  | [optional] |
| **dob_not_equals** | **\DateTime**|  | [optional] |
| **dob_specified** | **bool**|  | [optional] |
| **dob_in** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **dob_not_in** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **status_equals** | **string**|  | [optional] |
| **status_not_equals** | **string**|  | [optional] |
| **status_specified** | **bool**|  | [optional] |
| **status_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **status_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
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
| **person_id_greater_than** | **int**|  | [optional] |
| **person_id_less_than** | **int**|  | [optional] |
| **person_id_greater_than_or_equal** | **int**|  | [optional] |
| **person_id_less_than_or_equal** | **int**|  | [optional] |
| **person_id_equals** | **int**|  | [optional] |
| **person_id_not_equals** | **int**|  | [optional] |
| **person_id_specified** | **bool**|  | [optional] |
| **person_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **person_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **membership_type_id_greater_than** | **int**|  | [optional] |
| **membership_type_id_less_than** | **int**|  | [optional] |
| **membership_type_id_greater_than_or_equal** | **int**|  | [optional] |
| **membership_type_id_less_than_or_equal** | **int**|  | [optional] |
| **membership_type_id_equals** | **int**|  | [optional] |
| **membership_type_id_not_equals** | **int**|  | [optional] |
| **membership_type_id_specified** | **bool**|  | [optional] |
| **membership_type_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **membership_type_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **membership_period_id_greater_than** | **int**|  | [optional] |
| **membership_period_id_less_than** | **int**|  | [optional] |
| **membership_period_id_greater_than_or_equal** | **int**|  | [optional] |
| **membership_period_id_less_than_or_equal** | **int**|  | [optional] |
| **membership_period_id_equals** | **int**|  | [optional] |
| **membership_period_id_not_equals** | **int**|  | [optional] |
| **membership_period_id_specified** | **bool**|  | [optional] |
| **membership_period_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **membership_period_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **criteria_id_greater_than** | **int**|  | [optional] |
| **criteria_id_less_than** | **int**|  | [optional] |
| **criteria_id_greater_than_or_equal** | **int**|  | [optional] |
| **criteria_id_less_than_or_equal** | **int**|  | [optional] |
| **criteria_id_equals** | **int**|  | [optional] |
| **criteria_id_not_equals** | **int**|  | [optional] |
| **criteria_id_specified** | **bool**|  | [optional] |
| **criteria_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **criteria_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **order_id_greater_than** | **int**|  | [optional] |
| **order_id_less_than** | **int**|  | [optional] |
| **order_id_greater_than_or_equal** | **int**|  | [optional] |
| **order_id_less_than_or_equal** | **int**|  | [optional] |
| **order_id_equals** | **int**|  | [optional] |
| **order_id_not_equals** | **int**|  | [optional] |
| **order_id_specified** | **bool**|  | [optional] |
| **order_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **order_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **number_id_greater_than** | **int**|  | [optional] |
| **number_id_less_than** | **int**|  | [optional] |
| **number_id_greater_than_or_equal** | **int**|  | [optional] |
| **number_id_less_than_or_equal** | **int**|  | [optional] |
| **number_id_equals** | **int**|  | [optional] |
| **number_id_not_equals** | **int**|  | [optional] |
| **number_id_specified** | **bool**|  | [optional] |
| **number_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **number_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **distinct** | **bool**|  | [optional] |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipDTO[]**](../Model/MembershipDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLinkedMembers()`

```php
getLinkedMembers($external_user_id, $organisation_id, $membership_type_id): \Idealogic\MembershipAPI\Model\MembershipStatusDTO[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_user_id = 'external_user_id_example'; // string
$organisation_id = 56; // int
$membership_type_id = 56; // int

try {
    $result = $apiInstance->getLinkedMembers($external_user_id, $organisation_id, $membership_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceApi->getLinkedMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_user_id** | **string**|  | |
| **organisation_id** | **int**|  | [optional] |
| **membership_type_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipStatusDTO[]**](../Model/MembershipStatusDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMemberStatusByLatestPeriodForMembershipType()`

```php
getMemberStatusByLatestPeriodForMembershipType($external_user_id, $membership_type_id, $organisation_id): \Idealogic\MembershipAPI\Model\LatestPeriodMembershipStatusResponseDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_user_id = 'external_user_id_example'; // string
$membership_type_id = 56; // int
$organisation_id = 56; // int

try {
    $result = $apiInstance->getMemberStatusByLatestPeriodForMembershipType($external_user_id, $membership_type_id, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceApi->getMemberStatusByLatestPeriodForMembershipType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_user_id** | **string**|  | |
| **membership_type_id** | **int**|  | |
| **organisation_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\MembershipAPI\Model\LatestPeriodMembershipStatusResponseDTO**](../Model/LatestPeriodMembershipStatusResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMembership()`

```php
getMembership($id): \Idealogic\MembershipAPI\Model\MembershipDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->getMembership($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceApi->getMembership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipDTO**](../Model/MembershipDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMembershipAttachment()`

```php
getMembershipAttachment($uuid, $organisation_id): string[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$organisation_id = 56; // int

try {
    $result = $apiInstance->getMembershipAttachment($uuid, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceApi->getMembershipAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **organisation_id** | **int**|  | [optional] |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importMembership()`

```php
importMembership($file, $sheet_index, $period_id, $org_id): \Idealogic\MembershipAPI\Model\MembershipAddResponseDTO[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = 'file_example'; // string
$sheet_index = 56; // int
$period_id = 56; // int
$org_id = 56; // int

try {
    $result = $apiInstance->importMembership($file, $sheet_index, $period_id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceApi->importMembership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **string**|  | |
| **sheet_index** | **int**|  | |
| **period_id** | **int**|  | |
| **org_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipAddResponseDTO[]**](../Model/MembershipAddResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMembership()`

```php
updateMembership($membership_dto): \Idealogic\MembershipAPI\Model\MembershipDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membership_dto = new \Idealogic\MembershipAPI\Model\MembershipDTO(); // \Idealogic\MembershipAPI\Model\MembershipDTO

try {
    $result = $apiInstance->updateMembership($membership_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceApi->updateMembership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **membership_dto** | [**\Idealogic\MembershipAPI\Model\MembershipDTO**](../Model/MembershipDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipDTO**](../Model/MembershipDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
