<?php
/**
 * WorkflowStepDto
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

use \ArrayAccess;
use \Squidex\Client\ObjectSerializer;

/**
 * WorkflowStepDto Class Doc Comment
 *
 * @category Class
 * @package  Squidex\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WorkflowStepDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WorkflowStepDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transitions' => 'array<string,\Squidex\Client\Model\WorkflowTransitionDto>',
        'color' => 'string',
        'validate' => 'bool',
        'no_update' => 'bool',
        'no_update_expression' => 'string',
        'no_update_roles' => 'string[]'
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
        'transitions' => null,
        'color' => null,
        'validate' => null,
        'no_update' => null,
        'no_update_expression' => null,
        'no_update_roles' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'transitions' => false,
		'color' => true,
		'validate' => false,
		'no_update' => false,
		'no_update_expression' => true,
		'no_update_roles' => true
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
        'transitions' => 'transitions',
        'color' => 'color',
        'validate' => 'validate',
        'no_update' => 'noUpdate',
        'no_update_expression' => 'noUpdateExpression',
        'no_update_roles' => 'noUpdateRoles'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transitions' => 'setTransitions',
        'color' => 'setColor',
        'validate' => 'setValidate',
        'no_update' => 'setNoUpdate',
        'no_update_expression' => 'setNoUpdateExpression',
        'no_update_roles' => 'setNoUpdateRoles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transitions' => 'getTransitions',
        'color' => 'getColor',
        'validate' => 'getValidate',
        'no_update' => 'getNoUpdate',
        'no_update_expression' => 'getNoUpdateExpression',
        'no_update_roles' => 'getNoUpdateRoles'
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
        $this->setIfExists('transitions', $data ?? [], null);
        $this->setIfExists('color', $data ?? [], null);
        $this->setIfExists('validate', $data ?? [], null);
        $this->setIfExists('no_update', $data ?? [], null);
        $this->setIfExists('no_update_expression', $data ?? [], null);
        $this->setIfExists('no_update_roles', $data ?? [], null);

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
     * Gets transitions
     *
     * @return array<string,\Squidex\Client\Model\WorkflowTransitionDto>|null
     */
    public function getTransitions()
    {
        return $this->container['transitions'];
    }

    /**
     * Sets transitions
     *
     * @param array<string,\Squidex\Client\Model\WorkflowTransitionDto>|null $transitions The transitions.
     *
     * @return self
     */
    public function setTransitions($transitions)
    {
        if (is_null($transitions)) {
            throw new \InvalidArgumentException('non-nullable transitions cannot be null');
        }
        $this->container['transitions'] = $transitions;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color The optional color.
     *
     * @return self
     */
    public function setColor($color)
    {
        if (is_null($color)) {
            array_push($this->openAPINullablesSetToNull, 'color');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('color', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets validate
     *
     * @return bool|null
     */
    public function getValidate()
    {
        return $this->container['validate'];
    }

    /**
     * Sets validate
     *
     * @param bool|null $validate True if the content should be validated when moving to this step.
     *
     * @return self
     */
    public function setValidate($validate)
    {
        if (is_null($validate)) {
            throw new \InvalidArgumentException('non-nullable validate cannot be null');
        }
        $this->container['validate'] = $validate;

        return $this;
    }

    /**
     * Gets no_update
     *
     * @return bool|null
     */
    public function getNoUpdate()
    {
        return $this->container['no_update'];
    }

    /**
     * Sets no_update
     *
     * @param bool|null $no_update Indicates if updates should not be allowed.
     *
     * @return self
     */
    public function setNoUpdate($no_update)
    {
        if (is_null($no_update)) {
            throw new \InvalidArgumentException('non-nullable no_update cannot be null');
        }
        $this->container['no_update'] = $no_update;

        return $this;
    }

    /**
     * Gets no_update_expression
     *
     * @return string|null
     */
    public function getNoUpdateExpression()
    {
        return $this->container['no_update_expression'];
    }

    /**
     * Sets no_update_expression
     *
     * @param string|null $no_update_expression Optional expression that must evaluate to true when you want to prevent updates.
     *
     * @return self
     */
    public function setNoUpdateExpression($no_update_expression)
    {
        if (is_null($no_update_expression)) {
            array_push($this->openAPINullablesSetToNull, 'no_update_expression');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('no_update_expression', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['no_update_expression'] = $no_update_expression;

        return $this;
    }

    /**
     * Gets no_update_roles
     *
     * @return string[]|null
     */
    public function getNoUpdateRoles()
    {
        return $this->container['no_update_roles'];
    }

    /**
     * Sets no_update_roles
     *
     * @param string[]|null $no_update_roles Optional list of roles to restrict the updates for users with these roles.
     *
     * @return self
     */
    public function setNoUpdateRoles($no_update_roles)
    {
        if (is_null($no_update_roles)) {
            array_push($this->openAPINullablesSetToNull, 'no_update_roles');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('no_update_roles', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['no_update_roles'] = $no_update_roles;

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


