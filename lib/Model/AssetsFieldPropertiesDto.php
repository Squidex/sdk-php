<?php
/**
 * AssetsFieldPropertiesDto
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
 * AssetsFieldPropertiesDto Class Doc Comment
 *
 * @category Class
 * @package  Squidex\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AssetsFieldPropertiesDto extends FieldPropertiesDto
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AssetsFieldPropertiesDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'preview_mode' => '\Squidex\Client\Model\AssetPreviewMode',
        'default_values' => 'array<string,string[]>',
        'default_value' => 'string[]',
        'folder_id' => 'string',
        'preview_format' => 'string',
        'min_items' => 'int',
        'max_items' => 'int',
        'min_size' => 'int',
        'max_size' => 'int',
        'min_width' => 'int',
        'max_width' => 'int',
        'min_height' => 'int',
        'max_height' => 'int',
        'aspect_width' => 'int',
        'aspect_height' => 'int',
        'expected_type' => '\Squidex\Client\Model\AssetType',
        'resolve_first' => 'bool',
        'must_be_image' => 'bool',
        'resolve_image' => 'bool',
        'allowed_extensions' => 'string[]',
        'allow_duplicates' => 'bool'
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
        'preview_mode' => null,
        'default_values' => null,
        'default_value' => null,
        'folder_id' => null,
        'preview_format' => null,
        'min_items' => 'int32',
        'max_items' => 'int32',
        'min_size' => 'int32',
        'max_size' => 'int32',
        'min_width' => 'int32',
        'max_width' => 'int32',
        'min_height' => 'int32',
        'max_height' => 'int32',
        'aspect_width' => 'int32',
        'aspect_height' => 'int32',
        'expected_type' => null,
        'resolve_first' => null,
        'must_be_image' => null,
        'resolve_image' => null,
        'allowed_extensions' => null,
        'allow_duplicates' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'preview_mode' => false,
		'default_values' => false,
		'default_value' => true,
		'folder_id' => true,
		'preview_format' => true,
		'min_items' => true,
		'max_items' => true,
		'min_size' => true,
		'max_size' => true,
		'min_width' => true,
		'max_width' => true,
		'min_height' => true,
		'max_height' => true,
		'aspect_width' => true,
		'aspect_height' => true,
		'expected_type' => false,
		'resolve_first' => false,
		'must_be_image' => false,
		'resolve_image' => false,
		'allowed_extensions' => true,
		'allow_duplicates' => false
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
        'preview_mode' => 'previewMode',
        'default_values' => 'defaultValues',
        'default_value' => 'defaultValue',
        'folder_id' => 'folderId',
        'preview_format' => 'previewFormat',
        'min_items' => 'minItems',
        'max_items' => 'maxItems',
        'min_size' => 'minSize',
        'max_size' => 'maxSize',
        'min_width' => 'minWidth',
        'max_width' => 'maxWidth',
        'min_height' => 'minHeight',
        'max_height' => 'maxHeight',
        'aspect_width' => 'aspectWidth',
        'aspect_height' => 'aspectHeight',
        'expected_type' => 'expectedType',
        'resolve_first' => 'resolveFirst',
        'must_be_image' => 'mustBeImage',
        'resolve_image' => 'resolveImage',
        'allowed_extensions' => 'allowedExtensions',
        'allow_duplicates' => 'allowDuplicates'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'preview_mode' => 'setPreviewMode',
        'default_values' => 'setDefaultValues',
        'default_value' => 'setDefaultValue',
        'folder_id' => 'setFolderId',
        'preview_format' => 'setPreviewFormat',
        'min_items' => 'setMinItems',
        'max_items' => 'setMaxItems',
        'min_size' => 'setMinSize',
        'max_size' => 'setMaxSize',
        'min_width' => 'setMinWidth',
        'max_width' => 'setMaxWidth',
        'min_height' => 'setMinHeight',
        'max_height' => 'setMaxHeight',
        'aspect_width' => 'setAspectWidth',
        'aspect_height' => 'setAspectHeight',
        'expected_type' => 'setExpectedType',
        'resolve_first' => 'setResolveFirst',
        'must_be_image' => 'setMustBeImage',
        'resolve_image' => 'setResolveImage',
        'allowed_extensions' => 'setAllowedExtensions',
        'allow_duplicates' => 'setAllowDuplicates'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'preview_mode' => 'getPreviewMode',
        'default_values' => 'getDefaultValues',
        'default_value' => 'getDefaultValue',
        'folder_id' => 'getFolderId',
        'preview_format' => 'getPreviewFormat',
        'min_items' => 'getMinItems',
        'max_items' => 'getMaxItems',
        'min_size' => 'getMinSize',
        'max_size' => 'getMaxSize',
        'min_width' => 'getMinWidth',
        'max_width' => 'getMaxWidth',
        'min_height' => 'getMinHeight',
        'max_height' => 'getMaxHeight',
        'aspect_width' => 'getAspectWidth',
        'aspect_height' => 'getAspectHeight',
        'expected_type' => 'getExpectedType',
        'resolve_first' => 'getResolveFirst',
        'must_be_image' => 'getMustBeImage',
        'resolve_image' => 'getResolveImage',
        'allowed_extensions' => 'getAllowedExtensions',
        'allow_duplicates' => 'getAllowDuplicates'
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

        $this->setIfExists('preview_mode', $data ?? [], null);
        $this->setIfExists('default_values', $data ?? [], null);
        $this->setIfExists('default_value', $data ?? [], null);
        $this->setIfExists('folder_id', $data ?? [], null);
        $this->setIfExists('preview_format', $data ?? [], null);
        $this->setIfExists('min_items', $data ?? [], null);
        $this->setIfExists('max_items', $data ?? [], null);
        $this->setIfExists('min_size', $data ?? [], null);
        $this->setIfExists('max_size', $data ?? [], null);
        $this->setIfExists('min_width', $data ?? [], null);
        $this->setIfExists('max_width', $data ?? [], null);
        $this->setIfExists('min_height', $data ?? [], null);
        $this->setIfExists('max_height', $data ?? [], null);
        $this->setIfExists('aspect_width', $data ?? [], null);
        $this->setIfExists('aspect_height', $data ?? [], null);
        $this->setIfExists('expected_type', $data ?? [], null);
        $this->setIfExists('resolve_first', $data ?? [], null);
        $this->setIfExists('must_be_image', $data ?? [], null);
        $this->setIfExists('resolve_image', $data ?? [], null);
        $this->setIfExists('allowed_extensions', $data ?? [], null);
        $this->setIfExists('allow_duplicates', $data ?? [], null);


        // Initialize discriminator property with the model name.
        $this->container['field_type'] = parent::$openAPIMappingsReverse['AssetsFieldPropertiesDto'];
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
     * Gets preview_mode
     *
     * @return \Squidex\Client\Model\AssetPreviewMode|null
     */
    public function getPreviewMode()
    {
        return $this->container['preview_mode'];
    }

    /**
     * Sets preview_mode
     *
     * @param \Squidex\Client\Model\AssetPreviewMode|null $preview_mode preview_mode
     *
     * @return self
     */
    public function setPreviewMode($preview_mode)
    {
        if (is_null($preview_mode)) {
            throw new \InvalidArgumentException('non-nullable preview_mode cannot be null');
        }
        $this->container['preview_mode'] = $preview_mode;

        return $this;
    }

    /**
     * Gets default_values
     *
     * @return array<string,string[]>|null
     */
    public function getDefaultValues()
    {
        return $this->container['default_values'];
    }

    /**
     * Sets default_values
     *
     * @param array<string,string[]>|null $default_values default_values
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
     * @return string[]|null
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     *
     * @param string[]|null $default_value The default value as a list of asset ids.
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
     * @param string|null $folder_id The initial id to the folder.
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
     * Gets preview_format
     *
     * @return string|null
     */
    public function getPreviewFormat()
    {
        return $this->container['preview_format'];
    }

    /**
     * Sets preview_format
     *
     * @param string|null $preview_format The preview format.
     *
     * @return self
     */
    public function setPreviewFormat($preview_format)
    {
        if (is_null($preview_format)) {
            array_push($this->openAPINullablesSetToNull, 'preview_format');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('preview_format', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['preview_format'] = $preview_format;

        return $this;
    }

    /**
     * Gets min_items
     *
     * @return int|null
     */
    public function getMinItems()
    {
        return $this->container['min_items'];
    }

    /**
     * Sets min_items
     *
     * @param int|null $min_items The minimum allowed items for the field value.
     *
     * @return self
     */
    public function setMinItems($min_items)
    {
        if (is_null($min_items)) {
            array_push($this->openAPINullablesSetToNull, 'min_items');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('min_items', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['min_items'] = $min_items;

        return $this;
    }

    /**
     * Gets max_items
     *
     * @return int|null
     */
    public function getMaxItems()
    {
        return $this->container['max_items'];
    }

    /**
     * Sets max_items
     *
     * @param int|null $max_items The maximum allowed items for the field value.
     *
     * @return self
     */
    public function setMaxItems($max_items)
    {
        if (is_null($max_items)) {
            array_push($this->openAPINullablesSetToNull, 'max_items');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_items', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_items'] = $max_items;

        return $this;
    }

    /**
     * Gets min_size
     *
     * @return int|null
     */
    public function getMinSize()
    {
        return $this->container['min_size'];
    }

    /**
     * Sets min_size
     *
     * @param int|null $min_size The minimum file size in bytes.
     *
     * @return self
     */
    public function setMinSize($min_size)
    {
        if (is_null($min_size)) {
            array_push($this->openAPINullablesSetToNull, 'min_size');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('min_size', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['min_size'] = $min_size;

        return $this;
    }

    /**
     * Gets max_size
     *
     * @return int|null
     */
    public function getMaxSize()
    {
        return $this->container['max_size'];
    }

    /**
     * Sets max_size
     *
     * @param int|null $max_size The maximum file size in bytes.
     *
     * @return self
     */
    public function setMaxSize($max_size)
    {
        if (is_null($max_size)) {
            array_push($this->openAPINullablesSetToNull, 'max_size');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_size', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_size'] = $max_size;

        return $this;
    }

    /**
     * Gets min_width
     *
     * @return int|null
     */
    public function getMinWidth()
    {
        return $this->container['min_width'];
    }

    /**
     * Sets min_width
     *
     * @param int|null $min_width The minimum image width in pixels.
     *
     * @return self
     */
    public function setMinWidth($min_width)
    {
        if (is_null($min_width)) {
            array_push($this->openAPINullablesSetToNull, 'min_width');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('min_width', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['min_width'] = $min_width;

        return $this;
    }

    /**
     * Gets max_width
     *
     * @return int|null
     */
    public function getMaxWidth()
    {
        return $this->container['max_width'];
    }

    /**
     * Sets max_width
     *
     * @param int|null $max_width The maximum image width in pixels.
     *
     * @return self
     */
    public function setMaxWidth($max_width)
    {
        if (is_null($max_width)) {
            array_push($this->openAPINullablesSetToNull, 'max_width');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_width', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_width'] = $max_width;

        return $this;
    }

    /**
     * Gets min_height
     *
     * @return int|null
     */
    public function getMinHeight()
    {
        return $this->container['min_height'];
    }

    /**
     * Sets min_height
     *
     * @param int|null $min_height The minimum image height in pixels.
     *
     * @return self
     */
    public function setMinHeight($min_height)
    {
        if (is_null($min_height)) {
            array_push($this->openAPINullablesSetToNull, 'min_height');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('min_height', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['min_height'] = $min_height;

        return $this;
    }

    /**
     * Gets max_height
     *
     * @return int|null
     */
    public function getMaxHeight()
    {
        return $this->container['max_height'];
    }

    /**
     * Sets max_height
     *
     * @param int|null $max_height The maximum image height in pixels.
     *
     * @return self
     */
    public function setMaxHeight($max_height)
    {
        if (is_null($max_height)) {
            array_push($this->openAPINullablesSetToNull, 'max_height');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_height', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_height'] = $max_height;

        return $this;
    }

    /**
     * Gets aspect_width
     *
     * @return int|null
     */
    public function getAspectWidth()
    {
        return $this->container['aspect_width'];
    }

    /**
     * Sets aspect_width
     *
     * @param int|null $aspect_width The image aspect width in pixels.
     *
     * @return self
     */
    public function setAspectWidth($aspect_width)
    {
        if (is_null($aspect_width)) {
            array_push($this->openAPINullablesSetToNull, 'aspect_width');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('aspect_width', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['aspect_width'] = $aspect_width;

        return $this;
    }

    /**
     * Gets aspect_height
     *
     * @return int|null
     */
    public function getAspectHeight()
    {
        return $this->container['aspect_height'];
    }

    /**
     * Sets aspect_height
     *
     * @param int|null $aspect_height The image aspect height in pixels.
     *
     * @return self
     */
    public function setAspectHeight($aspect_height)
    {
        if (is_null($aspect_height)) {
            array_push($this->openAPINullablesSetToNull, 'aspect_height');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('aspect_height', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['aspect_height'] = $aspect_height;

        return $this;
    }

    /**
     * Gets expected_type
     *
     * @return \Squidex\Client\Model\AssetType|null
     */
    public function getExpectedType()
    {
        return $this->container['expected_type'];
    }

    /**
     * Sets expected_type
     *
     * @param \Squidex\Client\Model\AssetType|null $expected_type expected_type
     *
     * @return self
     */
    public function setExpectedType($expected_type)
    {
        if (is_null($expected_type)) {
            throw new \InvalidArgumentException('non-nullable expected_type cannot be null');
        }
        $this->container['expected_type'] = $expected_type;

        return $this;
    }

    /**
     * Gets resolve_first
     *
     * @return bool|null
     */
    public function getResolveFirst()
    {
        return $this->container['resolve_first'];
    }

    /**
     * Sets resolve_first
     *
     * @param bool|null $resolve_first True to resolve first asset in the content list.
     *
     * @return self
     */
    public function setResolveFirst($resolve_first)
    {
        if (is_null($resolve_first)) {
            throw new \InvalidArgumentException('non-nullable resolve_first cannot be null');
        }
        $this->container['resolve_first'] = $resolve_first;

        return $this;
    }

    /**
     * Gets must_be_image
     *
     * @return bool|null
     * @deprecated
     */
    public function getMustBeImage()
    {
        return $this->container['must_be_image'];
    }

    /**
     * Sets must_be_image
     *
     * @param bool|null $must_be_image True to resolve first image in the content list.
     *
     * @return self
     * @deprecated
     */
    public function setMustBeImage($must_be_image)
    {
        if (is_null($must_be_image)) {
            throw new \InvalidArgumentException('non-nullable must_be_image cannot be null');
        }
        $this->container['must_be_image'] = $must_be_image;

        return $this;
    }

    /**
     * Gets resolve_image
     *
     * @return bool|null
     * @deprecated
     */
    public function getResolveImage()
    {
        return $this->container['resolve_image'];
    }

    /**
     * Sets resolve_image
     *
     * @param bool|null $resolve_image True to resolve first image in the content list.
     *
     * @return self
     * @deprecated
     */
    public function setResolveImage($resolve_image)
    {
        if (is_null($resolve_image)) {
            throw new \InvalidArgumentException('non-nullable resolve_image cannot be null');
        }
        $this->container['resolve_image'] = $resolve_image;

        return $this;
    }

    /**
     * Gets allowed_extensions
     *
     * @return string[]|null
     */
    public function getAllowedExtensions()
    {
        return $this->container['allowed_extensions'];
    }

    /**
     * Sets allowed_extensions
     *
     * @param string[]|null $allowed_extensions The allowed file extensions.
     *
     * @return self
     */
    public function setAllowedExtensions($allowed_extensions)
    {
        if (is_null($allowed_extensions)) {
            array_push($this->openAPINullablesSetToNull, 'allowed_extensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('allowed_extensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['allowed_extensions'] = $allowed_extensions;

        return $this;
    }

    /**
     * Gets allow_duplicates
     *
     * @return bool|null
     */
    public function getAllowDuplicates()
    {
        return $this->container['allow_duplicates'];
    }

    /**
     * Sets allow_duplicates
     *
     * @param bool|null $allow_duplicates True, if duplicate values are allowed.
     *
     * @return self
     */
    public function setAllowDuplicates($allow_duplicates)
    {
        if (is_null($allow_duplicates)) {
            throw new \InvalidArgumentException('non-nullable allow_duplicates cannot be null');
        }
        $this->container['allow_duplicates'] = $allow_duplicates;

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


