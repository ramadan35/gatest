<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for the expected URL mappings.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.UrlMapTest</code>
 */
class UrlMapTest extends \Google\Protobuf\Internal\Message
{
    /**
     * Description of this test case.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     */
    private $description = null;
    /**
     * Host portion of the URL. If headers contains a host header, then host must also match the header value.
     *
     * Generated from protobuf field <code>string host = 3208616;</code>
     */
    private $host = null;
    /**
     * Path portion of the URL.
     *
     * Generated from protobuf field <code>string path = 3433509;</code>
     */
    private $path = null;
    /**
     * Expected BackendService or BackendBucket resource the given URL should be mapped to.
     * service cannot be set if expectedRedirectResponseCode is set.
     *
     * Generated from protobuf field <code>string service = 373540533;</code>
     */
    private $service = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $description
     *           Description of this test case.
     *     @type string $host
     *           Host portion of the URL. If headers contains a host header, then host must also match the header value.
     *     @type string $path
     *           Path portion of the URL.
     *     @type string $service
     *           Expected BackendService or BackendBucket resource the given URL should be mapped to.
     *           service cannot be set if expectedRedirectResponseCode is set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Description of this test case.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * Description of this test case.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Host portion of the URL. If headers contains a host header, then host must also match the header value.
     *
     * Generated from protobuf field <code>string host = 3208616;</code>
     * @return string
     */
    public function getHost()
    {
        return isset($this->host) ? $this->host : '';
    }

    public function hasHost()
    {
        return isset($this->host);
    }

    public function clearHost()
    {
        unset($this->host);
    }

    /**
     * Host portion of the URL. If headers contains a host header, then host must also match the header value.
     *
     * Generated from protobuf field <code>string host = 3208616;</code>
     * @param string $var
     * @return $this
     */
    public function setHost($var)
    {
        GPBUtil::checkString($var, True);
        $this->host = $var;

        return $this;
    }

    /**
     * Path portion of the URL.
     *
     * Generated from protobuf field <code>string path = 3433509;</code>
     * @return string
     */
    public function getPath()
    {
        return isset($this->path) ? $this->path : '';
    }

    public function hasPath()
    {
        return isset($this->path);
    }

    public function clearPath()
    {
        unset($this->path);
    }

    /**
     * Path portion of the URL.
     *
     * Generated from protobuf field <code>string path = 3433509;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * Expected BackendService or BackendBucket resource the given URL should be mapped to.
     * service cannot be set if expectedRedirectResponseCode is set.
     *
     * Generated from protobuf field <code>string service = 373540533;</code>
     * @return string
     */
    public function getService()
    {
        return isset($this->service) ? $this->service : '';
    }

    public function hasService()
    {
        return isset($this->service);
    }

    public function clearService()
    {
        unset($this->service);
    }

    /**
     * Expected BackendService or BackendBucket resource the given URL should be mapped to.
     * service cannot be set if expectedRedirectResponseCode is set.
     *
     * Generated from protobuf field <code>string service = 373540533;</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

}
