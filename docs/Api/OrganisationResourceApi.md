# Idealogic\MembershipAPI\OrganisationResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganisation()**](OrganisationResourceApi.md#createOrganisation) | **POST** /api/organisations |  |
| [**deleteOrganisation()**](OrganisationResourceApi.md#deleteOrganisation) | **DELETE** /api/organisations/{id} |  |
| [**getAllOrganisations()**](OrganisationResourceApi.md#getAllOrganisations) | **GET** /api/organisations |  |
| [**getOrganisation()**](OrganisationResourceApi.md#getOrganisation) | **GET** /api/organisations/{id} |  |
| [**partialUpdateOrganisation()**](OrganisationResourceApi.md#partialUpdateOrganisation) | **PATCH** /api/organisations/{id} |  |
| [**updateOrganisation()**](OrganisationResourceApi.md#updateOrganisation) | **PUT** /api/organisations |  |
| [**updateOrganisation1()**](OrganisationResourceApi.md#updateOrganisation1) | **PUT** /api/organisations/{id} |  |


## `createOrganisation()`

```php
createOrganisation($organisation_dto): \Idealogic\MembershipAPI\Model\OrganisationDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\OrganisationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organisation_dto = new \Idealogic\MembershipAPI\Model\OrganisationDTO(); // \Idealogic\MembershipAPI\Model\OrganisationDTO

try {
    $result = $apiInstance->createOrganisation($organisation_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationResourceApi->createOrganisation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_dto** | [**\Idealogic\MembershipAPI\Model\OrganisationDTO**](../Model/OrganisationDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\OrganisationDTO**](../Model/OrganisationDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrganisation()`

```php
deleteOrganisation($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\OrganisationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $apiInstance->deleteOrganisation($id);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationResourceApi->deleteOrganisation: ', $e->getMessage(), PHP_EOL;
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

## `getAllOrganisations()`

```php
getAllOrganisations($pageable): \Idealogic\MembershipAPI\Model\OrganisationDTO[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\OrganisationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pageable = new \Idealogic\MembershipAPI\Model\Pageable(); // Pageable

try {
    $result = $apiInstance->getAllOrganisations($pageable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationResourceApi->getAllOrganisations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pageable** | [**Pageable**](../Model/.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\OrganisationDTO[]**](../Model/OrganisationDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganisation()`

```php
getOrganisation($id): \Idealogic\MembershipAPI\Model\OrganisationDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\OrganisationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->getOrganisation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationResourceApi->getOrganisation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\OrganisationDTO**](../Model/OrganisationDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partialUpdateOrganisation()`

```php
partialUpdateOrganisation($id, $organisation_dto): \Idealogic\MembershipAPI\Model\OrganisationDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\OrganisationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$organisation_dto = new \Idealogic\MembershipAPI\Model\OrganisationDTO(); // \Idealogic\MembershipAPI\Model\OrganisationDTO

try {
    $result = $apiInstance->partialUpdateOrganisation($id, $organisation_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationResourceApi->partialUpdateOrganisation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **organisation_dto** | [**\Idealogic\MembershipAPI\Model\OrganisationDTO**](../Model/OrganisationDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\OrganisationDTO**](../Model/OrganisationDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganisation()`

```php
updateOrganisation($organisation_dto): \Idealogic\MembershipAPI\Model\OrganisationDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\OrganisationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organisation_dto = new \Idealogic\MembershipAPI\Model\OrganisationDTO(); // \Idealogic\MembershipAPI\Model\OrganisationDTO

try {
    $result = $apiInstance->updateOrganisation($organisation_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationResourceApi->updateOrganisation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_dto** | [**\Idealogic\MembershipAPI\Model\OrganisationDTO**](../Model/OrganisationDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\OrganisationDTO**](../Model/OrganisationDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganisation1()`

```php
updateOrganisation1($id, $organisation_dto): \Idealogic\MembershipAPI\Model\OrganisationDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\OrganisationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$organisation_dto = new \Idealogic\MembershipAPI\Model\OrganisationDTO(); // \Idealogic\MembershipAPI\Model\OrganisationDTO

try {
    $result = $apiInstance->updateOrganisation1($id, $organisation_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationResourceApi->updateOrganisation1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **organisation_dto** | [**\Idealogic\MembershipAPI\Model\OrganisationDTO**](../Model/OrganisationDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\OrganisationDTO**](../Model/OrganisationDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
