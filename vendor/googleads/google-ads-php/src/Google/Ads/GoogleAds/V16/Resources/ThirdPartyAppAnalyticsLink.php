<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/resources/third_party_app_analytics_link.proto

namespace Google\Ads\GoogleAds\V16\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A data sharing connection, allowing the import of third party app analytics
 * into a Google Ads Customer.
 *
 * Generated from protobuf message <code>google.ads.googleads.v16.resources.ThirdPartyAppAnalyticsLink</code>
 */
class ThirdPartyAppAnalyticsLink extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the third party app analytics link.
     * Third party app analytics link resource names have the form:
     * `customers/{customer_id}/thirdPartyAppAnalyticsLinks/{account_link_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The shareable link ID that should be provided to the third
     * party when setting up app analytics. This is able to be regenerated using
     * regenerate method in the ThirdPartyAppAnalyticsLinkService.
     *
     * Generated from protobuf field <code>optional string shareable_link_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $shareable_link_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the third party app analytics link.
     *           Third party app analytics link resource names have the form:
     *           `customers/{customer_id}/thirdPartyAppAnalyticsLinks/{account_link_id}`
     *     @type string $shareable_link_id
     *           Output only. The shareable link ID that should be provided to the third
     *           party when setting up app analytics. This is able to be regenerated using
     *           regenerate method in the ThirdPartyAppAnalyticsLinkService.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V16\Resources\ThirdPartyAppAnalyticsLink::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the third party app analytics link.
     * Third party app analytics link resource names have the form:
     * `customers/{customer_id}/thirdPartyAppAnalyticsLinks/{account_link_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the third party app analytics link.
     * Third party app analytics link resource names have the form:
     * `customers/{customer_id}/thirdPartyAppAnalyticsLinks/{account_link_id}`
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
     * Output only. The shareable link ID that should be provided to the third
     * party when setting up app analytics. This is able to be regenerated using
     * regenerate method in the ThirdPartyAppAnalyticsLinkService.
     *
     * Generated from protobuf field <code>optional string shareable_link_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getShareableLinkId()
    {
        return isset($this->shareable_link_id) ? $this->shareable_link_id : '';
    }

    public function hasShareableLinkId()
    {
        return isset($this->shareable_link_id);
    }

    public function clearShareableLinkId()
    {
        unset($this->shareable_link_id);
    }

    /**
     * Output only. The shareable link ID that should be provided to the third
     * party when setting up app analytics. This is able to be regenerated using
     * regenerate method in the ThirdPartyAppAnalyticsLinkService.
     *
     * Generated from protobuf field <code>optional string shareable_link_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setShareableLinkId($var)
    {
        GPBUtil::checkString($var, True);
        $this->shareable_link_id = $var;

        return $this;
    }

}

