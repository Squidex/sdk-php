<?php
/**
 * UpsertSchemaFieldDto
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Squidex\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Squidex API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Squidex\Client\Model;

use \ArrayAccess;
use \Squidex\Client\ObjectSerializer;

/**
 * UpsertSchemaFieldDto Class Doc Comment
 *
 * @category Class
 * @package  Squidex\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpsertSchemaFieldDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpsertSchemaFieldDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'is_hidden' => 'bool',
        'is_locked' => 'bool',
        'is_disabled' => 'bool',
        'partitioning' => 'string',
        'properties' => '\Squidex\Client\Model\FieldPropertiesDto',
        'nested' => '\Squidex\Client\Model\UpsertSchemaNestedFieldDto[]'
    ];

    /**
      * Array of mapping. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIMappings = [
    ];

    /**
      * Array of mapping. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIMappingsReverse = [
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'is_hidden' => null,
        'is_locked' => null,
        'is_disabled' => null,
        'partitioning' => null,
        'properties' => null,
        'nested' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'is_hidden' => false,
		'is_locked' => false,
		'is_disabled' => false,
		'partitioning' => true,
		'properties' => false,
		'nested' => true
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
     * Array of discriminator mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIMappings()
    {
        return self::$openAPIMappings;
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
        'name' => 'name',
        'is_hidden' => 'isHidden',
        'is_locked' => 'isLocked',
        'is_disabled' => 'isDisabled',
        'partitioning' => 'partitioning',
        'properties' => 'properties',
        'nested' => 'nested'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'is_hidden' => 'setIsHidden',
        'is_locked' => 'setIsLocked',
        'is_disabled' => 'setIsDisabled',
        'partitioning' => 'setPartitioning',
        'properties' => 'setProperties',
        'nested' => 'setNested'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'is_hidden' => 'getIsHidden',
        'is_locked' => 'getIsLocked',
        'is_disabled' => 'getIsDisabled',
        'partitioning' => 'getPartitioning',
        'properties' => 'getProperties',
        'nested' => 'getNested'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('is_hidden', $data ?? [], null);
        $this->setIfExists('is_locked', $data ?? [], null);
        $this->setIfExists('is_disabled', $data ?? [], null);
        $this->setIfExists('partitioning', $data ?? [], null);
        $this->setIfExists('properties', $data ?? [], null);
        $this->setIfExists('nested', $data ?? [], null);

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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^[a-zA-Z0-9]+(\\-[a-zA-Z0-9]+)*$/", $this->container['name'])) {
            $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9]+(\\-[a-zA-Z0-9]+)*$/.";
        }

        if ($this->container['properties'] === null) {
            $invalidProperties[] = "'properties' can't be null";
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
     * @param string $name The name of the field. Must be unique within the schema.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        if ((!preg_match("/^[a-zA-Z0-9]+(\\-[a-zA-Z0-9]+)*$/", $name))) {
            throw new \InvalidArgumentException("invalid value for \$name when calling UpsertSchemaFieldDto., must conform to the pattern /^[a-zA-Z0-9]+(\\-[a-zA-Z0-9]+)*$/.");
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets is_hidden
     *
     * @return bool|null
     */
    public function getIsHidden()
    {
        return $this->container['is_hidden'];
    }

    /**
     * Sets is_hidden
     *
     * @param bool|null $is_hidden Defines if the field is hidden.
     *
     * @return self
     */
    public function setIsHidden($is_hidden)
    {
        if (is_null($is_hidden)) {
            throw new \InvalidArgumentException('non-nullable is_hidden cannot be null');
        }
        $this->container['is_hidden'] = $is_hidden;

        return $this;
    }

    /**
     * Gets is_locked
     *
     * @return bool|null
     */
    public function getIsLocked()
    {
        return $this->container['is_locked'];
    }

    /**
     * Sets is_locked
     *
     * @param bool|null $is_locked Defines if the field is locked.
     *
     * @return self
     */
    public function setIsLocked($is_locked)
    {
        if (is_null($is_locked)) {
            throw new \InvalidArgumentException('non-nullable is_locked cannot be null');
        }
        $this->container['is_locked'] = $is_locked;

        return $this;
    }

    /**
     * Gets is_disabled
     *
     * @return bool|null
     */
    public function getIsDisabled()
    {
        return $this->container['is_disabled'];
    }

    /**
     * Sets is_disabled
     *
     * @param bool|null $is_disabled Defines if the field is disabled.
     *
     * @return self
     */
    public function setIsDisabled($is_disabled)
    {
        if (is_null($is_disabled)) {
            throw new \InvalidArgumentException('non-nullable is_disabled cannot be null');
        }
        $this->container['is_disabled'] = $is_disabled;

        return $this;
    }

    /**
     * Gets partitioning
     *
     * @return string|null
     */
    public function getPartitioning()
    {
        return $this->container['partitioning'];
    }

    /**
     * Sets partitioning
     *
     * @param string|null $partitioning Determines the optional partitioning of the field.
     *
     * @return self
     */
    public function setPartitioning($partitioning)
    {
        if (is_null($partitioning)) {
            array_push($this->openAPINullablesSetToNull, 'partitioning');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('partitioning', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['partitioning'] = $partitioning;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return \Squidex\Client\Model\FieldPropertiesDto
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param \Squidex\Client\Model\FieldPropertiesDto $properties properties
     *
     * @return self
     */
    public function setProperties($properties)
    {
        if (is_null($properties)) {
            throw new \InvalidArgumentException('non-nullable properties cannot be null');
        }
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets nested
     *
     * @return \Squidex\Client\Model\UpsertSchemaNestedFieldDto[]|null
     */
    public function getNested()
    {
        return $this->container['nested'];
    }

    /**
     * Sets nested
     *
     * @param \Squidex\Client\Model\UpsertSchemaNestedFieldDto[]|null $nested The nested fields.
     *
     * @return self
     */
    public function setNested($nested)
    {
        if (is_null($nested)) {
            array_push($this->openAPINullablesSetToNull, 'nested');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nested', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nested'] = $nested;

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


