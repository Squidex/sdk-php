<?php
/**
 * ReferencesFieldPropertiesDto
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
 * Generator version: 7.9.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Squidex\Client\Model;
use \Squidex\Client\ObjectSerializer;

/**
 * ReferencesFieldPropertiesDto Class Doc Comment
 *
 * @category Class
 * @package  Squidex\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReferencesFieldPropertiesDto extends FieldPropertiesDto
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReferencesFieldPropertiesDto';

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
        'allow_duplicates' => 'bool',
        'resolve_reference' => 'bool',
        'must_be_published' => 'bool',
        'query' => 'string',
        'editor' => '\Squidex\Client\Model\ReferencesFieldEditor',
        'schema_ids' => 'string[]'
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
        'default_values' => null,
        'default_value' => null,
        'min_items' => 'int32',
        'max_items' => 'int32',
        'allow_duplicates' => null,
        'resolve_reference' => null,
        'must_be_published' => null,
        'query' => null,
        'editor' => null,
        'schema_ids' => null
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
		'allow_duplicates' => false,
		'resolve_reference' => false,
		'must_be_published' => false,
		'query' => true,
		'editor' => false,
		'schema_ids' => true
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
        return self::$openAPITypes + parent::openAPITypes();
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
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables + parent::openAPINullables();
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
        'allow_duplicates' => 'allowDuplicates',
        'resolve_reference' => 'resolveReference',
        'must_be_published' => 'mustBePublished',
        'query' => 'query',
        'editor' => 'editor',
        'schema_ids' => 'schemaIds'
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
        'allow_duplicates' => 'setAllowDuplicates',
        'resolve_reference' => 'setResolveReference',
        'must_be_published' => 'setMustBePublished',
        'query' => 'setQuery',
        'editor' => 'setEditor',
        'schema_ids' => 'setSchemaIds'
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
        'allow_duplicates' => 'getAllowDuplicates',
        'resolve_reference' => 'getResolveReference',
        'must_be_published' => 'getMustBePublished',
        'query' => 'getQuery',
        'editor' => 'getEditor',
        'schema_ids' => 'getSchemaIds'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->setIfExists('default_values', $data ?? [], null);
        $this->setIfExists('default_value', $data ?? [], null);
        $this->setIfExists('min_items', $data ?? [], null);
        $this->setIfExists('max_items', $data ?? [], null);
        $this->setIfExists('allow_duplicates', $data ?? [], null);
        $this->setIfExists('resolve_reference', $data ?? [], null);
        $this->setIfExists('must_be_published', $data ?? [], null);
        $this->setIfExists('query', $data ?? [], null);
        $this->setIfExists('editor', $data ?? [], null);
        $this->setIfExists('schema_ids', $data ?? [], null);


        // Initialize discriminator property with the model name.
        $this->container['field_type'] = parent::$openAPIMappingsReverse['ReferencesFieldPropertiesDto'];
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
        $invalidProperties = parent::listInvalidProperties();

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
     * @param string[]|null $default_value The default value as a list of content ids.
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
     * Gets allow_duplicates
     *
     * @return bool|null
     */
    public function getAllowDuplicates()
    {
        return $this->container['allow_duplicates'];
    }

    /**
     * Sets allow_duplicates
     *
     * @param bool|null $allow_duplicates True, if duplicate values are allowed.
     *
     * @return self
     */
    public function setAllowDuplicates($allow_duplicates)
    {
        if (is_null($allow_duplicates)) {
            throw new \InvalidArgumentException('non-nullable allow_duplicates cannot be null');
        }
        $this->container['allow_duplicates'] = $allow_duplicates;

        return $this;
    }

    /**
     * Gets resolve_reference
     *
     * @return bool|null
     */
    public function getResolveReference()
    {
        return $this->container['resolve_reference'];
    }

    /**
     * Sets resolve_reference
     *
     * @param bool|null $resolve_reference True to resolve references in the content list.
     *
     * @return self
     */
    public function setResolveReference($resolve_reference)
    {
        if (is_null($resolve_reference)) {
            throw new \InvalidArgumentException('non-nullable resolve_reference cannot be null');
        }
        $this->container['resolve_reference'] = $resolve_reference;

        return $this;
    }

    /**
     * Gets must_be_published
     *
     * @return bool|null
     */
    public function getMustBePublished()
    {
        return $this->container['must_be_published'];
    }

    /**
     * Sets must_be_published
     *
     * @param bool|null $must_be_published True when all references must be published.
     *
     * @return self
     */
    public function setMustBePublished($must_be_published)
    {
        if (is_null($must_be_published)) {
            throw new \InvalidArgumentException('non-nullable must_be_published cannot be null');
        }
        $this->container['must_be_published'] = $must_be_published;

        return $this;
    }

    /**
     * Gets query
     *
     * @return string|null
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param string|null $query The initial query that is applied in the UI.
     *
     * @return self
     */
    public function setQuery($query)
    {
        if (is_null($query)) {
            array_push($this->openAPINullablesSetToNull, 'query');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('query', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets editor
     *
     * @return \Squidex\Client\Model\ReferencesFieldEditor|null
     */
    public function getEditor()
    {
        return $this->container['editor'];
    }

    /**
     * Sets editor
     *
     * @param \Squidex\Client\Model\ReferencesFieldEditor|null $editor editor
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
     * Gets schema_ids
     *
     * @return string[]|null
     */
    public function getSchemaIds()
    {
        return $this->container['schema_ids'];
    }

    /**
     * Sets schema_ids
     *
     * @param string[]|null $schema_ids The ID of the referenced schemas.
     *
     * @return self
     */
    public function setSchemaIds($schema_ids)
    {
        if (is_null($schema_ids)) {
            array_push($this->openAPINullablesSetToNull, 'schema_ids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('schema_ids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['schema_ids'] = $schema_ids;

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


