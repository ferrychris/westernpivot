<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/services/account_link_service.proto

namespace Google\Ads\GoogleAds\V15\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for account link mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.services.MutateAccountLinkResponse</code>
 */
class MutateAccountLinkResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Result for the mutate.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.services.MutateAccountLinkResult result = 1;</code>
     */
    protected $result = null;
    /**
     * Errors that pertain to operation failures in the partial failure mode.
     * Returned only when partial_failure = true and all errors occur inside the
     * operations. If any errors occur outside the operations (for example, auth
     * errors), we return an RPC level error.
     *
     * Generated from protobuf field <code>.google.rpc.Status partial_failure_error = 2;</code>
     */
    protected $partial_failure_error = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V15\Services\MutateAccountLinkResult $result
     *           Result for the mutate.
     *     @type \Google\Rpc\Status $partial_failure_error
     *           Errors that pertain to operation failures in the partial failure mode.
     *           Returned only when partial_failure = true and all errors occur inside the
     *           operations. If any errors occur outside the operations (for example, auth
     *           errors), we return an RPC level error.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Services\AccountLinkService::initOnce();
        parent::__construct($data);
    }

    /**
     * Result for the mutate.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.services.MutateAccountLinkResult result = 1;</code>
     * @return \Google\Ads\GoogleAds\V15\Services\MutateAccountLinkResult|null
     */
    public function getResult()
    {
        return $this->result;
    }

    public function hasResult()
    {
        return isset($this->result);
    }

    public function clearResult()
    {
        unset($this->result);
    }

    /**
     * Result for the mutate.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.services.MutateAccountLinkResult result = 1;</code>
     * @param \Google\Ads\GoogleAds\V15\Services\MutateAccountLinkResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V15\Services\MutateAccountLinkResult::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Errors that pertain to operation failures in the partial failure mode.
     * Returned only when partial_failure = true and all errors occur inside the
     * operations. If any errors occur outside the operations (for example, auth
     * errors), we return an RPC level error.
     *
     * Generated from protobuf field <code>.google.rpc.Status partial_failure_error = 2;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getPartialFailureError()
    {
        return $this->partial_failure_error;
    }

    public function hasPartialFailureError()
    {
        return isset($this->partial_failure_error);
    }

    public function clearPartialFailureError()
    {
        unset($this->partial_failure_error);
    }

    /**
     * Errors that pertain to operation failures in the partial failure mode.
     * Returned only when partial_failure = true and all errors occur inside the
     * operations. If any errors occur outside the operations (for example, auth
     * errors), we return an RPC level error.
     *
     * Generated from protobuf field <code>.google.rpc.Status partial_failure_error = 2;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setPartialFailureError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->partial_failure_error = $var;

        return $this;
    }

}

