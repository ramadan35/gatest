<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The transformation to apply to the field.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.FieldTransformation</code>
 */
class FieldTransformation extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Input field(s) to apply the transformation to.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FieldId fields = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $fields;
    /**
     * Only apply the transformation if the condition evaluates to true for the
     * given `RecordCondition`. The conditions are allowed to reference fields
     * that are not used in the actual transformation.
     * Example Use Cases:
     * - Apply a different bucket transformation to an age column if the zip code
     * column for the same record is within a specific range.
     * - Redact a field if the date of birth field is greater than 85.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.RecordCondition condition = 3;</code>
     */
    private $condition = null;
    protected $transformation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\FieldId[]|\Google\Protobuf\Internal\RepeatedField $fields
     *           Required. Input field(s) to apply the transformation to.
     *     @type \Google\Cloud\Dlp\V2\RecordCondition $condition
     *           Only apply the transformation if the condition evaluates to true for the
     *           given `RecordCondition`. The conditions are allowed to reference fields
     *           that are not used in the actual transformation.
     *           Example Use Cases:
     *           - Apply a different bucket transformation to an age column if the zip code
     *           column for the same record is within a specific range.
     *           - Redact a field if the date of birth field is greater than 85.
     *     @type \Google\Cloud\Dlp\V2\PrimitiveTransformation $primitive_transformation
     *           Apply the transformation to the entire field.
     *     @type \Google\Cloud\Dlp\V2\InfoTypeTransformations $info_type_transformations
     *           Treat the contents of the field as free text, and selectively
     *           transform content that matches an `InfoType`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Input field(s) to apply the transformation to.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FieldId fields = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Required. Input field(s) to apply the transformation to.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FieldId fields = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dlp\V2\FieldId[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\FieldId::class);
        $this->fields = $arr;

        return $this;
    }

    /**
     * Only apply the transformation if the condition evaluates to true for the
     * given `RecordCondition`. The conditions are allowed to reference fields
     * that are not used in the actual transformation.
     * Example Use Cases:
     * - Apply a different bucket transformation to an age column if the zip code
     * column for the same record is within a specific range.
     * - Redact a field if the date of birth field is greater than 85.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.RecordCondition condition = 3;</code>
     * @return \Google\Cloud\Dlp\V2\RecordCondition|null
     */
    public function getCondition()
    {
        return isset($this->condition) ? $this->condition : null;
    }

    public function hasCondition()
    {
        return isset($this->condition);
    }

    public function clearCondition()
    {
        unset($this->condition);
    }

    /**
     * Only apply the transformation if the condition evaluates to true for the
     * given `RecordCondition`. The conditions are allowed to reference fields
     * that are not used in the actual transformation.
     * Example Use Cases:
     * - Apply a different bucket transformation to an age column if the zip code
     * column for the same record is within a specific range.
     * - Redact a field if the date of birth field is greater than 85.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.RecordCondition condition = 3;</code>
     * @param \Google\Cloud\Dlp\V2\RecordCondition $var
     * @return $this
     */
    public function setCondition($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\RecordCondition::class);
        $this->condition = $var;

        return $this;
    }

    /**
     * Apply the transformation to the entire field.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.PrimitiveTransformation primitive_transformation = 4;</code>
     * @return \Google\Cloud\Dlp\V2\PrimitiveTransformation|null
     */
    public function getPrimitiveTransformation()
    {
        return $this->readOneof(4);
    }

    public function hasPrimitiveTransformation()
    {
        return $this->hasOneof(4);
    }

    /**
     * Apply the transformation to the entire field.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.PrimitiveTransformation primitive_transformation = 4;</code>
     * @param \Google\Cloud\Dlp\V2\PrimitiveTransformation $var
     * @return $this
     */
    public function setPrimitiveTransformation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\PrimitiveTransformation::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Treat the contents of the field as free text, and selectively
     * transform content that matches an `InfoType`.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InfoTypeTransformations info_type_transformations = 5;</code>
     * @return \Google\Cloud\Dlp\V2\InfoTypeTransformations|null
     */
    public function getInfoTypeTransformations()
    {
        return $this->readOneof(5);
    }

    public function hasInfoTypeTransformations()
    {
        return $this->hasOneof(5);
    }

    /**
     * Treat the contents of the field as free text, and selectively
     * transform content that matches an `InfoType`.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InfoTypeTransformations info_type_transformations = 5;</code>
     * @param \Google\Cloud\Dlp\V2\InfoTypeTransformations $var
     * @return $this
     */
    public function setInfoTypeTransformations($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\InfoTypeTransformations::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTransformation()
    {
        return $this->whichOneof("transformation");
    }

}

