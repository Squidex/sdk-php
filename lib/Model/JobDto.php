<?php
/**
 * JobDto
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
 * JobDto Class Doc Comment
 *
 * @category Class
 * @package  Squidex\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class JobDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JobDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_links' => 'array<string,\Squidex\Client\Model\ResourceLink>',
        'id' => 'string',
        'started' => '\DateTime',
        'stopped' => '\DateTime',
        'status' => '\Squidex\Client\Model\JobStatus',
        'task_name' => 'string',
        'description' => 'string',
        'task_arguments' => 'array<string,string>',
        'log' => '\Squidex\Client\Model\JobLogMessageDto[]',
        'can_download' => 'bool'
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
        '_links' => null,
        'id' => null,
        'started' => 'date-time',
        'stopped' => 'date-time',
        'status' => null,
        'task_name' => null,
        'description' => null,
        'task_arguments' => null,
        'log' => null,
        'can_download' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_links' => false,
		'id' => false,
		'started' => false,
		'stopped' => true,
		'status' => false,
		'task_name' => false,
		'description' => false,
		'task_arguments' => false,
		'log' => false,
		'can_download' => false
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
        '_links' => '_links',
        'id' => 'id',
        'started' => 'started',
        'stopped' => 'stopped',
        'status' => 'status',
        'task_name' => 'taskName',
        'description' => 'description',
        'task_arguments' => 'taskArguments',
        'log' => 'log',
        'can_download' => 'canDownload'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_links' => 'setLinks',
        'id' => 'setId',
        'started' => 'setStarted',
        'stopped' => 'setStopped',
        'status' => 'setStatus',
        'task_name' => 'setTaskName',
        'description' => 'setDescription',
        'task_arguments' => 'setTaskArguments',
        'log' => 'setLog',
        'can_download' => 'setCanDownload'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_links' => 'getLinks',
        'id' => 'getId',
        'started' => 'getStarted',
        'stopped' => 'getStopped',
        'status' => 'getStatus',
        'task_name' => 'getTaskName',
        'description' => 'getDescription',
        'task_arguments' => 'getTaskArguments',
        'log' => 'getLog',
        'can_download' => 'getCanDownload'
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
        $this->setIfExists('_links', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('started', $data ?? [], null);
        $this->setIfExists('stopped', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('task_name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('task_arguments', $data ?? [], null);
        $this->setIfExists('log', $data ?? [], null);
        $this->setIfExists('can_download', $data ?? [], null);

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

        if ($this->container['_links'] === null) {
            $invalidProperties[] = "'_links' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['started'] === null) {
            $invalidProperties[] = "'started' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['task_name'] === null) {
            $invalidProperties[] = "'task_name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['task_arguments'] === null) {
            $invalidProperties[] = "'task_arguments' can't be null";
        }
        if ($this->container['log'] === null) {
            $invalidProperties[] = "'log' can't be null";
        }
        if ($this->container['can_download'] === null) {
            $invalidProperties[] = "'can_download' can't be null";
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
     * Gets _links
     *
     * @return array<string,\Squidex\Client\Model\ResourceLink>
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param array<string,\Squidex\Client\Model\ResourceLink> $_links The links.
     *
     * @return self
     */
    public function setLinks($_links)
    {
        if (is_null($_links)) {
            throw new \InvalidArgumentException('non-nullable _links cannot be null');
        }
        $this->container['_links'] = $_links;

        return $this;
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
     * @param string $id The ID of the job.
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
     * Gets started
     *
     * @return \DateTime
     */
    public function getStarted()
    {
        return $this->container['started'];
    }

    /**
     * Sets started
     *
     * @param \DateTime $started The time when the job has been started.
     *
     * @return self
     */
    public function setStarted($started)
    {
        if (is_null($started)) {
            throw new \InvalidArgumentException('non-nullable started cannot be null');
        }
        $this->container['started'] = $started;

        return $this;
    }

    /**
     * Gets stopped
     *
     * @return \DateTime|null
     */
    public function getStopped()
    {
        return $this->container['stopped'];
    }

    /**
     * Sets stopped
     *
     * @param \DateTime|null $stopped The time when the job has been stopped.
     *
     * @return self
     */
    public function setStopped($stopped)
    {
        if (is_null($stopped)) {
            array_push($this->openAPINullablesSetToNull, 'stopped');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('stopped', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['stopped'] = $stopped;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Squidex\Client\Model\JobStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Squidex\Client\Model\JobStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets task_name
     *
     * @return string
     */
    public function getTaskName()
    {
        return $this->container['task_name'];
    }

    /**
     * Sets task_name
     *
     * @param string $task_name The name of the task.
     *
     * @return self
     */
    public function setTaskName($task_name)
    {
        if (is_null($task_name)) {
            throw new \InvalidArgumentException('non-nullable task_name cannot be null');
        }
        $this->container['task_name'] = $task_name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The description of the job.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets task_arguments
     *
     * @return array<string,string>
     */
    public function getTaskArguments()
    {
        return $this->container['task_arguments'];
    }

    /**
     * Sets task_arguments
     *
     * @param array<string,string> $task_arguments The arguments for the job.
     *
     * @return self
     */
    public function setTaskArguments($task_arguments)
    {
        if (is_null($task_arguments)) {
            throw new \InvalidArgumentException('non-nullable task_arguments cannot be null');
        }
        $this->container['task_arguments'] = $task_arguments;

        return $this;
    }

    /**
     * Gets log
     *
     * @return \Squidex\Client\Model\JobLogMessageDto[]
     */
    public function getLog()
    {
        return $this->container['log'];
    }

    /**
     * Sets log
     *
     * @param \Squidex\Client\Model\JobLogMessageDto[] $log The list of log items.
     *
     * @return self
     */
    public function setLog($log)
    {
        if (is_null($log)) {
            throw new \InvalidArgumentException('non-nullable log cannot be null');
        }
        $this->container['log'] = $log;

        return $this;
    }

    /**
     * Gets can_download
     *
     * @return bool
     */
    public function getCanDownload()
    {
        return $this->container['can_download'];
    }

    /**
     * Sets can_download
     *
     * @param bool $can_download Indicates whether the job can be downloaded.
     *
     * @return self
     */
    public function setCanDownload($can_download)
    {
        if (is_null($can_download)) {
            throw new \InvalidArgumentException('non-nullable can_download cannot be null');
        }
        $this->container['can_download'] = $can_download;

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

