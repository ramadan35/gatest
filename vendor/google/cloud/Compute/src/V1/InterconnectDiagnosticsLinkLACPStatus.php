<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InterconnectDiagnosticsLinkLACPStatus</code>
 */
class InterconnectDiagnosticsLinkLACPStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * System ID of the port on Google's side of the LACP exchange.
     *
     * Generated from protobuf field <code>string google_system_id = 91210405;</code>
     */
    private $google_system_id = null;
    /**
     * System ID of the port on the neighbor's side of the LACP exchange.
     *
     * Generated from protobuf field <code>string neighbor_system_id = 343821342;</code>
     */
    private $neighbor_system_id = null;
    /**
     * The state of a LACP link, which can take one of the following values:
     * - ACTIVE: The link is configured and active within the bundle.
     * - DETACHED: The link is not configured within the bundle. This means that the rest of the object should be empty.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InterconnectDiagnosticsLinkLACPStatus.State state = 109757585;</code>
     */
    private $state = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $google_system_id
     *           System ID of the port on Google's side of the LACP exchange.
     *     @type string $neighbor_system_id
     *           System ID of the port on the neighbor's side of the LACP exchange.
     *     @type int $state
     *           The state of a LACP link, which can take one of the following values:
     *           - ACTIVE: The link is configured and active within the bundle.
     *           - DETACHED: The link is not configured within the bundle. This means that the rest of the object should be empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * System ID of the port on Google's side of the LACP exchange.
     *
     * Generated from protobuf field <code>string google_system_id = 91210405;</code>
     * @return string
     */
    public function getGoogleSystemId()
    {
        return isset($this->google_system_id) ? $this->google_system_id : '';
    }

    public function hasGoogleSystemId()
    {
        return isset($this->google_system_id);
    }

    public function clearGoogleSystemId()
    {
        unset($this->google_system_id);
    }

    /**
     * System ID of the port on Google's side of the LACP exchange.
     *
     * Generated from protobuf field <code>string google_system_id = 91210405;</code>
     * @param string $var
     * @return $this
     */
    public function setGoogleSystemId($var)
    {
        GPBUtil::checkString($var, True);
        $this->google_system_id = $var;

        return $this;
    }

    /**
     * System ID of the port on the neighbor's side of the LACP exchange.
     *
     * Generated from protobuf field <code>string neighbor_system_id = 343821342;</code>
     * @return string
     */
    public function getNeighborSystemId()
    {
        return isset($this->neighbor_system_id) ? $this->neighbor_system_id : '';
    }

    public function hasNeighborSystemId()
    {
        return isset($this->neighbor_system_id);
    }

    public function clearNeighborSystemId()
    {
        unset($this->neighbor_system_id);
    }

    /**
     * System ID of the port on the neighbor's side of the LACP exchange.
     *
     * Generated from protobuf field <code>string neighbor_system_id = 343821342;</code>
     * @param string $var
     * @return $this
     */
    public function setNeighborSystemId($var)
    {
        GPBUtil::checkString($var, True);
        $this->neighbor_system_id = $var;

        return $this;
    }

    /**
     * The state of a LACP link, which can take one of the following values:
     * - ACTIVE: The link is configured and active within the bundle.
     * - DETACHED: The link is not configured within the bundle. This means that the rest of the object should be empty.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InterconnectDiagnosticsLinkLACPStatus.State state = 109757585;</code>
     * @return int
     */
    public function getState()
    {
        return isset($this->state) ? $this->state : 0;
    }

    public function hasState()
    {
        return isset($this->state);
    }

    public function clearState()
    {
        unset($this->state);
    }

    /**
     * The state of a LACP link, which can take one of the following values:
     * - ACTIVE: The link is configured and active within the bundle.
     * - DETACHED: The link is not configured within the bundle. This means that the rest of the object should be empty.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InterconnectDiagnosticsLinkLACPStatus.State state = 109757585;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkLACPStatus\State::class);
        $this->state = $var;

        return $this;
    }

}
