# Idealogic\MembershipAPI\PersonResourceApi

All URIs are relative to *https://http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPersonUsingPOST**](PersonResourceApi.md#createPersonUsingPOST) | **POST** /api/people | createPerson
[**deletePersonUsingDELETE**](PersonResourceApi.md#deletePersonUsingDELETE) | **DELETE** /api/people/{id} | deletePerson
[**findByIDUsingGET**](PersonResourceApi.md#findByIDUsingGET) | **GET** /api/people/findById | findByID
[**findMatchingUsingGET**](PersonResourceApi.md#findMatchingUsingGET) | **GET** /api/people/match | findMatching
[**getAllPeopleUsingGET**](PersonResourceApi.md#getAllPeopleUsingGET) | **GET** /api/people | getAllPeople
[**getOrgPersonUsingGET**](PersonResourceApi.md#getOrgPersonUsingGET) | **GET** /api/people/org/{externalUserId} | getOrgPerson
[**getPersonUsingGET**](PersonResourceApi.md#getPersonUsingGET) | **GET** /api/people/{id} | getPerson
[**queryPersonUsingGET**](PersonResourceApi.md#queryPersonUsingGET) | **GET** /api/people/query | queryPerson
[**updatePersonUsingPUT**](PersonResourceApi.md#updatePersonUsingPUT) | **PUT** /api/people | updatePerson


# **createPersonUsingPOST**
> \Idealogic\MembershipAPI\Model\PersonDTO createPersonUsingPOST($person_dto, $organisation_id)

createPerson

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$person_dto = new \Idealogic\MembershipAPI\Model\PersonDTO(); // \Idealogic\MembershipAPI\Model\PersonDTO | personDTO
$organisation_id = 789; // int | organisationId

try {
    $result = $apiInstance->createPersonUsingPOST($person_dto, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->createPersonUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_dto** | [**\Idealogic\MembershipAPI\Model\PersonDTO**](../Model/PersonDTO.md)| personDTO |
 **organisation_id** | **int**| organisationId | [optional]

### Return type

[**\Idealogic\MembershipAPI\Model\PersonDTO**](../Model/PersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePersonUsingDELETE**
> deletePersonUsingDELETE($id)

deletePerson

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | id

try {
    $apiInstance->deletePersonUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->deletePersonUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **findByIDUsingGET**
> \Idealogic\MembershipAPI\Model\PersonDTO[] findByIDUsingGET($id_number)

findByID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_number = "id_number_example"; // string | idNumber

try {
    $result = $apiInstance->findByIDUsingGET($id_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->findByIDUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_number** | **string**| idNumber |

### Return type

[**\Idealogic\MembershipAPI\Model\PersonDTO[]**](../Model/PersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findMatchingUsingGET**
> \Idealogic\MembershipAPI\Model\PersonDTO[] findMatchingUsingGET($person_dto, $organisation_id)

findMatching

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$person_dto = new \Idealogic\MembershipAPI\Model\PersonDTO(); // \Idealogic\MembershipAPI\Model\PersonDTO | personDTO
$organisation_id = 789; // int | organisationId

try {
    $result = $apiInstance->findMatchingUsingGET($person_dto, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->findMatchingUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_dto** | [**\Idealogic\MembershipAPI\Model\PersonDTO**](../Model/PersonDTO.md)| personDTO |
 **organisation_id** | **int**| organisationId | [optional]

### Return type

[**\Idealogic\MembershipAPI\Model\PersonDTO[]**](../Model/PersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllPeopleUsingGET**
> \Idealogic\MembershipAPI\Model\PersonDTO[] getAllPeopleUsingGET($organisation_id, $page, $size, $sort)

getAllPeople

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organisation_id = 789; // int | organisationId
$page = 56; // int | Page number of the requested page
$size = 56; // int | Size of a page
$sort = array("sort_example"); // string[] | Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported.

try {
    $result = $apiInstance->getAllPeopleUsingGET($organisation_id, $page, $size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->getAllPeopleUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisation_id** | **int**| organisationId | [optional]
 **page** | **int**| Page number of the requested page | [optional]
 **size** | **int**| Size of a page | [optional]
 **sort** | [**string[]**](../Model/string.md)| Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported. | [optional]

### Return type

[**\Idealogic\MembershipAPI\Model\PersonDTO[]**](../Model/PersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrgPersonUsingGET**
> \Idealogic\MembershipAPI\Model\PersonDTO getOrgPersonUsingGET($external_user_id, $organisation_id)

getOrgPerson

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_user_id = 789; // int | externalUserId
$organisation_id = 789; // int | organisationId

try {
    $result = $apiInstance->getOrgPersonUsingGET($external_user_id, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->getOrgPersonUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_user_id** | **int**| externalUserId |
 **organisation_id** | **int**| organisationId | [optional]

### Return type

[**\Idealogic\MembershipAPI\Model\PersonDTO**](../Model/PersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonUsingGET**
> \Idealogic\MembershipAPI\Model\PersonDTO getPersonUsingGET($id)

getPerson

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | id

try {
    $result = $apiInstance->getPersonUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->getPersonUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Idealogic\MembershipAPI\Model\PersonDTO**](../Model/PersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryPersonUsingGET**
> \Idealogic\MembershipAPI\Model\PersonDTO[] queryPersonUsingGET($q, $page, $size, $sort)

queryPerson

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = "q_example"; // string | q
$page = 56; // int | Page number of the requested page
$size = 56; // int | Size of a page
$sort = array("sort_example"); // string[] | Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported.

try {
    $result = $apiInstance->queryPersonUsingGET($q, $page, $size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->queryPersonUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| q |
 **page** | **int**| Page number of the requested page | [optional]
 **size** | **int**| Size of a page | [optional]
 **sort** | [**string[]**](../Model/string.md)| Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported. | [optional]

### Return type

[**\Idealogic\MembershipAPI\Model\PersonDTO[]**](../Model/PersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePersonUsingPUT**
> \Idealogic\MembershipAPI\Model\PersonDTO updatePersonUsingPUT($person_dto, $organisation_id)

updatePerson

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$person_dto = new \Idealogic\MembershipAPI\Model\PersonDTO(); // \Idealogic\MembershipAPI\Model\PersonDTO | personDTO
$organisation_id = 789; // int | organisationId

try {
    $result = $apiInstance->updatePersonUsingPUT($person_dto, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->updatePersonUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_dto** | [**\Idealogic\MembershipAPI\Model\PersonDTO**](../Model/PersonDTO.md)| personDTO |
 **organisation_id** | **int**| organisationId | [optional]

### Return type

[**\Idealogic\MembershipAPI\Model\PersonDTO**](../Model/PersonDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

