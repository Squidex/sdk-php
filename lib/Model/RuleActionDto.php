<?php
/**
 * RuleActionDto
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
 * RuleActionDto Class Doc Comment
 *
 * @category Class
 * @package  Squidex\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RuleActionDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'action_type';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RuleActionDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'action_type' => 'string'
    ];

    /**
      * Array of mapping. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIMappings = [
        'Algolia' => 'AlgoliaRuleActionDto',
        'AzureQueue' => 'AzureQueueRuleActionDto',
        'Comment' => 'CommentRuleActionDto',
        'CreateContent' => 'CreateContentRuleActionDto',
        'Discourse' => 'DiscourseRuleActionDto',
        'ElasticSearch' => 'ElasticSearchRuleActionDto',
        'Email' => 'EmailRuleActionDto',
        'Fastly' => 'FastlyRuleActionDto',
        'Medium' => 'MediumRuleActionDto',
        'Notification' => 'NotificationRuleActionDto',
        'OpenSearch' => 'OpenSearchRuleActionDto',
        'Prerender' => 'PrerenderRuleActionDto',
        'Script' => 'ScriptRuleActionDto',
        'SignalR' => 'SignalRRuleActionDto',
        'Slack' => 'SlackRuleActionDto',
        'Tweet' => 'TweetRuleActionDto',
        'Typesense' => 'TypesenseRuleActionDto',
        'Webhook' => 'WebhookRuleActionDto'
    ];

    /**
      * Array of mapping. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIMappingsReverse = [
        'AlgoliaRuleActionDto' => 'Algolia',
        'AzureQueueRuleActionDto' => 'AzureQueue',
        'CommentRuleActionDto' => 'Comment',
        'CreateContentRuleActionDto' => 'CreateContent',
        'DiscourseRuleActionDto' => 'Discourse',
        'ElasticSearchRuleActionDto' => 'ElasticSearch',
        'EmailRuleActionDto' => 'Email',
        'FastlyRuleActionDto' => 'Fastly',
        'MediumRuleActionDto' => 'Medium',
        'NotificationRuleActionDto' => 'Notification',
        'OpenSearchRuleActionDto' => 'OpenSearch',
        'PrerenderRuleActionDto' => 'Prerender',
        'ScriptRuleActionDto' => 'Script',
        'SignalRRuleActionDto' => 'SignalR',
        'SlackRuleActionDto' => 'Slack',
        'TweetRuleActionDto' => 'Tweet',
        'TypesenseRuleActionDto' => 'Typesense',
        'WebhookRuleActionDto' => 'Webhook'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'action_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'action_type' => false
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
        'action_type' => 'actionType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_type' => 'setActionType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_type' => 'getActionType'
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
        $this->setIfExists('action_type', $data ?? [], null);

        // Initialize discriminator property with the model name.
        $this->container['action_type'] = static::$openAPIModelName;

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

        if ($this->container['action_type'] === null) {
            $invalidProperties[] = "'action_type' can't be null";
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
     * Gets action_type
     *
     * @return string
     */
    public function getActionType()
    {
        return $this->container['action_type'];
    }

    /**
     * Sets action_type
     *
     * @param string $action_type action_type
     *
     * @return self
     */
    public function setActionType($action_type)
    {
        if (is_null($action_type)) {
            throw new \InvalidArgumentException('non-nullable action_type cannot be null');
        }
        $this->container['action_type'] = $action_type;

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


