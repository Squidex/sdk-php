<?php
/**
 * UpdateSchemaDto
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
 * OpenAPI Generator version: 7.8.0
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
 * UpdateSchemaDto Class Doc Comment
 *
 * @category Class
 * @package  Squidex\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateSchemaDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateSchemaDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'label' => 'string',
        'hints' => 'string',
        'contents_sidebar_url' => 'string',
        'content_sidebar_url' => 'string',
        'contents_list_url' => 'string',
        'validate_on_publish' => 'bool',
        'tags' => 'string[]'
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
        'label' => null,
        'hints' => null,
        'contents_sidebar_url' => null,
        'content_sidebar_url' => null,
        'contents_list_url' => null,
        'validate_on_publish' => null,
        'tags' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'label' => true,
		'hints' => true,
		'contents_sidebar_url' => true,
		'content_sidebar_url' => true,
		'contents_list_url' => true,
		'validate_on_publish' => false,
		'tags' => true
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
        'contents_sidebar_url' => 'contentsSidebarUrl',
        'content_sidebar_url' => 'contentSidebarUrl',
        'contents_list_url' => 'contentsListUrl',
        'validate_on_publish' => 'validateOnPublish',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'label' => 'setLabel',
        'hints' => 'setHints',
        'contents_sidebar_url' => 'setContentsSidebarUrl',
        'content_sidebar_url' => 'setContentSidebarUrl',
        'contents_list_url' => 'setContentsListUrl',
        'validate_on_publish' => 'setValidateOnPublish',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label' => 'getLabel',
        'hints' => 'getHints',
        'contents_sidebar_url' => 'getContentsSidebarUrl',
        'content_sidebar_url' => 'getContentSidebarUrl',
        'contents_list_url' => 'getContentsListUrl',
        'validate_on_publish' => 'getValidateOnPublish',
        'tags' => 'getTags'
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
        $this->setIfExists('contents_sidebar_url', $data ?? [], null);
        $this->setIfExists('content_sidebar_url', $data ?? [], null);
        $this->setIfExists('contents_list_url', $data ?? [], null);
        $this->setIfExists('validate_on_publish', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);

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
            throw new \InvalidArgumentException('invalid length for $label when calling UpdateSchemaDto., must be smaller than or equal to 100.');
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
     * @param string|null $hints Hints to describe the schema.
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
            throw new \InvalidArgumentException('invalid length for $hints when calling UpdateSchemaDto., must be smaller than or equal to 1000.');
        }

        $this->container['hints'] = $hints;

        return $this;
    }

    /**
     * Gets contents_sidebar_url
     *
     * @return string|null
     */
    public function getContentsSidebarUrl()
    {
        return $this->container['contents_sidebar_url'];
    }

    /**
     * Sets contents_sidebar_url
     *
     * @param string|null $contents_sidebar_url The url to a the sidebar plugin for content lists.
     *
     * @return self
     */
    public function setContentsSidebarUrl($contents_sidebar_url)
    {
        if (is_null($contents_sidebar_url)) {
            array_push($this->openAPINullablesSetToNull, 'contents_sidebar_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contents_sidebar_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['contents_sidebar_url'] = $contents_sidebar_url;

        return $this;
    }

    /**
     * Gets content_sidebar_url
     *
     * @return string|null
     */
    public function getContentSidebarUrl()
    {
        return $this->container['content_sidebar_url'];
    }

    /**
     * Sets content_sidebar_url
     *
     * @param string|null $content_sidebar_url The url to a the sidebar plugin for content items.
     *
     * @return self
     */
    public function setContentSidebarUrl($content_sidebar_url)
    {
        if (is_null($content_sidebar_url)) {
            array_push($this->openAPINullablesSetToNull, 'content_sidebar_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('content_sidebar_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['content_sidebar_url'] = $content_sidebar_url;

        return $this;
    }

    /**
     * Gets contents_list_url
     *
     * @return string|null
     */
    public function getContentsListUrl()
    {
        return $this->container['contents_list_url'];
    }

    /**
     * Sets contents_list_url
     *
     * @param string|null $contents_list_url The url to the content list plugin.
     *
     * @return self
     */
    public function setContentsListUrl($contents_list_url)
    {
        if (is_null($contents_list_url)) {
            array_push($this->openAPINullablesSetToNull, 'contents_list_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contents_list_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['contents_list_url'] = $contents_list_url;

        return $this;
    }

    /**
     * Gets validate_on_publish
     *
     * @return bool|null
     */
    public function getValidateOnPublish()
    {
        return $this->container['validate_on_publish'];
    }

    /**
     * Sets validate_on_publish
     *
     * @param bool|null $validate_on_publish True to validate the content items on publish.
     *
     * @return self
     */
    public function setValidateOnPublish($validate_on_publish)
    {
        if (is_null($validate_on_publish)) {
            throw new \InvalidArgumentException('non-nullable validate_on_publish cannot be null');
        }
        $this->container['validate_on_publish'] = $validate_on_publish;

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


