<?php
/**
 * StringFieldPropertiesDto
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
 * StringFieldPropertiesDto Class Doc Comment
 *
 * @category Class
 * @package  Squidex\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StringFieldPropertiesDto extends FieldPropertiesDto
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StringFieldPropertiesDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'default_values' => 'array<string,string>',
        'default_value' => 'string',
        'pattern' => 'string',
        'pattern_message' => 'string',
        'folder_id' => 'string',
        'min_length' => 'int',
        'max_length' => 'int',
        'min_characters' => 'int',
        'max_characters' => 'int',
        'min_words' => 'int',
        'max_words' => 'int',
        'class_names' => 'string[]',
        'allowed_values' => 'string[]',
        'schema_ids' => 'string[]',
        'is_unique' => 'bool',
        'is_embeddable' => 'bool',
        'inline_editable' => 'bool',
        'create_enum' => 'bool',
        'content_type' => '\Squidex\Client\Model\StringContentType',
        'editor' => '\Squidex\Client\Model\StringFieldEditor'
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
        'pattern' => null,
        'pattern_message' => null,
        'folder_id' => null,
        'min_length' => 'int32',
        'max_length' => 'int32',
        'min_characters' => 'int32',
        'max_characters' => 'int32',
        'min_words' => 'int32',
        'max_words' => 'int32',
        'class_names' => null,
        'allowed_values' => null,
        'schema_ids' => null,
        'is_unique' => null,
        'is_embeddable' => null,
        'inline_editable' => null,
        'create_enum' => null,
        'content_type' => null,
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
		'pattern' => true,
		'pattern_message' => true,
		'folder_id' => true,
		'min_length' => true,
		'max_length' => true,
		'min_characters' => true,
		'max_characters' => true,
		'min_words' => true,
		'max_words' => true,
		'class_names' => true,
		'allowed_values' => true,
		'schema_ids' => true,
		'is_unique' => false,
		'is_embeddable' => false,
		'inline_editable' => false,
		'create_enum' => false,
		'content_type' => false,
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
        'pattern' => 'pattern',
        'pattern_message' => 'patternMessage',
        'folder_id' => 'folderId',
        'min_length' => 'minLength',
        'max_length' => 'maxLength',
        'min_characters' => 'minCharacters',
        'max_characters' => 'maxCharacters',
        'min_words' => 'minWords',
        'max_words' => 'maxWords',
        'class_names' => 'classNames',
        'allowed_values' => 'allowedValues',
        'schema_ids' => 'schemaIds',
        'is_unique' => 'isUnique',
        'is_embeddable' => 'isEmbeddable',
        'inline_editable' => 'inlineEditable',
        'create_enum' => 'createEnum',
        'content_type' => 'contentType',
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
        'pattern' => 'setPattern',
        'pattern_message' => 'setPatternMessage',
        'folder_id' => 'setFolderId',
        'min_length' => 'setMinLength',
        'max_length' => 'setMaxLength',
        'min_characters' => 'setMinCharacters',
        'max_characters' => 'setMaxCharacters',
        'min_words' => 'setMinWords',
        'max_words' => 'setMaxWords',
        'class_names' => 'setClassNames',
        'allowed_values' => 'setAllowedValues',
        'schema_ids' => 'setSchemaIds',
        'is_unique' => 'setIsUnique',
        'is_embeddable' => 'setIsEmbeddable',
        'inline_editable' => 'setInlineEditable',
        'create_enum' => 'setCreateEnum',
        'content_type' => 'setContentType',
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
        'pattern' => 'getPattern',
        'pattern_message' => 'getPatternMessage',
        'folder_id' => 'getFolderId',
        'min_length' => 'getMinLength',
        'max_length' => 'getMaxLength',
        'min_characters' => 'getMinCharacters',
        'max_characters' => 'getMaxCharacters',
        'min_words' => 'getMinWords',
        'max_words' => 'getMaxWords',
        'class_names' => 'getClassNames',
        'allowed_values' => 'getAllowedValues',
        'schema_ids' => 'getSchemaIds',
        'is_unique' => 'getIsUnique',
        'is_embeddable' => 'getIsEmbeddable',
        'inline_editable' => 'getInlineEditable',
        'create_enum' => 'getCreateEnum',
        'content_type' => 'getContentType',
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
        $this->setIfExists('pattern', $data ?? [], null);
        $this->setIfExists('pattern_message', $data ?? [], null);
        $this->setIfExists('folder_id', $data ?? [], null);
        $this->setIfExists('min_length', $data ?? [], null);
        $this->setIfExists('max_length', $data ?? [], null);
        $this->setIfExists('min_characters', $data ?? [], null);
        $this->setIfExists('max_characters', $data ?? [], null);
        $this->setIfExists('min_words', $data ?? [], null);
        $this->setIfExists('max_words', $data ?? [], null);
        $this->setIfExists('class_names', $data ?? [], null);
        $this->setIfExists('allowed_values', $data ?? [], null);
        $this->setIfExists('schema_ids', $data ?? [], null);
        $this->setIfExists('is_unique', $data ?? [], null);
        $this->setIfExists('is_embeddable', $data ?? [], null);
        $this->setIfExists('inline_editable', $data ?? [], null);
        $this->setIfExists('create_enum', $data ?? [], null);
        $this->setIfExists('content_type', $data ?? [], null);
        $this->setIfExists('editor', $data ?? [], null);


        // Initialize discriminator property with the model name.
        $this->container['field_type'] = parent::$openAPIMappingsReverse['StringFieldPropertiesDto'];
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
     * @return array<string,string>|null
     */
    public function getDefaultValues()
    {
        return $this->container['default_values'];
    }

    /**
     * Sets default_values
     *
     * @param array<string,string>|null $default_values default_values
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
     * @return string|null
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     *
     * @param string|null $default_value The default value for the field value.
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
     * Gets pattern
     *
     * @return string|null
     */
    public function getPattern()
    {
        return $this->container['pattern'];
    }

    /**
     * Sets pattern
     *
     * @param string|null $pattern The pattern to enforce a specific format for the field value.
     *
     * @return self
     */
    public function setPattern($pattern)
    {
        if (is_null($pattern)) {
            array_push($this->openAPINullablesSetToNull, 'pattern');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pattern', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pattern'] = $pattern;

        return $this;
    }

    /**
     * Gets pattern_message
     *
     * @return string|null
     */
    public function getPatternMessage()
    {
        return $this->container['pattern_message'];
    }

    /**
     * Sets pattern_message
     *
     * @param string|null $pattern_message The validation message for the pattern.
     *
     * @return self
     */
    public function setPatternMessage($pattern_message)
    {
        if (is_null($pattern_message)) {
            array_push($this->openAPINullablesSetToNull, 'pattern_message');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pattern_message', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pattern_message'] = $pattern_message;

        return $this;
    }

    /**
     * Gets folder_id
     *
     * @return string|null
     */
    public function getFolderId()
    {
        return $this->container['folder_id'];
    }

    /**
     * Sets folder_id
     *
     * @param string|null $folder_id The initial id to the folder when the control supports file uploads.
     *
     * @return self
     */
    public function setFolderId($folder_id)
    {
        if (is_null($folder_id)) {
            array_push($this->openAPINullablesSetToNull, 'folder_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('folder_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['folder_id'] = $folder_id;

        return $this;
    }

    /**
     * Gets min_length
     *
     * @return int|null
     */
    public function getMinLength()
    {
        return $this->container['min_length'];
    }

    /**
     * Sets min_length
     *
     * @param int|null $min_length The minimum allowed length for the field value.
     *
     * @return self
     */
    public function setMinLength($min_length)
    {
        if (is_null($min_length)) {
            array_push($this->openAPINullablesSetToNull, 'min_length');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('min_length', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['min_length'] = $min_length;

        return $this;
    }

    /**
     * Gets max_length
     *
     * @return int|null
     */
    public function getMaxLength()
    {
        return $this->container['max_length'];
    }

    /**
     * Sets max_length
     *
     * @param int|null $max_length The maximum allowed length for the field value.
     *
     * @return self
     */
    public function setMaxLength($max_length)
    {
        if (is_null($max_length)) {
            array_push($this->openAPINullablesSetToNull, 'max_length');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_length', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_length'] = $max_length;

        return $this;
    }

    /**
     * Gets min_characters
     *
     * @return int|null
     */
    public function getMinCharacters()
    {
        return $this->container['min_characters'];
    }

    /**
     * Sets min_characters
     *
     * @param int|null $min_characters The minimum allowed of normal characters for the field value.
     *
     * @return self
     */
    public function setMinCharacters($min_characters)
    {
        if (is_null($min_characters)) {
            array_push($this->openAPINullablesSetToNull, 'min_characters');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('min_characters', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['min_characters'] = $min_characters;

        return $this;
    }

    /**
     * Gets max_characters
     *
     * @return int|null
     */
    public function getMaxCharacters()
    {
        return $this->container['max_characters'];
    }

    /**
     * Sets max_characters
     *
     * @param int|null $max_characters The maximum allowed of normal characters for the field value.
     *
     * @return self
     */
    public function setMaxCharacters($max_characters)
    {
        if (is_null($max_characters)) {
            array_push($this->openAPINullablesSetToNull, 'max_characters');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_characters', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_characters'] = $max_characters;

        return $this;
    }

    /**
     * Gets min_words
     *
     * @return int|null
     */
    public function getMinWords()
    {
        return $this->container['min_words'];
    }

    /**
     * Sets min_words
     *
     * @param int|null $min_words The minimum allowed number of words for the field value.
     *
     * @return self
     */
    public function setMinWords($min_words)
    {
        if (is_null($min_words)) {
            array_push($this->openAPINullablesSetToNull, 'min_words');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('min_words', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['min_words'] = $min_words;

        return $this;
    }

    /**
     * Gets max_words
     *
     * @return int|null
     */
    public function getMaxWords()
    {
        return $this->container['max_words'];
    }

    /**
     * Sets max_words
     *
     * @param int|null $max_words The maximum allowed number of words for the field value.
     *
     * @return self
     */
    public function setMaxWords($max_words)
    {
        if (is_null($max_words)) {
            array_push($this->openAPINullablesSetToNull, 'max_words');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_words', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_words'] = $max_words;

        return $this;
    }

    /**
     * Gets class_names
     *
     * @return string[]|null
     */
    public function getClassNames()
    {
        return $this->container['class_names'];
    }

    /**
     * Sets class_names
     *
     * @param string[]|null $class_names The class names for the editor.
     *
     * @return self
     */
    public function setClassNames($class_names)
    {
        if (is_null($class_names)) {
            array_push($this->openAPINullablesSetToNull, 'class_names');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('class_names', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['class_names'] = $class_names;

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
     * @param string[]|null $schema_ids The allowed schema ids that can be embedded.
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
     * Gets is_embeddable
     *
     * @return bool|null
     */
    public function getIsEmbeddable()
    {
        return $this->container['is_embeddable'];
    }

    /**
     * Sets is_embeddable
     *
     * @param bool|null $is_embeddable Indicates that other content items or references are embedded.
     *
     * @return self
     */
    public function setIsEmbeddable($is_embeddable)
    {
        if (is_null($is_embeddable)) {
            throw new \InvalidArgumentException('non-nullable is_embeddable cannot be null');
        }
        $this->container['is_embeddable'] = $is_embeddable;

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
     * Gets content_type
     *
     * @return \Squidex\Client\Model\StringContentType|null
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param \Squidex\Client\Model\StringContentType|null $content_type content_type
     *
     * @return self
     */
    public function setContentType($content_type)
    {
        if (is_null($content_type)) {
            throw new \InvalidArgumentException('non-nullable content_type cannot be null');
        }
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets editor
     *
     * @return \Squidex\Client\Model\StringFieldEditor|null
     */
    public function getEditor()
    {
        return $this->container['editor'];
    }

    /**
     * Sets editor
     *
     * @param \Squidex\Client\Model\StringFieldEditor|null $editor editor
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


