<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/services/customer_sk_ad_network_conversion_value_schema_service.proto

namespace Google\Ads\GoogleAds\V16\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single update operation for a CustomerSkAdNetworkConversionValueSchema.
 *
 * Generated from protobuf message <code>google.ads.googleads.v16.services.CustomerSkAdNetworkConversionValueSchemaOperation</code>
 */
class CustomerSkAdNetworkConversionValueSchemaOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * Update operation: The schema is expected to have a valid resource name.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.resources.CustomerSkAdNetworkConversionValueSchema update = 1;</code>
     */
    protected $update = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V16\Resources\CustomerSkAdNetworkConversionValueSchema $update
     *           Update operation: The schema is expected to have a valid resource name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V16\Services\CustomerSkAdNetworkConversionValueSchemaService::initOnce();
        parent::__construct($data);
    }

    /**
     * Update operation: The schema is expected to have a valid resource name.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.resources.CustomerSkAdNetworkConversionValueSchema update = 1;</code>
     * @return \Google\Ads\GoogleAds\V16\Resources\CustomerSkAdNetworkConversionValueSchema|null
     */
    public function getUpdate()
    {
        return $this->update;
    }

    public function hasUpdate()
    {
        return isset($this->update);
    }

    public function clearUpdate()
    {
        unset($this->update);
    }

    /**
     * Update operation: The schema is expected to have a valid resource name.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.resources.CustomerSkAdNetworkConversionValueSchema update = 1;</code>
     * @param \Google\Ads\GoogleAds\V16\Resources\CustomerSkAdNetworkConversionValueSchema $var
     * @return $this
     */
    public function setUpdate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V16\Resources\CustomerSkAdNetworkConversionValueSchema::class);
        $this->update = $var;

        return $this;
    }

}

