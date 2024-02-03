# Idealogic\MembershipAPI\LinkedPersonResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countLinkedPeople()**](LinkedPersonResourceApi.md#countLinkedPeople) | **GET** /api/linked-people/count |  |
| [**createLinkedPerson()**](LinkedPersonResourceApi.md#createLinkedPerson) | **POST** /api/linked-people |  |
| [**deleteLinkedPerson()**](LinkedPersonResourceApi.md#deleteLinkedPerson) | **DELETE** /api/linked-people/{id} |  |
| [**getAllLinkedPeople()**](LinkedPersonResourceApi.md#getAllLinkedPeople) | **GET** /api/linked-people |  |
| [**getLinkedPerson()**](LinkedPersonResourceApi.md#getLinkedPerson) | **GET** /api/linked-people/{id} |  |
| [**updateLinkedPerson()**](LinkedPersonResourceApi.md#updateLinkedPerson) | **PUT** /api/linked-people |  |


## `countLinkedPeople()`

```php
countLinkedPeople($id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $type_equals, $type_not_equals, $type_specified, $type_in, $type_not_in, $principal_id_greater_than, $principal_id_less_than, $principal_id_greater_than_or_equal, $principal_id_less_than_or_equal, $principal_id_equals, $principal_id_not_equals, $principal_id_specified, $principal_id_in, $principal_id_not_in, $linked_member_id_greater_than, $linked_member_id_less_than, $linked_member_id_greater_than_or_equal, $linked_member_id_less_than_or_equal, $linked_member_id_equals, $linked_member_id_not_equals, $linked_member_id_specified, $linked_member_id_in, $linked_member_id_not_in, $distinct): int
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\LinkedPersonResourceApi(
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
$type_equals = 'type_equals_example'; // string
$type_not_equals = 'type_not_equals_example'; // string
$type_specified = True; // bool
$type_in = array('type_in_example'); // string[]
$type_not_in = array('type_not_in_example'); // string[]
$principal_id_greater_than = 56; // int
$principal_id_less_than = 56; // int
$principal_id_greater_than_or_equal = 56; // int
$principal_id_less_than_or_equal = 56; // int
$principal_id_equals = 56; // int
$principal_id_not_equals = 56; // int
$principal_id_specified = True; // bool
$principal_id_in = array(56); // int[]
$principal_id_not_in = array(56); // int[]
$linked_member_id_greater_than = 56; // int
$linked_member_id_less_than = 56; // int
$linked_member_id_greater_than_or_equal = 56; // int
$linked_member_id_less_than_or_equal = 56; // int
$linked_member_id_equals = 56; // int
$linked_member_id_not_equals = 56; // int
$linked_member_id_specified = True; // bool
$linked_member_id_in = array(56); // int[]
$linked_member_id_not_in = array(56); // int[]
$distinct = True; // bool

try {
    $result = $apiInstance->countLinkedPeople($id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $type_equals, $type_not_equals, $type_specified, $type_in, $type_not_in, $principal_id_greater_than, $principal_id_less_than, $principal_id_greater_than_or_equal, $principal_id_less_than_or_equal, $principal_id_equals, $principal_id_not_equals, $principal_id_specified, $principal_id_in, $principal_id_not_in, $linked_member_id_greater_than, $linked_member_id_less_than, $linked_member_id_greater_than_or_equal, $linked_member_id_less_than_or_equal, $linked_member_id_equals, $linked_member_id_not_equals, $linked_member_id_specified, $linked_member_id_in, $linked_member_id_not_in, $distinct);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkedPersonResourceApi->countLinkedPeople: ', $e->getMessage(), PHP_EOL;
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
| **type_equals** | **string**|  | [optional] |
| **type_not_equals** | **string**|  | [optional] |
| **type_specified** | **bool**|  | [optional] |
| **type_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **type_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **principal_id_greater_than** | **int**|  | [optional] |
| **principal_id_less_than** | **int**|  | [optional] |
| **principal_id_greater_than_or_equal** | **int**|  | [optional] |
| **principal_id_less_than_or_equal** | **int**|  | [optional] |
| **principal_id_equals** | **int**|  | [optional] |
| **principal_id_not_equals** | **int**|  | [optional] |
| **principal_id_specified** | **bool**|  | [optional] |
| **principal_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **principal_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **linked_member_id_greater_than** | **int**|  | [optional] |
| **linked_member_id_less_than** | **int**|  | [optional] |
| **linked_member_id_greater_than_or_equal** | **int**|  | [optional] |
| **linked_member_id_less_than_or_equal** | **int**|  | [optional] |
| **linked_member_id_equals** | **int**|  | [optional] |
| **linked_member_id_not_equals** | **int**|  | [optional] |
| **linked_member_id_specified** | **bool**|  | [optional] |
| **linked_member_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **linked_member_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
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

## `createLinkedPerson()`

```php
createLinkedPerson($linked_person_dto): \Idealogic\MembershipAPI\Model\LinkedPersonDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\LinkedPersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$linked_person_dto = new \Idealogic\MembershipAPI\Model\LinkedPersonDTO(); // \Idealogic\MembershipAPI\Model\LinkedPersonDTO

try {
    $result = $apiInstance->createLinkedPerson($linked_person_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkedPersonResourceApi->createLinkedPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **linked_person_dto** | [**\Idealogic\MembershipAPI\Model\LinkedPersonDTO**](../Model/LinkedPersonDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\LinkedPersonDTO**](../Model/LinkedPersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLinkedPerson()`

```php
deleteLinkedPerson($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\LinkedPersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $apiInstance->deleteLinkedPerson($id);
} catch (Exception $e) {
    echo 'Exception when calling LinkedPersonResourceApi->deleteLinkedPerson: ', $e->getMessage(), PHP_EOL;
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

## `getAllLinkedPeople()`

```php
getAllLinkedPeople($pageable, $id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $type_equals, $type_not_equals, $type_specified, $type_in, $type_not_in, $principal_id_greater_than, $principal_id_less_than, $principal_id_greater_than_or_equal, $principal_id_less_than_or_equal, $principal_id_equals, $principal_id_not_equals, $principal_id_specified, $principal_id_in, $principal_id_not_in, $linked_member_id_greater_than, $linked_member_id_less_than, $linked_member_id_greater_than_or_equal, $linked_member_id_less_than_or_equal, $linked_member_id_equals, $linked_member_id_not_equals, $linked_member_id_specified, $linked_member_id_in, $linked_member_id_not_in, $distinct): \Idealogic\MembershipAPI\Model\LinkedPersonDTO[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\LinkedPersonResourceApi(
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
$type_equals = 'type_equals_example'; // string
$type_not_equals = 'type_not_equals_example'; // string
$type_specified = True; // bool
$type_in = array('type_in_example'); // string[]
$type_not_in = array('type_not_in_example'); // string[]
$principal_id_greater_than = 56; // int
$principal_id_less_than = 56; // int
$principal_id_greater_than_or_equal = 56; // int
$principal_id_less_than_or_equal = 56; // int
$principal_id_equals = 56; // int
$principal_id_not_equals = 56; // int
$principal_id_specified = True; // bool
$principal_id_in = array(56); // int[]
$principal_id_not_in = array(56); // int[]
$linked_member_id_greater_than = 56; // int
$linked_member_id_less_than = 56; // int
$linked_member_id_greater_than_or_equal = 56; // int
$linked_member_id_less_than_or_equal = 56; // int
$linked_member_id_equals = 56; // int
$linked_member_id_not_equals = 56; // int
$linked_member_id_specified = True; // bool
$linked_member_id_in = array(56); // int[]
$linked_member_id_not_in = array(56); // int[]
$distinct = True; // bool

try {
    $result = $apiInstance->getAllLinkedPeople($pageable, $id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $type_equals, $type_not_equals, $type_specified, $type_in, $type_not_in, $principal_id_greater_than, $principal_id_less_than, $principal_id_greater_than_or_equal, $principal_id_less_than_or_equal, $principal_id_equals, $principal_id_not_equals, $principal_id_specified, $principal_id_in, $principal_id_not_in, $linked_member_id_greater_than, $linked_member_id_less_than, $linked_member_id_greater_than_or_equal, $linked_member_id_less_than_or_equal, $linked_member_id_equals, $linked_member_id_not_equals, $linked_member_id_specified, $linked_member_id_in, $linked_member_id_not_in, $distinct);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkedPersonResourceApi->getAllLinkedPeople: ', $e->getMessage(), PHP_EOL;
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
| **type_equals** | **string**|  | [optional] |
| **type_not_equals** | **string**|  | [optional] |
| **type_specified** | **bool**|  | [optional] |
| **type_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **type_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **principal_id_greater_than** | **int**|  | [optional] |
| **principal_id_less_than** | **int**|  | [optional] |
| **principal_id_greater_than_or_equal** | **int**|  | [optional] |
| **principal_id_less_than_or_equal** | **int**|  | [optional] |
| **principal_id_equals** | **int**|  | [optional] |
| **principal_id_not_equals** | **int**|  | [optional] |
| **principal_id_specified** | **bool**|  | [optional] |
| **principal_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **principal_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **linked_member_id_greater_than** | **int**|  | [optional] |
| **linked_member_id_less_than** | **int**|  | [optional] |
| **linked_member_id_greater_than_or_equal** | **int**|  | [optional] |
| **linked_member_id_less_than_or_equal** | **int**|  | [optional] |
| **linked_member_id_equals** | **int**|  | [optional] |
| **linked_member_id_not_equals** | **int**|  | [optional] |
| **linked_member_id_specified** | **bool**|  | [optional] |
| **linked_member_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **linked_member_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **distinct** | **bool**|  | [optional] |

### Return type

[**\Idealogic\MembershipAPI\Model\LinkedPersonDTO[]**](../Model/LinkedPersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLinkedPerson()`

```php
getLinkedPerson($id): \Idealogic\MembershipAPI\Model\LinkedPersonDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\LinkedPersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->getLinkedPerson($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkedPersonResourceApi->getLinkedPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\LinkedPersonDTO**](../Model/LinkedPersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLinkedPerson()`

```php
updateLinkedPerson($linked_person_dto): \Idealogic\MembershipAPI\Model\LinkedPersonDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\LinkedPersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$linked_person_dto = new \Idealogic\MembershipAPI\Model\LinkedPersonDTO(); // \Idealogic\MembershipAPI\Model\LinkedPersonDTO

try {
    $result = $apiInstance->updateLinkedPerson($linked_person_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkedPersonResourceApi->updateLinkedPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **linked_person_dto** | [**\Idealogic\MembershipAPI\Model\LinkedPersonDTO**](../Model/LinkedPersonDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\LinkedPersonDTO**](../Model/LinkedPersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
