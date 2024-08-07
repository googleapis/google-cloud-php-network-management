<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/trace.proto

namespace Google\Cloud\NetworkManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * For display only. Metadata associated with the load balancer backend.
 *
 * Generated from protobuf message <code>google.cloud.networkmanagement.v1.LoadBalancerBackendInfo</code>
 */
class LoadBalancerBackendInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Display name of the backend. For example, it might be an instance name for
     * the instance group backends, or an IP address and port for zonal network
     * endpoint group backends.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * URI of the backend instance (if applicable). Populated for instance group
     * backends, and zonal NEG backends.
     *
     * Generated from protobuf field <code>string instance_uri = 2;</code>
     */
    protected $instance_uri = '';
    /**
     * URI of the backend service this backend belongs to (if applicable).
     *
     * Generated from protobuf field <code>string backend_service_uri = 3;</code>
     */
    protected $backend_service_uri = '';
    /**
     * URI of the instance group this backend belongs to (if applicable).
     *
     * Generated from protobuf field <code>string instance_group_uri = 4;</code>
     */
    protected $instance_group_uri = '';
    /**
     * URI of the network endpoint group this backend belongs to (if applicable).
     *
     * Generated from protobuf field <code>string network_endpoint_group_uri = 5;</code>
     */
    protected $network_endpoint_group_uri = '';
    /**
     * URI of the backend bucket this backend targets (if applicable).
     *
     * Generated from protobuf field <code>string backend_bucket_uri = 8;</code>
     */
    protected $backend_bucket_uri = '';
    /**
     * URI of the PSC service attachment this PSC NEG backend targets (if
     * applicable).
     *
     * Generated from protobuf field <code>string psc_service_attachment_uri = 9;</code>
     */
    protected $psc_service_attachment_uri = '';
    /**
     * PSC Google API target this PSC NEG backend targets (if applicable).
     *
     * Generated from protobuf field <code>string psc_google_api_target = 10;</code>
     */
    protected $psc_google_api_target = '';
    /**
     * URI of the health check attached to this backend (if applicable).
     *
     * Generated from protobuf field <code>string health_check_uri = 6;</code>
     */
    protected $health_check_uri = '';
    /**
     * Output only. Health check firewalls configuration state for the backend.
     * This is a result of the static firewall analysis (verifying that health
     * check traffic from required IP ranges to the backend is allowed or not).
     * The backend might still be unhealthy even if these firewalls are
     * configured. Please refer to the documentation for more information:
     * https://cloud.google.com/load-balancing/docs/firewall-rules
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.LoadBalancerBackendInfo.HealthCheckFirewallsConfigState health_check_firewalls_config_state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $health_check_firewalls_config_state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Display name of the backend. For example, it might be an instance name for
     *           the instance group backends, or an IP address and port for zonal network
     *           endpoint group backends.
     *     @type string $instance_uri
     *           URI of the backend instance (if applicable). Populated for instance group
     *           backends, and zonal NEG backends.
     *     @type string $backend_service_uri
     *           URI of the backend service this backend belongs to (if applicable).
     *     @type string $instance_group_uri
     *           URI of the instance group this backend belongs to (if applicable).
     *     @type string $network_endpoint_group_uri
     *           URI of the network endpoint group this backend belongs to (if applicable).
     *     @type string $backend_bucket_uri
     *           URI of the backend bucket this backend targets (if applicable).
     *     @type string $psc_service_attachment_uri
     *           URI of the PSC service attachment this PSC NEG backend targets (if
     *           applicable).
     *     @type string $psc_google_api_target
     *           PSC Google API target this PSC NEG backend targets (if applicable).
     *     @type string $health_check_uri
     *           URI of the health check attached to this backend (if applicable).
     *     @type int $health_check_firewalls_config_state
     *           Output only. Health check firewalls configuration state for the backend.
     *           This is a result of the static firewall analysis (verifying that health
     *           check traffic from required IP ranges to the backend is allowed or not).
     *           The backend might still be unhealthy even if these firewalls are
     *           configured. Please refer to the documentation for more information:
     *           https://cloud.google.com/load-balancing/docs/firewall-rules
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkmanagement\V1\Trace::initOnce();
        parent::__construct($data);
    }

    /**
     * Display name of the backend. For example, it might be an instance name for
     * the instance group backends, or an IP address and port for zonal network
     * endpoint group backends.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Display name of the backend. For example, it might be an instance name for
     * the instance group backends, or an IP address and port for zonal network
     * endpoint group backends.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * URI of the backend instance (if applicable). Populated for instance group
     * backends, and zonal NEG backends.
     *
     * Generated from protobuf field <code>string instance_uri = 2;</code>
     * @return string
     */
    public function getInstanceUri()
    {
        return $this->instance_uri;
    }

    /**
     * URI of the backend instance (if applicable). Populated for instance group
     * backends, and zonal NEG backends.
     *
     * Generated from protobuf field <code>string instance_uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_uri = $var;

        return $this;
    }

    /**
     * URI of the backend service this backend belongs to (if applicable).
     *
     * Generated from protobuf field <code>string backend_service_uri = 3;</code>
     * @return string
     */
    public function getBackendServiceUri()
    {
        return $this->backend_service_uri;
    }

    /**
     * URI of the backend service this backend belongs to (if applicable).
     *
     * Generated from protobuf field <code>string backend_service_uri = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setBackendServiceUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->backend_service_uri = $var;

        return $this;
    }

    /**
     * URI of the instance group this backend belongs to (if applicable).
     *
     * Generated from protobuf field <code>string instance_group_uri = 4;</code>
     * @return string
     */
    public function getInstanceGroupUri()
    {
        return $this->instance_group_uri;
    }

    /**
     * URI of the instance group this backend belongs to (if applicable).
     *
     * Generated from protobuf field <code>string instance_group_uri = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceGroupUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_group_uri = $var;

        return $this;
    }

    /**
     * URI of the network endpoint group this backend belongs to (if applicable).
     *
     * Generated from protobuf field <code>string network_endpoint_group_uri = 5;</code>
     * @return string
     */
    public function getNetworkEndpointGroupUri()
    {
        return $this->network_endpoint_group_uri;
    }

    /**
     * URI of the network endpoint group this backend belongs to (if applicable).
     *
     * Generated from protobuf field <code>string network_endpoint_group_uri = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkEndpointGroupUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->network_endpoint_group_uri = $var;

        return $this;
    }

    /**
     * URI of the backend bucket this backend targets (if applicable).
     *
     * Generated from protobuf field <code>string backend_bucket_uri = 8;</code>
     * @return string
     */
    public function getBackendBucketUri()
    {
        return $this->backend_bucket_uri;
    }

    /**
     * URI of the backend bucket this backend targets (if applicable).
     *
     * Generated from protobuf field <code>string backend_bucket_uri = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setBackendBucketUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->backend_bucket_uri = $var;

        return $this;
    }

    /**
     * URI of the PSC service attachment this PSC NEG backend targets (if
     * applicable).
     *
     * Generated from protobuf field <code>string psc_service_attachment_uri = 9;</code>
     * @return string
     */
    public function getPscServiceAttachmentUri()
    {
        return $this->psc_service_attachment_uri;
    }

    /**
     * URI of the PSC service attachment this PSC NEG backend targets (if
     * applicable).
     *
     * Generated from protobuf field <code>string psc_service_attachment_uri = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setPscServiceAttachmentUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->psc_service_attachment_uri = $var;

        return $this;
    }

    /**
     * PSC Google API target this PSC NEG backend targets (if applicable).
     *
     * Generated from protobuf field <code>string psc_google_api_target = 10;</code>
     * @return string
     */
    public function getPscGoogleApiTarget()
    {
        return $this->psc_google_api_target;
    }

    /**
     * PSC Google API target this PSC NEG backend targets (if applicable).
     *
     * Generated from protobuf field <code>string psc_google_api_target = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setPscGoogleApiTarget($var)
    {
        GPBUtil::checkString($var, True);
        $this->psc_google_api_target = $var;

        return $this;
    }

    /**
     * URI of the health check attached to this backend (if applicable).
     *
     * Generated from protobuf field <code>string health_check_uri = 6;</code>
     * @return string
     */
    public function getHealthCheckUri()
    {
        return $this->health_check_uri;
    }

    /**
     * URI of the health check attached to this backend (if applicable).
     *
     * Generated from protobuf field <code>string health_check_uri = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setHealthCheckUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->health_check_uri = $var;

        return $this;
    }

    /**
     * Output only. Health check firewalls configuration state for the backend.
     * This is a result of the static firewall analysis (verifying that health
     * check traffic from required IP ranges to the backend is allowed or not).
     * The backend might still be unhealthy even if these firewalls are
     * configured. Please refer to the documentation for more information:
     * https://cloud.google.com/load-balancing/docs/firewall-rules
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.LoadBalancerBackendInfo.HealthCheckFirewallsConfigState health_check_firewalls_config_state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getHealthCheckFirewallsConfigState()
    {
        return $this->health_check_firewalls_config_state;
    }

    /**
     * Output only. Health check firewalls configuration state for the backend.
     * This is a result of the static firewall analysis (verifying that health
     * check traffic from required IP ranges to the backend is allowed or not).
     * The backend might still be unhealthy even if these firewalls are
     * configured. Please refer to the documentation for more information:
     * https://cloud.google.com/load-balancing/docs/firewall-rules
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.LoadBalancerBackendInfo.HealthCheckFirewallsConfigState health_check_firewalls_config_state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setHealthCheckFirewallsConfigState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetworkManagement\V1\LoadBalancerBackendInfo\HealthCheckFirewallsConfigState::class);
        $this->health_check_firewalls_config_state = $var;

        return $this;
    }

}

