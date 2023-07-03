<?php
/**
 * NumberFieldPropertiesDtoAllOf
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
 * NumberFieldPropertiesDtoAllOf Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NumberFieldPropertiesDtoAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NumberFieldPropertiesDto_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'default_values' => 'array<string,double>',
        'default_value' => 'double',
        'max_value' => 'double',
        'min_value' => 'double',
        'allowed_values' => 'double[]',
        'is_unique' => 'bool',
        'inline_editable' => 'bool',
        'editor' => '\OpenAPI\Client\Model\NumberFieldEditor'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'default_values' => 'double',
        'default_value' => 'double',
        'max_value' => 'double',
        'min_value' => 'double',
        'allowed_values' => 'double',
        'is_unique' => null,
        'inline_editable' => null,
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
		'max_value' => true,
		'min_value' => true,
		'allowed_values' => true,
		'is_unique' => false,
		'inline_editable' => false,
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
        'max_value' => 'maxValue',
        'min_value' => 'minValue',
        'allowed_values' => 'allowedValues',
        'is_unique' => 'isUnique',
        'inline_editable' => 'inlineEditable',
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
        'max_value' => 'setMaxValue',
        'min_value' => 'setMinValue',
        'allowed_values' => 'setAllowedValues',
        'is_unique' => 'setIsUnique',
        'inline_editable' => 'setInlineEditable',
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
        'max_value' => 'getMaxValue',
        'min_value' => 'getMinValue',
        'allowed_values' => 'getAllowedValues',
        'is_unique' => 'getIsUnique',
        'inline_editable' => 'getInlineEditable',
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
        $this->setIfExists('max_value', $data ?? [], null);
        $this->setIfExists('min_value', $data ?? [], null);
        $this->setIfExists('allowed_values', $data ?? [], null);
        $this->setIfExists('is_unique', $data ?? [], null);
        $this->setIfExists('inline_editable', $data ?? [], null);
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
     * @return array<string,double>|null
     */
    public function getDefaultValues()
    {
        return $this->container['default_values'];
    }

    /**
     * Sets default_values
     *
     * @param array<string,double>|null $default_values default_values
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
     * @return double|null
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     *
     * @param double|null $default_value The default value for the field value.
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
     * Gets max_value
     *
     * @return double|null
     */
    public function getMaxValue()
    {
        return $this->container['max_value'];
    }

    /**
     * Sets max_value
     *
     * @param double|null $max_value The maximum allowed value for the field value.
     *
     * @return self
     */
    public function setMaxValue($max_value)
    {
        if (is_null($max_value)) {
            array_push($this->openAPINullablesSetToNull, 'max_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_value'] = $max_value;

        return $this;
    }

    /**
     * Gets min_value
     *
     * @return double|null
     */
    public function getMinValue()
    {
        return $this->container['min_value'];
    }

    /**
     * Sets min_value
     *
     * @param double|null $min_value The minimum allowed value for the field value.
     *
     * @return self
     */
    public function setMinValue($min_value)
    {
        if (is_null($min_value)) {
            array_push($this->openAPINullablesSetToNull, 'min_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('min_value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['min_value'] = $min_value;

        return $this;
    }

    /**
     * Gets allowed_values
     *
     * @return double[]|null
     */
    public function getAllowedValues()
    {
        return $this->container['allowed_values'];
    }

    /**
     * Sets allowed_values
     *
     * @param double[]|null $allowed_values The allowed values for the field value.
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
     * Gets is_unique
     *
     * @return bool|null
     */
    public function getIsUnique()
    {
        return $this->container['is_unique'];
    }

    /**
     * Sets is_unique
     *
     * @param bool|null $is_unique Indicates if the field value must be unique. Ignored for nested fields and localized fields.
     *
     * @return self
     */
    public function setIsUnique($is_unique)
    {
        if (is_null($is_unique)) {
            throw new \InvalidArgumentException('non-nullable is_unique cannot be null');
        }
        $this->container['is_unique'] = $is_unique;

        return $this;
    }

    /**
     * Gets inline_editable
     *
     * @return bool|null
     */
    public function getInlineEditable()
    {
        return $this->container['inline_editable'];
    }

    /**
     * Sets inline_editable
     *
     * @param bool|null $inline_editable Indicates that the inline editor is enabled for this field.
     *
     * @return self
     */
    public function setInlineEditable($inline_editable)
    {
        if (is_null($inline_editable)) {
            throw new \InvalidArgumentException('non-nullable inline_editable cannot be null');
        }
        $this->container['inline_editable'] = $inline_editable;

        return $this;
    }

    /**
     * Gets editor
     *
     * @return \OpenAPI\Client\Model\NumberFieldEditor|null
     */
    public function getEditor()
    {
        return $this->container['editor'];
    }

    /**
     * Sets editor
     *
     * @param \OpenAPI\Client\Model\NumberFieldEditor|null $editor editor
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


