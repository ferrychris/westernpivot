<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/enums/bidding_strategy_system_status.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V16\Enums;

class BiddingStrategySystemStatus
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
Cgoogle/ads/googleads/v16/enums/bidding_strategy_system_status.protogoogle.ads.googleads.v16.enums"�
BiddingStrategySystemStatusEnum"�
BiddingStrategySystemStatus
UNSPECIFIED 
UNKNOWN
ENABLED
LEARNING_NEW
LEARNING_SETTING_CHANGE
LEARNING_BUDGET_CHANGE
LEARNING_COMPOSITION_CHANGE#
LEARNING_CONVERSION_TYPE_CHANGE&
"LEARNING_CONVERSION_SETTING_CHANGE
LIMITED_BY_CPC_BID_CEILING	
LIMITED_BY_CPC_BID_FLOOR

LIMITED_BY_DATA
LIMITED_BY_BUDGET!
LIMITED_BY_LOW_PRIORITY_SPEND
LIMITED_BY_LOW_QUALITY
LIMITED_BY_INVENTORY"
MISCONFIGURED_ZERO_ELIGIBILITY"
MISCONFIGURED_CONVERSION_TYPES%
!MISCONFIGURED_CONVERSION_SETTINGS
MISCONFIGURED_SHARED_BUDGET
MISCONFIGURED_STRATEGY_TYPE

PAUSED
UNAVAILABLE
MULTIPLE_LEARNING
MULTIPLE_LIMITED
MULTIPLE_MISCONFIGURED
MULTIPLEB�
"com.google.ads.googleads.v16.enumsB BiddingStrategySystemStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

