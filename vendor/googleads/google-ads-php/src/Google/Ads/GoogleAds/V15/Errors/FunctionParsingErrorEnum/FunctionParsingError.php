<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/errors/function_parsing_error.proto

namespace Google\Ads\GoogleAds\V15\Errors\FunctionParsingErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible function parsing errors.
 *
 * Protobuf type <code>google.ads.googleads.v15.errors.FunctionParsingErrorEnum.FunctionParsingError</code>
 */
class FunctionParsingError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Unexpected end of function string.
     *
     * Generated from protobuf enum <code>NO_MORE_INPUT = 2;</code>
     */
    const NO_MORE_INPUT = 2;
    /**
     * Could not find an expected character.
     *
     * Generated from protobuf enum <code>EXPECTED_CHARACTER = 3;</code>
     */
    const EXPECTED_CHARACTER = 3;
    /**
     * Unexpected separator character.
     *
     * Generated from protobuf enum <code>UNEXPECTED_SEPARATOR = 4;</code>
     */
    const UNEXPECTED_SEPARATOR = 4;
    /**
     * Unmatched left bracket or parenthesis.
     *
     * Generated from protobuf enum <code>UNMATCHED_LEFT_BRACKET = 5;</code>
     */
    const UNMATCHED_LEFT_BRACKET = 5;
    /**
     * Unmatched right bracket or parenthesis.
     *
     * Generated from protobuf enum <code>UNMATCHED_RIGHT_BRACKET = 6;</code>
     */
    const UNMATCHED_RIGHT_BRACKET = 6;
    /**
     * Functions are nested too deeply.
     *
     * Generated from protobuf enum <code>TOO_MANY_NESTED_FUNCTIONS = 7;</code>
     */
    const TOO_MANY_NESTED_FUNCTIONS = 7;
    /**
     * Missing right-hand-side operand.
     *
     * Generated from protobuf enum <code>MISSING_RIGHT_HAND_OPERAND = 8;</code>
     */
    const MISSING_RIGHT_HAND_OPERAND = 8;
    /**
     * Invalid operator/function name.
     *
     * Generated from protobuf enum <code>INVALID_OPERATOR_NAME = 9;</code>
     */
    const INVALID_OPERATOR_NAME = 9;
    /**
     * Feed attribute operand's argument is not an integer.
     *
     * Generated from protobuf enum <code>FEED_ATTRIBUTE_OPERAND_ARGUMENT_NOT_INTEGER = 10;</code>
     */
    const FEED_ATTRIBUTE_OPERAND_ARGUMENT_NOT_INTEGER = 10;
    /**
     * Missing function operands.
     *
     * Generated from protobuf enum <code>NO_OPERANDS = 11;</code>
     */
    const NO_OPERANDS = 11;
    /**
     * Function had too many operands.
     *
     * Generated from protobuf enum <code>TOO_MANY_OPERANDS = 12;</code>
     */
    const TOO_MANY_OPERANDS = 12;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::NO_MORE_INPUT => 'NO_MORE_INPUT',
        self::EXPECTED_CHARACTER => 'EXPECTED_CHARACTER',
        self::UNEXPECTED_SEPARATOR => 'UNEXPECTED_SEPARATOR',
        self::UNMATCHED_LEFT_BRACKET => 'UNMATCHED_LEFT_BRACKET',
        self::UNMATCHED_RIGHT_BRACKET => 'UNMATCHED_RIGHT_BRACKET',
        self::TOO_MANY_NESTED_FUNCTIONS => 'TOO_MANY_NESTED_FUNCTIONS',
        self::MISSING_RIGHT_HAND_OPERAND => 'MISSING_RIGHT_HAND_OPERAND',
        self::INVALID_OPERATOR_NAME => 'INVALID_OPERATOR_NAME',
        self::FEED_ATTRIBUTE_OPERAND_ARGUMENT_NOT_INTEGER => 'FEED_ATTRIBUTE_OPERAND_ARGUMENT_NOT_INTEGER',
        self::NO_OPERANDS => 'NO_OPERANDS',
        self::TOO_MANY_OPERANDS => 'TOO_MANY_OPERANDS',
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
class_alias(FunctionParsingError::class, \Google\Ads\GoogleAds\V15\Errors\FunctionParsingErrorEnum_FunctionParsingError::class);

