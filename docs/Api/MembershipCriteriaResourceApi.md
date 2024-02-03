# Idealogic\MembershipAPI\MembershipCriteriaResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countMembershipCriteria()**](MembershipCriteriaResourceApi.md#countMembershipCriteria) | **GET** /api/membership-criteria/count |  |
| [**createMembershipCriteria()**](MembershipCriteriaResourceApi.md#createMembershipCriteria) | **POST** /api/membership-criteria |  |
| [**deleteMembershipCriteria()**](MembershipCriteriaResourceApi.md#deleteMembershipCriteria) | **DELETE** /api/membership-criteria/{id} |  |
| [**getAllMembershipCriteria()**](MembershipCriteriaResourceApi.md#getAllMembershipCriteria) | **GET** /api/membership-criteria |  |
| [**getMembershipCriteria()**](MembershipCriteriaResourceApi.md#getMembershipCriteria) | **GET** /api/membership-criteria/{id} |  |
| [**partialUpdateMembershipCriteria()**](MembershipCriteriaResourceApi.md#partialUpdateMembershipCriteria) | **PATCH** /api/membership-criteria/{id} |  |
| [**updateMembershipCriteria()**](MembershipCriteriaResourceApi.md#updateMembershipCriteria) | **PUT** /api/membership-criteria |  |
| [**updateMembershipCriteria1()**](MembershipCriteriaResourceApi.md#updateMembershipCriteria1) | **PUT** /api/membership-criteria/{id} |  |


## `countMembershipCriteria()`

```php
countMembershipCriteria($id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $name_contains, $name_does_not_contain, $name_equals, $name_not_equals, $name_specified, $name_in, $name_not_in, $min_age_greater_than, $min_age_less_than, $min_age_greater_than_or_equal, $min_age_less_than_or_equal, $min_age_equals, $min_age_not_equals, $min_age_specified, $min_age_in, $min_age_not_in, $max_age_greater_than, $max_age_less_than, $max_age_greater_than_or_equal, $max_age_less_than_or_equal, $max_age_equals, $max_age_not_equals, $max_age_specified, $max_age_in, $max_age_not_in, $gender_equals, $gender_not_equals, $gender_specified, $gender_in, $gender_not_in, $period_id_greater_than, $period_id_less_than, $period_id_greater_than_or_equal, $period_id_less_than_or_equal, $period_id_equals, $period_id_not_equals, $period_id_specified, $period_id_in, $period_id_not_in, $product_id_greater_than, $product_id_less_than, $product_id_greater_than_or_equal, $product_id_less_than_or_equal, $product_id_equals, $product_id_not_equals, $product_id_specified, $product_id_in, $product_id_not_in, $number_type_id_greater_than, $number_type_id_less_than, $number_type_id_greater_than_or_equal, $number_type_id_less_than_or_equal, $number_type_id_equals, $number_type_id_not_equals, $number_type_id_specified, $number_type_id_in, $number_type_id_not_in, $distinct): int
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipCriteriaResourceApi(
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
$min_age_greater_than = 56; // int
$min_age_less_than = 56; // int
$min_age_greater_than_or_equal = 56; // int
$min_age_less_than_or_equal = 56; // int
$min_age_equals = 56; // int
$min_age_not_equals = 56; // int
$min_age_specified = True; // bool
$min_age_in = array(56); // int[]
$min_age_not_in = array(56); // int[]
$max_age_greater_than = 56; // int
$max_age_less_than = 56; // int
$max_age_greater_than_or_equal = 56; // int
$max_age_less_than_or_equal = 56; // int
$max_age_equals = 56; // int
$max_age_not_equals = 56; // int
$max_age_specified = True; // bool
$max_age_in = array(56); // int[]
$max_age_not_in = array(56); // int[]
$gender_equals = 'gender_equals_example'; // string
$gender_not_equals = 'gender_not_equals_example'; // string
$gender_specified = True; // bool
$gender_in = array('gender_in_example'); // string[]
$gender_not_in = array('gender_not_in_example'); // string[]
$period_id_greater_than = 56; // int
$period_id_less_than = 56; // int
$period_id_greater_than_or_equal = 56; // int
$period_id_less_than_or_equal = 56; // int
$period_id_equals = 56; // int
$period_id_not_equals = 56; // int
$period_id_specified = True; // bool
$period_id_in = array(56); // int[]
$period_id_not_in = array(56); // int[]
$product_id_greater_than = 56; // int
$product_id_less_than = 56; // int
$product_id_greater_than_or_equal = 56; // int
$product_id_less_than_or_equal = 56; // int
$product_id_equals = 56; // int
$product_id_not_equals = 56; // int
$product_id_specified = True; // bool
$product_id_in = array(56); // int[]
$product_id_not_in = array(56); // int[]
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
    $result = $apiInstance->countMembershipCriteria($id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $name_contains, $name_does_not_contain, $name_equals, $name_not_equals, $name_specified, $name_in, $name_not_in, $min_age_greater_than, $min_age_less_than, $min_age_greater_than_or_equal, $min_age_less_than_or_equal, $min_age_equals, $min_age_not_equals, $min_age_specified, $min_age_in, $min_age_not_in, $max_age_greater_than, $max_age_less_than, $max_age_greater_than_or_equal, $max_age_less_than_or_equal, $max_age_equals, $max_age_not_equals, $max_age_specified, $max_age_in, $max_age_not_in, $gender_equals, $gender_not_equals, $gender_specified, $gender_in, $gender_not_in, $period_id_greater_than, $period_id_less_than, $period_id_greater_than_or_equal, $period_id_less_than_or_equal, $period_id_equals, $period_id_not_equals, $period_id_specified, $period_id_in, $period_id_not_in, $product_id_greater_than, $product_id_less_than, $product_id_greater_than_or_equal, $product_id_less_than_or_equal, $product_id_equals, $product_id_not_equals, $product_id_specified, $product_id_in, $product_id_not_in, $number_type_id_greater_than, $number_type_id_less_than, $number_type_id_greater_than_or_equal, $number_type_id_less_than_or_equal, $number_type_id_equals, $number_type_id_not_equals, $number_type_id_specified, $number_type_id_in, $number_type_id_not_in, $distinct);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipCriteriaResourceApi->countMembershipCriteria: ', $e->getMessage(), PHP_EOL;
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
| **min_age_greater_than** | **int**|  | [optional] |
| **min_age_less_than** | **int**|  | [optional] |
| **min_age_greater_than_or_equal** | **int**|  | [optional] |
| **min_age_less_than_or_equal** | **int**|  | [optional] |
| **min_age_equals** | **int**|  | [optional] |
| **min_age_not_equals** | **int**|  | [optional] |
| **min_age_specified** | **bool**|  | [optional] |
| **min_age_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **min_age_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **max_age_greater_than** | **int**|  | [optional] |
| **max_age_less_than** | **int**|  | [optional] |
| **max_age_greater_than_or_equal** | **int**|  | [optional] |
| **max_age_less_than_or_equal** | **int**|  | [optional] |
| **max_age_equals** | **int**|  | [optional] |
| **max_age_not_equals** | **int**|  | [optional] |
| **max_age_specified** | **bool**|  | [optional] |
| **max_age_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **max_age_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **gender_equals** | **string**|  | [optional] |
| **gender_not_equals** | **string**|  | [optional] |
| **gender_specified** | **bool**|  | [optional] |
| **gender_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **gender_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **period_id_greater_than** | **int**|  | [optional] |
| **period_id_less_than** | **int**|  | [optional] |
| **period_id_greater_than_or_equal** | **int**|  | [optional] |
| **period_id_less_than_or_equal** | **int**|  | [optional] |
| **period_id_equals** | **int**|  | [optional] |
| **period_id_not_equals** | **int**|  | [optional] |
| **period_id_specified** | **bool**|  | [optional] |
| **period_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **period_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **product_id_greater_than** | **int**|  | [optional] |
| **product_id_less_than** | **int**|  | [optional] |
| **product_id_greater_than_or_equal** | **int**|  | [optional] |
| **product_id_less_than_or_equal** | **int**|  | [optional] |
| **product_id_equals** | **int**|  | [optional] |
| **product_id_not_equals** | **int**|  | [optional] |
| **product_id_specified** | **bool**|  | [optional] |
| **product_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **product_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
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

## `createMembershipCriteria()`

```php
createMembershipCriteria($membership_criteria_dto): \Idealogic\MembershipAPI\Model\MembershipCriteriaDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipCriteriaResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membership_criteria_dto = new \Idealogic\MembershipAPI\Model\MembershipCriteriaDTO(); // \Idealogic\MembershipAPI\Model\MembershipCriteriaDTO

try {
    $result = $apiInstance->createMembershipCriteria($membership_criteria_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipCriteriaResourceApi->createMembershipCriteria: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **membership_criteria_dto** | [**\Idealogic\MembershipAPI\Model\MembershipCriteriaDTO**](../Model/MembershipCriteriaDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipCriteriaDTO**](../Model/MembershipCriteriaDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMembershipCriteria()`

```php
deleteMembershipCriteria($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipCriteriaResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $apiInstance->deleteMembershipCriteria($id);
} catch (Exception $e) {
    echo 'Exception when calling MembershipCriteriaResourceApi->deleteMembershipCriteria: ', $e->getMessage(), PHP_EOL;
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

## `getAllMembershipCriteria()`

```php
getAllMembershipCriteria($pageable, $id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $name_contains, $name_does_not_contain, $name_equals, $name_not_equals, $name_specified, $name_in, $name_not_in, $min_age_greater_than, $min_age_less_than, $min_age_greater_than_or_equal, $min_age_less_than_or_equal, $min_age_equals, $min_age_not_equals, $min_age_specified, $min_age_in, $min_age_not_in, $max_age_greater_than, $max_age_less_than, $max_age_greater_than_or_equal, $max_age_less_than_or_equal, $max_age_equals, $max_age_not_equals, $max_age_specified, $max_age_in, $max_age_not_in, $gender_equals, $gender_not_equals, $gender_specified, $gender_in, $gender_not_in, $period_id_greater_than, $period_id_less_than, $period_id_greater_than_or_equal, $period_id_less_than_or_equal, $period_id_equals, $period_id_not_equals, $period_id_specified, $period_id_in, $period_id_not_in, $product_id_greater_than, $product_id_less_than, $product_id_greater_than_or_equal, $product_id_less_than_or_equal, $product_id_equals, $product_id_not_equals, $product_id_specified, $product_id_in, $product_id_not_in, $number_type_id_greater_than, $number_type_id_less_than, $number_type_id_greater_than_or_equal, $number_type_id_less_than_or_equal, $number_type_id_equals, $number_type_id_not_equals, $number_type_id_specified, $number_type_id_in, $number_type_id_not_in, $distinct): \Idealogic\MembershipAPI\Model\MembershipCriteriaDTO[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipCriteriaResourceApi(
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
$min_age_greater_than = 56; // int
$min_age_less_than = 56; // int
$min_age_greater_than_or_equal = 56; // int
$min_age_less_than_or_equal = 56; // int
$min_age_equals = 56; // int
$min_age_not_equals = 56; // int
$min_age_specified = True; // bool
$min_age_in = array(56); // int[]
$min_age_not_in = array(56); // int[]
$max_age_greater_than = 56; // int
$max_age_less_than = 56; // int
$max_age_greater_than_or_equal = 56; // int
$max_age_less_than_or_equal = 56; // int
$max_age_equals = 56; // int
$max_age_not_equals = 56; // int
$max_age_specified = True; // bool
$max_age_in = array(56); // int[]
$max_age_not_in = array(56); // int[]
$gender_equals = 'gender_equals_example'; // string
$gender_not_equals = 'gender_not_equals_example'; // string
$gender_specified = True; // bool
$gender_in = array('gender_in_example'); // string[]
$gender_not_in = array('gender_not_in_example'); // string[]
$period_id_greater_than = 56; // int
$period_id_less_than = 56; // int
$period_id_greater_than_or_equal = 56; // int
$period_id_less_than_or_equal = 56; // int
$period_id_equals = 56; // int
$period_id_not_equals = 56; // int
$period_id_specified = True; // bool
$period_id_in = array(56); // int[]
$period_id_not_in = array(56); // int[]
$product_id_greater_than = 56; // int
$product_id_less_than = 56; // int
$product_id_greater_than_or_equal = 56; // int
$product_id_less_than_or_equal = 56; // int
$product_id_equals = 56; // int
$product_id_not_equals = 56; // int
$product_id_specified = True; // bool
$product_id_in = array(56); // int[]
$product_id_not_in = array(56); // int[]
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
    $result = $apiInstance->getAllMembershipCriteria($pageable, $id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $name_contains, $name_does_not_contain, $name_equals, $name_not_equals, $name_specified, $name_in, $name_not_in, $min_age_greater_than, $min_age_less_than, $min_age_greater_than_or_equal, $min_age_less_than_or_equal, $min_age_equals, $min_age_not_equals, $min_age_specified, $min_age_in, $min_age_not_in, $max_age_greater_than, $max_age_less_than, $max_age_greater_than_or_equal, $max_age_less_than_or_equal, $max_age_equals, $max_age_not_equals, $max_age_specified, $max_age_in, $max_age_not_in, $gender_equals, $gender_not_equals, $gender_specified, $gender_in, $gender_not_in, $period_id_greater_than, $period_id_less_than, $period_id_greater_than_or_equal, $period_id_less_than_or_equal, $period_id_equals, $period_id_not_equals, $period_id_specified, $period_id_in, $period_id_not_in, $product_id_greater_than, $product_id_less_than, $product_id_greater_than_or_equal, $product_id_less_than_or_equal, $product_id_equals, $product_id_not_equals, $product_id_specified, $product_id_in, $product_id_not_in, $number_type_id_greater_than, $number_type_id_less_than, $number_type_id_greater_than_or_equal, $number_type_id_less_than_or_equal, $number_type_id_equals, $number_type_id_not_equals, $number_type_id_specified, $number_type_id_in, $number_type_id_not_in, $distinct);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipCriteriaResourceApi->getAllMembershipCriteria: ', $e->getMessage(), PHP_EOL;
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
| **min_age_greater_than** | **int**|  | [optional] |
| **min_age_less_than** | **int**|  | [optional] |
| **min_age_greater_than_or_equal** | **int**|  | [optional] |
| **min_age_less_than_or_equal** | **int**|  | [optional] |
| **min_age_equals** | **int**|  | [optional] |
| **min_age_not_equals** | **int**|  | [optional] |
| **min_age_specified** | **bool**|  | [optional] |
| **min_age_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **min_age_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **max_age_greater_than** | **int**|  | [optional] |
| **max_age_less_than** | **int**|  | [optional] |
| **max_age_greater_than_or_equal** | **int**|  | [optional] |
| **max_age_less_than_or_equal** | **int**|  | [optional] |
| **max_age_equals** | **int**|  | [optional] |
| **max_age_not_equals** | **int**|  | [optional] |
| **max_age_specified** | **bool**|  | [optional] |
| **max_age_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **max_age_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **gender_equals** | **string**|  | [optional] |
| **gender_not_equals** | **string**|  | [optional] |
| **gender_specified** | **bool**|  | [optional] |
| **gender_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **gender_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **period_id_greater_than** | **int**|  | [optional] |
| **period_id_less_than** | **int**|  | [optional] |
| **period_id_greater_than_or_equal** | **int**|  | [optional] |
| **period_id_less_than_or_equal** | **int**|  | [optional] |
| **period_id_equals** | **int**|  | [optional] |
| **period_id_not_equals** | **int**|  | [optional] |
| **period_id_specified** | **bool**|  | [optional] |
| **period_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **period_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **product_id_greater_than** | **int**|  | [optional] |
| **product_id_less_than** | **int**|  | [optional] |
| **product_id_greater_than_or_equal** | **int**|  | [optional] |
| **product_id_less_than_or_equal** | **int**|  | [optional] |
| **product_id_equals** | **int**|  | [optional] |
| **product_id_not_equals** | **int**|  | [optional] |
| **product_id_specified** | **bool**|  | [optional] |
| **product_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **product_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
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

[**\Idealogic\MembershipAPI\Model\MembershipCriteriaDTO[]**](../Model/MembershipCriteriaDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMembershipCriteria()`

```php
getMembershipCriteria($id): \Idealogic\MembershipAPI\Model\MembershipCriteriaDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipCriteriaResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->getMembershipCriteria($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipCriteriaResourceApi->getMembershipCriteria: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipCriteriaDTO**](../Model/MembershipCriteriaDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partialUpdateMembershipCriteria()`

```php
partialUpdateMembershipCriteria($id, $membership_criteria_dto): \Idealogic\MembershipAPI\Model\MembershipCriteriaDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipCriteriaResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$membership_criteria_dto = new \Idealogic\MembershipAPI\Model\MembershipCriteriaDTO(); // \Idealogic\MembershipAPI\Model\MembershipCriteriaDTO

try {
    $result = $apiInstance->partialUpdateMembershipCriteria($id, $membership_criteria_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipCriteriaResourceApi->partialUpdateMembershipCriteria: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **membership_criteria_dto** | [**\Idealogic\MembershipAPI\Model\MembershipCriteriaDTO**](../Model/MembershipCriteriaDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipCriteriaDTO**](../Model/MembershipCriteriaDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMembershipCriteria()`

```php
updateMembershipCriteria($membership_criteria_dto): \Idealogic\MembershipAPI\Model\MembershipCriteriaDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipCriteriaResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membership_criteria_dto = new \Idealogic\MembershipAPI\Model\MembershipCriteriaDTO(); // \Idealogic\MembershipAPI\Model\MembershipCriteriaDTO

try {
    $result = $apiInstance->updateMembershipCriteria($membership_criteria_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipCriteriaResourceApi->updateMembershipCriteria: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **membership_criteria_dto** | [**\Idealogic\MembershipAPI\Model\MembershipCriteriaDTO**](../Model/MembershipCriteriaDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipCriteriaDTO**](../Model/MembershipCriteriaDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMembershipCriteria1()`

```php
updateMembershipCriteria1($id, $membership_criteria_dto): \Idealogic\MembershipAPI\Model\MembershipCriteriaDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipCriteriaResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$membership_criteria_dto = new \Idealogic\MembershipAPI\Model\MembershipCriteriaDTO(); // \Idealogic\MembershipAPI\Model\MembershipCriteriaDTO

try {
    $result = $apiInstance->updateMembershipCriteria1($id, $membership_criteria_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipCriteriaResourceApi->updateMembershipCriteria1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **membership_criteria_dto** | [**\Idealogic\MembershipAPI\Model\MembershipCriteriaDTO**](../Model/MembershipCriteriaDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipCriteriaDTO**](../Model/MembershipCriteriaDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
