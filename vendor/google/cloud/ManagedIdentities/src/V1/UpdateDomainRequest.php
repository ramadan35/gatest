<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedidentities/v1/managed_identities_service.proto

namespace Google\Cloud\ManagedIdentities\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [UpdateDomain][google.cloud.managedidentities.v1.UpdateDomain]
 *
 * Generated from protobuf message <code>google.cloud.managedidentities.v1.UpdateDomainRequest</code>
 */
class UpdateDomainRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Mask of fields to update. At least one path must be supplied in this
     * field. The elements of the repeated paths field may only include
     * fields from [Domain][google.cloud.managedidentities.v1.Domain]:
     *  * `labels`
     *  * `locations`
     *  * `authorized_networks`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;
    /**
     * Required. Domain message with updated fields. Only supported fields specified in
     * update_mask are updated.
     *
     * Generated from protobuf field <code>.google.cloud.managedidentities.v1.Domain domain = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $domain = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Mask of fields to update. At least one path must be supplied in this
     *           field. The elements of the repeated paths field may only include
     *           fields from [Domain][google.cloud.managedidentities.v1.Domain]:
     *            * `labels`
     *            * `locations`
     *            * `authorized_networks`
     *     @type \Google\Cloud\ManagedIdentities\V1\Domain $domain
     *           Required. Domain message with updated fields. Only supported fields specified in
     *           update_mask are updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Managedidentities\V1\ManagedIdentitiesService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Mask of fields to update. At least one path must be supplied in this
     * field. The elements of the repeated paths field may only include
     * fields from [Domain][google.cloud.managedidentities.v1.Domain]:
     *  * `labels`
     *  * `locations`
     *  * `authorized_networks`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return isset($this->update_mask) ? $this->update_mask : null;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Mask of fields to update. At least one path must be supplied in this
     * field. The elements of the repeated paths field may only include
     * fields from [Domain][google.cloud.managedidentities.v1.Domain]:
     *  * `labels`
     *  * `locations`
     *  * `authorized_networks`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. Domain message with updated fields. Only supported fields specified in
     * update_mask are updated.
     *
     * Generated from protobuf field <code>.google.cloud.managedidentities.v1.Domain domain = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ManagedIdentities\V1\Domain|null
     */
    public function getDomain()
    {
        return isset($this->domain) ? $this->domain : null;
    }

    public function hasDomain()
    {
        return isset($this->domain);
    }

    public function clearDomain()
    {
        unset($this->domain);
    }

    /**
     * Required. Domain message with updated fields. Only supported fields specified in
     * update_mask are updated.
     *
     * Generated from protobuf field <code>.google.cloud.managedidentities.v1.Domain domain = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ManagedIdentities\V1\Domain $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ManagedIdentities\V1\Domain::class);
        $this->domain = $var;

        return $this;
    }

}

