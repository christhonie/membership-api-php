# Idealogic\MembershipAPI\OrgPermissionResourceApi

All URIs are relative to *https://http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrgPermissionUsingPOST**](OrgPermissionResourceApi.md#createOrgPermissionUsingPOST) | **POST** /api/org-permissions | createOrgPermission
[**deleteOrgPermissionUsingDELETE**](OrgPermissionResourceApi.md#deleteOrgPermissionUsingDELETE) | **DELETE** /api/org-permissions/{id} | deleteOrgPermission
[**getAllOrgPermissionsUsingGET**](OrgPermissionResourceApi.md#getAllOrgPermissionsUsingGET) | **GET** /api/org-permissions | getAllOrgPermissions
[**getOrgPermissionUsingGET**](OrgPermissionResourceApi.md#getOrgPermissionUsingGET) | **GET** /api/org-permissions/{id} | getOrgPermission
[**updateOrgPermissionUsingPUT**](OrgPermissionResourceApi.md#updateOrgPermissionUsingPUT) | **PUT** /api/org-permissions | updateOrgPermission


# **createOrgPermissionUsingPOST**
> \Idealogic\MembershipAPI\Model\OrgPermissionDTO createOrgPermissionUsingPOST($org_permission_dto)

createOrgPermission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\OrgPermissionResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_permission_dto = new \Idealogic\MembershipAPI\Model\OrgPermissionDTO(); // \Idealogic\MembershipAPI\Model\OrgPermissionDTO | orgPermissionDTO

try {
    $result = $apiInstance->createOrgPermissionUsingPOST($org_permission_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgPermissionResourceApi->createOrgPermissionUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_permission_dto** | [**\Idealogic\MembershipAPI\Model\OrgPermissionDTO**](../Model/OrgPermissionDTO.md)| orgPermissionDTO |

### Return type

[**\Idealogic\MembershipAPI\Model\OrgPermissionDTO**](../Model/OrgPermissionDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrgPermissionUsingDELETE**
> deleteOrgPermissionUsingDELETE($id)

deleteOrgPermission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\OrgPermissionResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | id

try {
    $apiInstance->deleteOrgPermissionUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling OrgPermissionResourceApi->deleteOrgPermissionUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getAllOrgPermissionsUsingGET**
> \Idealogic\MembershipAPI\Model\OrgPermissionDTO[] getAllOrgPermissionsUsingGET($page, $size, $sort)

getAllOrgPermissions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\OrgPermissionResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 56; // int | Page number of the requested page
$size = 56; // int | Size of a page
$sort = array("sort_example"); // string[] | Sorting criteria in the format: property(,asc|desc). Default sort order is ascending. Multiple sort criteria are supported.

try {
    $result = $apiInstance->getAllOrgPermissionsUsingGET($page, $size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgPermissionResourceApi->getAllOrgPermissionsUsingGET: ', $e->getMessage(), PHP_EOL;
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

[**\Idealogic\MembershipAPI\Model\OrgPermissionDTO[]**](../Model/OrgPermissionDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrgPermissionUsingGET**
> \Idealogic\MembershipAPI\Model\OrgPermissionDTO getOrgPermissionUsingGET($id)

getOrgPermission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\OrgPermissionResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | id

try {
    $result = $apiInstance->getOrgPermissionUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgPermissionResourceApi->getOrgPermissionUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\Idealogic\MembershipAPI\Model\OrgPermissionDTO**](../Model/OrgPermissionDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrgPermissionUsingPUT**
> \Idealogic\MembershipAPI\Model\OrgPermissionDTO updateOrgPermissionUsingPUT($org_permission_dto)

updateOrgPermission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Idealogic\MembershipAPI\Api\OrgPermissionResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_permission_dto = new \Idealogic\MembershipAPI\Model\OrgPermissionDTO(); // \Idealogic\MembershipAPI\Model\OrgPermissionDTO | orgPermissionDTO

try {
    $result = $apiInstance->updateOrgPermissionUsingPUT($org_permission_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgPermissionResourceApi->updateOrgPermissionUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_permission_dto** | [**\Idealogic\MembershipAPI\Model\OrgPermissionDTO**](../Model/OrgPermissionDTO.md)| orgPermissionDTO |

### Return type

[**\Idealogic\MembershipAPI\Model\OrgPermissionDTO**](../Model/OrgPermissionDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

