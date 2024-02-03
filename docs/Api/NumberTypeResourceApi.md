# Idealogic\MembershipAPI\NumberTypeResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNumberType()**](NumberTypeResourceApi.md#createNumberType) | **POST** /api/number-types |  |
| [**deleteNumberType()**](NumberTypeResourceApi.md#deleteNumberType) | **DELETE** /api/number-types/{id} |  |
| [**getAllNumberTypes()**](NumberTypeResourceApi.md#getAllNumberTypes) | **GET** /api/number-types |  |
| [**getNumberType()**](NumberTypeResourceApi.md#getNumberType) | **GET** /api/number-types/{id} |  |
| [**updateNumberType()**](NumberTypeResourceApi.md#updateNumberType) | **PUT** /api/number-types |  |


## `createNumberType()`

```php
createNumberType($number_type_dto): \Idealogic\MembershipAPI\Model\NumberTypeDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\NumberTypeResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number_type_dto = new \Idealogic\MembershipAPI\Model\NumberTypeDTO(); // \Idealogic\MembershipAPI\Model\NumberTypeDTO

try {
    $result = $apiInstance->createNumberType($number_type_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberTypeResourceApi->createNumberType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number_type_dto** | [**\Idealogic\MembershipAPI\Model\NumberTypeDTO**](../Model/NumberTypeDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\NumberTypeDTO**](../Model/NumberTypeDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNumberType()`

```php
deleteNumberType($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\NumberTypeResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $apiInstance->deleteNumberType($id);
} catch (Exception $e) {
    echo 'Exception when calling NumberTypeResourceApi->deleteNumberType: ', $e->getMessage(), PHP_EOL;
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

## `getAllNumberTypes()`

```php
getAllNumberTypes($pageable): \Idealogic\MembershipAPI\Model\NumberTypeDTO[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\NumberTypeResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pageable = new \Idealogic\MembershipAPI\Model\Pageable(); // Pageable

try {
    $result = $apiInstance->getAllNumberTypes($pageable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberTypeResourceApi->getAllNumberTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pageable** | [**Pageable**](../Model/.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\NumberTypeDTO[]**](../Model/NumberTypeDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNumberType()`

```php
getNumberType($id): \Idealogic\MembershipAPI\Model\NumberTypeDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\NumberTypeResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->getNumberType($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberTypeResourceApi->getNumberType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\NumberTypeDTO**](../Model/NumberTypeDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNumberType()`

```php
updateNumberType($number_type_dto): \Idealogic\MembershipAPI\Model\NumberTypeDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Idealogic\MembershipAPI\Api\NumberTypeResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number_type_dto = new \Idealogic\MembershipAPI\Model\NumberTypeDTO(); // \Idealogic\MembershipAPI\Model\NumberTypeDTO

try {
    $result = $apiInstance->updateNumberType($number_type_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberTypeResourceApi->updateNumberType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number_type_dto** | [**\Idealogic\MembershipAPI\Model\NumberTypeDTO**](../Model/NumberTypeDTO.md)|  | |

### Return type

[**\Idealogic\MembershipAPI\Model\NumberTypeDTO**](../Model/NumberTypeDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
