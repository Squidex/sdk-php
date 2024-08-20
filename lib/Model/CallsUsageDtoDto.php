<?php
/**
 * CallsUsageDtoDto
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
 * CallsUsageDtoDto Class Doc Comment
 *
 * @category Class
 * @package  Squidex\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CallsUsageDtoDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CallsUsageDtoDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total_calls' => 'int',
        'total_bytes' => 'int',
        'month_calls' => 'int',
        'month_bytes' => 'int',
        'blocking_api_calls' => 'int',
        'allowed_bytes' => 'int',
        'allowed_calls' => 'int',
        'average_elapsed_ms' => 'float',
        'details' => 'array<string,\Squidex\Client\Model\CallsUsagePerDateDto[]>'
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
        'total_calls' => 'int64',
        'total_bytes' => 'int64',
        'month_calls' => 'int64',
        'month_bytes' => 'int64',
        'blocking_api_calls' => 'int64',
        'allowed_bytes' => 'int64',
        'allowed_calls' => 'int64',
        'average_elapsed_ms' => 'double',
        'details' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'total_calls' => false,
		'total_bytes' => false,
		'month_calls' => false,
		'month_bytes' => false,
		'blocking_api_calls' => false,
		'allowed_bytes' => false,
		'allowed_calls' => false,
		'average_elapsed_ms' => false,
		'details' => false
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
        'total_calls' => 'totalCalls',
        'total_bytes' => 'totalBytes',
        'month_calls' => 'monthCalls',
        'month_bytes' => 'monthBytes',
        'blocking_api_calls' => 'blockingApiCalls',
        'allowed_bytes' => 'allowedBytes',
        'allowed_calls' => 'allowedCalls',
        'average_elapsed_ms' => 'averageElapsedMs',
        'details' => 'details'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_calls' => 'setTotalCalls',
        'total_bytes' => 'setTotalBytes',
        'month_calls' => 'setMonthCalls',
        'month_bytes' => 'setMonthBytes',
        'blocking_api_calls' => 'setBlockingApiCalls',
        'allowed_bytes' => 'setAllowedBytes',
        'allowed_calls' => 'setAllowedCalls',
        'average_elapsed_ms' => 'setAverageElapsedMs',
        'details' => 'setDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_calls' => 'getTotalCalls',
        'total_bytes' => 'getTotalBytes',
        'month_calls' => 'getMonthCalls',
        'month_bytes' => 'getMonthBytes',
        'blocking_api_calls' => 'getBlockingApiCalls',
        'allowed_bytes' => 'getAllowedBytes',
        'allowed_calls' => 'getAllowedCalls',
        'average_elapsed_ms' => 'getAverageElapsedMs',
        'details' => 'getDetails'
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
        $this->setIfExists('total_calls', $data ?? [], null);
        $this->setIfExists('total_bytes', $data ?? [], null);
        $this->setIfExists('month_calls', $data ?? [], null);
        $this->setIfExists('month_bytes', $data ?? [], null);
        $this->setIfExists('blocking_api_calls', $data ?? [], null);
        $this->setIfExists('allowed_bytes', $data ?? [], null);
        $this->setIfExists('allowed_calls', $data ?? [], null);
        $this->setIfExists('average_elapsed_ms', $data ?? [], null);
        $this->setIfExists('details', $data ?? [], null);

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

        if ($this->container['total_calls'] === null) {
            $invalidProperties[] = "'total_calls' can't be null";
        }
        if ($this->container['total_bytes'] === null) {
            $invalidProperties[] = "'total_bytes' can't be null";
        }
        if ($this->container['month_calls'] === null) {
            $invalidProperties[] = "'month_calls' can't be null";
        }
        if ($this->container['month_bytes'] === null) {
            $invalidProperties[] = "'month_bytes' can't be null";
        }
        if ($this->container['blocking_api_calls'] === null) {
            $invalidProperties[] = "'blocking_api_calls' can't be null";
        }
        if ($this->container['allowed_bytes'] === null) {
            $invalidProperties[] = "'allowed_bytes' can't be null";
        }
        if ($this->container['allowed_calls'] === null) {
            $invalidProperties[] = "'allowed_calls' can't be null";
        }
        if ($this->container['average_elapsed_ms'] === null) {
            $invalidProperties[] = "'average_elapsed_ms' can't be null";
        }
        if ($this->container['details'] === null) {
            $invalidProperties[] = "'details' can't be null";
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
     * Gets total_calls
     *
     * @return int
     */
    public function getTotalCalls()
    {
        return $this->container['total_calls'];
    }

    /**
     * Sets total_calls
     *
     * @param int $total_calls The total number of API calls.
     *
     * @return self
     */
    public function setTotalCalls($total_calls)
    {
        if (is_null($total_calls)) {
            throw new \InvalidArgumentException('non-nullable total_calls cannot be null');
        }
        $this->container['total_calls'] = $total_calls;

        return $this;
    }

    /**
     * Gets total_bytes
     *
     * @return int
     */
    public function getTotalBytes()
    {
        return $this->container['total_bytes'];
    }

    /**
     * Sets total_bytes
     *
     * @param int $total_bytes The total number of bytes transferred.
     *
     * @return self
     */
    public function setTotalBytes($total_bytes)
    {
        if (is_null($total_bytes)) {
            throw new \InvalidArgumentException('non-nullable total_bytes cannot be null');
        }
        $this->container['total_bytes'] = $total_bytes;

        return $this;
    }

    /**
     * Gets month_calls
     *
     * @return int
     */
    public function getMonthCalls()
    {
        return $this->container['month_calls'];
    }

    /**
     * Sets month_calls
     *
     * @param int $month_calls The total number of API calls this month.
     *
     * @return self
     */
    public function setMonthCalls($month_calls)
    {
        if (is_null($month_calls)) {
            throw new \InvalidArgumentException('non-nullable month_calls cannot be null');
        }
        $this->container['month_calls'] = $month_calls;

        return $this;
    }

    /**
     * Gets month_bytes
     *
     * @return int
     */
    public function getMonthBytes()
    {
        return $this->container['month_bytes'];
    }

    /**
     * Sets month_bytes
     *
     * @param int $month_bytes The total number of bytes transferred this month.
     *
     * @return self
     */
    public function setMonthBytes($month_bytes)
    {
        if (is_null($month_bytes)) {
            throw new \InvalidArgumentException('non-nullable month_bytes cannot be null');
        }
        $this->container['month_bytes'] = $month_bytes;

        return $this;
    }

    /**
     * Gets blocking_api_calls
     *
     * @return int
     */
    public function getBlockingApiCalls()
    {
        return $this->container['blocking_api_calls'];
    }

    /**
     * Sets blocking_api_calls
     *
     * @param int $blocking_api_calls The amount of calls that will block the app.
     *
     * @return self
     */
    public function setBlockingApiCalls($blocking_api_calls)
    {
        if (is_null($blocking_api_calls)) {
            throw new \InvalidArgumentException('non-nullable blocking_api_calls cannot be null');
        }
        $this->container['blocking_api_calls'] = $blocking_api_calls;

        return $this;
    }

    /**
     * Gets allowed_bytes
     *
     * @return int
     */
    public function getAllowedBytes()
    {
        return $this->container['allowed_bytes'];
    }

    /**
     * Sets allowed_bytes
     *
     * @param int $allowed_bytes The included API traffic.
     *
     * @return self
     */
    public function setAllowedBytes($allowed_bytes)
    {
        if (is_null($allowed_bytes)) {
            throw new \InvalidArgumentException('non-nullable allowed_bytes cannot be null');
        }
        $this->container['allowed_bytes'] = $allowed_bytes;

        return $this;
    }

    /**
     * Gets allowed_calls
     *
     * @return int
     */
    public function getAllowedCalls()
    {
        return $this->container['allowed_calls'];
    }

    /**
     * Sets allowed_calls
     *
     * @param int $allowed_calls The included API calls.
     *
     * @return self
     */
    public function setAllowedCalls($allowed_calls)
    {
        if (is_null($allowed_calls)) {
            throw new \InvalidArgumentException('non-nullable allowed_calls cannot be null');
        }
        $this->container['allowed_calls'] = $allowed_calls;

        return $this;
    }

    /**
     * Gets average_elapsed_ms
     *
     * @return float
     */
    public function getAverageElapsedMs()
    {
        return $this->container['average_elapsed_ms'];
    }

    /**
     * Sets average_elapsed_ms
     *
     * @param float $average_elapsed_ms The average duration in milliseconds.
     *
     * @return self
     */
    public function setAverageElapsedMs($average_elapsed_ms)
    {
        if (is_null($average_elapsed_ms)) {
            throw new \InvalidArgumentException('non-nullable average_elapsed_ms cannot be null');
        }
        $this->container['average_elapsed_ms'] = $average_elapsed_ms;

        return $this;
    }

    /**
     * Gets details
     *
     * @return array<string,\Squidex\Client\Model\CallsUsagePerDateDto[]>
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param array<string,\Squidex\Client\Model\CallsUsagePerDateDto[]> $details The statistics by date and group.
     *
     * @return self
     */
    public function setDetails($details)
    {
        if (is_null($details)) {
            throw new \InvalidArgumentException('non-nullable details cannot be null');
        }
        $this->container['details'] = $details;

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


