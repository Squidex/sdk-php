<?php
/**
 * AppSettingsDtoAllOf
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
 * AppSettingsDtoAllOf Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AppSettingsDtoAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AppSettingsDto_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'patterns' => '\OpenAPI\Client\Model\PatternDto[]',
        'editors' => '\OpenAPI\Client\Model\EditorDto[]',
        'hide_scheduler' => 'bool',
        'hide_date_time_mode_button' => 'bool',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'patterns' => null,
        'editors' => null,
        'hide_scheduler' => null,
        'hide_date_time_mode_button' => null,
        'version' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'patterns' => false,
		'editors' => false,
		'hide_scheduler' => false,
		'hide_date_time_mode_button' => false,
		'version' => false
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
        'patterns' => 'patterns',
        'editors' => 'editors',
        'hide_scheduler' => 'hideScheduler',
        'hide_date_time_mode_button' => 'hideDateTimeModeButton',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'patterns' => 'setPatterns',
        'editors' => 'setEditors',
        'hide_scheduler' => 'setHideScheduler',
        'hide_date_time_mode_button' => 'setHideDateTimeModeButton',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'patterns' => 'getPatterns',
        'editors' => 'getEditors',
        'hide_scheduler' => 'getHideScheduler',
        'hide_date_time_mode_button' => 'getHideDateTimeModeButton',
        'version' => 'getVersion'
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
        $this->setIfExists('patterns', $data ?? [], null);
        $this->setIfExists('editors', $data ?? [], null);
        $this->setIfExists('hide_scheduler', $data ?? [], null);
        $this->setIfExists('hide_date_time_mode_button', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
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

        if ($this->container['patterns'] === null) {
            $invalidProperties[] = "'patterns' can't be null";
        }
        if ($this->container['editors'] === null) {
            $invalidProperties[] = "'editors' can't be null";
        }
        if ($this->container['hide_scheduler'] === null) {
            $invalidProperties[] = "'hide_scheduler' can't be null";
        }
        if ($this->container['hide_date_time_mode_button'] === null) {
            $invalidProperties[] = "'hide_date_time_mode_button' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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
     * Gets patterns
     *
     * @return \OpenAPI\Client\Model\PatternDto[]
     */
    public function getPatterns()
    {
        return $this->container['patterns'];
    }

    /**
     * Sets patterns
     *
     * @param \OpenAPI\Client\Model\PatternDto[] $patterns The configured app patterns.
     *
     * @return self
     */
    public function setPatterns($patterns)
    {
        if (is_null($patterns)) {
            throw new \InvalidArgumentException('non-nullable patterns cannot be null');
        }
        $this->container['patterns'] = $patterns;

        return $this;
    }

    /**
     * Gets editors
     *
     * @return \OpenAPI\Client\Model\EditorDto[]
     */
    public function getEditors()
    {
        return $this->container['editors'];
    }

    /**
     * Sets editors
     *
     * @param \OpenAPI\Client\Model\EditorDto[] $editors The configured UI editors.
     *
     * @return self
     */
    public function setEditors($editors)
    {
        if (is_null($editors)) {
            throw new \InvalidArgumentException('non-nullable editors cannot be null');
        }
        $this->container['editors'] = $editors;

        return $this;
    }

    /**
     * Gets hide_scheduler
     *
     * @return bool
     */
    public function getHideScheduler()
    {
        return $this->container['hide_scheduler'];
    }

    /**
     * Sets hide_scheduler
     *
     * @param bool $hide_scheduler Hide the scheduler for content items.
     *
     * @return self
     */
    public function setHideScheduler($hide_scheduler)
    {
        if (is_null($hide_scheduler)) {
            throw new \InvalidArgumentException('non-nullable hide_scheduler cannot be null');
        }
        $this->container['hide_scheduler'] = $hide_scheduler;

        return $this;
    }

    /**
     * Gets hide_date_time_mode_button
     *
     * @return bool
     */
    public function getHideDateTimeModeButton()
    {
        return $this->container['hide_date_time_mode_button'];
    }

    /**
     * Sets hide_date_time_mode_button
     *
     * @param bool $hide_date_time_mode_button Hide the datetime mode button.
     *
     * @return self
     */
    public function setHideDateTimeModeButton($hide_date_time_mode_button)
    {
        if (is_null($hide_date_time_mode_button)) {
            throw new \InvalidArgumentException('non-nullable hide_date_time_mode_button cannot be null');
        }
        $this->container['hide_date_time_mode_button'] = $hide_date_time_mode_button;

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
     * @param int $version The version of the app.
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


