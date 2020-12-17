<?php
/**
 * MembershipCriteriaDTO
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
 * MembershipCriteriaDTO Class Doc Comment
 *
 * @category Class
 * @description Represents the different pricing criteria for each MembershipPeriod
 * @package  Idealogic\MembershipAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MembershipCriteriaDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MembershipCriteriaDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gender' => 'string',
        'id' => 'int',
        'max_age' => 'int',
        'min_age' => 'int',
        'name' => 'string',
        'number_type_id' => 'int',
        'number_type_name' => 'string',
        'period_id' => 'int',
        'period_name' => 'string',
        'product_id' => 'int',
        'product_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'gender' => null,
        'id' => 'int64',
        'max_age' => 'int32',
        'min_age' => 'int32',
        'name' => null,
        'number_type_id' => 'int64',
        'number_type_name' => null,
        'period_id' => 'int64',
        'period_name' => null,
        'product_id' => 'int64',
        'product_name' => null
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
        'gender' => 'gender',
        'id' => 'id',
        'max_age' => 'maxAge',
        'min_age' => 'minAge',
        'name' => 'name',
        'number_type_id' => 'numberTypeId',
        'number_type_name' => 'numberTypeName',
        'period_id' => 'periodId',
        'period_name' => 'periodName',
        'product_id' => 'productId',
        'product_name' => 'productName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gender' => 'setGender',
        'id' => 'setId',
        'max_age' => 'setMaxAge',
        'min_age' => 'setMinAge',
        'name' => 'setName',
        'number_type_id' => 'setNumberTypeId',
        'number_type_name' => 'setNumberTypeName',
        'period_id' => 'setPeriodId',
        'period_name' => 'setPeriodName',
        'product_id' => 'setProductId',
        'product_name' => 'setProductName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gender' => 'getGender',
        'id' => 'getId',
        'max_age' => 'getMaxAge',
        'min_age' => 'getMinAge',
        'name' => 'getName',
        'number_type_id' => 'getNumberTypeId',
        'number_type_name' => 'getNumberTypeName',
        'period_id' => 'getPeriodId',
        'period_name' => 'getPeriodName',
        'product_id' => 'getProductId',
        'product_name' => 'getProductName'
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
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['max_age'] = isset($data['max_age']) ? $data['max_age'] : null;
        $this->container['min_age'] = isset($data['min_age']) ? $data['min_age'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['number_type_id'] = isset($data['number_type_id']) ? $data['number_type_id'] : null;
        $this->container['number_type_name'] = isset($data['number_type_name']) ? $data['number_type_name'] : null;
        $this->container['period_id'] = isset($data['period_id']) ? $data['period_id'] : null;
        $this->container['period_name'] = isset($data['period_name']) ? $data['period_name'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['product_name'] = isset($data['product_name']) ? $data['product_name'] : null;
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 25)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 25.";
        }

        if ((mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
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
     * Gets max_age
     *
     * @return int
     */
    public function getMaxAge()
    {
        return $this->container['max_age'];
    }

    /**
     * Sets max_age
     *
     * @param int $max_age max_age
     *
     * @return $this
     */
    public function setMaxAge($max_age)
    {
        $this->container['max_age'] = $max_age;

        return $this;
    }

    /**
     * Gets min_age
     *
     * @return int
     */
    public function getMinAge()
    {
        return $this->container['min_age'];
    }

    /**
     * Sets min_age
     *
     * @param int $min_age min_age
     *
     * @return $this
     */
    public function setMinAge($min_age)
    {
        $this->container['min_age'] = $min_age;

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
        if ((mb_strlen($name) > 25)) {
            throw new \InvalidArgumentException('invalid length for $name when calling MembershipCriteriaDTO., must be smaller than or equal to 25.');
        }
        if ((mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling MembershipCriteriaDTO., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets number_type_id
     *
     * @return int
     */
    public function getNumberTypeId()
    {
        return $this->container['number_type_id'];
    }

    /**
     * Sets number_type_id
     *
     * @param int $number_type_id number_type_id
     *
     * @return $this
     */
    public function setNumberTypeId($number_type_id)
    {
        $this->container['number_type_id'] = $number_type_id;

        return $this;
    }

    /**
     * Gets number_type_name
     *
     * @return string
     */
    public function getNumberTypeName()
    {
        return $this->container['number_type_name'];
    }

    /**
     * Sets number_type_name
     *
     * @param string $number_type_name number_type_name
     *
     * @return $this
     */
    public function setNumberTypeName($number_type_name)
    {
        $this->container['number_type_name'] = $number_type_name;

        return $this;
    }

    /**
     * Gets period_id
     *
     * @return int
     */
    public function getPeriodId()
    {
        return $this->container['period_id'];
    }

    /**
     * Sets period_id
     *
     * @param int $period_id period_id
     *
     * @return $this
     */
    public function setPeriodId($period_id)
    {
        $this->container['period_id'] = $period_id;

        return $this;
    }

    /**
     * Gets period_name
     *
     * @return string
     */
    public function getPeriodName()
    {
        return $this->container['period_name'];
    }

    /**
     * Sets period_name
     *
     * @param string $period_name period_name
     *
     * @return $this
     */
    public function setPeriodName($period_name)
    {
        $this->container['period_name'] = $period_name;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param int $product_id product_id
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets product_name
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->container['product_name'];
    }

    /**
     * Sets product_name
     *
     * @param string $product_name product_name
     *
     * @return $this
     */
    public function setProductName($product_name)
    {
        $this->container['product_name'] = $product_name;

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


