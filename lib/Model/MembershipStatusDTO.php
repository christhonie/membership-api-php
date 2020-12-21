<?php
/**
 * MembershipStatusDTO
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
 * MembershipStatusDTO Class Doc Comment
 *
 * @category Class
 * @package  Idealogic\MembershipAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MembershipStatusDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MembershipStatusDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date_of_birth' => '\DateTime',
        'main_member' => 'bool',
        'membership_id' => 'int',
        'membership_number' => 'string',
        'membership_status' => 'string',
        'message' => 'string',
        'name' => 'string',
        'order_id' => 'int',
        'order_status' => 'string',
        'person_id' => 'int',
        'updated_details' => 'bool',
        'valid_from' => '\DateTime',
        'valid_to' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date_of_birth' => 'date',
        'main_member' => null,
        'membership_id' => 'int64',
        'membership_number' => null,
        'membership_status' => null,
        'message' => null,
        'name' => null,
        'order_id' => 'int64',
        'order_status' => null,
        'person_id' => 'int64',
        'updated_details' => null,
        'valid_from' => 'date',
        'valid_to' => 'date'
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
        'date_of_birth' => 'dateOfBirth',
        'main_member' => 'mainMember',
        'membership_id' => 'membershipId',
        'membership_number' => 'membershipNumber',
        'membership_status' => 'membershipStatus',
        'message' => 'message',
        'name' => 'name',
        'order_id' => 'orderId',
        'order_status' => 'orderStatus',
        'person_id' => 'personId',
        'updated_details' => 'updatedDetails',
        'valid_from' => 'validFrom',
        'valid_to' => 'validTo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_of_birth' => 'setDateOfBirth',
        'main_member' => 'setMainMember',
        'membership_id' => 'setMembershipId',
        'membership_number' => 'setMembershipNumber',
        'membership_status' => 'setMembershipStatus',
        'message' => 'setMessage',
        'name' => 'setName',
        'order_id' => 'setOrderId',
        'order_status' => 'setOrderStatus',
        'person_id' => 'setPersonId',
        'updated_details' => 'setUpdatedDetails',
        'valid_from' => 'setValidFrom',
        'valid_to' => 'setValidTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_of_birth' => 'getDateOfBirth',
        'main_member' => 'getMainMember',
        'membership_id' => 'getMembershipId',
        'membership_number' => 'getMembershipNumber',
        'membership_status' => 'getMembershipStatus',
        'message' => 'getMessage',
        'name' => 'getName',
        'order_id' => 'getOrderId',
        'order_status' => 'getOrderStatus',
        'person_id' => 'getPersonId',
        'updated_details' => 'getUpdatedDetails',
        'valid_from' => 'getValidFrom',
        'valid_to' => 'getValidTo'
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

    const MEMBERSHIP_STATUS_DRAFT = 'DRAFT';
    const MEMBERSHIP_STATUS_PENDING = 'PENDING';
    const MEMBERSHIP_STATUS_ACTIVE = 'ACTIVE';
    const MEMBERSHIP_STATUS_REVOKED = 'REVOKED';
    const ORDER_STATUS_PENDING = 'PENDING';
    const ORDER_STATUS_PAID = 'PAID';
    const ORDER_STATUS_REFUNDED = 'REFUNDED';
    const ORDER_STATUS_CANCELLED = 'CANCELLED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMembershipStatusAllowableValues()
    {
        return [
            self::MEMBERSHIP_STATUS_DRAFT,
            self::MEMBERSHIP_STATUS_PENDING,
            self::MEMBERSHIP_STATUS_ACTIVE,
            self::MEMBERSHIP_STATUS_REVOKED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderStatusAllowableValues()
    {
        return [
            self::ORDER_STATUS_PENDING,
            self::ORDER_STATUS_PAID,
            self::ORDER_STATUS_REFUNDED,
            self::ORDER_STATUS_CANCELLED,
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
        $this->container['date_of_birth'] = isset($data['date_of_birth']) ? $data['date_of_birth'] : null;
        $this->container['main_member'] = isset($data['main_member']) ? $data['main_member'] : null;
        $this->container['membership_id'] = isset($data['membership_id']) ? $data['membership_id'] : null;
        $this->container['membership_number'] = isset($data['membership_number']) ? $data['membership_number'] : null;
        $this->container['membership_status'] = isset($data['membership_status']) ? $data['membership_status'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['order_status'] = isset($data['order_status']) ? $data['order_status'] : null;
        $this->container['person_id'] = isset($data['person_id']) ? $data['person_id'] : null;
        $this->container['updated_details'] = isset($data['updated_details']) ? $data['updated_details'] : null;
        $this->container['valid_from'] = isset($data['valid_from']) ? $data['valid_from'] : null;
        $this->container['valid_to'] = isset($data['valid_to']) ? $data['valid_to'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMembershipStatusAllowableValues();
        if (!is_null($this->container['membership_status']) && !in_array($this->container['membership_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'membership_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOrderStatusAllowableValues();
        if (!is_null($this->container['order_status']) && !in_array($this->container['order_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'order_status', must be one of '%s'",
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
     * Gets main_member
     *
     * @return bool
     */
    public function getMainMember()
    {
        return $this->container['main_member'];
    }

    /**
     * Sets main_member
     *
     * @param bool $main_member main_member
     *
     * @return $this
     */
    public function setMainMember($main_member)
    {
        $this->container['main_member'] = $main_member;

        return $this;
    }

    /**
     * Gets membership_id
     *
     * @return int
     */
    public function getMembershipId()
    {
        return $this->container['membership_id'];
    }

    /**
     * Sets membership_id
     *
     * @param int $membership_id membership_id
     *
     * @return $this
     */
    public function setMembershipId($membership_id)
    {
        $this->container['membership_id'] = $membership_id;

        return $this;
    }

    /**
     * Gets membership_number
     *
     * @return string
     */
    public function getMembershipNumber()
    {
        return $this->container['membership_number'];
    }

    /**
     * Sets membership_number
     *
     * @param string $membership_number membership_number
     *
     * @return $this
     */
    public function setMembershipNumber($membership_number)
    {
        $this->container['membership_number'] = $membership_number;

        return $this;
    }

    /**
     * Gets membership_status
     *
     * @return string
     */
    public function getMembershipStatus()
    {
        return $this->container['membership_status'];
    }

    /**
     * Sets membership_status
     *
     * @param string $membership_status membership_status
     *
     * @return $this
     */
    public function setMembershipStatus($membership_status)
    {
        $allowedValues = $this->getMembershipStatusAllowableValues();
        if (!is_null($membership_status) && !in_array($membership_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'membership_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['membership_status'] = $membership_status;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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
     * Gets order_id
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param int $order_id order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets order_status
     *
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->container['order_status'];
    }

    /**
     * Sets order_status
     *
     * @param string $order_status order_status
     *
     * @return $this
     */
    public function setOrderStatus($order_status)
    {
        $allowedValues = $this->getOrderStatusAllowableValues();
        if (!is_null($order_status) && !in_array($order_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'order_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['order_status'] = $order_status;

        return $this;
    }

    /**
     * Gets person_id
     *
     * @return int
     */
    public function getPersonId()
    {
        return $this->container['person_id'];
    }

    /**
     * Sets person_id
     *
     * @param int $person_id person_id
     *
     * @return $this
     */
    public function setPersonId($person_id)
    {
        $this->container['person_id'] = $person_id;

        return $this;
    }

    /**
     * Gets updated_details
     *
     * @return bool
     */
    public function getUpdatedDetails()
    {
        return $this->container['updated_details'];
    }

    /**
     * Sets updated_details
     *
     * @param bool $updated_details updated_details
     *
     * @return $this
     */
    public function setUpdatedDetails($updated_details)
    {
        $this->container['updated_details'] = $updated_details;

        return $this;
    }

    /**
     * Gets valid_from
     *
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->container['valid_from'];
    }

    /**
     * Sets valid_from
     *
     * @param \DateTime $valid_from valid_from
     *
     * @return $this
     */
    public function setValidFrom($valid_from)
    {
        $this->container['valid_from'] = $valid_from;

        return $this;
    }

    /**
     * Gets valid_to
     *
     * @return \DateTime
     */
    public function getValidTo()
    {
        return $this->container['valid_to'];
    }

    /**
     * Sets valid_to
     *
     * @param \DateTime $valid_to valid_to
     *
     * @return $this
     */
    public function setValidTo($valid_to)
    {
        $this->container['valid_to'] = $valid_to;

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


