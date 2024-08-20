<?php
/**
 * SortOrder
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
use \Squidex\Client\ObjectSerializer;

/**
 * SortOrder Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Squidex\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SortOrder
{
    /**
     * Possible values of this enum
     */
    public const ASCENDING = 'Ascending';

    public const DESCENDING = 'Descending';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ASCENDING,
            self::DESCENDING
        ];
    }
}


