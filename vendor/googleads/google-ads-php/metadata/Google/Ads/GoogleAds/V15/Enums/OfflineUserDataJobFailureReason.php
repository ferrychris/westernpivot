<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/enums/offline_user_data_job_failure_reason.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V15\Enums;

class OfflineUserDataJobFailureReason
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
Igoogle/ads/googleads/v15/enums/offline_user_data_job_failure_reason.protogoogle.ads.googleads.v15.enums"�
#OfflineUserDataJobFailureReasonEnum"�
OfflineUserDataJobFailureReason
UNSPECIFIED 
UNKNOWN%
!INSUFFICIENT_MATCHED_TRANSACTIONS
INSUFFICIENT_TRANSACTIONS"
HIGH_AVERAGE_TRANSACTION_VALUE!
LOW_AVERAGE_TRANSACTION_VALUE 
NEWLY_OBSERVED_CURRENCY_CODEB�
"com.google.ads.googleads.v15.enumsB$OfflineUserDataJobFailureReasonProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

