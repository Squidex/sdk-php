<?php
/**
 * EmailRuleActionDto
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
 * EmailRuleActionDto Class Doc Comment
 *
 * @category Class
 * @package  Squidex\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EmailRuleActionDto extends RuleActionDto
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmailRuleActionDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'server_host' => 'string',
        'server_port' => 'int',
        'server_username' => 'string',
        'server_password' => 'string',
        'message_from' => 'string',
        'message_to' => 'string',
        'message_subject' => 'string',
        'message_body' => 'string'
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
        'server_host' => null,
        'server_port' => 'int32',
        'server_username' => null,
        'server_password' => null,
        'message_from' => null,
        'message_to' => null,
        'message_subject' => null,
        'message_body' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'server_host' => false,
		'server_port' => false,
		'server_username' => false,
		'server_password' => false,
		'message_from' => false,
		'message_to' => false,
		'message_subject' => false,
		'message_body' => false
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
        'server_host' => 'serverHost',
        'server_port' => 'serverPort',
        'server_username' => 'serverUsername',
        'server_password' => 'serverPassword',
        'message_from' => 'messageFrom',
        'message_to' => 'messageTo',
        'message_subject' => 'messageSubject',
        'message_body' => 'messageBody'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'server_host' => 'setServerHost',
        'server_port' => 'setServerPort',
        'server_username' => 'setServerUsername',
        'server_password' => 'setServerPassword',
        'message_from' => 'setMessageFrom',
        'message_to' => 'setMessageTo',
        'message_subject' => 'setMessageSubject',
        'message_body' => 'setMessageBody'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'server_host' => 'getServerHost',
        'server_port' => 'getServerPort',
        'server_username' => 'getServerUsername',
        'server_password' => 'getServerPassword',
        'message_from' => 'getMessageFrom',
        'message_to' => 'getMessageTo',
        'message_subject' => 'getMessageSubject',
        'message_body' => 'getMessageBody'
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

        $this->setIfExists('server_host', $data ?? [], null);
        $this->setIfExists('server_port', $data ?? [], null);
        $this->setIfExists('server_username', $data ?? [], null);
        $this->setIfExists('server_password', $data ?? [], null);
        $this->setIfExists('message_from', $data ?? [], null);
        $this->setIfExists('message_to', $data ?? [], null);
        $this->setIfExists('message_subject', $data ?? [], null);
        $this->setIfExists('message_body', $data ?? [], null);


        // Initialize discriminator property with the model name.
        $this->container['action_type'] = parent::$openAPIMappingsReverse['EmailRuleActionDto'];
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

        if ($this->container['server_host'] === null) {
            $invalidProperties[] = "'server_host' can't be null";
        }
        if ((mb_strlen($this->container['server_host']) < 1)) {
            $invalidProperties[] = "invalid value for 'server_host', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['server_port'] === null) {
            $invalidProperties[] = "'server_port' can't be null";
        }
        if ($this->container['server_username'] === null) {
            $invalidProperties[] = "'server_username' can't be null";
        }
        if ($this->container['server_password'] === null) {
            $invalidProperties[] = "'server_password' can't be null";
        }
        if ($this->container['message_from'] === null) {
            $invalidProperties[] = "'message_from' can't be null";
        }
        if ((mb_strlen($this->container['message_from']) < 1)) {
            $invalidProperties[] = "invalid value for 'message_from', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['message_to'] === null) {
            $invalidProperties[] = "'message_to' can't be null";
        }
        if ((mb_strlen($this->container['message_to']) < 1)) {
            $invalidProperties[] = "invalid value for 'message_to', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['message_subject'] === null) {
            $invalidProperties[] = "'message_subject' can't be null";
        }
        if ((mb_strlen($this->container['message_subject']) < 1)) {
            $invalidProperties[] = "invalid value for 'message_subject', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['message_body'] === null) {
            $invalidProperties[] = "'message_body' can't be null";
        }
        if ((mb_strlen($this->container['message_body']) < 1)) {
            $invalidProperties[] = "invalid value for 'message_body', the character length must be bigger than or equal to 1.";
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
     * Gets server_host
     *
     * @return string
     */
    public function getServerHost()
    {
        return $this->container['server_host'];
    }

    /**
     * Sets server_host
     *
     * @param string $server_host The IP address or host to the SMTP server.
     *
     * @return self
     */
    public function setServerHost($server_host)
    {
        if (is_null($server_host)) {
            throw new \InvalidArgumentException('non-nullable server_host cannot be null');
        }


        $this->container['server_host'] = $server_host;

        return $this;
    }

    /**
     * Gets server_port
     *
     * @return int
     */
    public function getServerPort()
    {
        return $this->container['server_port'];
    }

    /**
     * Sets server_port
     *
     * @param int $server_port The port to the SMTP server.
     *
     * @return self
     */
    public function setServerPort($server_port)
    {
        if (is_null($server_port)) {
            throw new \InvalidArgumentException('non-nullable server_port cannot be null');
        }
        $this->container['server_port'] = $server_port;

        return $this;
    }

    /**
     * Gets server_username
     *
     * @return string
     */
    public function getServerUsername()
    {
        return $this->container['server_username'];
    }

    /**
     * Sets server_username
     *
     * @param string $server_username The username for the SMTP server.
     *
     * @return self
     */
    public function setServerUsername($server_username)
    {
        if (is_null($server_username)) {
            throw new \InvalidArgumentException('non-nullable server_username cannot be null');
        }
        $this->container['server_username'] = $server_username;

        return $this;
    }

    /**
     * Gets server_password
     *
     * @return string
     */
    public function getServerPassword()
    {
        return $this->container['server_password'];
    }

    /**
     * Sets server_password
     *
     * @param string $server_password The password for the SMTP server.
     *
     * @return self
     */
    public function setServerPassword($server_password)
    {
        if (is_null($server_password)) {
            throw new \InvalidArgumentException('non-nullable server_password cannot be null');
        }
        $this->container['server_password'] = $server_password;

        return $this;
    }

    /**
     * Gets message_from
     *
     * @return string
     */
    public function getMessageFrom()
    {
        return $this->container['message_from'];
    }

    /**
     * Sets message_from
     *
     * @param string $message_from The email sending address.
     *
     * @return self
     */
    public function setMessageFrom($message_from)
    {
        if (is_null($message_from)) {
            throw new \InvalidArgumentException('non-nullable message_from cannot be null');
        }


        $this->container['message_from'] = $message_from;

        return $this;
    }

    /**
     * Gets message_to
     *
     * @return string
     */
    public function getMessageTo()
    {
        return $this->container['message_to'];
    }

    /**
     * Sets message_to
     *
     * @param string $message_to The email message will be sent to.
     *
     * @return self
     */
    public function setMessageTo($message_to)
    {
        if (is_null($message_to)) {
            throw new \InvalidArgumentException('non-nullable message_to cannot be null');
        }


        $this->container['message_to'] = $message_to;

        return $this;
    }

    /**
     * Gets message_subject
     *
     * @return string
     */
    public function getMessageSubject()
    {
        return $this->container['message_subject'];
    }

    /**
     * Sets message_subject
     *
     * @param string $message_subject The subject line for this email message.
     *
     * @return self
     */
    public function setMessageSubject($message_subject)
    {
        if (is_null($message_subject)) {
            throw new \InvalidArgumentException('non-nullable message_subject cannot be null');
        }


        $this->container['message_subject'] = $message_subject;

        return $this;
    }

    /**
     * Gets message_body
     *
     * @return string
     */
    public function getMessageBody()
    {
        return $this->container['message_body'];
    }

    /**
     * Sets message_body
     *
     * @param string $message_body The message body.
     *
     * @return self
     */
    public function setMessageBody($message_body)
    {
        if (is_null($message_body)) {
            throw new \InvalidArgumentException('non-nullable message_body cannot be null');
        }


        $this->container['message_body'] = $message_body;

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


