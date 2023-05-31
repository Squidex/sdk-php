<?php
/**
 * ReferencesFieldEditor
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
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
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ReferencesFieldEditor Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReferencesFieldEditor
{
    /**
     * Possible values of this enum
     */
    public const _LIST = 'List';

    public const DROPDOWN = 'Dropdown';

    public const TAGS = 'Tags';

    public const CHECKBOXES = 'Checkboxes';

    public const INPUT = 'Input';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_LIST,
            self::DROPDOWN,
            self::TAGS,
            self::CHECKBOXES,
            self::INPUT
        ];
    }
}


