<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/instance/v1/spanner_instance_admin.proto

namespace Google\Cloud\Spanner\Admin\Instance\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [GetInstance][google.spanner.admin.instance.v1.InstanceAdmin.GetInstance].
 *
 * Generated from protobuf message <code>google.spanner.admin.instance.v1.GetInstanceRequest</code>
 */
class GetInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the requested instance. Values are of the form
     * `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * If field_mask is present, specifies the subset of [Instance][google.spanner.admin.instance.v1.Instance] fields that
     * should be returned.
     * If absent, all [Instance][google.spanner.admin.instance.v1.Instance] fields are returned.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 2;</code>
     */
    private $field_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the requested instance. Values are of the form
     *           `projects/<project>/instances/<instance>`.
     *     @type \Google\Protobuf\FieldMask $field_mask
     *           If field_mask is present, specifies the subset of [Instance][google.spanner.admin.instance.v1.Instance] fields that
     *           should be returned.
     *           If absent, all [Instance][google.spanner.admin.instance.v1.Instance] fields are returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Instance\V1\SpannerInstanceAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the requested instance. Values are of the form
     * `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the requested instance. Values are of the form
     * `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * If field_mask is present, specifies the subset of [Instance][google.spanner.admin.instance.v1.Instance] fields that
     * should be returned.
     * If absent, all [Instance][google.spanner.admin.instance.v1.Instance] fields are returned.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getFieldMask()
    {
        return isset($this->field_mask) ? $this->field_mask : null;
    }

    public function hasFieldMask()
    {
        return isset($this->field_mask);
    }

    public function clearFieldMask()
    {
        unset($this->field_mask);
    }

    /**
     * If field_mask is present, specifies the subset of [Instance][google.spanner.admin.instance.v1.Instance] fields that
     * should be returned.
     * If absent, all [Instance][google.spanner.admin.instance.v1.Instance] fields are returned.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setFieldMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->field_mask = $var;

        return $this;
    }

}

