# Idealogic\MembershipAPI\OrgPermissionResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrgPermission()**](OrgPermissionResourceApi.md#createOrgPermission) | **POST** /api/org-permissions |  |
| [**deleteOrgPermission()**](OrgPermissionResourceApi.md#deleteOrgPermission) | **DELETE** /api/org-permissions/{id} |  |
| [**getAllOrgPermissions()**](OrgPermissionResourceApi.md#getAllOrgPermissions) | **GET** /api/org-permissions |  |
| [**getOrgPermission()**](OrgPermissionResourceApi.md#getOrgPermission) | **GET** /api/org-permissions/{id} |  |
| [**updateOrgPermission()**](OrgPermissionResourceApi.md#updateOrgPermission) | **PUT** /api/org-permissions |  |


## `createOrgPermission()`

```php
createOrgPermission($org_permission_dto): \Idealogic\MembershipAPI\Model\OrgPermissionDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\OrgPermissionResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_permission_dto = new \Idealogic\MembershipAPI\Model\OrgPermissionDTO(); // \Idealogic\MembershipAPI\Model\OrgPermissionDTO

try {
    $result = $apiInstance->createOrgPermission($org_permission_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgPermissionResourceApi->createOrgPermission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_permission_dto** | [**\Idealogic\MembershipAPI\Model\OrgPermissionDTO**](../Model/OrgPermissionDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\OrgPermissionDTO**](../Model/OrgPermissionDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrgPermission()`

```php
deleteOrgPermission($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\OrgPermissionResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $apiInstance->deleteOrgPermission($id);
} catch (Exception $e) {
    echo 'Exception when calling OrgPermissionResourceApi->deleteOrgPermission: ', $e->getMessage(), PHP_EOL;
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

## `getAllOrgPermissions()`

```php
getAllOrgPermissions($pageable): \Idealogic\MembershipAPI\Model\OrgPermissionDTO[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\OrgPermissionResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pageable = new \Idealogic\MembershipAPI\Model\Pageable(); // Pageable

try {
    $result = $apiInstance->getAllOrgPermissions($pageable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgPermissionResourceApi->getAllOrgPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pageable** | [**Pageable**](../Model/.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\OrgPermissionDTO[]**](../Model/OrgPermissionDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrgPermission()`

```php
getOrgPermission($id): \Idealogic\MembershipAPI\Model\OrgPermissionDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\OrgPermissionResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->getOrgPermission($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgPermissionResourceApi->getOrgPermission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\OrgPermissionDTO**](../Model/OrgPermissionDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrgPermission()`

```php
updateOrgPermission($org_permission_dto): \Idealogic\MembershipAPI\Model\OrgPermissionDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\OrgPermissionResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_permission_dto = new \Idealogic\MembershipAPI\Model\OrgPermissionDTO(); // \Idealogic\MembershipAPI\Model\OrgPermissionDTO

try {
    $result = $apiInstance->updateOrgPermission($org_permission_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgPermissionResourceApi->updateOrgPermission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_permission_dto** | [**\Idealogic\MembershipAPI\Model\OrgPermissionDTO**](../Model/OrgPermissionDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\OrgPermissionDTO**](../Model/OrgPermissionDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
