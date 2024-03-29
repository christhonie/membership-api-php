# MembershipClient

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/MembershipClient/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*LinkedPersonResourceApi* | [**countLinkedPeople**](docs/Api/LinkedPersonResourceApi.md#countlinkedpeople) | **GET** /api/linked-people/count | 
*LinkedPersonResourceApi* | [**createLinkedPerson**](docs/Api/LinkedPersonResourceApi.md#createlinkedperson) | **POST** /api/linked-people | 
*LinkedPersonResourceApi* | [**deleteLinkedPerson**](docs/Api/LinkedPersonResourceApi.md#deletelinkedperson) | **DELETE** /api/linked-people/{id} | 
*LinkedPersonResourceApi* | [**getAllLinkedPeople**](docs/Api/LinkedPersonResourceApi.md#getalllinkedpeople) | **GET** /api/linked-people | 
*LinkedPersonResourceApi* | [**getLinkedPerson**](docs/Api/LinkedPersonResourceApi.md#getlinkedperson) | **GET** /api/linked-people/{id} | 
*LinkedPersonResourceApi* | [**updateLinkedPerson**](docs/Api/LinkedPersonResourceApi.md#updatelinkedperson) | **PUT** /api/linked-people | 
*MembershipCriteriaResourceApi* | [**countMembershipCriteria**](docs/Api/MembershipCriteriaResourceApi.md#countmembershipcriteria) | **GET** /api/membership-criteria/count | 
*MembershipCriteriaResourceApi* | [**createMembershipCriteria**](docs/Api/MembershipCriteriaResourceApi.md#createmembershipcriteria) | **POST** /api/membership-criteria | 
*MembershipCriteriaResourceApi* | [**deleteMembershipCriteria**](docs/Api/MembershipCriteriaResourceApi.md#deletemembershipcriteria) | **DELETE** /api/membership-criteria/{id} | 
*MembershipCriteriaResourceApi* | [**getAllMembershipCriteria**](docs/Api/MembershipCriteriaResourceApi.md#getallmembershipcriteria) | **GET** /api/membership-criteria | 
*MembershipCriteriaResourceApi* | [**getMembershipCriteria**](docs/Api/MembershipCriteriaResourceApi.md#getmembershipcriteria) | **GET** /api/membership-criteria/{id} | 
*MembershipCriteriaResourceApi* | [**partialUpdateMembershipCriteria**](docs/Api/MembershipCriteriaResourceApi.md#partialupdatemembershipcriteria) | **PATCH** /api/membership-criteria/{id} | 
*MembershipCriteriaResourceApi* | [**updateMembershipCriteria**](docs/Api/MembershipCriteriaResourceApi.md#updatemembershipcriteria) | **PUT** /api/membership-criteria | 
*MembershipCriteriaResourceApi* | [**updateMembershipCriteria1**](docs/Api/MembershipCriteriaResourceApi.md#updatemembershipcriteria1) | **PUT** /api/membership-criteria/{id} | 
*MembershipPeriodResourceApi* | [**countMembershipPeriods**](docs/Api/MembershipPeriodResourceApi.md#countmembershipperiods) | **GET** /api/membership-periods/count | 
*MembershipPeriodResourceApi* | [**createMembershipPeriod**](docs/Api/MembershipPeriodResourceApi.md#createmembershipperiod) | **POST** /api/membership-periods | 
*MembershipPeriodResourceApi* | [**deleteMembershipPeriod**](docs/Api/MembershipPeriodResourceApi.md#deletemembershipperiod) | **DELETE** /api/membership-periods/{id} | 
*MembershipPeriodResourceApi* | [**getAllMembershipPeriods**](docs/Api/MembershipPeriodResourceApi.md#getallmembershipperiods) | **GET** /api/membership-periods | 
*MembershipPeriodResourceApi* | [**getMembershipPeriod**](docs/Api/MembershipPeriodResourceApi.md#getmembershipperiod) | **GET** /api/membership-periods/{id} | 
*MembershipPeriodResourceApi* | [**partialUpdateMembershipPeriod**](docs/Api/MembershipPeriodResourceApi.md#partialupdatemembershipperiod) | **PATCH** /api/membership-periods/{id} | 
*MembershipPeriodResourceApi* | [**updateMembershipPeriod**](docs/Api/MembershipPeriodResourceApi.md#updatemembershipperiod) | **PUT** /api/membership-periods | 
*MembershipPeriodResourceApi* | [**updateMembershipPeriod1**](docs/Api/MembershipPeriodResourceApi.md#updatemembershipperiod1) | **PUT** /api/membership-periods/{id} | 
*MembershipResourceApi* | [**addMembership**](docs/Api/MembershipResourceApi.md#addmembership) | **POST** /api/memberships/add | 
*MembershipResourceApi* | [**addMembershipOrder**](docs/Api/MembershipResourceApi.md#addmembershiporder) | **POST** /api/memberships/order | 
*MembershipResourceApi* | [**countMemberships**](docs/Api/MembershipResourceApi.md#countmemberships) | **GET** /api/memberships/count | 
*MembershipResourceApi* | [**createMembership**](docs/Api/MembershipResourceApi.md#createmembership) | **POST** /api/memberships | 
*MembershipResourceApi* | [**deleteMembership**](docs/Api/MembershipResourceApi.md#deletemembership) | **DELETE** /api/memberships/{id} | 
*MembershipResourceApi* | [**enrolMemberships**](docs/Api/MembershipResourceApi.md#enrolmemberships) | **POST** /api/memberships/enrol | 
*MembershipResourceApi* | [**getAllMemberships**](docs/Api/MembershipResourceApi.md#getallmemberships) | **GET** /api/memberships | 
*MembershipResourceApi* | [**getLinkedMembers**](docs/Api/MembershipResourceApi.md#getlinkedmembers) | **GET** /api/memberships/linkedStatus/{externalUserId} | 
*MembershipResourceApi* | [**getMemberStatusByLatestPeriodForMembershipType**](docs/Api/MembershipResourceApi.md#getmemberstatusbylatestperiodformembershiptype) | **GET** /api/memberships/status/latestPeriod | 
*MembershipResourceApi* | [**getMembership**](docs/Api/MembershipResourceApi.md#getmembership) | **GET** /api/memberships/{id} | 
*MembershipResourceApi* | [**getMembershipAttachment**](docs/Api/MembershipResourceApi.md#getmembershipattachment) | **GET** /api/memberships/attachment/{uuid} | 
*MembershipResourceApi* | [**importMembership**](docs/Api/MembershipResourceApi.md#importmembership) | **PUT** /api/memberships/import | 
*MembershipResourceApi* | [**updateMembership**](docs/Api/MembershipResourceApi.md#updatemembership) | **PUT** /api/memberships | 
*MembershipTypeResourceApi* | [**countMembershipTypes**](docs/Api/MembershipTypeResourceApi.md#countmembershiptypes) | **GET** /api/membership-types/count | 
*MembershipTypeResourceApi* | [**createMembershipType**](docs/Api/MembershipTypeResourceApi.md#createmembershiptype) | **POST** /api/membership-types | 
*MembershipTypeResourceApi* | [**deleteMembershipType**](docs/Api/MembershipTypeResourceApi.md#deletemembershiptype) | **DELETE** /api/membership-types/{id} | 
*MembershipTypeResourceApi* | [**getAllMembershipTypes**](docs/Api/MembershipTypeResourceApi.md#getallmembershiptypes) | **GET** /api/membership-types | 
*MembershipTypeResourceApi* | [**getMembershipType**](docs/Api/MembershipTypeResourceApi.md#getmembershiptype) | **GET** /api/membership-types/{id} | 
*MembershipTypeResourceApi* | [**partialUpdateMembershipType**](docs/Api/MembershipTypeResourceApi.md#partialupdatemembershiptype) | **PATCH** /api/membership-types/{id} | 
*MembershipTypeResourceApi* | [**updateMembershipType**](docs/Api/MembershipTypeResourceApi.md#updatemembershiptype) | **PUT** /api/membership-types | 
*MembershipTypeResourceApi* | [**updateMembershipType1**](docs/Api/MembershipTypeResourceApi.md#updatemembershiptype1) | **PUT** /api/membership-types/{id} | 
*NumberTypeResourceApi* | [**createNumberType**](docs/Api/NumberTypeResourceApi.md#createnumbertype) | **POST** /api/number-types | 
*NumberTypeResourceApi* | [**deleteNumberType**](docs/Api/NumberTypeResourceApi.md#deletenumbertype) | **DELETE** /api/number-types/{id} | 
*NumberTypeResourceApi* | [**getAllNumberTypes**](docs/Api/NumberTypeResourceApi.md#getallnumbertypes) | **GET** /api/number-types | 
*NumberTypeResourceApi* | [**getNumberType**](docs/Api/NumberTypeResourceApi.md#getnumbertype) | **GET** /api/number-types/{id} | 
*NumberTypeResourceApi* | [**updateNumberType**](docs/Api/NumberTypeResourceApi.md#updatenumbertype) | **PUT** /api/number-types | 
*OrderResourceApi* | [**countOrders**](docs/Api/OrderResourceApi.md#countorders) | **GET** /api/orders/count | 
*OrderResourceApi* | [**createOrder**](docs/Api/OrderResourceApi.md#createorder) | **POST** /api/orders | 
*OrderResourceApi* | [**deleteOrder**](docs/Api/OrderResourceApi.md#deleteorder) | **DELETE** /api/orders/{id} | 
*OrderResourceApi* | [**getAllOrders**](docs/Api/OrderResourceApi.md#getallorders) | **GET** /api/orders | 
*OrderResourceApi* | [**getOrder**](docs/Api/OrderResourceApi.md#getorder) | **GET** /api/orders/{id} | 
*OrderResourceApi* | [**partialUpdateOrder**](docs/Api/OrderResourceApi.md#partialupdateorder) | **PATCH** /api/orders/{id} | 
*OrderResourceApi* | [**updateOrder**](docs/Api/OrderResourceApi.md#updateorder) | **PUT** /api/orders | 
*OrderResourceApi* | [**updateOrder1**](docs/Api/OrderResourceApi.md#updateorder1) | **PUT** /api/orders/{id} | 
*OrgPermissionResourceApi* | [**createOrgPermission**](docs/Api/OrgPermissionResourceApi.md#createorgpermission) | **POST** /api/org-permissions | 
*OrgPermissionResourceApi* | [**deleteOrgPermission**](docs/Api/OrgPermissionResourceApi.md#deleteorgpermission) | **DELETE** /api/org-permissions/{id} | 
*OrgPermissionResourceApi* | [**getAllOrgPermissions**](docs/Api/OrgPermissionResourceApi.md#getallorgpermissions) | **GET** /api/org-permissions | 
*OrgPermissionResourceApi* | [**getOrgPermission**](docs/Api/OrgPermissionResourceApi.md#getorgpermission) | **GET** /api/org-permissions/{id} | 
*OrgPermissionResourceApi* | [**updateOrgPermission**](docs/Api/OrgPermissionResourceApi.md#updateorgpermission) | **PUT** /api/org-permissions | 
*OrgUserResourceApi* | [**createOrgUser**](docs/Api/OrgUserResourceApi.md#createorguser) | **POST** /api/org-users | 
*OrgUserResourceApi* | [**deleteOrgUser**](docs/Api/OrgUserResourceApi.md#deleteorguser) | **DELETE** /api/org-users/{id} | 
*OrgUserResourceApi* | [**getAllOrgUsers**](docs/Api/OrgUserResourceApi.md#getallorgusers) | **GET** /api/org-users | 
*OrgUserResourceApi* | [**getOrgUser**](docs/Api/OrgUserResourceApi.md#getorguser) | **GET** /api/org-users/{id} | 
*OrgUserResourceApi* | [**updateOrgUser**](docs/Api/OrgUserResourceApi.md#updateorguser) | **PUT** /api/org-users | 
*OrganisationResourceApi* | [**createOrganisation**](docs/Api/OrganisationResourceApi.md#createorganisation) | **POST** /api/organisations | 
*OrganisationResourceApi* | [**deleteOrganisation**](docs/Api/OrganisationResourceApi.md#deleteorganisation) | **DELETE** /api/organisations/{id} | 
*OrganisationResourceApi* | [**getAllOrganisations**](docs/Api/OrganisationResourceApi.md#getallorganisations) | **GET** /api/organisations | 
*OrganisationResourceApi* | [**getOrganisation**](docs/Api/OrganisationResourceApi.md#getorganisation) | **GET** /api/organisations/{id} | 
*OrganisationResourceApi* | [**partialUpdateOrganisation**](docs/Api/OrganisationResourceApi.md#partialupdateorganisation) | **PATCH** /api/organisations/{id} | 
*OrganisationResourceApi* | [**updateOrganisation**](docs/Api/OrganisationResourceApi.md#updateorganisation) | **PUT** /api/organisations | 
*OrganisationResourceApi* | [**updateOrganisation1**](docs/Api/OrganisationResourceApi.md#updateorganisation1) | **PUT** /api/organisations/{id} | 
*PersonResourceApi* | [**createPerson**](docs/Api/PersonResourceApi.md#createperson) | **POST** /api/people | 
*PersonResourceApi* | [**deletePerson**](docs/Api/PersonResourceApi.md#deleteperson) | **DELETE** /api/people/{id} | 
*PersonResourceApi* | [**findByID**](docs/Api/PersonResourceApi.md#findbyid) | **GET** /api/people/findById | 
*PersonResourceApi* | [**findByIdDetails**](docs/Api/PersonResourceApi.md#findbyiddetails) | **POST** /api/people/idsearch | 
*PersonResourceApi* | [**findMatching**](docs/Api/PersonResourceApi.md#findmatching) | **GET** /api/people/match | 
*PersonResourceApi* | [**getAllPeople**](docs/Api/PersonResourceApi.md#getallpeople) | **GET** /api/people | 
*PersonResourceApi* | [**getOrgPerson**](docs/Api/PersonResourceApi.md#getorgperson) | **GET** /api/people/org/{externalUserId} | 
*PersonResourceApi* | [**getPerson**](docs/Api/PersonResourceApi.md#getperson) | **GET** /api/people/{id} | 
*PersonResourceApi* | [**queryPerson**](docs/Api/PersonResourceApi.md#queryperson) | **GET** /api/people/query | 
*PersonResourceApi* | [**updatePerson**](docs/Api/PersonResourceApi.md#updateperson) | **PUT** /api/people | 

## Models

- [LatestPeriodMembershipStatusResponseDTO](docs/Model/LatestPeriodMembershipStatusResponseDTO.md)
- [LinkedPersonDTO](docs/Model/LinkedPersonDTO.md)
- [MembershipCriteriaDTO](docs/Model/MembershipCriteriaDTO.md)
- [MembershipDTO](docs/Model/MembershipDTO.md)
- [MembershipEnrolRequestDTO](docs/Model/MembershipEnrolRequestDTO.md)
- [MembershipOrderLineItemDTO](docs/Model/MembershipOrderLineItemDTO.md)
- [MembershipOrderStatusRequestDTO](docs/Model/MembershipOrderStatusRequestDTO.md)
- [MembershipOrderStatusResponseDTO](docs/Model/MembershipOrderStatusResponseDTO.md)
- [MembershipPeriodDTO](docs/Model/MembershipPeriodDTO.md)
- [MembershipStatusDTO](docs/Model/MembershipStatusDTO.md)
- [MembershipTypeDTO](docs/Model/MembershipTypeDTO.md)
- [NumberTypeDTO](docs/Model/NumberTypeDTO.md)
- [OrderDTO](docs/Model/OrderDTO.md)
- [OrgPermissionDTO](docs/Model/OrgPermissionDTO.md)
- [OrgUserDTO](docs/Model/OrgUserDTO.md)
- [OrganisationDTO](docs/Model/OrganisationDTO.md)
- [PersonDTO](docs/Model/PersonDTO.md)
- [PersonSummaryDTO](docs/Model/PersonSummaryDTO.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v0`
    - Package version: `2.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
