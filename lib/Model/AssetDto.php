<?php
/**
 * AssetDto
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
 * AssetDto Class Doc Comment
 *
 * @category Class
 * @package  Squidex\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AssetDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AssetDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_links' => 'array<string,\Squidex\Client\Model\ResourceLink>',
        'id' => 'string',
        'parent_id' => 'string',
        'file_name' => 'string',
        'file_hash' => 'string',
        'is_protected' => 'bool',
        'slug' => 'string',
        'mime_type' => 'string',
        'file_type' => 'string',
        'metadata_text' => 'string',
        'edit_token' => 'string',
        'metadata' => 'array<string,mixed>',
        'tags' => 'string[]',
        'file_size' => 'int',
        'file_version' => 'int',
        'type' => '\Squidex\Client\Model\AssetType',
        'created_by' => 'string',
        'last_modified_by' => 'string',
        'created' => '\DateTime',
        'last_modified' => '\DateTime',
        'version' => 'int',
        '_meta' => '\Squidex\Client\Model\AssetMeta',
        'is_image' => 'bool',
        'pixel_width' => 'int',
        'pixel_height' => 'int'
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
        'parent_id' => null,
        'file_name' => null,
        'file_hash' => null,
        'is_protected' => null,
        'slug' => null,
        'mime_type' => null,
        'file_type' => null,
        'metadata_text' => null,
        'edit_token' => null,
        'metadata' => null,
        'tags' => null,
        'file_size' => 'int64',
        'file_version' => 'int64',
        'type' => null,
        'created_by' => null,
        'last_modified_by' => null,
        'created' => 'date-time',
        'last_modified' => 'date-time',
        'version' => 'int64',
        '_meta' => null,
        'is_image' => null,
        'pixel_width' => 'int32',
        'pixel_height' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_links' => false,
		'id' => false,
		'parent_id' => false,
		'file_name' => false,
		'file_hash' => true,
		'is_protected' => false,
		'slug' => false,
		'mime_type' => false,
		'file_type' => false,
		'metadata_text' => false,
		'edit_token' => true,
		'metadata' => false,
		'tags' => true,
		'file_size' => false,
		'file_version' => false,
		'type' => false,
		'created_by' => false,
		'last_modified_by' => false,
		'created' => false,
		'last_modified' => false,
		'version' => false,
		'_meta' => false,
		'is_image' => false,
		'pixel_width' => true,
		'pixel_height' => true
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
        'parent_id' => 'parentId',
        'file_name' => 'fileName',
        'file_hash' => 'fileHash',
        'is_protected' => 'isProtected',
        'slug' => 'slug',
        'mime_type' => 'mimeType',
        'file_type' => 'fileType',
        'metadata_text' => 'metadataText',
        'edit_token' => 'editToken',
        'metadata' => 'metadata',
        'tags' => 'tags',
        'file_size' => 'fileSize',
        'file_version' => 'fileVersion',
        'type' => 'type',
        'created_by' => 'createdBy',
        'last_modified_by' => 'lastModifiedBy',
        'created' => 'created',
        'last_modified' => 'lastModified',
        'version' => 'version',
        '_meta' => '_meta',
        'is_image' => 'isImage',
        'pixel_width' => 'pixelWidth',
        'pixel_height' => 'pixelHeight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_links' => 'setLinks',
        'id' => 'setId',
        'parent_id' => 'setParentId',
        'file_name' => 'setFileName',
        'file_hash' => 'setFileHash',
        'is_protected' => 'setIsProtected',
        'slug' => 'setSlug',
        'mime_type' => 'setMimeType',
        'file_type' => 'setFileType',
        'metadata_text' => 'setMetadataText',
        'edit_token' => 'setEditToken',
        'metadata' => 'setMetadata',
        'tags' => 'setTags',
        'file_size' => 'setFileSize',
        'file_version' => 'setFileVersion',
        'type' => 'setType',
        'created_by' => 'setCreatedBy',
        'last_modified_by' => 'setLastModifiedBy',
        'created' => 'setCreated',
        'last_modified' => 'setLastModified',
        'version' => 'setVersion',
        '_meta' => 'setMeta',
        'is_image' => 'setIsImage',
        'pixel_width' => 'setPixelWidth',
        'pixel_height' => 'setPixelHeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_links' => 'getLinks',
        'id' => 'getId',
        'parent_id' => 'getParentId',
        'file_name' => 'getFileName',
        'file_hash' => 'getFileHash',
        'is_protected' => 'getIsProtected',
        'slug' => 'getSlug',
        'mime_type' => 'getMimeType',
        'file_type' => 'getFileType',
        'metadata_text' => 'getMetadataText',
        'edit_token' => 'getEditToken',
        'metadata' => 'getMetadata',
        'tags' => 'getTags',
        'file_size' => 'getFileSize',
        'file_version' => 'getFileVersion',
        'type' => 'getType',
        'created_by' => 'getCreatedBy',
        'last_modified_by' => 'getLastModifiedBy',
        'created' => 'getCreated',
        'last_modified' => 'getLastModified',
        'version' => 'getVersion',
        '_meta' => 'getMeta',
        'is_image' => 'getIsImage',
        'pixel_width' => 'getPixelWidth',
        'pixel_height' => 'getPixelHeight'
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
        $this->setIfExists('parent_id', $data ?? [], null);
        $this->setIfExists('file_name', $data ?? [], null);
        $this->setIfExists('file_hash', $data ?? [], null);
        $this->setIfExists('is_protected', $data ?? [], null);
        $this->setIfExists('slug', $data ?? [], null);
        $this->setIfExists('mime_type', $data ?? [], null);
        $this->setIfExists('file_type', $data ?? [], null);
        $this->setIfExists('metadata_text', $data ?? [], null);
        $this->setIfExists('edit_token', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('file_size', $data ?? [], null);
        $this->setIfExists('file_version', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('created_by', $data ?? [], null);
        $this->setIfExists('last_modified_by', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('last_modified', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('_meta', $data ?? [], null);
        $this->setIfExists('is_image', $data ?? [], null);
        $this->setIfExists('pixel_width', $data ?? [], null);
        $this->setIfExists('pixel_height', $data ?? [], null);

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
        if ($this->container['parent_id'] === null) {
            $invalidProperties[] = "'parent_id' can't be null";
        }
        if ($this->container['file_name'] === null) {
            $invalidProperties[] = "'file_name' can't be null";
        }
        if ($this->container['is_protected'] === null) {
            $invalidProperties[] = "'is_protected' can't be null";
        }
        if ($this->container['slug'] === null) {
            $invalidProperties[] = "'slug' can't be null";
        }
        if ($this->container['mime_type'] === null) {
            $invalidProperties[] = "'mime_type' can't be null";
        }
        if ($this->container['file_type'] === null) {
            $invalidProperties[] = "'file_type' can't be null";
        }
        if ($this->container['metadata_text'] === null) {
            $invalidProperties[] = "'metadata_text' can't be null";
        }
        if ($this->container['metadata'] === null) {
            $invalidProperties[] = "'metadata' can't be null";
        }
        if ($this->container['file_size'] === null) {
            $invalidProperties[] = "'file_size' can't be null";
        }
        if ($this->container['file_version'] === null) {
            $invalidProperties[] = "'file_version' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['created_by'] === null) {
            $invalidProperties[] = "'created_by' can't be null";
        }
        if ($this->container['last_modified_by'] === null) {
            $invalidProperties[] = "'last_modified_by' can't be null";
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
        if ($this->container['is_image'] === null) {
            $invalidProperties[] = "'is_image' can't be null";
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
     * @param string $id The ID of the asset.
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
     * Gets parent_id
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string $parent_id The ID of the parent folder. Empty for files without parent.
     *
     * @return self
     */
    public function setParentId($parent_id)
    {
        if (is_null($parent_id)) {
            throw new \InvalidArgumentException('non-nullable parent_id cannot be null');
        }
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets file_name
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string $file_name The file name.
     *
     * @return self
     */
    public function setFileName($file_name)
    {
        if (is_null($file_name)) {
            throw new \InvalidArgumentException('non-nullable file_name cannot be null');
        }
        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets file_hash
     *
     * @return string|null
     */
    public function getFileHash()
    {
        return $this->container['file_hash'];
    }

    /**
     * Sets file_hash
     *
     * @param string|null $file_hash The file hash.
     *
     * @return self
     */
    public function setFileHash($file_hash)
    {
        if (is_null($file_hash)) {
            array_push($this->openAPINullablesSetToNull, 'file_hash');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('file_hash', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['file_hash'] = $file_hash;

        return $this;
    }

    /**
     * Gets is_protected
     *
     * @return bool
     */
    public function getIsProtected()
    {
        return $this->container['is_protected'];
    }

    /**
     * Sets is_protected
     *
     * @param bool $is_protected True, when the asset is not public.
     *
     * @return self
     */
    public function setIsProtected($is_protected)
    {
        if (is_null($is_protected)) {
            throw new \InvalidArgumentException('non-nullable is_protected cannot be null');
        }
        $this->container['is_protected'] = $is_protected;

        return $this;
    }

    /**
     * Gets slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string $slug The slug.
     *
     * @return self
     */
    public function setSlug($slug)
    {
        if (is_null($slug)) {
            throw new \InvalidArgumentException('non-nullable slug cannot be null');
        }
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets mime_type
     *
     * @return string
     */
    public function getMimeType()
    {
        return $this->container['mime_type'];
    }

    /**
     * Sets mime_type
     *
     * @param string $mime_type The mime type.
     *
     * @return self
     */
    public function setMimeType($mime_type)
    {
        if (is_null($mime_type)) {
            throw new \InvalidArgumentException('non-nullable mime_type cannot be null');
        }
        $this->container['mime_type'] = $mime_type;

        return $this;
    }

    /**
     * Gets file_type
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->container['file_type'];
    }

    /**
     * Sets file_type
     *
     * @param string $file_type The file type.
     *
     * @return self
     */
    public function setFileType($file_type)
    {
        if (is_null($file_type)) {
            throw new \InvalidArgumentException('non-nullable file_type cannot be null');
        }
        $this->container['file_type'] = $file_type;

        return $this;
    }

    /**
     * Gets metadata_text
     *
     * @return string
     */
    public function getMetadataText()
    {
        return $this->container['metadata_text'];
    }

    /**
     * Sets metadata_text
     *
     * @param string $metadata_text The formatted text representation of the metadata.
     *
     * @return self
     */
    public function setMetadataText($metadata_text)
    {
        if (is_null($metadata_text)) {
            throw new \InvalidArgumentException('non-nullable metadata_text cannot be null');
        }
        $this->container['metadata_text'] = $metadata_text;

        return $this;
    }

    /**
     * Gets edit_token
     *
     * @return string|null
     */
    public function getEditToken()
    {
        return $this->container['edit_token'];
    }

    /**
     * Sets edit_token
     *
     * @param string|null $edit_token The UI token.
     *
     * @return self
     */
    public function setEditToken($edit_token)
    {
        if (is_null($edit_token)) {
            array_push($this->openAPINullablesSetToNull, 'edit_token');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('edit_token', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['edit_token'] = $edit_token;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,mixed>
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,mixed> $metadata The asset metadata.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

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
     * @param string[]|null $tags The asset tags.
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
     * Gets file_size
     *
     * @return int
     */
    public function getFileSize()
    {
        return $this->container['file_size'];
    }

    /**
     * Sets file_size
     *
     * @param int $file_size The size of the file in bytes.
     *
     * @return self
     */
    public function setFileSize($file_size)
    {
        if (is_null($file_size)) {
            throw new \InvalidArgumentException('non-nullable file_size cannot be null');
        }
        $this->container['file_size'] = $file_size;

        return $this;
    }

    /**
     * Gets file_version
     *
     * @return int
     */
    public function getFileVersion()
    {
        return $this->container['file_version'];
    }

    /**
     * Sets file_version
     *
     * @param int $file_version The version of the file.
     *
     * @return self
     */
    public function setFileVersion($file_version)
    {
        if (is_null($file_version)) {
            throw new \InvalidArgumentException('non-nullable file_version cannot be null');
        }
        $this->container['file_version'] = $file_version;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Squidex\Client\Model\AssetType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Squidex\Client\Model\AssetType $type type
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
     * @param string $last_modified_by The user that has updated the asset.
     *
     * @return self
     */
    public function setLastModifiedBy($last_modified_by)
    {
        if (is_null($last_modified_by)) {
            throw new \InvalidArgumentException('non-nullable last_modified_by cannot be null');
        }
        $this->container['last_modified_by'] = $last_modified_by;

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
     * @param \DateTime $created The date and time when the asset has been created.
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
     * @param \DateTime $last_modified The date and time when the asset has been modified last.
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
     * @param int $version The version of the asset.
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
     * Gets _meta
     *
     * @return \Squidex\Client\Model\AssetMeta|null
     */
    public function getMeta()
    {
        return $this->container['_meta'];
    }

    /**
     * Sets _meta
     *
     * @param \Squidex\Client\Model\AssetMeta|null $_meta _meta
     *
     * @return self
     */
    public function setMeta($_meta)
    {
        if (is_null($_meta)) {
            throw new \InvalidArgumentException('non-nullable _meta cannot be null');
        }
        $this->container['_meta'] = $_meta;

        return $this;
    }

    /**
     * Gets is_image
     *
     * @return bool
     * @deprecated
     */
    public function getIsImage()
    {
        return $this->container['is_image'];
    }

    /**
     * Sets is_image
     *
     * @param bool $is_image Determines of the created file is an image.
     *
     * @return self
     * @deprecated
     */
    public function setIsImage($is_image)
    {
        if (is_null($is_image)) {
            throw new \InvalidArgumentException('non-nullable is_image cannot be null');
        }
        $this->container['is_image'] = $is_image;

        return $this;
    }

    /**
     * Gets pixel_width
     *
     * @return int|null
     * @deprecated
     */
    public function getPixelWidth()
    {
        return $this->container['pixel_width'];
    }

    /**
     * Sets pixel_width
     *
     * @param int|null $pixel_width The width of the image in pixels if the asset is an image.
     *
     * @return self
     * @deprecated
     */
    public function setPixelWidth($pixel_width)
    {
        if (is_null($pixel_width)) {
            array_push($this->openAPINullablesSetToNull, 'pixel_width');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pixel_width', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pixel_width'] = $pixel_width;

        return $this;
    }

    /**
     * Gets pixel_height
     *
     * @return int|null
     * @deprecated
     */
    public function getPixelHeight()
    {
        return $this->container['pixel_height'];
    }

    /**
     * Sets pixel_height
     *
     * @param int|null $pixel_height The height of the image in pixels if the asset is an image.
     *
     * @return self
     * @deprecated
     */
    public function setPixelHeight($pixel_height)
    {
        if (is_null($pixel_height)) {
            array_push($this->openAPINullablesSetToNull, 'pixel_height');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pixel_height', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pixel_height'] = $pixel_height;

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


