<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/resources/feed_mapping.proto

namespace Google\Ads\GoogleAds\V16\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A feed mapping.
 *
 * Generated from protobuf message <code>google.ads.googleads.v16.resources.FeedMapping</code>
 */
class FeedMapping extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the feed mapping.
     * Feed mapping resource names have the form:
     * `customers/{customer_id}/feedMappings/{feed_id}~{feed_mapping_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Immutable. The feed of this feed mapping.
     *
     * Generated from protobuf field <code>optional string feed = 7 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $feed = null;
    /**
     * Immutable. Feed attributes to field mappings. These mappings are a
     * one-to-many relationship meaning that 1 feed attribute can be used to
     * populate multiple placeholder fields, but 1 placeholder field can only draw
     * data from 1 feed attribute. Ad Customizer is an exception, 1 placeholder
     * field can be mapped to multiple feed attributes. Required.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v16.resources.AttributeFieldMapping attribute_field_mappings = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $attribute_field_mappings;
    /**
     * Output only. Status of the feed mapping.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.enums.FeedMappingStatusEnum.FeedMappingStatus status = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;
    protected $target;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the feed mapping.
     *           Feed mapping resource names have the form:
     *           `customers/{customer_id}/feedMappings/{feed_id}~{feed_mapping_id}`
     *     @type string $feed
     *           Immutable. The feed of this feed mapping.
     *     @type array<\Google\Ads\GoogleAds\V16\Resources\AttributeFieldMapping>|\Google\Protobuf\Internal\RepeatedField $attribute_field_mappings
     *           Immutable. Feed attributes to field mappings. These mappings are a
     *           one-to-many relationship meaning that 1 feed attribute can be used to
     *           populate multiple placeholder fields, but 1 placeholder field can only draw
     *           data from 1 feed attribute. Ad Customizer is an exception, 1 placeholder
     *           field can be mapped to multiple feed attributes. Required.
     *     @type int $status
     *           Output only. Status of the feed mapping.
     *           This field is read-only.
     *     @type int $placeholder_type
     *           Immutable. The placeholder type of this mapping (for example, if the
     *           mapping maps feed attributes to placeholder fields).
     *     @type int $criterion_type
     *           Immutable. The criterion type of this mapping (for example, if the
     *           mapping maps feed attributes to criterion fields).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V16\Resources\FeedMapping::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the feed mapping.
     * Feed mapping resource names have the form:
     * `customers/{customer_id}/feedMappings/{feed_id}~{feed_mapping_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the feed mapping.
     * Feed mapping resource names have the form:
     * `customers/{customer_id}/feedMappings/{feed_id}~{feed_mapping_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Immutable. The feed of this feed mapping.
     *
     * Generated from protobuf field <code>optional string feed = 7 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getFeed()
    {
        return isset($this->feed) ? $this->feed : '';
    }

    public function hasFeed()
    {
        return isset($this->feed);
    }

    public function clearFeed()
    {
        unset($this->feed);
    }

    /**
     * Immutable. The feed of this feed mapping.
     *
     * Generated from protobuf field <code>optional string feed = 7 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setFeed($var)
    {
        GPBUtil::checkString($var, True);
        $this->feed = $var;

        return $this;
    }

    /**
     * Immutable. Feed attributes to field mappings. These mappings are a
     * one-to-many relationship meaning that 1 feed attribute can be used to
     * populate multiple placeholder fields, but 1 placeholder field can only draw
     * data from 1 feed attribute. Ad Customizer is an exception, 1 placeholder
     * field can be mapped to multiple feed attributes. Required.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v16.resources.AttributeFieldMapping attribute_field_mappings = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributeFieldMappings()
    {
        return $this->attribute_field_mappings;
    }

    /**
     * Immutable. Feed attributes to field mappings. These mappings are a
     * one-to-many relationship meaning that 1 feed attribute can be used to
     * populate multiple placeholder fields, but 1 placeholder field can only draw
     * data from 1 feed attribute. Ad Customizer is an exception, 1 placeholder
     * field can be mapped to multiple feed attributes. Required.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v16.resources.AttributeFieldMapping attribute_field_mappings = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param array<\Google\Ads\GoogleAds\V16\Resources\AttributeFieldMapping>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributeFieldMappings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V16\Resources\AttributeFieldMapping::class);
        $this->attribute_field_mappings = $arr;

        return $this;
    }

    /**
     * Output only. Status of the feed mapping.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.enums.FeedMappingStatusEnum.FeedMappingStatus status = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. Status of the feed mapping.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.enums.FeedMappingStatusEnum.FeedMappingStatus status = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V16\Enums\FeedMappingStatusEnum\FeedMappingStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Immutable. The placeholder type of this mapping (for example, if the
     * mapping maps feed attributes to placeholder fields).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.enums.PlaceholderTypeEnum.PlaceholderType placeholder_type = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getPlaceholderType()
    {
        return $this->readOneof(3);
    }

    public function hasPlaceholderType()
    {
        return $this->hasOneof(3);
    }

    /**
     * Immutable. The placeholder type of this mapping (for example, if the
     * mapping maps feed attributes to placeholder fields).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.enums.PlaceholderTypeEnum.PlaceholderType placeholder_type = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setPlaceholderType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V16\Enums\PlaceholderTypeEnum\PlaceholderType::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Immutable. The criterion type of this mapping (for example, if the
     * mapping maps feed attributes to criterion fields).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.enums.FeedMappingCriterionTypeEnum.FeedMappingCriterionType criterion_type = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getCriterionType()
    {
        return $this->readOneof(4);
    }

    public function hasCriterionType()
    {
        return $this->hasOneof(4);
    }

    /**
     * Immutable. The criterion type of this mapping (for example, if the
     * mapping maps feed attributes to criterion fields).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.enums.FeedMappingCriterionTypeEnum.FeedMappingCriterionType criterion_type = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setCriterionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V16\Enums\FeedMappingCriterionTypeEnum\FeedMappingCriterionType::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->whichOneof("target");
    }

}

