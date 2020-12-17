<?php
/**
 * LinkedPersonDTO
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
 * LinkedPersonDTO Class Doc Comment
 *
 * @category Class
 * @package  Idealogic\MembershipAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LinkedPersonDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LinkedPersonDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'linked_member_id' => 'int',
        'linked_member_name' => 'string',
        'principal_id' => 'int',
        'principal_name' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'linked_member_id' => 'int64',
        'linked_member_name' => null,
        'principal_id' => 'int64',
        'principal_name' => null,
        'type' => null
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
        'id' => 'id',
        'linked_member_id' => 'linkedMemberId',
        'linked_member_name' => 'linkedMemberName',
        'principal_id' => 'principalId',
        'principal_name' => 'principalName',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'linked_member_id' => 'setLinkedMemberId',
        'linked_member_name' => 'setLinkedMemberName',
        'principal_id' => 'setPrincipalId',
        'principal_name' => 'setPrincipalName',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'linked_member_id' => 'getLinkedMemberId',
        'linked_member_name' => 'getLinkedMemberName',
        'principal_id' => 'getPrincipalId',
        'principal_name' => 'getPrincipalName',
        'type' => 'getType'
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

    const TYPE_NONE = 'NONE';
    const TYPE_GENERAL = 'GENERAL';
    const TYPE_GUARDIAN = 'GUARDIAN';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NONE,
            self::TYPE_GENERAL,
            self::TYPE_GUARDIAN,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['linked_member_id'] = isset($data['linked_member_id']) ? $data['linked_member_id'] : null;
        $this->container['linked_member_name'] = isset($data['linked_member_name']) ? $data['linked_member_name'] : null;
        $this->container['principal_id'] = isset($data['principal_id']) ? $data['principal_id'] : null;
        $this->container['principal_name'] = isset($data['principal_name']) ? $data['principal_name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets linked_member_id
     *
     * @return int
     */
    public function getLinkedMemberId()
    {
        return $this->container['linked_member_id'];
    }

    /**
     * Sets linked_member_id
     *
     * @param int $linked_member_id linked_member_id
     *
     * @return $this
     */
    public function setLinkedMemberId($linked_member_id)
    {
        $this->container['linked_member_id'] = $linked_member_id;

        return $this;
    }

    /**
     * Gets linked_member_name
     *
     * @return string
     */
    public function getLinkedMemberName()
    {
        return $this->container['linked_member_name'];
    }

    /**
     * Sets linked_member_name
     *
     * @param string $linked_member_name linked_member_name
     *
     * @return $this
     */
    public function setLinkedMemberName($linked_member_name)
    {
        $this->container['linked_member_name'] = $linked_member_name;

        return $this;
    }

    /**
     * Gets principal_id
     *
     * @return int
     */
    public function getPrincipalId()
    {
        return $this->container['principal_id'];
    }

    /**
     * Sets principal_id
     *
     * @param int $principal_id principal_id
     *
     * @return $this
     */
    public function setPrincipalId($principal_id)
    {
        $this->container['principal_id'] = $principal_id;

        return $this;
    }

    /**
     * Gets principal_name
     *
     * @return string
     */
    public function getPrincipalName()
    {
        return $this->container['principal_name'];
    }

    /**
     * Sets principal_name
     *
     * @param string $principal_name principal_name
     *
     * @return $this
     */
    public function setPrincipalName($principal_name)
    {
        $this->container['principal_name'] = $principal_name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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


