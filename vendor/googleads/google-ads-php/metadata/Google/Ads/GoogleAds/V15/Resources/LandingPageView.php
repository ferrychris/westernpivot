<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/resources/landing_page_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V15\Resources;

class LandingPageView
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
�
:google/ads/googleads/v15/resources/landing_page_view.proto"google.ads.googleads.v15.resourcesgoogle/api/resource.proto"�
LandingPageViewG
resource_name (	B0�A�A*
(googleads.googleapis.com/LandingPageView&
unexpanded_final_url (	B�AH �:z�Aw
(googleads.googleapis.com/LandingPageViewKcustomers/{customer_id}/landingPageViews/{unexpanded_final_url_fingerprint}B
_unexpanded_final_urlB�
&com.google.ads.googleads.v15.resourcesBLandingPageViewProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v15/resources;resources�GAA�"Google.Ads.GoogleAds.V15.Resources�"Google\\Ads\\GoogleAds\\V15\\Resources�&Google::Ads::GoogleAds::V15::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

