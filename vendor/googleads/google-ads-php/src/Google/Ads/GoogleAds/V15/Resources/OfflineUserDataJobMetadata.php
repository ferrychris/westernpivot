<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/resources/offline_user_data_job.proto

namespace Google\Ads\GoogleAds\V15\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata of offline user data job.
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.resources.OfflineUserDataJobMetadata</code>
 */
class OfflineUserDataJobMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Match rate of the Customer Match user list upload. Describes
     * the estimated match rate when the status of the job is "RUNNING" and final
     * match rate when the final match rate is available after the status of the
     * job is "SUCCESS/FAILED".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.OfflineUserDataJobMatchRateRangeEnum.OfflineUserDataJobMatchRateRange match_rate_range = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $match_rate_range = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $match_rate_range
     *           Output only. Match rate of the Customer Match user list upload. Describes
     *           the estimated match rate when the status of the job is "RUNNING" and final
     *           match rate when the final match rate is available after the status of the
     *           job is "SUCCESS/FAILED".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Resources\OfflineUserDataJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Match rate of the Customer Match user list upload. Describes
     * the estimated match rate when the status of the job is "RUNNING" and final
     * match rate when the final match rate is available after the status of the
     * job is "SUCCESS/FAILED".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.OfflineUserDataJobMatchRateRangeEnum.OfflineUserDataJobMatchRateRange match_rate_range = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getMatchRateRange()
    {
        return $this->match_rate_range;
    }

    /**
     * Output only. Match rate of the Customer Match user list upload. Describes
     * the estimated match rate when the status of the job is "RUNNING" and final
     * match rate when the final match rate is available after the status of the
     * job is "SUCCESS/FAILED".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.OfflineUserDataJobMatchRateRangeEnum.OfflineUserDataJobMatchRateRange match_rate_range = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setMatchRateRange($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\OfflineUserDataJobMatchRateRangeEnum\OfflineUserDataJobMatchRateRange::class);
        $this->match_rate_range = $var;

        return $this;
    }

}

