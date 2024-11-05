<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/enums/conversion_value_rule_primary_dimension.proto

namespace Google\Ads\GoogleAds\V15\Enums\ConversionValueRulePrimaryDimensionEnum;

use UnexpectedValueException;

/**
 * Identifies the primary dimension for conversion value rule stats.
 *
 * Protobuf type <code>google.ads.googleads.v15.enums.ConversionValueRulePrimaryDimensionEnum.ConversionValueRulePrimaryDimension</code>
 */
class ConversionValueRulePrimaryDimension
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * For no-value-rule-applied conversions after value rule is enabled.
     *
     * Generated from protobuf enum <code>NO_RULE_APPLIED = 2;</code>
     */
    const NO_RULE_APPLIED = 2;
    /**
     * Below are for value-rule-applied conversions:
     * The original stats.
     *
     * Generated from protobuf enum <code>ORIGINAL = 3;</code>
     */
    const ORIGINAL = 3;
    /**
     * When a new or returning customer condition is satisfied.
     *
     * Generated from protobuf enum <code>NEW_VS_RETURNING_USER = 4;</code>
     */
    const NEW_VS_RETURNING_USER = 4;
    /**
     * When a query-time Geo location condition is satisfied.
     *
     * Generated from protobuf enum <code>GEO_LOCATION = 5;</code>
     */
    const GEO_LOCATION = 5;
    /**
     * When a query-time browsing device condition is satisfied.
     *
     * Generated from protobuf enum <code>DEVICE = 6;</code>
     */
    const DEVICE = 6;
    /**
     * When a query-time audience condition is satisfied.
     *
     * Generated from protobuf enum <code>AUDIENCE = 7;</code>
     */
    const AUDIENCE = 7;
    /**
     * When multiple rules are applied.
     *
     * Generated from protobuf enum <code>MULTIPLE = 8;</code>
     */
    const MULTIPLE = 8;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::NO_RULE_APPLIED => 'NO_RULE_APPLIED',
        self::ORIGINAL => 'ORIGINAL',
        self::NEW_VS_RETURNING_USER => 'NEW_VS_RETURNING_USER',
        self::GEO_LOCATION => 'GEO_LOCATION',
        self::DEVICE => 'DEVICE',
        self::AUDIENCE => 'AUDIENCE',
        self::MULTIPLE => 'MULTIPLE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConversionValueRulePrimaryDimension::class, \Google\Ads\GoogleAds\V15\Enums\ConversionValueRulePrimaryDimensionEnum_ConversionValueRulePrimaryDimension::class);

