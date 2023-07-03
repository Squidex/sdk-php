<?php
/**
 * SchemaDtoAllOf
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
 * SchemaDtoAllOf Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SchemaDtoAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SchemaDto_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_by' => 'string',
        'last_modified_by' => 'string',
        'name' => 'string',
        'type' => '\OpenAPI\Client\Model\SchemaType',
        'category' => 'string',
        'properties' => '\OpenAPI\Client\Model\SchemaPropertiesDto',
        'is_singleton' => 'bool',
        'is_published' => 'bool',
        'created' => '\DateTime',
        'last_modified' => '\DateTime',
        'version' => 'int',
        'scripts' => '\OpenAPI\Client\Model\SchemaScriptsDto',
        'preview_urls' => 'array<string,string>',
        'fields_in_lists' => 'string[]',
        'fields_in_references' => 'string[]',
        'field_rules' => '\OpenAPI\Client\Model\FieldRuleDto[]',
        'fields' => '\OpenAPI\Client\Model\FieldDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created_by' => null,
        'last_modified_by' => null,
        'name' => null,
        'type' => null,
        'category' => null,
        'properties' => null,
        'is_singleton' => null,
        'is_published' => null,
        'created' => 'date-time',
        'last_modified' => 'date-time',
        'version' => 'int64',
        'scripts' => null,
        'preview_urls' => null,
        'fields_in_lists' => null,
        'fields_in_references' => null,
        'field_rules' => null,
        'fields' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'created_by' => false,
		'last_modified_by' => false,
		'name' => false,
		'type' => false,
		'category' => true,
		'properties' => false,
		'is_singleton' => false,
		'is_published' => false,
		'created' => false,
		'last_modified' => false,
		'version' => false,
		'scripts' => false,
		'preview_urls' => false,
		'fields_in_lists' => false,
		'fields_in_references' => false,
		'field_rules' => false,
		'fields' => false
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
        'id' => 'id',
        'created_by' => 'createdBy',
        'last_modified_by' => 'lastModifiedBy',
        'name' => 'name',
        'type' => 'type',
        'category' => 'category',
        'properties' => 'properties',
        'is_singleton' => 'isSingleton',
        'is_published' => 'isPublished',
        'created' => 'created',
        'last_modified' => 'lastModified',
        'version' => 'version',
        'scripts' => 'scripts',
        'preview_urls' => 'previewUrls',
        'fields_in_lists' => 'fieldsInLists',
        'fields_in_references' => 'fieldsInReferences',
        'field_rules' => 'fieldRules',
        'fields' => 'fields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_by' => 'setCreatedBy',
        'last_modified_by' => 'setLastModifiedBy',
        'name' => 'setName',
        'type' => 'setType',
        'category' => 'setCategory',
        'properties' => 'setProperties',
        'is_singleton' => 'setIsSingleton',
        'is_published' => 'setIsPublished',
        'created' => 'setCreated',
        'last_modified' => 'setLastModified',
        'version' => 'setVersion',
        'scripts' => 'setScripts',
        'preview_urls' => 'setPreviewUrls',
        'fields_in_lists' => 'setFieldsInLists',
        'fields_in_references' => 'setFieldsInReferences',
        'field_rules' => 'setFieldRules',
        'fields' => 'setFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_by' => 'getCreatedBy',
        'last_modified_by' => 'getLastModifiedBy',
        'name' => 'getName',
        'type' => 'getType',
        'category' => 'getCategory',
        'properties' => 'getProperties',
        'is_singleton' => 'getIsSingleton',
        'is_published' => 'getIsPublished',
        'created' => 'getCreated',
        'last_modified' => 'getLastModified',
        'version' => 'getVersion',
        'scripts' => 'getScripts',
        'preview_urls' => 'getPreviewUrls',
        'fields_in_lists' => 'getFieldsInLists',
        'fields_in_references' => 'getFieldsInReferences',
        'field_rules' => 'getFieldRules',
        'fields' => 'getFields'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('created_by', $data ?? [], null);
        $this->setIfExists('last_modified_by', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('properties', $data ?? [], null);
        $this->setIfExists('is_singleton', $data ?? [], null);
        $this->setIfExists('is_published', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('last_modified', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('scripts', $data ?? [], null);
        $this->setIfExists('preview_urls', $data ?? [], null);
        $this->setIfExists('fields_in_lists', $data ?? [], null);
        $this->setIfExists('fields_in_references', $data ?? [], null);
        $this->setIfExists('field_rules', $data ?? [], null);
        $this->setIfExists('fields', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['created_by'] === null) {
            $invalidProperties[] = "'created_by' can't be null";
        }
        if ((mb_strlen($this->container['created_by']) < 1)) {
            $invalidProperties[] = "invalid value for 'created_by', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['last_modified_by'] === null) {
            $invalidProperties[] = "'last_modified_by' can't be null";
        }
        if ((mb_strlen($this->container['last_modified_by']) < 1)) {
            $invalidProperties[] = "invalid value for 'last_modified_by', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^[a-z0-9]+(\\-[a-z0-9]+)*$/", $this->container['name'])) {
            $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-z0-9]+(\\-[a-z0-9]+)*$/.";
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['properties'] === null) {
            $invalidProperties[] = "'properties' can't be null";
        }
        if ($this->container['is_singleton'] === null) {
            $invalidProperties[] = "'is_singleton' can't be null";
        }
        if ($this->container['is_published'] === null) {
            $invalidProperties[] = "'is_published' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['last_modified'] === null) {
            $invalidProperties[] = "'last_modified' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['scripts'] === null) {
            $invalidProperties[] = "'scripts' can't be null";
        }
        if ($this->container['preview_urls'] === null) {
            $invalidProperties[] = "'preview_urls' can't be null";
        }
        if ($this->container['fields_in_lists'] === null) {
            $invalidProperties[] = "'fields_in_lists' can't be null";
        }
        if ($this->container['fields_in_references'] === null) {
            $invalidProperties[] = "'fields_in_references' can't be null";
        }
        if ($this->container['field_rules'] === null) {
            $invalidProperties[] = "'field_rules' can't be null";
        }
        if ($this->container['fields'] === null) {
            $invalidProperties[] = "'fields' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The ID of the schema.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string $created_by The user that has created the schema.
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {
        if (is_null($created_by)) {
            throw new \InvalidArgumentException('non-nullable created_by cannot be null');
        }

        if ((mb_strlen($created_by) < 1)) {
            throw new \InvalidArgumentException('invalid length for $created_by when calling SchemaDtoAllOf., must be bigger than or equal to 1.');
        }

        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets last_modified_by
     *
     * @return string
     */
    public function getLastModifiedBy()
    {
        return $this->container['last_modified_by'];
    }

    /**
     * Sets last_modified_by
     *
     * @param string $last_modified_by The user that has updated the schema.
     *
     * @return self
     */
    public function setLastModifiedBy($last_modified_by)
    {
        if (is_null($last_modified_by)) {
            throw new \InvalidArgumentException('non-nullable last_modified_by cannot be null');
        }

        if ((mb_strlen($last_modified_by) < 1)) {
            throw new \InvalidArgumentException('invalid length for $last_modified_by when calling SchemaDtoAllOf., must be bigger than or equal to 1.');
        }

        $this->container['last_modified_by'] = $last_modified_by;

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
     * @param string $name The name of the schema. Unique within the app.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling SchemaDtoAllOf., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[a-z0-9]+(\\-[a-z0-9]+)*$/", $name))) {
            throw new \InvalidArgumentException("invalid value for \$name when calling SchemaDtoAllOf., must conform to the pattern /^[a-z0-9]+(\\-[a-z0-9]+)*$/.");
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\SchemaType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\SchemaType $type type
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
     * @param string|null $category The name of the category.
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
     * Gets properties
     *
     * @return \OpenAPI\Client\Model\SchemaPropertiesDto
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param \OpenAPI\Client\Model\SchemaPropertiesDto $properties properties
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
     * Gets is_singleton
     *
     * @return bool
     * @deprecated
     */
    public function getIsSingleton()
    {
        return $this->container['is_singleton'];
    }

    /**
     * Sets is_singleton
     *
     * @param bool $is_singleton Indicates if the schema is a singleton.
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
     * Gets is_published
     *
     * @return bool
     */
    public function getIsPublished()
    {
        return $this->container['is_published'];
    }

    /**
     * Sets is_published
     *
     * @param bool $is_published Indicates if the schema is published.
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
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created The date and time when the schema has been created.
     *
     * @return self
     */
    public function setCreated($created)
    {
        if (is_null($created)) {
            throw new \InvalidArgumentException('non-nullable created cannot be null');
        }
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return \DateTime
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param \DateTime $last_modified The date and time when the schema has been modified last.
     *
     * @return self
     */
    public function setLastModified($last_modified)
    {
        if (is_null($last_modified)) {
            throw new \InvalidArgumentException('non-nullable last_modified cannot be null');
        }
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version The version of the schema.
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets scripts
     *
     * @return \OpenAPI\Client\Model\SchemaScriptsDto
     */
    public function getScripts()
    {
        return $this->container['scripts'];
    }

    /**
     * Sets scripts
     *
     * @param \OpenAPI\Client\Model\SchemaScriptsDto $scripts scripts
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
     * Gets preview_urls
     *
     * @return array<string,string>
     */
    public function getPreviewUrls()
    {
        return $this->container['preview_urls'];
    }

    /**
     * Sets preview_urls
     *
     * @param array<string,string> $preview_urls The preview Urls.
     *
     * @return self
     */
    public function setPreviewUrls($preview_urls)
    {
        if (is_null($preview_urls)) {
            throw new \InvalidArgumentException('non-nullable preview_urls cannot be null');
        }
        $this->container['preview_urls'] = $preview_urls;

        return $this;
    }

    /**
     * Gets fields_in_lists
     *
     * @return string[]
     */
    public function getFieldsInLists()
    {
        return $this->container['fields_in_lists'];
    }

    /**
     * Sets fields_in_lists
     *
     * @param string[] $fields_in_lists The name of fields that are used in content lists.
     *
     * @return self
     */
    public function setFieldsInLists($fields_in_lists)
    {
        if (is_null($fields_in_lists)) {
            throw new \InvalidArgumentException('non-nullable fields_in_lists cannot be null');
        }
        $this->container['fields_in_lists'] = $fields_in_lists;

        return $this;
    }

    /**
     * Gets fields_in_references
     *
     * @return string[]
     */
    public function getFieldsInReferences()
    {
        return $this->container['fields_in_references'];
    }

    /**
     * Sets fields_in_references
     *
     * @param string[] $fields_in_references The name of fields that are used in content references.
     *
     * @return self
     */
    public function setFieldsInReferences($fields_in_references)
    {
        if (is_null($fields_in_references)) {
            throw new \InvalidArgumentException('non-nullable fields_in_references cannot be null');
        }
        $this->container['fields_in_references'] = $fields_in_references;

        return $this;
    }

    /**
     * Gets field_rules
     *
     * @return \OpenAPI\Client\Model\FieldRuleDto[]
     */
    public function getFieldRules()
    {
        return $this->container['field_rules'];
    }

    /**
     * Sets field_rules
     *
     * @param \OpenAPI\Client\Model\FieldRuleDto[] $field_rules The field rules.
     *
     * @return self
     */
    public function setFieldRules($field_rules)
    {
        if (is_null($field_rules)) {
            throw new \InvalidArgumentException('non-nullable field_rules cannot be null');
        }
        $this->container['field_rules'] = $field_rules;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return \OpenAPI\Client\Model\FieldDto[]
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param \OpenAPI\Client\Model\FieldDto[] $fields The list of fields.
     *
     * @return self
     */
    public function setFields($fields)
    {
        if (is_null($fields)) {
            throw new \InvalidArgumentException('non-nullable fields cannot be null');
        }
        $this->container['fields'] = $fields;

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


