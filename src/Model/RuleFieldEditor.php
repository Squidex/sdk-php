<?php
/**
 * RuleFieldEditor
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
 * OpenAPI Generator version: 5.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * RuleFieldEditor Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RuleFieldEditor
{
    /**
     * Possible values of this enum
     */
    public const CHECKBOX = 'Checkbox';

    public const DROPDOWN = 'Dropdown';

    public const EMAIL = 'Email';

    public const JAVASCRIPT = 'Javascript';

    public const NUMBER = 'Number';

    public const PASSWORD = 'Password';

    public const TEXT = 'Text';

    public const TEXT_AREA = 'TextArea';

    public const URL = 'Url';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CHECKBOX,
            self::DROPDOWN,
            self::EMAIL,
            self::JAVASCRIPT,
            self::NUMBER,
            self::PASSWORD,
            self::TEXT,
            self::TEXT_AREA,
            self::URL
        ];
    }
}


