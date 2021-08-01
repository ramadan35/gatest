<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [CloudChannelService.CreateCustomer][google.cloud.channel.v1.CloudChannelService.CreateCustomer]
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.CreateCustomerRequest</code>
 */
class CreateCustomerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of reseller account in which to create the customer.
     * Parent uses the format: accounts/{account_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $parent = '';
    /**
     * Required. The customer to create.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Customer customer = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $customer = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of reseller account in which to create the customer.
     *           Parent uses the format: accounts/{account_id}
     *     @type \Google\Cloud\Channel\V1\Customer $customer
     *           Required. The customer to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of reseller account in which to create the customer.
     * Parent uses the format: accounts/{account_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of reseller account in which to create the customer.
     * Parent uses the format: accounts/{account_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The customer to create.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Customer customer = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Channel\V1\Customer|null
     */
    public function getCustomer()
    {
        return isset($this->customer) ? $this->customer : null;
    }

    public function hasCustomer()
    {
        return isset($this->customer);
    }

    public function clearCustomer()
    {
        unset($this->customer);
    }

    /**
     * Required. The customer to create.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Customer customer = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Channel\V1\Customer $var
     * @return $this
     */
    public function setCustomer($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\Customer::class);
        $this->customer = $var;

        return $this;
    }

}

