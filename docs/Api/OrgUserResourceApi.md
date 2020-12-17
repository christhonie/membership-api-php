# Idealogic\MembershipAPI\OrgUserResourceApi

All URIs are relative to *https://http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrgUserUsingPOST**](OrgUserResourceApi.md#createOrgUserUsingPOST) | **POST** /api/org-users | createOrgUser
[**deleteOrgUserUsingDELETE**](OrgUserResourceApi.md#deleteOrgUserUsingDELETE) | **DELETE** /api/org-users/{id} | deleteOrgUser
[**getAllOrgUsersUsingGET**](OrgUserResourceApi.md#getAllOrgUsersUsingGET) | **GET** /api/org-users | getAllOrgUsers
[**getOrgUserUsingGET**](OrgUserResourceApi.md#getOrgUserUsingGET) | **GET** /api/org-users/{id} | getOrgUser
[**updateOrgUserUsingPUT**](OrgUserResourceApi.md#updateOrgUserUsingPUT) | **PUT** /api/org-users | updateOrgUser


# **createOrgUserUsingPOST**
> \Idealogic\MembershipAPI\Model\OrgUserDTO createOrgUserUsingPOST($org_user_dto)

createOrgUser

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\OrgUserResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_user_dto = new \Idealogic\MembershipAPI\Model\OrgUserDTO(); // \Idealogic\MembershipAPI\Model\OrgUserDTO | orgUserDTO

try {
    $result = $apiInstance->createOrgUserUsingPOST($org_user_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgUserResourceApi->createOrgUserUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_user_dto** | [**\Idealogic\MembershipAPI\Model\OrgUserDTO**](../Model/OrgUserDTO.md)| orgUserDTO |

### Return type

[**\Idealogic\MembershipAPI\Model\OrgUserDTO**](../Model/OrgUserDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrgUserUsingDELETE**
> deleteOrgUserUsingDELETE($id)

deleteOrgUser

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\OrgUserResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | id

try {
    $apiInstance->deleteOrgUserUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling OrgUserResourceApi->deleteOrgUserUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllOrgUsersUsingGET**
> \Idealogic\MembershipAPI\Model\OrgUserDTO[] getAllOrgUsersUsingGET($eagerload, $page, $size, $sort)

getAllOrgUsers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\OrgUserResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$eagerload = false; // bool | eagerload
$page = 56; // int | Page number of the requested page
$size = 56; // int | Size of a page
$sort = array("sort_example"); // string[] | Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported.

try {
    $result = $apiInstance->getAllOrgUsersUsingGET($eagerload, $page, $size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgUserResourceApi->getAllOrgUsersUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eagerload** | **bool**| eagerload | [optional] [default to false]
 **page** | **int**| Page number of the requested page | [optional]
 **size** | **int**| Size of a page | [optional]
 **sort** | [**string[]**](../Model/string.md)| Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported. | [optional]

### Return type

[**\Idealogic\MembershipAPI\Model\OrgUserDTO[]**](../Model/OrgUserDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrgUserUsingGET**
> \Idealogic\MembershipAPI\Model\OrgUserDTO getOrgUserUsingGET($id)

getOrgUser

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\OrgUserResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | id

try {
    $result = $apiInstance->getOrgUserUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgUserResourceApi->getOrgUserUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Idealogic\MembershipAPI\Model\OrgUserDTO**](../Model/OrgUserDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrgUserUsingPUT**
> \Idealogic\MembershipAPI\Model\OrgUserDTO updateOrgUserUsingPUT($org_user_dto)

updateOrgUser

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\OrgUserResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_user_dto = new \Idealogic\MembershipAPI\Model\OrgUserDTO(); // \Idealogic\MembershipAPI\Model\OrgUserDTO | orgUserDTO

try {
    $result = $apiInstance->updateOrgUserUsingPUT($org_user_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgUserResourceApi->updateOrgUserUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_user_dto** | [**\Idealogic\MembershipAPI\Model\OrgUserDTO**](../Model/OrgUserDTO.md)| orgUserDTO |

### Return type

[**\Idealogic\MembershipAPI\Model\OrgUserDTO**](../Model/OrgUserDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

