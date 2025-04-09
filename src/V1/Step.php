<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/trace.proto

namespace Google\Cloud\NetworkManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A simulated forwarding path is composed of multiple steps.
 * Each step has a well-defined state and an associated configuration.
 *
 * Generated from protobuf message <code>google.cloud.networkmanagement.v1.Step</code>
 */
class Step extends \Google\Protobuf\Internal\Message
{
    /**
     * A description of the step. Usually this is a summary of the state.
     *
     * Generated from protobuf field <code>string description = 1;</code>
     */
    protected $description = '';
    /**
     * Each step is in one of the pre-defined states.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.Step.State state = 2;</code>
     */
    protected $state = 0;
    /**
     * This is a step that leads to the final state Drop.
     *
     * Generated from protobuf field <code>bool causes_drop = 3;</code>
     */
    protected $causes_drop = false;
    /**
     * Project ID that contains the configuration this step is validating.
     *
     * Generated from protobuf field <code>string project_id = 4;</code>
     */
    protected $project_id = '';
    protected $step_info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $description
     *           A description of the step. Usually this is a summary of the state.
     *     @type int $state
     *           Each step is in one of the pre-defined states.
     *     @type bool $causes_drop
     *           This is a step that leads to the final state Drop.
     *     @type string $project_id
     *           Project ID that contains the configuration this step is validating.
     *     @type \Google\Cloud\NetworkManagement\V1\InstanceInfo $instance
     *           Display information of a Compute Engine instance.
     *     @type \Google\Cloud\NetworkManagement\V1\FirewallInfo $firewall
     *           Display information of a Compute Engine firewall rule.
     *     @type \Google\Cloud\NetworkManagement\V1\RouteInfo $route
     *           Display information of a Compute Engine route.
     *     @type \Google\Cloud\NetworkManagement\V1\EndpointInfo $endpoint
     *           Display information of the source and destination under analysis.
     *           The endpoint information in an intermediate state may differ with the
     *           initial input, as it might be modified by state like NAT,
     *           or Connection Proxy.
     *     @type \Google\Cloud\NetworkManagement\V1\GoogleServiceInfo $google_service
     *           Display information of a Google service
     *     @type \Google\Cloud\NetworkManagement\V1\ForwardingRuleInfo $forwarding_rule
     *           Display information of a Compute Engine forwarding rule.
     *     @type \Google\Cloud\NetworkManagement\V1\VpnGatewayInfo $vpn_gateway
     *           Display information of a Compute Engine VPN gateway.
     *     @type \Google\Cloud\NetworkManagement\V1\VpnTunnelInfo $vpn_tunnel
     *           Display information of a Compute Engine VPN tunnel.
     *     @type \Google\Cloud\NetworkManagement\V1\VpcConnectorInfo $vpc_connector
     *           Display information of a VPC connector.
     *     @type \Google\Cloud\NetworkManagement\V1\DirectVpcEgressConnectionInfo $direct_vpc_egress_connection
     *           Display information of a serverless direct VPC egress connection.
     *     @type \Google\Cloud\NetworkManagement\V1\ServerlessExternalConnectionInfo $serverless_external_connection
     *           Display information of a serverless public (external) connection.
     *     @type \Google\Cloud\NetworkManagement\V1\DeliverInfo $deliver
     *           Display information of the final state "deliver" and reason.
     *     @type \Google\Cloud\NetworkManagement\V1\ForwardInfo $forward
     *           Display information of the final state "forward" and reason.
     *     @type \Google\Cloud\NetworkManagement\V1\AbortInfo $abort
     *           Display information of the final state "abort" and reason.
     *     @type \Google\Cloud\NetworkManagement\V1\DropInfo $drop
     *           Display information of the final state "drop" and reason.
     *     @type \Google\Cloud\NetworkManagement\V1\LoadBalancerInfo $load_balancer
     *           Display information of the load balancers. Deprecated in favor of the
     *           `load_balancer_backend_info` field, not used in new tests.
     *     @type \Google\Cloud\NetworkManagement\V1\NetworkInfo $network
     *           Display information of a Google Cloud network.
     *     @type \Google\Cloud\NetworkManagement\V1\GKEMasterInfo $gke_master
     *           Display information of a Google Kubernetes Engine cluster master.
     *     @type \Google\Cloud\NetworkManagement\V1\CloudSQLInstanceInfo $cloud_sql_instance
     *           Display information of a Cloud SQL instance.
     *     @type \Google\Cloud\NetworkManagement\V1\RedisInstanceInfo $redis_instance
     *           Display information of a Redis Instance.
     *     @type \Google\Cloud\NetworkManagement\V1\RedisClusterInfo $redis_cluster
     *           Display information of a Redis Cluster.
     *     @type \Google\Cloud\NetworkManagement\V1\CloudFunctionInfo $cloud_function
     *           Display information of a Cloud Function.
     *     @type \Google\Cloud\NetworkManagement\V1\AppEngineVersionInfo $app_engine_version
     *           Display information of an App Engine service version.
     *     @type \Google\Cloud\NetworkManagement\V1\CloudRunRevisionInfo $cloud_run_revision
     *           Display information of a Cloud Run revision.
     *     @type \Google\Cloud\NetworkManagement\V1\NatInfo $nat
     *           Display information of a NAT.
     *     @type \Google\Cloud\NetworkManagement\V1\ProxyConnectionInfo $proxy_connection
     *           Display information of a ProxyConnection.
     *     @type \Google\Cloud\NetworkManagement\V1\LoadBalancerBackendInfo $load_balancer_backend_info
     *           Display information of a specific load balancer backend.
     *     @type \Google\Cloud\NetworkManagement\V1\StorageBucketInfo $storage_bucket
     *           Display information of a Storage Bucket. Used only for return traces.
     *     @type \Google\Cloud\NetworkManagement\V1\ServerlessNegInfo $serverless_neg
     *           Display information of a Serverless network endpoint group backend. Used
     *           only for return traces.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkmanagement\V1\Trace::initOnce();
        parent::__construct($data);
    }

    /**
     * A description of the step. Usually this is a summary of the state.
     *
     * Generated from protobuf field <code>string description = 1;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A description of the step. Usually this is a summary of the state.
     *
     * Generated from protobuf field <code>string description = 1;</code>
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
     * Each step is in one of the pre-defined states.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.Step.State state = 2;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Each step is in one of the pre-defined states.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.Step.State state = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetworkManagement\V1\Step\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * This is a step that leads to the final state Drop.
     *
     * Generated from protobuf field <code>bool causes_drop = 3;</code>
     * @return bool
     */
    public function getCausesDrop()
    {
        return $this->causes_drop;
    }

    /**
     * This is a step that leads to the final state Drop.
     *
     * Generated from protobuf field <code>bool causes_drop = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setCausesDrop($var)
    {
        GPBUtil::checkBool($var);
        $this->causes_drop = $var;

        return $this;
    }

    /**
     * Project ID that contains the configuration this step is validating.
     *
     * Generated from protobuf field <code>string project_id = 4;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Project ID that contains the configuration this step is validating.
     *
     * Generated from protobuf field <code>string project_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Display information of a Compute Engine instance.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.InstanceInfo instance = 5;</code>
     * @return \Google\Cloud\NetworkManagement\V1\InstanceInfo|null
     */
    public function getInstance()
    {
        return $this->readOneof(5);
    }

    public function hasInstance()
    {
        return $this->hasOneof(5);
    }

    /**
     * Display information of a Compute Engine instance.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.InstanceInfo instance = 5;</code>
     * @param \Google\Cloud\NetworkManagement\V1\InstanceInfo $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\InstanceInfo::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Display information of a Compute Engine firewall rule.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.FirewallInfo firewall = 6;</code>
     * @return \Google\Cloud\NetworkManagement\V1\FirewallInfo|null
     */
    public function getFirewall()
    {
        return $this->readOneof(6);
    }

    public function hasFirewall()
    {
        return $this->hasOneof(6);
    }

    /**
     * Display information of a Compute Engine firewall rule.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.FirewallInfo firewall = 6;</code>
     * @param \Google\Cloud\NetworkManagement\V1\FirewallInfo $var
     * @return $this
     */
    public function setFirewall($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\FirewallInfo::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Display information of a Compute Engine route.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.RouteInfo route = 7;</code>
     * @return \Google\Cloud\NetworkManagement\V1\RouteInfo|null
     */
    public function getRoute()
    {
        return $this->readOneof(7);
    }

    public function hasRoute()
    {
        return $this->hasOneof(7);
    }

    /**
     * Display information of a Compute Engine route.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.RouteInfo route = 7;</code>
     * @param \Google\Cloud\NetworkManagement\V1\RouteInfo $var
     * @return $this
     */
    public function setRoute($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\RouteInfo::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Display information of the source and destination under analysis.
     * The endpoint information in an intermediate state may differ with the
     * initial input, as it might be modified by state like NAT,
     * or Connection Proxy.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.EndpointInfo endpoint = 8;</code>
     * @return \Google\Cloud\NetworkManagement\V1\EndpointInfo|null
     */
    public function getEndpoint()
    {
        return $this->readOneof(8);
    }

    public function hasEndpoint()
    {
        return $this->hasOneof(8);
    }

    /**
     * Display information of the source and destination under analysis.
     * The endpoint information in an intermediate state may differ with the
     * initial input, as it might be modified by state like NAT,
     * or Connection Proxy.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.EndpointInfo endpoint = 8;</code>
     * @param \Google\Cloud\NetworkManagement\V1\EndpointInfo $var
     * @return $this
     */
    public function setEndpoint($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\EndpointInfo::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Display information of a Google service
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.GoogleServiceInfo google_service = 24;</code>
     * @return \Google\Cloud\NetworkManagement\V1\GoogleServiceInfo|null
     */
    public function getGoogleService()
    {
        return $this->readOneof(24);
    }

    public function hasGoogleService()
    {
        return $this->hasOneof(24);
    }

    /**
     * Display information of a Google service
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.GoogleServiceInfo google_service = 24;</code>
     * @param \Google\Cloud\NetworkManagement\V1\GoogleServiceInfo $var
     * @return $this
     */
    public function setGoogleService($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\GoogleServiceInfo::class);
        $this->writeOneof(24, $var);

        return $this;
    }

    /**
     * Display information of a Compute Engine forwarding rule.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ForwardingRuleInfo forwarding_rule = 9;</code>
     * @return \Google\Cloud\NetworkManagement\V1\ForwardingRuleInfo|null
     */
    public function getForwardingRule()
    {
        return $this->readOneof(9);
    }

    public function hasForwardingRule()
    {
        return $this->hasOneof(9);
    }

    /**
     * Display information of a Compute Engine forwarding rule.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ForwardingRuleInfo forwarding_rule = 9;</code>
     * @param \Google\Cloud\NetworkManagement\V1\ForwardingRuleInfo $var
     * @return $this
     */
    public function setForwardingRule($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\ForwardingRuleInfo::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Display information of a Compute Engine VPN gateway.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.VpnGatewayInfo vpn_gateway = 10;</code>
     * @return \Google\Cloud\NetworkManagement\V1\VpnGatewayInfo|null
     */
    public function getVpnGateway()
    {
        return $this->readOneof(10);
    }

    public function hasVpnGateway()
    {
        return $this->hasOneof(10);
    }

    /**
     * Display information of a Compute Engine VPN gateway.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.VpnGatewayInfo vpn_gateway = 10;</code>
     * @param \Google\Cloud\NetworkManagement\V1\VpnGatewayInfo $var
     * @return $this
     */
    public function setVpnGateway($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\VpnGatewayInfo::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Display information of a Compute Engine VPN tunnel.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.VpnTunnelInfo vpn_tunnel = 11;</code>
     * @return \Google\Cloud\NetworkManagement\V1\VpnTunnelInfo|null
     */
    public function getVpnTunnel()
    {
        return $this->readOneof(11);
    }

    public function hasVpnTunnel()
    {
        return $this->hasOneof(11);
    }

    /**
     * Display information of a Compute Engine VPN tunnel.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.VpnTunnelInfo vpn_tunnel = 11;</code>
     * @param \Google\Cloud\NetworkManagement\V1\VpnTunnelInfo $var
     * @return $this
     */
    public function setVpnTunnel($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\VpnTunnelInfo::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Display information of a VPC connector.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.VpcConnectorInfo vpc_connector = 21;</code>
     * @return \Google\Cloud\NetworkManagement\V1\VpcConnectorInfo|null
     */
    public function getVpcConnector()
    {
        return $this->readOneof(21);
    }

    public function hasVpcConnector()
    {
        return $this->hasOneof(21);
    }

    /**
     * Display information of a VPC connector.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.VpcConnectorInfo vpc_connector = 21;</code>
     * @param \Google\Cloud\NetworkManagement\V1\VpcConnectorInfo $var
     * @return $this
     */
    public function setVpcConnector($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\VpcConnectorInfo::class);
        $this->writeOneof(21, $var);

        return $this;
    }

    /**
     * Display information of a serverless direct VPC egress connection.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.DirectVpcEgressConnectionInfo direct_vpc_egress_connection = 33;</code>
     * @return \Google\Cloud\NetworkManagement\V1\DirectVpcEgressConnectionInfo|null
     */
    public function getDirectVpcEgressConnection()
    {
        return $this->readOneof(33);
    }

    public function hasDirectVpcEgressConnection()
    {
        return $this->hasOneof(33);
    }

    /**
     * Display information of a serverless direct VPC egress connection.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.DirectVpcEgressConnectionInfo direct_vpc_egress_connection = 33;</code>
     * @param \Google\Cloud\NetworkManagement\V1\DirectVpcEgressConnectionInfo $var
     * @return $this
     */
    public function setDirectVpcEgressConnection($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\DirectVpcEgressConnectionInfo::class);
        $this->writeOneof(33, $var);

        return $this;
    }

    /**
     * Display information of a serverless public (external) connection.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ServerlessExternalConnectionInfo serverless_external_connection = 34;</code>
     * @return \Google\Cloud\NetworkManagement\V1\ServerlessExternalConnectionInfo|null
     */
    public function getServerlessExternalConnection()
    {
        return $this->readOneof(34);
    }

    public function hasServerlessExternalConnection()
    {
        return $this->hasOneof(34);
    }

    /**
     * Display information of a serverless public (external) connection.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ServerlessExternalConnectionInfo serverless_external_connection = 34;</code>
     * @param \Google\Cloud\NetworkManagement\V1\ServerlessExternalConnectionInfo $var
     * @return $this
     */
    public function setServerlessExternalConnection($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\ServerlessExternalConnectionInfo::class);
        $this->writeOneof(34, $var);

        return $this;
    }

    /**
     * Display information of the final state "deliver" and reason.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.DeliverInfo deliver = 12;</code>
     * @return \Google\Cloud\NetworkManagement\V1\DeliverInfo|null
     */
    public function getDeliver()
    {
        return $this->readOneof(12);
    }

    public function hasDeliver()
    {
        return $this->hasOneof(12);
    }

    /**
     * Display information of the final state "deliver" and reason.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.DeliverInfo deliver = 12;</code>
     * @param \Google\Cloud\NetworkManagement\V1\DeliverInfo $var
     * @return $this
     */
    public function setDeliver($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\DeliverInfo::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Display information of the final state "forward" and reason.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ForwardInfo forward = 13;</code>
     * @return \Google\Cloud\NetworkManagement\V1\ForwardInfo|null
     */
    public function getForward()
    {
        return $this->readOneof(13);
    }

    public function hasForward()
    {
        return $this->hasOneof(13);
    }

    /**
     * Display information of the final state "forward" and reason.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ForwardInfo forward = 13;</code>
     * @param \Google\Cloud\NetworkManagement\V1\ForwardInfo $var
     * @return $this
     */
    public function setForward($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\ForwardInfo::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Display information of the final state "abort" and reason.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.AbortInfo abort = 14;</code>
     * @return \Google\Cloud\NetworkManagement\V1\AbortInfo|null
     */
    public function getAbort()
    {
        return $this->readOneof(14);
    }

    public function hasAbort()
    {
        return $this->hasOneof(14);
    }

    /**
     * Display information of the final state "abort" and reason.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.AbortInfo abort = 14;</code>
     * @param \Google\Cloud\NetworkManagement\V1\AbortInfo $var
     * @return $this
     */
    public function setAbort($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\AbortInfo::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Display information of the final state "drop" and reason.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.DropInfo drop = 15;</code>
     * @return \Google\Cloud\NetworkManagement\V1\DropInfo|null
     */
    public function getDrop()
    {
        return $this->readOneof(15);
    }

    public function hasDrop()
    {
        return $this->hasOneof(15);
    }

    /**
     * Display information of the final state "drop" and reason.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.DropInfo drop = 15;</code>
     * @param \Google\Cloud\NetworkManagement\V1\DropInfo $var
     * @return $this
     */
    public function setDrop($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\DropInfo::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Display information of the load balancers. Deprecated in favor of the
     * `load_balancer_backend_info` field, not used in new tests.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.LoadBalancerInfo load_balancer = 16 [deprecated = true];</code>
     * @return \Google\Cloud\NetworkManagement\V1\LoadBalancerInfo|null
     * @deprecated
     */
    public function getLoadBalancer()
    {
        @trigger_error('load_balancer is deprecated.', E_USER_DEPRECATED);
        return $this->readOneof(16);
    }

    public function hasLoadBalancer()
    {
        @trigger_error('load_balancer is deprecated.', E_USER_DEPRECATED);
        return $this->hasOneof(16);
    }

    /**
     * Display information of the load balancers. Deprecated in favor of the
     * `load_balancer_backend_info` field, not used in new tests.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.LoadBalancerInfo load_balancer = 16 [deprecated = true];</code>
     * @param \Google\Cloud\NetworkManagement\V1\LoadBalancerInfo $var
     * @return $this
     * @deprecated
     */
    public function setLoadBalancer($var)
    {
        @trigger_error('load_balancer is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\LoadBalancerInfo::class);
        $this->writeOneof(16, $var);

        return $this;
    }

    /**
     * Display information of a Google Cloud network.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.NetworkInfo network = 17;</code>
     * @return \Google\Cloud\NetworkManagement\V1\NetworkInfo|null
     */
    public function getNetwork()
    {
        return $this->readOneof(17);
    }

    public function hasNetwork()
    {
        return $this->hasOneof(17);
    }

    /**
     * Display information of a Google Cloud network.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.NetworkInfo network = 17;</code>
     * @param \Google\Cloud\NetworkManagement\V1\NetworkInfo $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\NetworkInfo::class);
        $this->writeOneof(17, $var);

        return $this;
    }

    /**
     * Display information of a Google Kubernetes Engine cluster master.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.GKEMasterInfo gke_master = 18;</code>
     * @return \Google\Cloud\NetworkManagement\V1\GKEMasterInfo|null
     */
    public function getGkeMaster()
    {
        return $this->readOneof(18);
    }

    public function hasGkeMaster()
    {
        return $this->hasOneof(18);
    }

    /**
     * Display information of a Google Kubernetes Engine cluster master.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.GKEMasterInfo gke_master = 18;</code>
     * @param \Google\Cloud\NetworkManagement\V1\GKEMasterInfo $var
     * @return $this
     */
    public function setGkeMaster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\GKEMasterInfo::class);
        $this->writeOneof(18, $var);

        return $this;
    }

    /**
     * Display information of a Cloud SQL instance.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.CloudSQLInstanceInfo cloud_sql_instance = 19;</code>
     * @return \Google\Cloud\NetworkManagement\V1\CloudSQLInstanceInfo|null
     */
    public function getCloudSqlInstance()
    {
        return $this->readOneof(19);
    }

    public function hasCloudSqlInstance()
    {
        return $this->hasOneof(19);
    }

    /**
     * Display information of a Cloud SQL instance.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.CloudSQLInstanceInfo cloud_sql_instance = 19;</code>
     * @param \Google\Cloud\NetworkManagement\V1\CloudSQLInstanceInfo $var
     * @return $this
     */
    public function setCloudSqlInstance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\CloudSQLInstanceInfo::class);
        $this->writeOneof(19, $var);

        return $this;
    }

    /**
     * Display information of a Redis Instance.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.RedisInstanceInfo redis_instance = 30;</code>
     * @return \Google\Cloud\NetworkManagement\V1\RedisInstanceInfo|null
     */
    public function getRedisInstance()
    {
        return $this->readOneof(30);
    }

    public function hasRedisInstance()
    {
        return $this->hasOneof(30);
    }

    /**
     * Display information of a Redis Instance.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.RedisInstanceInfo redis_instance = 30;</code>
     * @param \Google\Cloud\NetworkManagement\V1\RedisInstanceInfo $var
     * @return $this
     */
    public function setRedisInstance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\RedisInstanceInfo::class);
        $this->writeOneof(30, $var);

        return $this;
    }

    /**
     * Display information of a Redis Cluster.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.RedisClusterInfo redis_cluster = 31;</code>
     * @return \Google\Cloud\NetworkManagement\V1\RedisClusterInfo|null
     */
    public function getRedisCluster()
    {
        return $this->readOneof(31);
    }

    public function hasRedisCluster()
    {
        return $this->hasOneof(31);
    }

    /**
     * Display information of a Redis Cluster.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.RedisClusterInfo redis_cluster = 31;</code>
     * @param \Google\Cloud\NetworkManagement\V1\RedisClusterInfo $var
     * @return $this
     */
    public function setRedisCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\RedisClusterInfo::class);
        $this->writeOneof(31, $var);

        return $this;
    }

    /**
     * Display information of a Cloud Function.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.CloudFunctionInfo cloud_function = 20;</code>
     * @return \Google\Cloud\NetworkManagement\V1\CloudFunctionInfo|null
     */
    public function getCloudFunction()
    {
        return $this->readOneof(20);
    }

    public function hasCloudFunction()
    {
        return $this->hasOneof(20);
    }

    /**
     * Display information of a Cloud Function.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.CloudFunctionInfo cloud_function = 20;</code>
     * @param \Google\Cloud\NetworkManagement\V1\CloudFunctionInfo $var
     * @return $this
     */
    public function setCloudFunction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\CloudFunctionInfo::class);
        $this->writeOneof(20, $var);

        return $this;
    }

    /**
     * Display information of an App Engine service version.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.AppEngineVersionInfo app_engine_version = 22;</code>
     * @return \Google\Cloud\NetworkManagement\V1\AppEngineVersionInfo|null
     */
    public function getAppEngineVersion()
    {
        return $this->readOneof(22);
    }

    public function hasAppEngineVersion()
    {
        return $this->hasOneof(22);
    }

    /**
     * Display information of an App Engine service version.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.AppEngineVersionInfo app_engine_version = 22;</code>
     * @param \Google\Cloud\NetworkManagement\V1\AppEngineVersionInfo $var
     * @return $this
     */
    public function setAppEngineVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\AppEngineVersionInfo::class);
        $this->writeOneof(22, $var);

        return $this;
    }

    /**
     * Display information of a Cloud Run revision.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.CloudRunRevisionInfo cloud_run_revision = 23;</code>
     * @return \Google\Cloud\NetworkManagement\V1\CloudRunRevisionInfo|null
     */
    public function getCloudRunRevision()
    {
        return $this->readOneof(23);
    }

    public function hasCloudRunRevision()
    {
        return $this->hasOneof(23);
    }

    /**
     * Display information of a Cloud Run revision.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.CloudRunRevisionInfo cloud_run_revision = 23;</code>
     * @param \Google\Cloud\NetworkManagement\V1\CloudRunRevisionInfo $var
     * @return $this
     */
    public function setCloudRunRevision($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\CloudRunRevisionInfo::class);
        $this->writeOneof(23, $var);

        return $this;
    }

    /**
     * Display information of a NAT.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.NatInfo nat = 25;</code>
     * @return \Google\Cloud\NetworkManagement\V1\NatInfo|null
     */
    public function getNat()
    {
        return $this->readOneof(25);
    }

    public function hasNat()
    {
        return $this->hasOneof(25);
    }

    /**
     * Display information of a NAT.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.NatInfo nat = 25;</code>
     * @param \Google\Cloud\NetworkManagement\V1\NatInfo $var
     * @return $this
     */
    public function setNat($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\NatInfo::class);
        $this->writeOneof(25, $var);

        return $this;
    }

    /**
     * Display information of a ProxyConnection.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ProxyConnectionInfo proxy_connection = 26;</code>
     * @return \Google\Cloud\NetworkManagement\V1\ProxyConnectionInfo|null
     */
    public function getProxyConnection()
    {
        return $this->readOneof(26);
    }

    public function hasProxyConnection()
    {
        return $this->hasOneof(26);
    }

    /**
     * Display information of a ProxyConnection.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ProxyConnectionInfo proxy_connection = 26;</code>
     * @param \Google\Cloud\NetworkManagement\V1\ProxyConnectionInfo $var
     * @return $this
     */
    public function setProxyConnection($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\ProxyConnectionInfo::class);
        $this->writeOneof(26, $var);

        return $this;
    }

    /**
     * Display information of a specific load balancer backend.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.LoadBalancerBackendInfo load_balancer_backend_info = 27;</code>
     * @return \Google\Cloud\NetworkManagement\V1\LoadBalancerBackendInfo|null
     */
    public function getLoadBalancerBackendInfo()
    {
        return $this->readOneof(27);
    }

    public function hasLoadBalancerBackendInfo()
    {
        return $this->hasOneof(27);
    }

    /**
     * Display information of a specific load balancer backend.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.LoadBalancerBackendInfo load_balancer_backend_info = 27;</code>
     * @param \Google\Cloud\NetworkManagement\V1\LoadBalancerBackendInfo $var
     * @return $this
     */
    public function setLoadBalancerBackendInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\LoadBalancerBackendInfo::class);
        $this->writeOneof(27, $var);

        return $this;
    }

    /**
     * Display information of a Storage Bucket. Used only for return traces.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.StorageBucketInfo storage_bucket = 28;</code>
     * @return \Google\Cloud\NetworkManagement\V1\StorageBucketInfo|null
     */
    public function getStorageBucket()
    {
        return $this->readOneof(28);
    }

    public function hasStorageBucket()
    {
        return $this->hasOneof(28);
    }

    /**
     * Display information of a Storage Bucket. Used only for return traces.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.StorageBucketInfo storage_bucket = 28;</code>
     * @param \Google\Cloud\NetworkManagement\V1\StorageBucketInfo $var
     * @return $this
     */
    public function setStorageBucket($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\StorageBucketInfo::class);
        $this->writeOneof(28, $var);

        return $this;
    }

    /**
     * Display information of a Serverless network endpoint group backend. Used
     * only for return traces.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ServerlessNegInfo serverless_neg = 29;</code>
     * @return \Google\Cloud\NetworkManagement\V1\ServerlessNegInfo|null
     */
    public function getServerlessNeg()
    {
        return $this->readOneof(29);
    }

    public function hasServerlessNeg()
    {
        return $this->hasOneof(29);
    }

    /**
     * Display information of a Serverless network endpoint group backend. Used
     * only for return traces.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ServerlessNegInfo serverless_neg = 29;</code>
     * @param \Google\Cloud\NetworkManagement\V1\ServerlessNegInfo $var
     * @return $this
     */
    public function setServerlessNeg($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\ServerlessNegInfo::class);
        $this->writeOneof(29, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getStepInfo()
    {
        return $this->whichOneof("step_info");
    }

}

