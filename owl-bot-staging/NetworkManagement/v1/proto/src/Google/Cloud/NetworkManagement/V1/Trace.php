<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/trace.proto

namespace Google\Cloud\NetworkManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Trace represents one simulated packet forwarding path.
 *   * Each trace contains multiple ordered steps.
 *   * Each step is in a particular state with associated configuration.
 *   * State is categorized as final or non-final states.
 *   * Each final state has a reason associated.
 *   * Each trace must end with a final state (the last step).
 * ```
 *   |---------------------Trace----------------------|
 *   Step1(State) Step2(State) ---  StepN(State(final))
 * ```
 *
 * Generated from protobuf message <code>google.cloud.networkmanagement.v1.Trace</code>
 */
class Trace extends \Google\Protobuf\Internal\Message
{
    /**
     * Derived from the source and destination endpoints definition specified by
     * user request, and validated by the data plane model.
     * If there are multiple traces starting from different source locations, then
     * the endpoint_info may be different between traces.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.EndpointInfo endpoint_info = 1;</code>
     */
    protected $endpoint_info = null;
    /**
     * A trace of a test contains multiple steps from the initial state to the
     * final state (delivered, dropped, forwarded, or aborted).
     * The steps are ordered by the processing sequence within the simulated
     * network state machine. It is critical to preserve the order of the steps
     * and avoid reordering or sorting them.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkmanagement.v1.Step steps = 2;</code>
     */
    private $steps;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\NetworkManagement\V1\EndpointInfo $endpoint_info
     *           Derived from the source and destination endpoints definition specified by
     *           user request, and validated by the data plane model.
     *           If there are multiple traces starting from different source locations, then
     *           the endpoint_info may be different between traces.
     *     @type \Google\Cloud\NetworkManagement\V1\Step[]|\Google\Protobuf\Internal\RepeatedField $steps
     *           A trace of a test contains multiple steps from the initial state to the
     *           final state (delivered, dropped, forwarded, or aborted).
     *           The steps are ordered by the processing sequence within the simulated
     *           network state machine. It is critical to preserve the order of the steps
     *           and avoid reordering or sorting them.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkmanagement\V1\Trace::initOnce();
        parent::__construct($data);
    }

    /**
     * Derived from the source and destination endpoints definition specified by
     * user request, and validated by the data plane model.
     * If there are multiple traces starting from different source locations, then
     * the endpoint_info may be different between traces.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.EndpointInfo endpoint_info = 1;</code>
     * @return \Google\Cloud\NetworkManagement\V1\EndpointInfo|null
     */
    public function getEndpointInfo()
    {
        return $this->endpoint_info;
    }

    public function hasEndpointInfo()
    {
        return isset($this->endpoint_info);
    }

    public function clearEndpointInfo()
    {
        unset($this->endpoint_info);
    }

    /**
     * Derived from the source and destination endpoints definition specified by
     * user request, and validated by the data plane model.
     * If there are multiple traces starting from different source locations, then
     * the endpoint_info may be different between traces.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.EndpointInfo endpoint_info = 1;</code>
     * @param \Google\Cloud\NetworkManagement\V1\EndpointInfo $var
     * @return $this
     */
    public function setEndpointInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\EndpointInfo::class);
        $this->endpoint_info = $var;

        return $this;
    }

    /**
     * A trace of a test contains multiple steps from the initial state to the
     * final state (delivered, dropped, forwarded, or aborted).
     * The steps are ordered by the processing sequence within the simulated
     * network state machine. It is critical to preserve the order of the steps
     * and avoid reordering or sorting them.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkmanagement.v1.Step steps = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * A trace of a test contains multiple steps from the initial state to the
     * final state (delivered, dropped, forwarded, or aborted).
     * The steps are ordered by the processing sequence within the simulated
     * network state machine. It is critical to preserve the order of the steps
     * and avoid reordering or sorting them.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkmanagement.v1.Step steps = 2;</code>
     * @param \Google\Cloud\NetworkManagement\V1\Step[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSteps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\NetworkManagement\V1\Step::class);
        $this->steps = $arr;

        return $this;
    }

}

