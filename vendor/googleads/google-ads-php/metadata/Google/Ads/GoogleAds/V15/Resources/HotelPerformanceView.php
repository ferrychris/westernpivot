<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/resources/hotel_performance_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V15\Resources;

class HotelPerformanceView
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
?google/ads/googleads/v15/resources/hotel_performance_view.proto"google.ads.googleads.v15.resourcesgoogle/api/resource.proto"�
HotelPerformanceViewL
resource_name (	B5�A�A/
-googleads.googleapis.com/HotelPerformanceView:`�A]
-googleads.googleapis.com/HotelPerformanceView,customers/{customer_id}/hotelPerformanceViewB�
&com.google.ads.googleads.v15.resourcesBHotelPerformanceViewProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v15/resources;resources�GAA�"Google.Ads.GoogleAds.V15.Resources�"Google\\Ads\\GoogleAds\\V15\\Resources�&Google::Ads::GoogleAds::V15::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

