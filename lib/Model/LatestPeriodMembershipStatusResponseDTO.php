<?php
/**
 * LatestPeriodMembershipStatusResponseDTO
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Idealogic\MembershipAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OpenAPI definition
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Idealogic\MembershipAPI\Model;

use \ArrayAccess;
use \Idealogic\MembershipAPI\ObjectSerializer;

/**
 * LatestPeriodMembershipStatusResponseDTO Class Doc Comment
 *
 * @category Class
 * @package  Idealogic\MembershipAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LatestPeriodMembershipStatusResponseDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LatestPeriodMembershipStatusResponseDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'membership_type_name' => 'string',
        'membership_period_id' => 'int',
        'membership_period_name' => 'string',
        'main_member_id' => 'int',
        'status' => '\Idealogic\MembershipAPI\Model\MembershipStatusDTO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'membership_type_name' => null,
        'membership_period_id' => 'int64',
        'membership_period_name' => null,
        'main_member_id' => 'int64',
        'status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'membership_type_name' => false,
        'membership_period_id' => false,
        'membership_period_name' => false,
        'main_member_id' => false,
        'status' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'membership_type_name' => 'membershipTypeName',
        'membership_period_id' => 'membershipPeriodId',
        'membership_period_name' => 'membershipPeriodName',
        'main_member_id' => 'mainMemberId',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'membership_type_name' => 'setMembershipTypeName',
        'membership_period_id' => 'setMembershipPeriodId',
        'membership_period_name' => 'setMembershipPeriodName',
        'main_member_id' => 'setMainMemberId',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'membership_type_name' => 'getMembershipTypeName',
        'membership_period_id' => 'getMembershipPeriodId',
        'membership_period_name' => 'getMembershipPeriodName',
        'main_member_id' => 'getMainMemberId',
        'status' => 'getStatus'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('membership_type_name', $data ?? [], null);
        $this->setIfExists('membership_period_id', $data ?? [], null);
        $this->setIfExists('membership_period_name', $data ?? [], null);
        $this->setIfExists('main_member_id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets membership_type_name
     *
     * @return string|null
     */
    public function getMembershipTypeName()
    {
        return $this->container['membership_type_name'];
    }

    /**
     * Sets membership_type_name
     *
     * @param string|null $membership_type_name membership_type_name
     *
     * @return self
     */
    public function setMembershipTypeName($membership_type_name)
    {
        if (is_null($membership_type_name)) {
            throw new \InvalidArgumentException('non-nullable membership_type_name cannot be null');
        }
        $this->container['membership_type_name'] = $membership_type_name;

        return $this;
    }

    /**
     * Gets membership_period_id
     *
     * @return int|null
     */
    public function getMembershipPeriodId()
    {
        return $this->container['membership_period_id'];
    }

    /**
     * Sets membership_period_id
     *
     * @param int|null $membership_period_id membership_period_id
     *
     * @return self
     */
    public function setMembershipPeriodId($membership_period_id)
    {
        if (is_null($membership_period_id)) {
            throw new \InvalidArgumentException('non-nullable membership_period_id cannot be null');
        }
        $this->container['membership_period_id'] = $membership_period_id;

        return $this;
    }

    /**
     * Gets membership_period_name
     *
     * @return string|null
     */
    public function getMembershipPeriodName()
    {
        return $this->container['membership_period_name'];
    }

    /**
     * Sets membership_period_name
     *
     * @param string|null $membership_period_name membership_period_name
     *
     * @return self
     */
    public function setMembershipPeriodName($membership_period_name)
    {
        if (is_null($membership_period_name)) {
            throw new \InvalidArgumentException('non-nullable membership_period_name cannot be null');
        }
        $this->container['membership_period_name'] = $membership_period_name;

        return $this;
    }

    /**
     * Gets main_member_id
     *
     * @return int|null
     */
    public function getMainMemberId()
    {
        return $this->container['main_member_id'];
    }

    /**
     * Sets main_member_id
     *
     * @param int|null $main_member_id main_member_id
     *
     * @return self
     */
    public function setMainMemberId($main_member_id)
    {
        if (is_null($main_member_id)) {
            throw new \InvalidArgumentException('non-nullable main_member_id cannot be null');
        }
        $this->container['main_member_id'] = $main_member_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Idealogic\MembershipAPI\Model\MembershipStatusDTO[]|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Idealogic\MembershipAPI\Model\MembershipStatusDTO[]|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


