<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/enums/change_event_resource_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V15\Enums;

class ChangeEventResourceType
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
?google/ads/googleads/v15/enums/change_event_resource_type.protogoogle.ads.googleads.v15.enums"�
ChangeEventResourceTypeEnum"�
ChangeEventResourceType
UNSPECIFIED 
UNKNOWN
AD
AD_GROUP
AD_GROUP_CRITERION
CAMPAIGN
CAMPAIGN_BUDGET
AD_GROUP_BID_MODIFIER
CAMPAIGN_CRITERION
FEED	
	FEED_ITEM

CAMPAIGN_FEED
AD_GROUP_FEED
AD_GROUP_AD	
ASSET
CUSTOMER_ASSET
CAMPAIGN_ASSET
AD_GROUP_ASSET
	ASSET_SET
ASSET_SET_ASSET
CAMPAIGN_ASSET_SETB�
"com.google.ads.googleads.v15.enumsBChangeEventResourceTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

