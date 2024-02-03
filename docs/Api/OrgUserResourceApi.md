# Idealogic\MembershipAPI\OrgUserResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrgUser()**](OrgUserResourceApi.md#createOrgUser) | **POST** /api/org-users |  |
| [**deleteOrgUser()**](OrgUserResourceApi.md#deleteOrgUser) | **DELETE** /api/org-users/{id} |  |
| [**getAllOrgUsers()**](OrgUserResourceApi.md#getAllOrgUsers) | **GET** /api/org-users |  |
| [**getOrgUser()**](OrgUserResourceApi.md#getOrgUser) | **GET** /api/org-users/{id} |  |
| [**updateOrgUser()**](OrgUserResourceApi.md#updateOrgUser) | **PUT** /api/org-users |  |


## `createOrgUser()`

```php
createOrgUser($org_user_dto): \Idealogic\MembershipAPI\Model\OrgUserDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\OrgUserResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_user_dto = new \Idealogic\MembershipAPI\Model\OrgUserDTO(); // \Idealogic\MembershipAPI\Model\OrgUserDTO

try {
    $result = $apiInstance->createOrgUser($org_user_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgUserResourceApi->createOrgUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_user_dto** | [**\Idealogic\MembershipAPI\Model\OrgUserDTO**](../Model/OrgUserDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\OrgUserDTO**](../Model/OrgUserDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrgUser()`

```php
deleteOrgUser($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\OrgUserResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $apiInstance->deleteOrgUser($id);
} catch (Exception $e) {
    echo 'Exception when calling OrgUserResourceApi->deleteOrgUser: ', $e->getMessage(), PHP_EOL;
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

## `getAllOrgUsers()`

```php
getAllOrgUsers($pageable, $eagerload): \Idealogic\MembershipAPI\Model\OrgUserDTO[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\OrgUserResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pageable = new \Idealogic\MembershipAPI\Model\Pageable(); // Pageable
$eagerload = false; // bool

try {
    $result = $apiInstance->getAllOrgUsers($pageable, $eagerload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgUserResourceApi->getAllOrgUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pageable** | [**Pageable**](../Model/.md)|  | |
| **eagerload** | **bool**|  | [optional] [default to false] |

### Return type

[**\Idealogic\MembershipAPI\Model\OrgUserDTO[]**](../Model/OrgUserDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrgUser()`

```php
getOrgUser($id): \Idealogic\MembershipAPI\Model\OrgUserDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\OrgUserResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->getOrgUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgUserResourceApi->getOrgUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\OrgUserDTO**](../Model/OrgUserDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrgUser()`

```php
updateOrgUser($org_user_dto): \Idealogic\MembershipAPI\Model\OrgUserDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\OrgUserResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_user_dto = new \Idealogic\MembershipAPI\Model\OrgUserDTO(); // \Idealogic\MembershipAPI\Model\OrgUserDTO

try {
    $result = $apiInstance->updateOrgUser($org_user_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgUserResourceApi->updateOrgUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_user_dto** | [**\Idealogic\MembershipAPI\Model\OrgUserDTO**](../Model/OrgUserDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\OrgUserDTO**](../Model/OrgUserDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
