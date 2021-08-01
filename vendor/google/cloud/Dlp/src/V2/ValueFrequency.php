<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A value of a field, including its frequency.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.ValueFrequency</code>
 */
class ValueFrequency extends \Google\Protobuf\Internal\Message
{
    /**
     * A value contained in the field in question.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Value value = 1;</code>
     */
    private $value = null;
    /**
     * How many times the value is contained in the field.
     *
     * Generated from protobuf field <code>int64 count = 2;</code>
     */
    private $count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\Value $value
     *           A value contained in the field in question.
     *     @type int|string $count
     *           How many times the value is contained in the field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * A value contained in the field in question.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Value value = 1;</code>
     * @return \Google\Cloud\Dlp\V2\Value|null
     */
    public function getValue()
    {
        return isset($this->value) ? $this->value : null;
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * A value contained in the field in question.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Value value = 1;</code>
     * @param \Google\Cloud\Dlp\V2\Value $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\Value::class);
        $this->value = $var;

        return $this;
    }

    /**
     * How many times the value is contained in the field.
     *
     * Generated from protobuf field <code>int64 count = 2;</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * How many times the value is contained in the field.
     *
     * Generated from protobuf field <code>int64 count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->count = $var;

        return $this;
    }

}
