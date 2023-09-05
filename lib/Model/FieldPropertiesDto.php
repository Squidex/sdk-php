<?php
/**
 * FieldPropertiesDto
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
 * FieldPropertiesDto Class Doc Comment
 *
 * @category Class
 * @package  Squidex\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FieldPropertiesDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'field_type';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FieldPropertiesDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'label' => 'string',
        'hints' => 'string',
        'placeholder' => 'string',
        'is_required' => 'bool',
        'is_required_on_publish' => 'bool',
        'is_half_width' => 'bool',
        'editor_url' => 'string',
        'tags' => 'string[]',
        'field_type' => 'string'
    ];

    /**
      * Array of mapping. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIMappings = [
        'Array' => 'ArrayFieldPropertiesDto',
        'Assets' => 'AssetsFieldPropertiesDto',
        'Boolean' => 'BooleanFieldPropertiesDto',
        'Component' => 'ComponentFieldPropertiesDto',
        'Components' => 'ComponentsFieldPropertiesDto',
        'DateTime' => 'DateTimeFieldPropertiesDto',
        'Geolocation' => 'GeolocationFieldPropertiesDto',
        'Json' => 'JsonFieldPropertiesDto',
        'Number' => 'NumberFieldPropertiesDto',
        'References' => 'ReferencesFieldPropertiesDto',
        'String' => 'StringFieldPropertiesDto',
        'Tags' => 'TagsFieldPropertiesDto',
        'UI' => 'UIFieldPropertiesDto'
    ];

    /**
      * Array of mapping. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIMappingsReverse = [
        'ArrayFieldPropertiesDto' => 'Array',
        'AssetsFieldPropertiesDto' => 'Assets',
        'BooleanFieldPropertiesDto' => 'Boolean',
        'ComponentFieldPropertiesDto' => 'Component',
        'ComponentsFieldPropertiesDto' => 'Components',
        'DateTimeFieldPropertiesDto' => 'DateTime',
        'GeolocationFieldPropertiesDto' => 'Geolocation',
        'JsonFieldPropertiesDto' => 'Json',
        'NumberFieldPropertiesDto' => 'Number',
        'ReferencesFieldPropertiesDto' => 'References',
        'StringFieldPropertiesDto' => 'String',
        'TagsFieldPropertiesDto' => 'Tags',
        'UIFieldPropertiesDto' => 'UI'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'label' => null,
        'hints' => null,
        'placeholder' => null,
        'is_required' => null,
        'is_required_on_publish' => null,
        'is_half_width' => null,
        'editor_url' => null,
        'tags' => null,
        'field_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'label' => true,
		'hints' => true,
		'placeholder' => true,
		'is_required' => false,
		'is_required_on_publish' => false,
		'is_half_width' => false,
		'editor_url' => true,
		'tags' => true,
		'field_type' => false
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
        'label' => 'label',
        'hints' => 'hints',
        'placeholder' => 'placeholder',
        'is_required' => 'isRequired',
        'is_required_on_publish' => 'isRequiredOnPublish',
        'is_half_width' => 'isHalfWidth',
        'editor_url' => 'editorUrl',
        'tags' => 'tags',
        'field_type' => 'fieldType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'label' => 'setLabel',
        'hints' => 'setHints',
        'placeholder' => 'setPlaceholder',
        'is_required' => 'setIsRequired',
        'is_required_on_publish' => 'setIsRequiredOnPublish',
        'is_half_width' => 'setIsHalfWidth',
        'editor_url' => 'setEditorUrl',
        'tags' => 'setTags',
        'field_type' => 'setFieldType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label' => 'getLabel',
        'hints' => 'getHints',
        'placeholder' => 'getPlaceholder',
        'is_required' => 'getIsRequired',
        'is_required_on_publish' => 'getIsRequiredOnPublish',
        'is_half_width' => 'getIsHalfWidth',
        'editor_url' => 'getEditorUrl',
        'tags' => 'getTags',
        'field_type' => 'getFieldType'
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
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('hints', $data ?? [], null);
        $this->setIfExists('placeholder', $data ?? [], null);
        $this->setIfExists('is_required', $data ?? [], null);
        $this->setIfExists('is_required_on_publish', $data ?? [], null);
        $this->setIfExists('is_half_width', $data ?? [], null);
        $this->setIfExists('editor_url', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('field_type', $data ?? [], null);

        // Initialize discriminator property with the model name.
        $this->container['field_type'] = static::$openAPIModelName;

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

        if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) > 100)) {
            $invalidProperties[] = "invalid value for 'label', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) < 0)) {
            $invalidProperties[] = "invalid value for 'label', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['hints']) && (mb_strlen($this->container['hints']) > 1000)) {
            $invalidProperties[] = "invalid value for 'hints', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['hints']) && (mb_strlen($this->container['hints']) < 0)) {
            $invalidProperties[] = "invalid value for 'hints', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['placeholder']) && (mb_strlen($this->container['placeholder']) > 100)) {
            $invalidProperties[] = "invalid value for 'placeholder', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['placeholder']) && (mb_strlen($this->container['placeholder']) < 0)) {
            $invalidProperties[] = "invalid value for 'placeholder', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['field_type'] === null) {
            $invalidProperties[] = "'field_type' can't be null";
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
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label Optional label for the editor.
     *
     * @return self
     */
    public function setLabel($label)
    {
        if (is_null($label)) {
            array_push($this->openAPINullablesSetToNull, 'label');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('label', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($label) && (mb_strlen($label) > 100)) {
            throw new \InvalidArgumentException('invalid length for $label when calling FieldPropertiesDto., must be smaller than or equal to 100.');
        }

        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets hints
     *
     * @return string|null
     */
    public function getHints()
    {
        return $this->container['hints'];
    }

    /**
     * Sets hints
     *
     * @param string|null $hints Hints to describe the field.
     *
     * @return self
     */
    public function setHints($hints)
    {
        if (is_null($hints)) {
            array_push($this->openAPINullablesSetToNull, 'hints');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hints', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($hints) && (mb_strlen($hints) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $hints when calling FieldPropertiesDto., must be smaller than or equal to 1000.');
        }

        $this->container['hints'] = $hints;

        return $this;
    }

    /**
     * Gets placeholder
     *
     * @return string|null
     */
    public function getPlaceholder()
    {
        return $this->container['placeholder'];
    }

    /**
     * Sets placeholder
     *
     * @param string|null $placeholder Placeholder to show when no value has been entered.
     *
     * @return self
     */
    public function setPlaceholder($placeholder)
    {
        if (is_null($placeholder)) {
            array_push($this->openAPINullablesSetToNull, 'placeholder');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('placeholder', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($placeholder) && (mb_strlen($placeholder) > 100)) {
            throw new \InvalidArgumentException('invalid length for $placeholder when calling FieldPropertiesDto., must be smaller than or equal to 100.');
        }

        $this->container['placeholder'] = $placeholder;

        return $this;
    }

    /**
     * Gets is_required
     *
     * @return bool|null
     */
    public function getIsRequired()
    {
        return $this->container['is_required'];
    }

    /**
     * Sets is_required
     *
     * @param bool|null $is_required Indicates if the field is required.
     *
     * @return self
     */
    public function setIsRequired($is_required)
    {
        if (is_null($is_required)) {
            throw new \InvalidArgumentException('non-nullable is_required cannot be null');
        }
        $this->container['is_required'] = $is_required;

        return $this;
    }

    /**
     * Gets is_required_on_publish
     *
     * @return bool|null
     */
    public function getIsRequiredOnPublish()
    {
        return $this->container['is_required_on_publish'];
    }

    /**
     * Sets is_required_on_publish
     *
     * @param bool|null $is_required_on_publish Indicates if the field is required when publishing.
     *
     * @return self
     */
    public function setIsRequiredOnPublish($is_required_on_publish)
    {
        if (is_null($is_required_on_publish)) {
            throw new \InvalidArgumentException('non-nullable is_required_on_publish cannot be null');
        }
        $this->container['is_required_on_publish'] = $is_required_on_publish;

        return $this;
    }

    /**
     * Gets is_half_width
     *
     * @return bool|null
     */
    public function getIsHalfWidth()
    {
        return $this->container['is_half_width'];
    }

    /**
     * Sets is_half_width
     *
     * @param bool|null $is_half_width Indicates if the field should be rendered with half width only.
     *
     * @return self
     */
    public function setIsHalfWidth($is_half_width)
    {
        if (is_null($is_half_width)) {
            throw new \InvalidArgumentException('non-nullable is_half_width cannot be null');
        }
        $this->container['is_half_width'] = $is_half_width;

        return $this;
    }

    /**
     * Gets editor_url
     *
     * @return string|null
     */
    public function getEditorUrl()
    {
        return $this->container['editor_url'];
    }

    /**
     * Sets editor_url
     *
     * @param string|null $editor_url Optional url to the editor.
     *
     * @return self
     */
    public function setEditorUrl($editor_url)
    {
        if (is_null($editor_url)) {
            array_push($this->openAPINullablesSetToNull, 'editor_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('editor_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['editor_url'] = $editor_url;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags Tags for automation processes.
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            array_push($this->openAPINullablesSetToNull, 'tags');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tags', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets field_type
     *
     * @return string
     */
    public function getFieldType()
    {
        return $this->container['field_type'];
    }

    /**
     * Sets field_type
     *
     * @param string $field_type field_type
     *
     * @return self
     */
    public function setFieldType($field_type)
    {
        if (is_null($field_type)) {
            throw new \InvalidArgumentException('non-nullable field_type cannot be null');
        }
        $this->container['field_type'] = $field_type;

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


