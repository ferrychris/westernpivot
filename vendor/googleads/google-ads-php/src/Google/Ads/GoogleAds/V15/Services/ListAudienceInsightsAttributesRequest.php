<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/services/audience_insights_service.proto

namespace Google\Ads\GoogleAds\V15\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [AudienceInsightsService.ListAudienceInsightsAttributes][google.ads.googleads.v15.services.AudienceInsightsService.ListAudienceInsightsAttributes].
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.services.ListAudienceInsightsAttributesRequest</code>
 */
class ListAudienceInsightsAttributesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the customer.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_id = '';
    /**
     * Required. The types of attributes to be returned.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v15.enums.AudienceInsightsDimensionEnum.AudienceInsightsDimension dimensions = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $dimensions;
    /**
     * Required. A free text query.  If the requested dimensions include
     * Attributes CATEGORY or KNOWLEDGE_GRAPH, then the attributes returned for
     * those dimensions will match or be related to this string.  For other
     * dimensions, this field is ignored and all available attributes are
     * returned.
     *
     * Generated from protobuf field <code>string query_text = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $query_text = '';
    /**
     * The name of the customer being planned for.  This is a user-defined value.
     *
     * Generated from protobuf field <code>string customer_insights_group = 4;</code>
     */
    protected $customer_insights_group = '';
    /**
     * If SUB_COUNTRY_LOCATION attributes are one of the requested dimensions and
     * this field is present, then the SUB_COUNTRY_LOCATION attributes returned
     * will be located in these countries. If this field is absent, then location
     * attributes are not filtered by country. Setting this field when
     * SUB_COUNTRY_LOCATION attributes are not requested will return an error.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v15.common.LocationInfo location_country_filters = 5;</code>
     */
    private $location_country_filters;

    /**
     * @param string $customerId Required. The ID of the customer.
     * @param int[]  $dimensions Required. The types of attributes to be returned.
     *                           For allowed values, use constants defined on {@see \Google\Ads\GoogleAds\V15\Enums\AudienceInsightsDimensionEnum\AudienceInsightsDimension}
     * @param string $queryText  Required. A free text query.  If the requested dimensions include
     *                           Attributes CATEGORY or KNOWLEDGE_GRAPH, then the attributes returned for
     *                           those dimensions will match or be related to this string.  For other
     *                           dimensions, this field is ignored and all available attributes are
     *                           returned.
     *
     * @return \Google\Ads\GoogleAds\V15\Services\ListAudienceInsightsAttributesRequest
     *
     * @experimental
     */
    public static function build(string $customerId, array $dimensions, string $queryText): self
    {
        return (new self())
            ->setCustomerId($customerId)
            ->setDimensions($dimensions)
            ->setQueryText($queryText);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           Required. The ID of the customer.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $dimensions
     *           Required. The types of attributes to be returned.
     *     @type string $query_text
     *           Required. A free text query.  If the requested dimensions include
     *           Attributes CATEGORY or KNOWLEDGE_GRAPH, then the attributes returned for
     *           those dimensions will match or be related to this string.  For other
     *           dimensions, this field is ignored and all available attributes are
     *           returned.
     *     @type string $customer_insights_group
     *           The name of the customer being planned for.  This is a user-defined value.
     *     @type array<\Google\Ads\GoogleAds\V15\Common\LocationInfo>|\Google\Protobuf\Internal\RepeatedField $location_country_filters
     *           If SUB_COUNTRY_LOCATION attributes are one of the requested dimensions and
     *           this field is present, then the SUB_COUNTRY_LOCATION attributes returned
     *           will be located in these countries. If this field is absent, then location
     *           attributes are not filtered by country. Setting this field when
     *           SUB_COUNTRY_LOCATION attributes are not requested will return an error.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Services\AudienceInsightsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the customer.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Required. The ID of the customer.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * Required. The types of attributes to be returned.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v15.enums.AudienceInsightsDimensionEnum.AudienceInsightsDimension dimensions = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * Required. The types of attributes to be returned.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v15.enums.AudienceInsightsDimensionEnum.AudienceInsightsDimension dimensions = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDimensions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\GoogleAds\V15\Enums\AudienceInsightsDimensionEnum\AudienceInsightsDimension::class);
        $this->dimensions = $arr;

        return $this;
    }

    /**
     * Required. A free text query.  If the requested dimensions include
     * Attributes CATEGORY or KNOWLEDGE_GRAPH, then the attributes returned for
     * those dimensions will match or be related to this string.  For other
     * dimensions, this field is ignored and all available attributes are
     * returned.
     *
     * Generated from protobuf field <code>string query_text = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getQueryText()
    {
        return $this->query_text;
    }

    /**
     * Required. A free text query.  If the requested dimensions include
     * Attributes CATEGORY or KNOWLEDGE_GRAPH, then the attributes returned for
     * those dimensions will match or be related to this string.  For other
     * dimensions, this field is ignored and all available attributes are
     * returned.
     *
     * Generated from protobuf field <code>string query_text = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setQueryText($var)
    {
        GPBUtil::checkString($var, True);
        $this->query_text = $var;

        return $this;
    }

    /**
     * The name of the customer being planned for.  This is a user-defined value.
     *
     * Generated from protobuf field <code>string customer_insights_group = 4;</code>
     * @return string
     */
    public function getCustomerInsightsGroup()
    {
        return $this->customer_insights_group;
    }

    /**
     * The name of the customer being planned for.  This is a user-defined value.
     *
     * Generated from protobuf field <code>string customer_insights_group = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerInsightsGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_insights_group = $var;

        return $this;
    }

    /**
     * If SUB_COUNTRY_LOCATION attributes are one of the requested dimensions and
     * this field is present, then the SUB_COUNTRY_LOCATION attributes returned
     * will be located in these countries. If this field is absent, then location
     * attributes are not filtered by country. Setting this field when
     * SUB_COUNTRY_LOCATION attributes are not requested will return an error.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v15.common.LocationInfo location_country_filters = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLocationCountryFilters()
    {
        return $this->location_country_filters;
    }

    /**
     * If SUB_COUNTRY_LOCATION attributes are one of the requested dimensions and
     * this field is present, then the SUB_COUNTRY_LOCATION attributes returned
     * will be located in these countries. If this field is absent, then location
     * attributes are not filtered by country. Setting this field when
     * SUB_COUNTRY_LOCATION attributes are not requested will return an error.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v15.common.LocationInfo location_country_filters = 5;</code>
     * @param array<\Google\Ads\GoogleAds\V15\Common\LocationInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLocationCountryFilters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V15\Common\LocationInfo::class);
        $this->location_country_filters = $arr;

        return $this;
    }

}

