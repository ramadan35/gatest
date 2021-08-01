<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigateway/v1/apigateway.proto

namespace Google\Cloud\ApiGateway\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An API that can be served by one or more Gateways.
 *
 * Generated from protobuf message <code>google.cloud.apigateway.v1.Api</code>
 */
class Api extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of the API.
     * Format: projects/{project}/locations/global/apis/{api}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Output only. Created time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. Updated time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Optional. Resource labels to represent user-provided metadata.
     * Refer to cloud documentation on labels for more details.
     * https://cloud.google.com/compute/docs/labeling-resources
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. Display name.
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $display_name = '';
    /**
     * Optional. Immutable. The name of a Google Managed Service (
     * https://cloud.google.com/service-infrastructure/docs/glossary#managed). If
     * not specified, a new Service will automatically be created in the same
     * project as this API.
     *
     * Generated from protobuf field <code>string managed_service = 7 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    private $managed_service = '';
    /**
     * Output only. State of the API.
     *
     * Generated from protobuf field <code>.google.cloud.apigateway.v1.Api.State state = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of the API.
     *           Format: projects/{project}/locations/global/apis/{api}
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Created time.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Updated time.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Resource labels to represent user-provided metadata.
     *           Refer to cloud documentation on labels for more details.
     *           https://cloud.google.com/compute/docs/labeling-resources
     *     @type string $display_name
     *           Optional. Display name.
     *     @type string $managed_service
     *           Optional. Immutable. The name of a Google Managed Service (
     *           https://cloud.google.com/service-infrastructure/docs/glossary#managed). If
     *           not specified, a new Service will automatically be created in the same
     *           project as this API.
     *     @type int $state
     *           Output only. State of the API.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apigateway\V1\Apigateway::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of the API.
     * Format: projects/{project}/locations/global/apis/{api}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of the API.
     * Format: projects/{project}/locations/global/apis/{api}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Created time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return isset($this->create_time) ? $this->create_time : null;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Created time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Updated time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return isset($this->update_time) ? $this->update_time : null;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Updated time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. Resource labels to represent user-provided metadata.
     * Refer to cloud documentation on labels for more details.
     * https://cloud.google.com/compute/docs/labeling-resources
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Resource labels to represent user-provided metadata.
     * Refer to cloud documentation on labels for more details.
     * https://cloud.google.com/compute/docs/labeling-resources
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Optional. Display name.
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Optional. Display name.
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Optional. Immutable. The name of a Google Managed Service (
     * https://cloud.google.com/service-infrastructure/docs/glossary#managed). If
     * not specified, a new Service will automatically be created in the same
     * project as this API.
     *
     * Generated from protobuf field <code>string managed_service = 7 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getManagedService()
    {
        return $this->managed_service;
    }

    /**
     * Optional. Immutable. The name of a Google Managed Service (
     * https://cloud.google.com/service-infrastructure/docs/glossary#managed). If
     * not specified, a new Service will automatically be created in the same
     * project as this API.
     *
     * Generated from protobuf field <code>string managed_service = 7 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setManagedService($var)
    {
        GPBUtil::checkString($var, True);
        $this->managed_service = $var;

        return $this;
    }

    /**
     * Output only. State of the API.
     *
     * Generated from protobuf field <code>.google.cloud.apigateway.v1.Api.State state = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the API.
     *
     * Generated from protobuf field <code>.google.cloud.apigateway.v1.Api.State state = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ApiGateway\V1\Api\State::class);
        $this->state = $var;

        return $this;
    }

}

