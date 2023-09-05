<?php
/**
 * BulkUpdateContentType
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
 * OpenAPI Generator version: 7.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Squidex\Client\Model;
use \Squidex\Client\ObjectSerializer;

/**
 * BulkUpdateContentType Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Squidex\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BulkUpdateContentType
{
    /**
     * Possible values of this enum
     */
    public const UPSERT = 'Upsert';

    public const CHANGE_STATUS = 'ChangeStatus';

    public const CREATE = 'Create';

    public const DELETE = 'Delete';

    public const PATCH = 'Patch';

    public const UPDATE = 'Update';

    public const VALIDATE = 'Validate';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UPSERT,
            self::CHANGE_STATUS,
            self::CREATE,
            self::DELETE,
            self::PATCH,
            self::UPDATE,
            self::VALIDATE
        ];
    }
}


