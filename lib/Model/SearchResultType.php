<?php
/**
 * SearchResultType
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
 * SearchResultType Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Squidex\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SearchResultType
{
    /**
     * Possible values of this enum
     */
    public const ASSET = 'Asset';

    public const CONTENT = 'Content';

    public const DASHBOARD = 'Dashboard';

    public const SETTING = 'Setting';

    public const RULE = 'Rule';

    public const SCHEMA = 'Schema';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ASSET,
            self::CONTENT,
            self::DASHBOARD,
            self::SETTING,
            self::RULE,
            self::SCHEMA
        ];
    }
}


