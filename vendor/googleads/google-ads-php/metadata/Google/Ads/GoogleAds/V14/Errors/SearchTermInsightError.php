<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/errors/search_term_insight_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V14\Errors;

class SearchTermInsightError
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
?google/ads/googleads/v14/errors/search_term_insight_error.protogoogle.ads.googleads.v14.errors"�
SearchTermInsightErrorEnum"�
SearchTermInsightError
UNSPECIFIED 
UNKNOWN\'
#FILTERING_NOT_ALLOWED_WITH_SEGMENTS#
LIMIT_NOT_ALLOWED_WITH_SEGMENTS"
MISSING_FIELD_IN_SELECT_CLAUSE&
"REQUIRES_FILTER_BY_SINGLE_RESOURCE%
!SORTING_NOT_ALLOWED_WITH_SEGMENTS)
%SUMMARY_ROW_NOT_ALLOWED_WITH_SEGMENTSB�
#com.google.ads.googleads.v14.errorsBSearchTermInsightErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v14/errors;errors�GAA�Google.Ads.GoogleAds.V14.Errors�Google\\Ads\\GoogleAds\\V14\\Errors�#Google::Ads::GoogleAds::V14::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

