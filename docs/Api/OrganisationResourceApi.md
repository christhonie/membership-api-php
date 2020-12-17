# Idealogic\MembershipAPI\OrganisationResourceApi

All URIs are relative to *https://http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrganisationUsingPOST**](OrganisationResourceApi.md#createOrganisationUsingPOST) | **POST** /api/organisations | createOrganisation
[**deleteOrganisationUsingDELETE**](OrganisationResourceApi.md#deleteOrganisationUsingDELETE) | **DELETE** /api/organisations/{id} | deleteOrganisation
[**getAllOrganisationsUsingGET**](OrganisationResourceApi.md#getAllOrganisationsUsingGET) | **GET** /api/organisations | getAllOrganisations
[**getOrganisationUsingGET**](OrganisationResourceApi.md#getOrganisationUsingGET) | **GET** /api/organisations/{id} | getOrganisation
[**updateOrganisationUsingPUT**](OrganisationResourceApi.md#updateOrganisationUsingPUT) | **PUT** /api/organisations | updateOrganisation


# **createOrganisationUsingPOST**
> \Idealogic\MembershipAPI\Model\OrganisationDTO createOrganisationUsingPOST($organisation_dto)

createOrganisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\OrganisationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organisation_dto = new \Idealogic\MembershipAPI\Model\OrganisationDTO(); // \Idealogic\MembershipAPI\Model\OrganisationDTO | organisationDTO

try {
    $result = $apiInstance->createOrganisationUsingPOST($organisation_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationResourceApi->createOrganisationUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisation_dto** | [**\Idealogic\MembershipAPI\Model\OrganisationDTO**](../Model/OrganisationDTO.md)| organisationDTO |

### Return type

[**\Idealogic\MembershipAPI\Model\OrganisationDTO**](../Model/OrganisationDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrganisationUsingDELETE**
> deleteOrganisationUsingDELETE($id)

deleteOrganisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\OrganisationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | id

try {
    $apiInstance->deleteOrganisationUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationResourceApi->deleteOrganisationUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllOrganisationsUsingGET**
> \Idealogic\MembershipAPI\Model\OrganisationDTO[] getAllOrganisationsUsingGET($page, $size, $sort)

getAllOrganisations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\OrganisationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 56; // int | Page number of the requested page
$size = 56; // int | Size of a page
$sort = array("sort_example"); // string[] | Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported.

try {
    $result = $apiInstance->getAllOrganisationsUsingGET($page, $size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationResourceApi->getAllOrganisationsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number of the requested page | [optional]
 **size** | **int**| Size of a page | [optional]
 **sort** | [**string[]**](../Model/string.md)| Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported. | [optional]

### Return type

[**\Idealogic\MembershipAPI\Model\OrganisationDTO[]**](../Model/OrganisationDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrganisationUsingGET**
> \Idealogic\MembershipAPI\Model\OrganisationDTO getOrganisationUsingGET($id)

getOrganisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\OrganisationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | id

try {
    $result = $apiInstance->getOrganisationUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationResourceApi->getOrganisationUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Idealogic\MembershipAPI\Model\OrganisationDTO**](../Model/OrganisationDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrganisationUsingPUT**
> \Idealogic\MembershipAPI\Model\OrganisationDTO updateOrganisationUsingPUT($organisation_dto)

updateOrganisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\OrganisationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organisation_dto = new \Idealogic\MembershipAPI\Model\OrganisationDTO(); // \Idealogic\MembershipAPI\Model\OrganisationDTO | organisationDTO

try {
    $result = $apiInstance->updateOrganisationUsingPUT($organisation_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationResourceApi->updateOrganisationUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisation_dto** | [**\Idealogic\MembershipAPI\Model\OrganisationDTO**](../Model/OrganisationDTO.md)| organisationDTO |

### Return type

[**\Idealogic\MembershipAPI\Model\OrganisationDTO**](../Model/OrganisationDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

