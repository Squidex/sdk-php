<?php
/**
 * TagsFieldPropertiesDtoAllOf
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
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
 * OpenAPI Generator version: 5.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * TagsFieldPropertiesDtoAllOf Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TagsFieldPropertiesDtoAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TagsFieldPropertiesDto_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'default_values' => 'array<string,string[]>',
        'default_value' => 'string[]',
        'min_items' => 'int',
        'max_items' => 'int',
        'allowed_values' => 'string[]',
        'create_enum' => 'bool',
        'editor' => '\OpenAPI\Client\Model\TagsFieldEditor'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'default_values' => null,
        'default_value' => null,
        'min_items' => 'int32',
        'max_items' => 'int32',
        'allowed_values' => null,
        'create_enum' => null,
        'editor' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'default_values' => false,
		'default_value' => true,
		'min_items' => true,
		'max_items' => true,
		'allowed_values' => true,
		'create_enum' => false,
		'editor' => false
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
        'default_values' => 'defaultValues',
        'default_value' => 'defaultValue',
        'min_items' => 'minItems',
        'max_items' => 'maxItems',
        'allowed_values' => 'allowedValues',
        'create_enum' => 'createEnum',
        'editor' => 'editor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default_values' => 'setDefaultValues',
        'default_value' => 'setDefaultValue',
        'min_items' => 'setMinItems',
        'max_items' => 'setMaxItems',
        'allowed_values' => 'setAllowedValues',
        'create_enum' => 'setCreateEnum',
        'editor' => 'setEditor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default_values' => 'getDefaultValues',
        'default_value' => 'getDefaultValue',
        'min_items' => 'getMinItems',
        'max_items' => 'getMaxItems',
        'allowed_values' => 'getAllowedValues',
        'create_enum' => 'getCreateEnum',
        'editor' => 'getEditor'
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
        $this->setIfExists('default_values', $data ?? [], null);
        $this->setIfExists('default_value', $data ?? [], null);
        $this->setIfExists('min_items', $data ?? [], null);
        $this->setIfExists('max_items', $data ?? [], null);
        $this->setIfExists('allowed_values', $data ?? [], null);
        $this->setIfExists('create_enum', $data ?? [], null);
        $this->setIfExists('editor', $data ?? [], null);
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
     * Gets default_values
     *
     * @return array<string,string[]>|null
     */
    public function getDefaultValues()
    {
        return $this->container['default_values'];
    }

    /**
     * Sets default_values
     *
     * @param array<string,string[]>|null $default_values default_values
     *
     * @return self
     */
    public function setDefaultValues($default_values)
    {
        if (is_null($default_values)) {
            throw new \InvalidArgumentException('non-nullable default_values cannot be null');
        }
        $this->container['default_values'] = $default_values;

        return $this;
    }

    /**
     * Gets default_value
     *
     * @return string[]|null
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     *
     * @param string[]|null $default_value The default value.
     *
     * @return self
     */
    public function setDefaultValue($default_value)
    {
        if (is_null($default_value)) {
            array_push($this->openAPINullablesSetToNull, 'default_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets min_items
     *
     * @return int|null
     */
    public function getMinItems()
    {
        return $this->container['min_items'];
    }

    /**
     * Sets min_items
     *
     * @param int|null $min_items The minimum allowed items for the field value.
     *
     * @return self
     */
    public function setMinItems($min_items)
    {
        if (is_null($min_items)) {
            array_push($this->openAPINullablesSetToNull, 'min_items');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('min_items', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['min_items'] = $min_items;

        return $this;
    }

    /**
     * Gets max_items
     *
     * @return int|null
     */
    public function getMaxItems()
    {
        return $this->container['max_items'];
    }

    /**
     * Sets max_items
     *
     * @param int|null $max_items The maximum allowed items for the field value.
     *
     * @return self
     */
    public function setMaxItems($max_items)
    {
        if (is_null($max_items)) {
            array_push($this->openAPINullablesSetToNull, 'max_items');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_items', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_items'] = $max_items;

        return $this;
    }

    /**
     * Gets allowed_values
     *
     * @return string[]|null
     */
    public function getAllowedValues()
    {
        return $this->container['allowed_values'];
    }

    /**
     * Sets allowed_values
     *
     * @param string[]|null $allowed_values The allowed values for the field value.
     *
     * @return self
     */
    public function setAllowedValues($allowed_values)
    {
        if (is_null($allowed_values)) {
            array_push($this->openAPINullablesSetToNull, 'allowed_values');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('allowed_values', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['allowed_values'] = $allowed_values;

        return $this;
    }

    /**
     * Gets create_enum
     *
     * @return bool|null
     */
    public function getCreateEnum()
    {
        return $this->container['create_enum'];
    }

    /**
     * Sets create_enum
     *
     * @param bool|null $create_enum Indicates whether GraphQL Enum should be created.
     *
     * @return self
     */
    public function setCreateEnum($create_enum)
    {
        if (is_null($create_enum)) {
            throw new \InvalidArgumentException('non-nullable create_enum cannot be null');
        }
        $this->container['create_enum'] = $create_enum;

        return $this;
    }

    /**
     * Gets editor
     *
     * @return \OpenAPI\Client\Model\TagsFieldEditor|null
     */
    public function getEditor()
    {
        return $this->container['editor'];
    }

    /**
     * Sets editor
     *
     * @param \OpenAPI\Client\Model\TagsFieldEditor|null $editor editor
     *
     * @return self
     */
    public function setEditor($editor)
    {
        if (is_null($editor)) {
            throw new \InvalidArgumentException('non-nullable editor cannot be null');
        }
        $this->container['editor'] = $editor;

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


