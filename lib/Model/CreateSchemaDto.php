<?php
/**
 * CreateSchemaDto
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
 * Generator version: 7.8.0
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
 * CreateSchemaDto Class Doc Comment
 *
 * @category Class
 * @package  Squidex\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateSchemaDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateSchemaDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'properties' => '\Squidex\Client\Model\SchemaPropertiesDto',
        'scripts' => '\Squidex\Client\Model\SchemaScriptsDto',
        'fields_in_references' => 'string[]',
        'fields_in_lists' => 'string[]',
        'fields' => '\Squidex\Client\Model\UpsertSchemaFieldDto[]',
        'preview_urls' => 'array<string,string>',
        'field_rules' => '\Squidex\Client\Model\FieldRuleDto[]',
        'category' => 'string',
        'is_published' => 'bool',
        'name' => 'string',
        'type' => '\Squidex\Client\Model\SchemaType',
        'is_singleton' => 'bool'
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
        'properties' => null,
        'scripts' => null,
        'fields_in_references' => null,
        'fields_in_lists' => null,
        'fields' => null,
        'preview_urls' => null,
        'field_rules' => null,
        'category' => null,
        'is_published' => null,
        'name' => null,
        'type' => null,
        'is_singleton' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'properties' => false,
		'scripts' => false,
		'fields_in_references' => true,
		'fields_in_lists' => true,
		'fields' => true,
		'preview_urls' => true,
		'field_rules' => true,
		'category' => true,
		'is_published' => false,
		'name' => false,
		'type' => false,
		'is_singleton' => false
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
        'properties' => 'properties',
        'scripts' => 'scripts',
        'fields_in_references' => 'fieldsInReferences',
        'fields_in_lists' => 'fieldsInLists',
        'fields' => 'fields',
        'preview_urls' => 'previewUrls',
        'field_rules' => 'fieldRules',
        'category' => 'category',
        'is_published' => 'isPublished',
        'name' => 'name',
        'type' => 'type',
        'is_singleton' => 'isSingleton'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'properties' => 'setProperties',
        'scripts' => 'setScripts',
        'fields_in_references' => 'setFieldsInReferences',
        'fields_in_lists' => 'setFieldsInLists',
        'fields' => 'setFields',
        'preview_urls' => 'setPreviewUrls',
        'field_rules' => 'setFieldRules',
        'category' => 'setCategory',
        'is_published' => 'setIsPublished',
        'name' => 'setName',
        'type' => 'setType',
        'is_singleton' => 'setIsSingleton'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'properties' => 'getProperties',
        'scripts' => 'getScripts',
        'fields_in_references' => 'getFieldsInReferences',
        'fields_in_lists' => 'getFieldsInLists',
        'fields' => 'getFields',
        'preview_urls' => 'getPreviewUrls',
        'field_rules' => 'getFieldRules',
        'category' => 'getCategory',
        'is_published' => 'getIsPublished',
        'name' => 'getName',
        'type' => 'getType',
        'is_singleton' => 'getIsSingleton'
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
        $this->setIfExists('properties', $data ?? [], null);
        $this->setIfExists('scripts', $data ?? [], null);
        $this->setIfExists('fields_in_references', $data ?? [], null);
        $this->setIfExists('fields_in_lists', $data ?? [], null);
        $this->setIfExists('fields', $data ?? [], null);
        $this->setIfExists('preview_urls', $data ?? [], null);
        $this->setIfExists('field_rules', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('is_published', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('is_singleton', $data ?? [], null);

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

        if (!preg_match("/^[a-z0-9]+(\\-[a-z0-9]+)*$/", $this->container['name'])) {
            $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-z0-9]+(\\-[a-z0-9]+)*$/.";
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
     * Gets properties
     *
     * @return \Squidex\Client\Model\SchemaPropertiesDto|null
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param \Squidex\Client\Model\SchemaPropertiesDto|null $properties properties
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
     * Gets scripts
     *
     * @return \Squidex\Client\Model\SchemaScriptsDto|null
     */
    public function getScripts()
    {
        return $this->container['scripts'];
    }

    /**
     * Sets scripts
     *
     * @param \Squidex\Client\Model\SchemaScriptsDto|null $scripts scripts
     *
     * @return self
     */
    public function setScripts($scripts)
    {
        if (is_null($scripts)) {
            throw new \InvalidArgumentException('non-nullable scripts cannot be null');
        }
        $this->container['scripts'] = $scripts;

        return $this;
    }

    /**
     * Gets fields_in_references
     *
     * @return string[]|null
     */
    public function getFieldsInReferences()
    {
        return $this->container['fields_in_references'];
    }

    /**
     * Sets fields_in_references
     *
     * @param string[]|null $fields_in_references The names of the fields that should be used in references.
     *
     * @return self
     */
    public function setFieldsInReferences($fields_in_references)
    {
        if (is_null($fields_in_references)) {
            array_push($this->openAPINullablesSetToNull, 'fields_in_references');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fields_in_references', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fields_in_references'] = $fields_in_references;

        return $this;
    }

    /**
     * Gets fields_in_lists
     *
     * @return string[]|null
     */
    public function getFieldsInLists()
    {
        return $this->container['fields_in_lists'];
    }

    /**
     * Sets fields_in_lists
     *
     * @param string[]|null $fields_in_lists The names of the fields that should be shown in lists, including meta fields.
     *
     * @return self
     */
    public function setFieldsInLists($fields_in_lists)
    {
        if (is_null($fields_in_lists)) {
            array_push($this->openAPINullablesSetToNull, 'fields_in_lists');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fields_in_lists', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fields_in_lists'] = $fields_in_lists;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return \Squidex\Client\Model\UpsertSchemaFieldDto[]|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param \Squidex\Client\Model\UpsertSchemaFieldDto[]|null $fields Optional fields.
     *
     * @return self
     */
    public function setFields($fields)
    {
        if (is_null($fields)) {
            array_push($this->openAPINullablesSetToNull, 'fields');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fields', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets preview_urls
     *
     * @return array<string,string>|null
     */
    public function getPreviewUrls()
    {
        return $this->container['preview_urls'];
    }

    /**
     * Sets preview_urls
     *
     * @param array<string,string>|null $preview_urls The optional preview urls.
     *
     * @return self
     */
    public function setPreviewUrls($preview_urls)
    {
        if (is_null($preview_urls)) {
            array_push($this->openAPINullablesSetToNull, 'preview_urls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('preview_urls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['preview_urls'] = $preview_urls;

        return $this;
    }

    /**
     * Gets field_rules
     *
     * @return \Squidex\Client\Model\FieldRuleDto[]|null
     */
    public function getFieldRules()
    {
        return $this->container['field_rules'];
    }

    /**
     * Sets field_rules
     *
     * @param \Squidex\Client\Model\FieldRuleDto[]|null $field_rules The optional field Rules.
     *
     * @return self
     */
    public function setFieldRules($field_rules)
    {
        if (is_null($field_rules)) {
            array_push($this->openAPINullablesSetToNull, 'field_rules');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('field_rules', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['field_rules'] = $field_rules;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category The category.
     *
     * @return self
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            array_push($this->openAPINullablesSetToNull, 'category');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('category', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets is_published
     *
     * @return bool|null
     */
    public function getIsPublished()
    {
        return $this->container['is_published'];
    }

    /**
     * Sets is_published
     *
     * @param bool|null $is_published Set it to true to autopublish the schema.
     *
     * @return self
     */
    public function setIsPublished($is_published)
    {
        if (is_null($is_published)) {
            throw new \InvalidArgumentException('non-nullable is_published cannot be null');
        }
        $this->container['is_published'] = $is_published;

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
     * @param string $name The name of the schema.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        if ((!preg_match("/^[a-z0-9]+(\\-[a-z0-9]+)*$/", $name))) {
            throw new \InvalidArgumentException("invalid value for \$name when calling CreateSchemaDto., must conform to the pattern /^[a-z0-9]+(\\-[a-z0-9]+)*$/.");
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Squidex\Client\Model\SchemaType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Squidex\Client\Model\SchemaType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets is_singleton
     *
     * @return bool|null
     * @deprecated
     */
    public function getIsSingleton()
    {
        return $this->container['is_singleton'];
    }

    /**
     * Sets is_singleton
     *
     * @param bool|null $is_singleton Set to true to allow a single content item only.
     *
     * @return self
     * @deprecated
     */
    public function setIsSingleton($is_singleton)
    {
        if (is_null($is_singleton)) {
            throw new \InvalidArgumentException('non-nullable is_singleton cannot be null');
        }
        $this->container['is_singleton'] = $is_singleton;

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


