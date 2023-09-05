<?php
/**
 * ActionTypeEnum
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
 * ActionTypeEnum Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Squidex\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ActionTypeEnum
{
    /**
     * Possible values of this enum
     */
    public const BROADCAST = 'Broadcast';

    public const USER = 'User';

    public const GROUP = 'Group';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BROADCAST,
            self::USER,
            self::GROUP
        ];
    }
}


