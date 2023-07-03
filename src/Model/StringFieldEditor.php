<?php
/**
 * StringFieldEditor
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
 * StringFieldEditor Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StringFieldEditor
{
    /**
     * Possible values of this enum
     */
    public const INPUT = 'Input';

    public const COLOR = 'Color';

    public const MARKDOWN = 'Markdown';

    public const DROPDOWN = 'Dropdown';

    public const HTML = 'Html';

    public const RADIO = 'Radio';

    public const RICH_TEXT = 'RichText';

    public const SLUG = 'Slug';

    public const STOCK_PHOTO = 'StockPhoto';

    public const TEXT_AREA = 'TextArea';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INPUT,
            self::COLOR,
            self::MARKDOWN,
            self::DROPDOWN,
            self::HTML,
            self::RADIO,
            self::RICH_TEXT,
            self::SLUG,
            self::STOCK_PHOTO,
            self::TEXT_AREA
        ];
    }
}


