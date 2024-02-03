# Idealogic\MembershipAPI\PersonResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPerson()**](PersonResourceApi.md#createPerson) | **POST** /api/people |  |
| [**deletePerson()**](PersonResourceApi.md#deletePerson) | **DELETE** /api/people/{id} |  |
| [**findByID()**](PersonResourceApi.md#findByID) | **GET** /api/people/findById |  |
| [**findByIdDetails()**](PersonResourceApi.md#findByIdDetails) | **POST** /api/people/idsearch |  |
| [**findMatching()**](PersonResourceApi.md#findMatching) | **GET** /api/people/match |  |
| [**getAllPeople()**](PersonResourceApi.md#getAllPeople) | **GET** /api/people |  |
| [**getOrgPerson()**](PersonResourceApi.md#getOrgPerson) | **GET** /api/people/org/{externalUserId} |  |
| [**getPerson()**](PersonResourceApi.md#getPerson) | **GET** /api/people/{id} |  |
| [**queryPerson()**](PersonResourceApi.md#queryPerson) | **GET** /api/people/query |  |
| [**updatePerson()**](PersonResourceApi.md#updatePerson) | **PUT** /api/people |  |


## `createPerson()`

```php
createPerson($person_dto, $organisation_id): \Idealogic\MembershipAPI\Model\PersonDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$person_dto = new \Idealogic\MembershipAPI\Model\PersonDTO(); // \Idealogic\MembershipAPI\Model\PersonDTO
$organisation_id = 56; // int

try {
    $result = $apiInstance->createPerson($person_dto, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->createPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_dto** | [**\Idealogic\MembershipAPI\Model\PersonDTO**](../Model/PersonDTO.md)|  | |
| **organisation_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\MembershipAPI\Model\PersonDTO**](../Model/PersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePerson()`

```php
deletePerson($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $apiInstance->deletePerson($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->deletePerson: ', $e->getMessage(), PHP_EOL;
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

## `findByID()`

```php
findByID($id_number): \Idealogic\MembershipAPI\Model\PersonDTO[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_number = 'id_number_example'; // string

try {
    $result = $apiInstance->findByID($id_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->findByID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id_number** | **string**|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\PersonDTO[]**](../Model/PersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findByIdDetails()`

```php
findByIdDetails($person_dto, $organisation_id): \Idealogic\MembershipAPI\Model\PersonDTO[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$person_dto = new \Idealogic\MembershipAPI\Model\PersonDTO(); // \Idealogic\MembershipAPI\Model\PersonDTO
$organisation_id = 56; // int

try {
    $result = $apiInstance->findByIdDetails($person_dto, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->findByIdDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_dto** | [**\Idealogic\MembershipAPI\Model\PersonDTO**](../Model/PersonDTO.md)|  | |
| **organisation_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\MembershipAPI\Model\PersonDTO[]**](../Model/PersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findMatching()`

```php
findMatching($person_dto, $organisation_id): \Idealogic\MembershipAPI\Model\PersonDTO[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$person_dto = new \Idealogic\MembershipAPI\Model\PersonDTO(); // PersonDTO
$organisation_id = 56; // int

try {
    $result = $apiInstance->findMatching($person_dto, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->findMatching: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_dto** | [**PersonDTO**](../Model/.md)|  | |
| **organisation_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\MembershipAPI\Model\PersonDTO[]**](../Model/PersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllPeople()`

```php
getAllPeople($pageable, $organisation_id): \Idealogic\MembershipAPI\Model\PersonDTO[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pageable = new \Idealogic\MembershipAPI\Model\Pageable(); // Pageable
$organisation_id = 56; // int

try {
    $result = $apiInstance->getAllPeople($pageable, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->getAllPeople: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pageable** | [**Pageable**](../Model/.md)|  | |
| **organisation_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\MembershipAPI\Model\PersonDTO[]**](../Model/PersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrgPerson()`

```php
getOrgPerson($external_user_id, $organisation_id): \Idealogic\MembershipAPI\Model\PersonDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_user_id = 56; // int
$organisation_id = 56; // int

try {
    $result = $apiInstance->getOrgPerson($external_user_id, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->getOrgPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_user_id** | **int**|  | |
| **organisation_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\MembershipAPI\Model\PersonDTO**](../Model/PersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPerson()`

```php
getPerson($id): \Idealogic\MembershipAPI\Model\PersonDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->getPerson($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->getPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\PersonDTO**](../Model/PersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryPerson()`

```php
queryPerson($q, $pageable): \Idealogic\MembershipAPI\Model\PersonDTO[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = 'q_example'; // string
$pageable = new \Idealogic\MembershipAPI\Model\Pageable(); // Pageable

try {
    $result = $apiInstance->queryPerson($q, $pageable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->queryPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**|  | |
| **pageable** | [**Pageable**](../Model/.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\PersonDTO[]**](../Model/PersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePerson()`

```php
updatePerson($person_dto, $organisation_id): \Idealogic\MembershipAPI\Model\PersonDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$person_dto = new \Idealogic\MembershipAPI\Model\PersonDTO(); // \Idealogic\MembershipAPI\Model\PersonDTO
$organisation_id = 56; // int

try {
    $result = $apiInstance->updatePerson($person_dto, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->updatePerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_dto** | [**\Idealogic\MembershipAPI\Model\PersonDTO**](../Model/PersonDTO.md)|  | |
| **organisation_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\MembershipAPI\Model\PersonDTO**](../Model/PersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
