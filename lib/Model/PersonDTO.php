<?php
/**
 * PersonDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  Idealogic\MembershipAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Application API
 *
 * API documentation
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.17
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Idealogic\MembershipAPI\Model;

use \ArrayAccess;
use \Idealogic\MembershipAPI\ObjectSerializer;

/**
 * PersonDTO Class Doc Comment
 *
 * @category Class
 * @package  Idealogic\MembershipAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PersonDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PersonDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'add_managed_by' => 'int',
        'add_managed_by_type' => 'string',
        'contact_number' => 'string',
        'date_of_birth' => '\DateTime',
        'doctor_contact_number' => 'string',
        'doctor_name' => 'string',
        'email' => 'string',
        'emergency_contact_name' => 'string',
        'emergency_contact_number' => 'string',
        'emergency_relationship' => 'string',
        'first_name' => 'string',
        'gender' => 'string',
        'id' => 'int',
        'identity_country_code' => 'string',
        'identity_country_name' => 'string',
        'identity_number' => 'string',
        'identity_type' => 'string',
        'language' => 'string',
        'last_name' => 'string',
        'managed_by' => '\Idealogic\MembershipAPI\Model\PersonSummaryDTO[]',
        'medical_allergies' => 'string',
        'medical_conditions' => 'string',
        'medication' => 'string',
        'name' => 'string',
        'nationality_code' => 'string',
        'nationality_name' => 'string',
        'parent_contact_email' => 'string',
        'parent_contact_name' => 'string',
        'parent_contact_number' => 'string',
        'parent_relationship' => 'string',
        'parent_type' => 'string',
        'scheme_name' => 'string',
        'scheme_policy_number' => 'string',
        'scheme_principal' => 'string',
        'user_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'add_managed_by' => 'int64',
        'add_managed_by_type' => null,
        'contact_number' => null,
        'date_of_birth' => 'date',
        'doctor_contact_number' => null,
        'doctor_name' => null,
        'email' => null,
        'emergency_contact_name' => null,
        'emergency_contact_number' => null,
        'emergency_relationship' => null,
        'first_name' => null,
        'gender' => null,
        'id' => 'int64',
        'identity_country_code' => null,
        'identity_country_name' => null,
        'identity_number' => null,
        'identity_type' => null,
        'language' => null,
        'last_name' => null,
        'managed_by' => null,
        'medical_allergies' => null,
        'medical_conditions' => null,
        'medication' => null,
        'name' => null,
        'nationality_code' => null,
        'nationality_name' => null,
        'parent_contact_email' => null,
        'parent_contact_name' => null,
        'parent_contact_number' => null,
        'parent_relationship' => null,
        'parent_type' => null,
        'scheme_name' => null,
        'scheme_policy_number' => null,
        'scheme_principal' => null,
        'user_id' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'add_managed_by' => 'addManagedBy',
        'add_managed_by_type' => 'addManagedByType',
        'contact_number' => 'contactNumber',
        'date_of_birth' => 'dateOfBirth',
        'doctor_contact_number' => 'doctorContactNumber',
        'doctor_name' => 'doctorName',
        'email' => 'email',
        'emergency_contact_name' => 'emergencyContactName',
        'emergency_contact_number' => 'emergencyContactNumber',
        'emergency_relationship' => 'emergencyRelationship',
        'first_name' => 'firstName',
        'gender' => 'gender',
        'id' => 'id',
        'identity_country_code' => 'identityCountryCode',
        'identity_country_name' => 'identityCountryName',
        'identity_number' => 'identityNumber',
        'identity_type' => 'identityType',
        'language' => 'language',
        'last_name' => 'lastName',
        'managed_by' => 'managedBy',
        'medical_allergies' => 'medicalAllergies',
        'medical_conditions' => 'medicalConditions',
        'medication' => 'medication',
        'name' => 'name',
        'nationality_code' => 'nationalityCode',
        'nationality_name' => 'nationalityName',
        'parent_contact_email' => 'parentContactEmail',
        'parent_contact_name' => 'parentContactName',
        'parent_contact_number' => 'parentContactNumber',
        'parent_relationship' => 'parentRelationship',
        'parent_type' => 'parentType',
        'scheme_name' => 'schemeName',
        'scheme_policy_number' => 'schemePolicyNumber',
        'scheme_principal' => 'schemePrincipal',
        'user_id' => 'userId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'add_managed_by' => 'setAddManagedBy',
        'add_managed_by_type' => 'setAddManagedByType',
        'contact_number' => 'setContactNumber',
        'date_of_birth' => 'setDateOfBirth',
        'doctor_contact_number' => 'setDoctorContactNumber',
        'doctor_name' => 'setDoctorName',
        'email' => 'setEmail',
        'emergency_contact_name' => 'setEmergencyContactName',
        'emergency_contact_number' => 'setEmergencyContactNumber',
        'emergency_relationship' => 'setEmergencyRelationship',
        'first_name' => 'setFirstName',
        'gender' => 'setGender',
        'id' => 'setId',
        'identity_country_code' => 'setIdentityCountryCode',
        'identity_country_name' => 'setIdentityCountryName',
        'identity_number' => 'setIdentityNumber',
        'identity_type' => 'setIdentityType',
        'language' => 'setLanguage',
        'last_name' => 'setLastName',
        'managed_by' => 'setManagedBy',
        'medical_allergies' => 'setMedicalAllergies',
        'medical_conditions' => 'setMedicalConditions',
        'medication' => 'setMedication',
        'name' => 'setName',
        'nationality_code' => 'setNationalityCode',
        'nationality_name' => 'setNationalityName',
        'parent_contact_email' => 'setParentContactEmail',
        'parent_contact_name' => 'setParentContactName',
        'parent_contact_number' => 'setParentContactNumber',
        'parent_relationship' => 'setParentRelationship',
        'parent_type' => 'setParentType',
        'scheme_name' => 'setSchemeName',
        'scheme_policy_number' => 'setSchemePolicyNumber',
        'scheme_principal' => 'setSchemePrincipal',
        'user_id' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'add_managed_by' => 'getAddManagedBy',
        'add_managed_by_type' => 'getAddManagedByType',
        'contact_number' => 'getContactNumber',
        'date_of_birth' => 'getDateOfBirth',
        'doctor_contact_number' => 'getDoctorContactNumber',
        'doctor_name' => 'getDoctorName',
        'email' => 'getEmail',
        'emergency_contact_name' => 'getEmergencyContactName',
        'emergency_contact_number' => 'getEmergencyContactNumber',
        'emergency_relationship' => 'getEmergencyRelationship',
        'first_name' => 'getFirstName',
        'gender' => 'getGender',
        'id' => 'getId',
        'identity_country_code' => 'getIdentityCountryCode',
        'identity_country_name' => 'getIdentityCountryName',
        'identity_number' => 'getIdentityNumber',
        'identity_type' => 'getIdentityType',
        'language' => 'getLanguage',
        'last_name' => 'getLastName',
        'managed_by' => 'getManagedBy',
        'medical_allergies' => 'getMedicalAllergies',
        'medical_conditions' => 'getMedicalConditions',
        'medication' => 'getMedication',
        'name' => 'getName',
        'nationality_code' => 'getNationalityCode',
        'nationality_name' => 'getNationalityName',
        'parent_contact_email' => 'getParentContactEmail',
        'parent_contact_name' => 'getParentContactName',
        'parent_contact_number' => 'getParentContactNumber',
        'parent_relationship' => 'getParentRelationship',
        'parent_type' => 'getParentType',
        'scheme_name' => 'getSchemeName',
        'scheme_policy_number' => 'getSchemePolicyNumber',
        'scheme_principal' => 'getSchemePrincipal',
        'user_id' => 'getUserId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const GENDER_UNKNOWN = 'UNKNOWN';
    const GENDER_MALE = 'MALE';
    const GENDER_FEMALE = 'FEMALE';
    const IDENTITY_TYPE_NATIONAL = 'NATIONAL';
    const IDENTITY_TYPE_PASSPORT = 'PASSPORT';
    const IDENTITY_TYPE_OTHER = 'OTHER';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_UNKNOWN,
            self::GENDER_MALE,
            self::GENDER_FEMALE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIdentityTypeAllowableValues()
    {
        return [
            self::IDENTITY_TYPE_NATIONAL,
            self::IDENTITY_TYPE_PASSPORT,
            self::IDENTITY_TYPE_OTHER,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['add_managed_by'] = isset($data['add_managed_by']) ? $data['add_managed_by'] : null;
        $this->container['add_managed_by_type'] = isset($data['add_managed_by_type']) ? $data['add_managed_by_type'] : null;
        $this->container['contact_number'] = isset($data['contact_number']) ? $data['contact_number'] : null;
        $this->container['date_of_birth'] = isset($data['date_of_birth']) ? $data['date_of_birth'] : null;
        $this->container['doctor_contact_number'] = isset($data['doctor_contact_number']) ? $data['doctor_contact_number'] : null;
        $this->container['doctor_name'] = isset($data['doctor_name']) ? $data['doctor_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['emergency_contact_name'] = isset($data['emergency_contact_name']) ? $data['emergency_contact_name'] : null;
        $this->container['emergency_contact_number'] = isset($data['emergency_contact_number']) ? $data['emergency_contact_number'] : null;
        $this->container['emergency_relationship'] = isset($data['emergency_relationship']) ? $data['emergency_relationship'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['identity_country_code'] = isset($data['identity_country_code']) ? $data['identity_country_code'] : null;
        $this->container['identity_country_name'] = isset($data['identity_country_name']) ? $data['identity_country_name'] : null;
        $this->container['identity_number'] = isset($data['identity_number']) ? $data['identity_number'] : null;
        $this->container['identity_type'] = isset($data['identity_type']) ? $data['identity_type'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['managed_by'] = isset($data['managed_by']) ? $data['managed_by'] : null;
        $this->container['medical_allergies'] = isset($data['medical_allergies']) ? $data['medical_allergies'] : null;
        $this->container['medical_conditions'] = isset($data['medical_conditions']) ? $data['medical_conditions'] : null;
        $this->container['medication'] = isset($data['medication']) ? $data['medication'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nationality_code'] = isset($data['nationality_code']) ? $data['nationality_code'] : null;
        $this->container['nationality_name'] = isset($data['nationality_name']) ? $data['nationality_name'] : null;
        $this->container['parent_contact_email'] = isset($data['parent_contact_email']) ? $data['parent_contact_email'] : null;
        $this->container['parent_contact_name'] = isset($data['parent_contact_name']) ? $data['parent_contact_name'] : null;
        $this->container['parent_contact_number'] = isset($data['parent_contact_number']) ? $data['parent_contact_number'] : null;
        $this->container['parent_relationship'] = isset($data['parent_relationship']) ? $data['parent_relationship'] : null;
        $this->container['parent_type'] = isset($data['parent_type']) ? $data['parent_type'] : null;
        $this->container['scheme_name'] = isset($data['scheme_name']) ? $data['scheme_name'] : null;
        $this->container['scheme_policy_number'] = isset($data['scheme_policy_number']) ? $data['scheme_policy_number'] : null;
        $this->container['scheme_principal'] = isset($data['scheme_principal']) ? $data['scheme_principal'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($this->container['gender']) && !in_array($this->container['gender'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'gender', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIdentityTypeAllowableValues();
        if (!is_null($this->container['identity_type']) && !in_array($this->container['identity_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'identity_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets add_managed_by
     *
     * @return int
     */
    public function getAddManagedBy()
    {
        return $this->container['add_managed_by'];
    }

    /**
     * Sets add_managed_by
     *
     * @param int $add_managed_by add_managed_by
     *
     * @return $this
     */
    public function setAddManagedBy($add_managed_by)
    {
        $this->container['add_managed_by'] = $add_managed_by;

        return $this;
    }

    /**
     * Gets add_managed_by_type
     *
     * @return string
     */
    public function getAddManagedByType()
    {
        return $this->container['add_managed_by_type'];
    }

    /**
     * Sets add_managed_by_type
     *
     * @param string $add_managed_by_type add_managed_by_type
     *
     * @return $this
     */
    public function setAddManagedByType($add_managed_by_type)
    {
        $this->container['add_managed_by_type'] = $add_managed_by_type;

        return $this;
    }

    /**
     * Gets contact_number
     *
     * @return string
     */
    public function getContactNumber()
    {
        return $this->container['contact_number'];
    }

    /**
     * Sets contact_number
     *
     * @param string $contact_number contact_number
     *
     * @return $this
     */
    public function setContactNumber($contact_number)
    {
        $this->container['contact_number'] = $contact_number;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \DateTime $date_of_birth date_of_birth
     *
     * @return $this
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets doctor_contact_number
     *
     * @return string
     */
    public function getDoctorContactNumber()
    {
        return $this->container['doctor_contact_number'];
    }

    /**
     * Sets doctor_contact_number
     *
     * @param string $doctor_contact_number doctor_contact_number
     *
     * @return $this
     */
    public function setDoctorContactNumber($doctor_contact_number)
    {
        $this->container['doctor_contact_number'] = $doctor_contact_number;

        return $this;
    }

    /**
     * Gets doctor_name
     *
     * @return string
     */
    public function getDoctorName()
    {
        return $this->container['doctor_name'];
    }

    /**
     * Sets doctor_name
     *
     * @param string $doctor_name doctor_name
     *
     * @return $this
     */
    public function setDoctorName($doctor_name)
    {
        $this->container['doctor_name'] = $doctor_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets emergency_contact_name
     *
     * @return string
     */
    public function getEmergencyContactName()
    {
        return $this->container['emergency_contact_name'];
    }

    /**
     * Sets emergency_contact_name
     *
     * @param string $emergency_contact_name emergency_contact_name
     *
     * @return $this
     */
    public function setEmergencyContactName($emergency_contact_name)
    {
        $this->container['emergency_contact_name'] = $emergency_contact_name;

        return $this;
    }

    /**
     * Gets emergency_contact_number
     *
     * @return string
     */
    public function getEmergencyContactNumber()
    {
        return $this->container['emergency_contact_number'];
    }

    /**
     * Sets emergency_contact_number
     *
     * @param string $emergency_contact_number emergency_contact_number
     *
     * @return $this
     */
    public function setEmergencyContactNumber($emergency_contact_number)
    {
        $this->container['emergency_contact_number'] = $emergency_contact_number;

        return $this;
    }

    /**
     * Gets emergency_relationship
     *
     * @return string
     */
    public function getEmergencyRelationship()
    {
        return $this->container['emergency_relationship'];
    }

    /**
     * Sets emergency_relationship
     *
     * @param string $emergency_relationship emergency_relationship
     *
     * @return $this
     */
    public function setEmergencyRelationship($emergency_relationship)
    {
        $this->container['emergency_relationship'] = $emergency_relationship;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($gender) && !in_array($gender, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'gender', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets identity_country_code
     *
     * @return string
     */
    public function getIdentityCountryCode()
    {
        return $this->container['identity_country_code'];
    }

    /**
     * Sets identity_country_code
     *
     * @param string $identity_country_code identity_country_code
     *
     * @return $this
     */
    public function setIdentityCountryCode($identity_country_code)
    {
        $this->container['identity_country_code'] = $identity_country_code;

        return $this;
    }

    /**
     * Gets identity_country_name
     *
     * @return string
     */
    public function getIdentityCountryName()
    {
        return $this->container['identity_country_name'];
    }

    /**
     * Sets identity_country_name
     *
     * @param string $identity_country_name identity_country_name
     *
     * @return $this
     */
    public function setIdentityCountryName($identity_country_name)
    {
        $this->container['identity_country_name'] = $identity_country_name;

        return $this;
    }

    /**
     * Gets identity_number
     *
     * @return string
     */
    public function getIdentityNumber()
    {
        return $this->container['identity_number'];
    }

    /**
     * Sets identity_number
     *
     * @param string $identity_number identity_number
     *
     * @return $this
     */
    public function setIdentityNumber($identity_number)
    {
        $this->container['identity_number'] = $identity_number;

        return $this;
    }

    /**
     * Gets identity_type
     *
     * @return string
     */
    public function getIdentityType()
    {
        return $this->container['identity_type'];
    }

    /**
     * Sets identity_type
     *
     * @param string $identity_type identity_type
     *
     * @return $this
     */
    public function setIdentityType($identity_type)
    {
        $allowedValues = $this->getIdentityTypeAllowableValues();
        if (!is_null($identity_type) && !in_array($identity_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'identity_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['identity_type'] = $identity_type;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets managed_by
     *
     * @return \Idealogic\MembershipAPI\Model\PersonSummaryDTO[]
     */
    public function getManagedBy()
    {
        return $this->container['managed_by'];
    }

    /**
     * Sets managed_by
     *
     * @param \Idealogic\MembershipAPI\Model\PersonSummaryDTO[] $managed_by managed_by
     *
     * @return $this
     */
    public function setManagedBy($managed_by)
    {
        $this->container['managed_by'] = $managed_by;

        return $this;
    }

    /**
     * Gets medical_allergies
     *
     * @return string
     */
    public function getMedicalAllergies()
    {
        return $this->container['medical_allergies'];
    }

    /**
     * Sets medical_allergies
     *
     * @param string $medical_allergies medical_allergies
     *
     * @return $this
     */
    public function setMedicalAllergies($medical_allergies)
    {
        $this->container['medical_allergies'] = $medical_allergies;

        return $this;
    }

    /**
     * Gets medical_conditions
     *
     * @return string
     */
    public function getMedicalConditions()
    {
        return $this->container['medical_conditions'];
    }

    /**
     * Sets medical_conditions
     *
     * @param string $medical_conditions medical_conditions
     *
     * @return $this
     */
    public function setMedicalConditions($medical_conditions)
    {
        $this->container['medical_conditions'] = $medical_conditions;

        return $this;
    }

    /**
     * Gets medication
     *
     * @return string
     */
    public function getMedication()
    {
        return $this->container['medication'];
    }

    /**
     * Sets medication
     *
     * @param string $medication medication
     *
     * @return $this
     */
    public function setMedication($medication)
    {
        $this->container['medication'] = $medication;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets nationality_code
     *
     * @return string
     */
    public function getNationalityCode()
    {
        return $this->container['nationality_code'];
    }

    /**
     * Sets nationality_code
     *
     * @param string $nationality_code nationality_code
     *
     * @return $this
     */
    public function setNationalityCode($nationality_code)
    {
        $this->container['nationality_code'] = $nationality_code;

        return $this;
    }

    /**
     * Gets nationality_name
     *
     * @return string
     */
    public function getNationalityName()
    {
        return $this->container['nationality_name'];
    }

    /**
     * Sets nationality_name
     *
     * @param string $nationality_name nationality_name
     *
     * @return $this
     */
    public function setNationalityName($nationality_name)
    {
        $this->container['nationality_name'] = $nationality_name;

        return $this;
    }

    /**
     * Gets parent_contact_email
     *
     * @return string
     */
    public function getParentContactEmail()
    {
        return $this->container['parent_contact_email'];
    }

    /**
     * Sets parent_contact_email
     *
     * @param string $parent_contact_email parent_contact_email
     *
     * @return $this
     */
    public function setParentContactEmail($parent_contact_email)
    {
        $this->container['parent_contact_email'] = $parent_contact_email;

        return $this;
    }

    /**
     * Gets parent_contact_name
     *
     * @return string
     */
    public function getParentContactName()
    {
        return $this->container['parent_contact_name'];
    }

    /**
     * Sets parent_contact_name
     *
     * @param string $parent_contact_name parent_contact_name
     *
     * @return $this
     */
    public function setParentContactName($parent_contact_name)
    {
        $this->container['parent_contact_name'] = $parent_contact_name;

        return $this;
    }

    /**
     * Gets parent_contact_number
     *
     * @return string
     */
    public function getParentContactNumber()
    {
        return $this->container['parent_contact_number'];
    }

    /**
     * Sets parent_contact_number
     *
     * @param string $parent_contact_number parent_contact_number
     *
     * @return $this
     */
    public function setParentContactNumber($parent_contact_number)
    {
        $this->container['parent_contact_number'] = $parent_contact_number;

        return $this;
    }

    /**
     * Gets parent_relationship
     *
     * @return string
     */
    public function getParentRelationship()
    {
        return $this->container['parent_relationship'];
    }

    /**
     * Sets parent_relationship
     *
     * @param string $parent_relationship parent_relationship
     *
     * @return $this
     */
    public function setParentRelationship($parent_relationship)
    {
        $this->container['parent_relationship'] = $parent_relationship;

        return $this;
    }

    /**
     * Gets parent_type
     *
     * @return string
     */
    public function getParentType()
    {
        return $this->container['parent_type'];
    }

    /**
     * Sets parent_type
     *
     * @param string $parent_type parent_type
     *
     * @return $this
     */
    public function setParentType($parent_type)
    {
        $this->container['parent_type'] = $parent_type;

        return $this;
    }

    /**
     * Gets scheme_name
     *
     * @return string
     */
    public function getSchemeName()
    {
        return $this->container['scheme_name'];
    }

    /**
     * Sets scheme_name
     *
     * @param string $scheme_name scheme_name
     *
     * @return $this
     */
    public function setSchemeName($scheme_name)
    {
        $this->container['scheme_name'] = $scheme_name;

        return $this;
    }

    /**
     * Gets scheme_policy_number
     *
     * @return string
     */
    public function getSchemePolicyNumber()
    {
        return $this->container['scheme_policy_number'];
    }

    /**
     * Sets scheme_policy_number
     *
     * @param string $scheme_policy_number scheme_policy_number
     *
     * @return $this
     */
    public function setSchemePolicyNumber($scheme_policy_number)
    {
        $this->container['scheme_policy_number'] = $scheme_policy_number;

        return $this;
    }

    /**
     * Gets scheme_principal
     *
     * @return string
     */
    public function getSchemePrincipal()
    {
        return $this->container['scheme_principal'];
    }

    /**
     * Sets scheme_principal
     *
     * @param string $scheme_principal scheme_principal
     *
     * @return $this
     */
    public function setSchemePrincipal($scheme_principal)
    {
        $this->container['scheme_principal'] = $scheme_principal;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


