<?php
/**
 * SkipReason
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
 * SkipReason Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SkipReason
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const CONDITION_DOES_NOT_MATCH = 'ConditionDoesNotMatch';

    public const CONDITION_PRECHECK_DOES_NOT_MATCH = 'ConditionPrecheckDoesNotMatch';

    public const DISABLED = 'Disabled';

    public const FAILED = 'Failed';

    public const FROM_RULE = 'FromRule';

    public const NO_ACTION = 'NoAction';

    public const NO_TRIGGER = 'NoTrigger';

    public const TOO_OLD = 'TooOld';

    public const WRONG_EVENT = 'WrongEvent';

    public const WRONG_EVENT_FOR_TRIGGER = 'WrongEventForTrigger';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::CONDITION_DOES_NOT_MATCH,
            self::CONDITION_PRECHECK_DOES_NOT_MATCH,
            self::DISABLED,
            self::FAILED,
            self::FROM_RULE,
            self::NO_ACTION,
            self::NO_TRIGGER,
            self::TOO_OLD,
            self::WRONG_EVENT,
            self::WRONG_EVENT_FOR_TRIGGER
        ];
    }
}


