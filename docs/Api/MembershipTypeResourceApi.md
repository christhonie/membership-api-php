# Idealogic\MembershipAPI\MembershipTypeResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countMembershipTypes()**](MembershipTypeResourceApi.md#countMembershipTypes) | **GET** /api/membership-types/count |  |
| [**createMembershipType()**](MembershipTypeResourceApi.md#createMembershipType) | **POST** /api/membership-types |  |
| [**deleteMembershipType()**](MembershipTypeResourceApi.md#deleteMembershipType) | **DELETE** /api/membership-types/{id} |  |
| [**getAllMembershipTypes()**](MembershipTypeResourceApi.md#getAllMembershipTypes) | **GET** /api/membership-types |  |
| [**getMembershipType()**](MembershipTypeResourceApi.md#getMembershipType) | **GET** /api/membership-types/{id} |  |
| [**partialUpdateMembershipType()**](MembershipTypeResourceApi.md#partialUpdateMembershipType) | **PATCH** /api/membership-types/{id} |  |
| [**updateMembershipType()**](MembershipTypeResourceApi.md#updateMembershipType) | **PUT** /api/membership-types |  |
| [**updateMembershipType1()**](MembershipTypeResourceApi.md#updateMembershipType1) | **PUT** /api/membership-types/{id} |  |


## `countMembershipTypes()`

```php
countMembershipTypes($id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $name_contains, $name_does_not_contain, $name_equals, $name_not_equals, $name_specified, $name_in, $name_not_in, $organisation_id_greater_than, $organisation_id_less_than, $organisation_id_greater_than_or_equal, $organisation_id_less_than_or_equal, $organisation_id_equals, $organisation_id_not_equals, $organisation_id_specified, $organisation_id_in, $organisation_id_not_in, $number_type_id_greater_than, $number_type_id_less_than, $number_type_id_greater_than_or_equal, $number_type_id_less_than_or_equal, $number_type_id_equals, $number_type_id_not_equals, $number_type_id_specified, $number_type_id_in, $number_type_id_not_in, $distinct): int
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipTypeResourceApi(
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
$organisation_id_greater_than = 56; // int
$organisation_id_less_than = 56; // int
$organisation_id_greater_than_or_equal = 56; // int
$organisation_id_less_than_or_equal = 56; // int
$organisation_id_equals = 56; // int
$organisation_id_not_equals = 56; // int
$organisation_id_specified = True; // bool
$organisation_id_in = array(56); // int[]
$organisation_id_not_in = array(56); // int[]
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
    $result = $apiInstance->countMembershipTypes($id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $name_contains, $name_does_not_contain, $name_equals, $name_not_equals, $name_specified, $name_in, $name_not_in, $organisation_id_greater_than, $organisation_id_less_than, $organisation_id_greater_than_or_equal, $organisation_id_less_than_or_equal, $organisation_id_equals, $organisation_id_not_equals, $organisation_id_specified, $organisation_id_in, $organisation_id_not_in, $number_type_id_greater_than, $number_type_id_less_than, $number_type_id_greater_than_or_equal, $number_type_id_less_than_or_equal, $number_type_id_equals, $number_type_id_not_equals, $number_type_id_specified, $number_type_id_in, $number_type_id_not_in, $distinct);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipTypeResourceApi->countMembershipTypes: ', $e->getMessage(), PHP_EOL;
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
| **organisation_id_greater_than** | **int**|  | [optional] |
| **organisation_id_less_than** | **int**|  | [optional] |
| **organisation_id_greater_than_or_equal** | **int**|  | [optional] |
| **organisation_id_less_than_or_equal** | **int**|  | [optional] |
| **organisation_id_equals** | **int**|  | [optional] |
| **organisation_id_not_equals** | **int**|  | [optional] |
| **organisation_id_specified** | **bool**|  | [optional] |
| **organisation_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **organisation_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
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

## `createMembershipType()`

```php
createMembershipType($membership_type_dto): \Idealogic\MembershipAPI\Model\MembershipTypeDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipTypeResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membership_type_dto = new \Idealogic\MembershipAPI\Model\MembershipTypeDTO(); // \Idealogic\MembershipAPI\Model\MembershipTypeDTO

try {
    $result = $apiInstance->createMembershipType($membership_type_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipTypeResourceApi->createMembershipType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **membership_type_dto** | [**\Idealogic\MembershipAPI\Model\MembershipTypeDTO**](../Model/MembershipTypeDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipTypeDTO**](../Model/MembershipTypeDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMembershipType()`

```php
deleteMembershipType($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipTypeResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $apiInstance->deleteMembershipType($id);
} catch (Exception $e) {
    echo 'Exception when calling MembershipTypeResourceApi->deleteMembershipType: ', $e->getMessage(), PHP_EOL;
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

## `getAllMembershipTypes()`

```php
getAllMembershipTypes($pageable, $id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $name_contains, $name_does_not_contain, $name_equals, $name_not_equals, $name_specified, $name_in, $name_not_in, $organisation_id_greater_than, $organisation_id_less_than, $organisation_id_greater_than_or_equal, $organisation_id_less_than_or_equal, $organisation_id_equals, $organisation_id_not_equals, $organisation_id_specified, $organisation_id_in, $organisation_id_not_in, $number_type_id_greater_than, $number_type_id_less_than, $number_type_id_greater_than_or_equal, $number_type_id_less_than_or_equal, $number_type_id_equals, $number_type_id_not_equals, $number_type_id_specified, $number_type_id_in, $number_type_id_not_in, $distinct): \Idealogic\MembershipAPI\Model\MembershipTypeDTO[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipTypeResourceApi(
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
$organisation_id_greater_than = 56; // int
$organisation_id_less_than = 56; // int
$organisation_id_greater_than_or_equal = 56; // int
$organisation_id_less_than_or_equal = 56; // int
$organisation_id_equals = 56; // int
$organisation_id_not_equals = 56; // int
$organisation_id_specified = True; // bool
$organisation_id_in = array(56); // int[]
$organisation_id_not_in = array(56); // int[]
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
    $result = $apiInstance->getAllMembershipTypes($pageable, $id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $name_contains, $name_does_not_contain, $name_equals, $name_not_equals, $name_specified, $name_in, $name_not_in, $organisation_id_greater_than, $organisation_id_less_than, $organisation_id_greater_than_or_equal, $organisation_id_less_than_or_equal, $organisation_id_equals, $organisation_id_not_equals, $organisation_id_specified, $organisation_id_in, $organisation_id_not_in, $number_type_id_greater_than, $number_type_id_less_than, $number_type_id_greater_than_or_equal, $number_type_id_less_than_or_equal, $number_type_id_equals, $number_type_id_not_equals, $number_type_id_specified, $number_type_id_in, $number_type_id_not_in, $distinct);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipTypeResourceApi->getAllMembershipTypes: ', $e->getMessage(), PHP_EOL;
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
| **organisation_id_greater_than** | **int**|  | [optional] |
| **organisation_id_less_than** | **int**|  | [optional] |
| **organisation_id_greater_than_or_equal** | **int**|  | [optional] |
| **organisation_id_less_than_or_equal** | **int**|  | [optional] |
| **organisation_id_equals** | **int**|  | [optional] |
| **organisation_id_not_equals** | **int**|  | [optional] |
| **organisation_id_specified** | **bool**|  | [optional] |
| **organisation_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **organisation_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
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

[**\Idealogic\MembershipAPI\Model\MembershipTypeDTO[]**](../Model/MembershipTypeDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMembershipType()`

```php
getMembershipType($id): \Idealogic\MembershipAPI\Model\MembershipTypeDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipTypeResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->getMembershipType($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipTypeResourceApi->getMembershipType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipTypeDTO**](../Model/MembershipTypeDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partialUpdateMembershipType()`

```php
partialUpdateMembershipType($id, $membership_type_dto): \Idealogic\MembershipAPI\Model\MembershipTypeDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipTypeResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$membership_type_dto = new \Idealogic\MembershipAPI\Model\MembershipTypeDTO(); // \Idealogic\MembershipAPI\Model\MembershipTypeDTO

try {
    $result = $apiInstance->partialUpdateMembershipType($id, $membership_type_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipTypeResourceApi->partialUpdateMembershipType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **membership_type_dto** | [**\Idealogic\MembershipAPI\Model\MembershipTypeDTO**](../Model/MembershipTypeDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipTypeDTO**](../Model/MembershipTypeDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMembershipType()`

```php
updateMembershipType($membership_type_dto): \Idealogic\MembershipAPI\Model\MembershipTypeDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipTypeResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membership_type_dto = new \Idealogic\MembershipAPI\Model\MembershipTypeDTO(); // \Idealogic\MembershipAPI\Model\MembershipTypeDTO

try {
    $result = $apiInstance->updateMembershipType($membership_type_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipTypeResourceApi->updateMembershipType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **membership_type_dto** | [**\Idealogic\MembershipAPI\Model\MembershipTypeDTO**](../Model/MembershipTypeDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipTypeDTO**](../Model/MembershipTypeDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMembershipType1()`

```php
updateMembershipType1($id, $membership_type_dto): \Idealogic\MembershipAPI\Model\MembershipTypeDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\MembershipTypeResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$membership_type_dto = new \Idealogic\MembershipAPI\Model\MembershipTypeDTO(); // \Idealogic\MembershipAPI\Model\MembershipTypeDTO

try {
    $result = $apiInstance->updateMembershipType1($id, $membership_type_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipTypeResourceApi->updateMembershipType1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **membership_type_dto** | [**\Idealogic\MembershipAPI\Model\MembershipTypeDTO**](../Model/MembershipTypeDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\MembershipTypeDTO**](../Model/MembershipTypeDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
