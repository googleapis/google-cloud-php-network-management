<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/trace.proto

namespace Google\Cloud\NetworkManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * For display only. Metadata associated with a Compute Engine route.
 *
 * Generated from protobuf message <code>google.cloud.networkmanagement.v1.RouteInfo</code>
 */
class RouteInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of route.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.RouteInfo.RouteType route_type = 8;</code>
     */
    protected $route_type = 0;
    /**
     * Type of next hop.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.RouteInfo.NextHopType next_hop_type = 9;</code>
     */
    protected $next_hop_type = 0;
    /**
     * Indicates where route is applicable.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.RouteInfo.RouteScope route_scope = 14;</code>
     */
    protected $route_scope = 0;
    /**
     * Name of a route.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     */
    protected $display_name = '';
    /**
     * URI of a route (if applicable).
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     */
    protected $uri = '';
    /**
     * Region of the route (if applicable).
     *
     * Generated from protobuf field <code>string region = 19;</code>
     */
    protected $region = '';
    /**
     * Destination IP range of the route.
     *
     * Generated from protobuf field <code>string dest_ip_range = 3;</code>
     */
    protected $dest_ip_range = '';
    /**
     * Next hop of the route.
     *
     * Generated from protobuf field <code>string next_hop = 4;</code>
     */
    protected $next_hop = '';
    /**
     * URI of a Compute Engine network. NETWORK routes only.
     *
     * Generated from protobuf field <code>string network_uri = 5;</code>
     */
    protected $network_uri = '';
    /**
     * Priority of the route.
     *
     * Generated from protobuf field <code>int32 priority = 6;</code>
     */
    protected $priority = 0;
    /**
     * Instance tags of the route.
     *
     * Generated from protobuf field <code>repeated string instance_tags = 7;</code>
     */
    private $instance_tags;
    /**
     * Source IP address range of the route. Policy based routes only.
     *
     * Generated from protobuf field <code>string src_ip_range = 10;</code>
     */
    protected $src_ip_range = '';
    /**
     * Destination port ranges of the route. Policy based routes only.
     *
     * Generated from protobuf field <code>repeated string dest_port_ranges = 11;</code>
     */
    private $dest_port_ranges;
    /**
     * Source port ranges of the route. Policy based routes only.
     *
     * Generated from protobuf field <code>repeated string src_port_ranges = 12;</code>
     */
    private $src_port_ranges;
    /**
     * Protocols of the route. Policy based routes only.
     *
     * Generated from protobuf field <code>repeated string protocols = 13;</code>
     */
    private $protocols;
    /**
     * URI of a NCC Hub. NCC_HUB routes only.
     *
     * Generated from protobuf field <code>optional string ncc_hub_uri = 15;</code>
     */
    protected $ncc_hub_uri = null;
    /**
     * URI of a NCC Spoke. NCC_HUB routes only.
     *
     * Generated from protobuf field <code>optional string ncc_spoke_uri = 16;</code>
     */
    protected $ncc_spoke_uri = null;
    /**
     * For advertised dynamic routes, the URI of the Cloud Router that advertised
     * the corresponding IP prefix.
     *
     * Generated from protobuf field <code>optional string advertised_route_source_router_uri = 17;</code>
     */
    protected $advertised_route_source_router_uri = null;
    /**
     * For advertised routes, the URI of their next hop, i.e. the URI of the
     * hybrid endpoint (VPN tunnel, Interconnect attachment, NCC router appliance)
     * the advertised prefix is advertised through, or URI of the source peered
     * network.
     *
     * Generated from protobuf field <code>optional string advertised_route_next_hop_uri = 18;</code>
     */
    protected $advertised_route_next_hop_uri = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $route_type
     *           Type of route.
     *     @type int $next_hop_type
     *           Type of next hop.
     *     @type int $route_scope
     *           Indicates where route is applicable.
     *     @type string $display_name
     *           Name of a route.
     *     @type string $uri
     *           URI of a route (if applicable).
     *     @type string $region
     *           Region of the route (if applicable).
     *     @type string $dest_ip_range
     *           Destination IP range of the route.
     *     @type string $next_hop
     *           Next hop of the route.
     *     @type string $network_uri
     *           URI of a Compute Engine network. NETWORK routes only.
     *     @type int $priority
     *           Priority of the route.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $instance_tags
     *           Instance tags of the route.
     *     @type string $src_ip_range
     *           Source IP address range of the route. Policy based routes only.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $dest_port_ranges
     *           Destination port ranges of the route. Policy based routes only.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $src_port_ranges
     *           Source port ranges of the route. Policy based routes only.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $protocols
     *           Protocols of the route. Policy based routes only.
     *     @type string $ncc_hub_uri
     *           URI of a NCC Hub. NCC_HUB routes only.
     *     @type string $ncc_spoke_uri
     *           URI of a NCC Spoke. NCC_HUB routes only.
     *     @type string $advertised_route_source_router_uri
     *           For advertised dynamic routes, the URI of the Cloud Router that advertised
     *           the corresponding IP prefix.
     *     @type string $advertised_route_next_hop_uri
     *           For advertised routes, the URI of their next hop, i.e. the URI of the
     *           hybrid endpoint (VPN tunnel, Interconnect attachment, NCC router appliance)
     *           the advertised prefix is advertised through, or URI of the source peered
     *           network.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkmanagement\V1\Trace::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of route.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.RouteInfo.RouteType route_type = 8;</code>
     * @return int
     */
    public function getRouteType()
    {
        return $this->route_type;
    }

    /**
     * Type of route.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.RouteInfo.RouteType route_type = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setRouteType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetworkManagement\V1\RouteInfo\RouteType::class);
        $this->route_type = $var;

        return $this;
    }

    /**
     * Type of next hop.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.RouteInfo.NextHopType next_hop_type = 9;</code>
     * @return int
     */
    public function getNextHopType()
    {
        return $this->next_hop_type;
    }

    /**
     * Type of next hop.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.RouteInfo.NextHopType next_hop_type = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setNextHopType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetworkManagement\V1\RouteInfo\NextHopType::class);
        $this->next_hop_type = $var;

        return $this;
    }

    /**
     * Indicates where route is applicable.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.RouteInfo.RouteScope route_scope = 14;</code>
     * @return int
     */
    public function getRouteScope()
    {
        return $this->route_scope;
    }

    /**
     * Indicates where route is applicable.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.RouteInfo.RouteScope route_scope = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setRouteScope($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetworkManagement\V1\RouteInfo\RouteScope::class);
        $this->route_scope = $var;

        return $this;
    }

    /**
     * Name of a route.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Name of a route.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
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
     * URI of a route (if applicable).
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * URI of a route (if applicable).
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Region of the route (if applicable).
     *
     * Generated from protobuf field <code>string region = 19;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Region of the route (if applicable).
     *
     * Generated from protobuf field <code>string region = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * Destination IP range of the route.
     *
     * Generated from protobuf field <code>string dest_ip_range = 3;</code>
     * @return string
     */
    public function getDestIpRange()
    {
        return $this->dest_ip_range;
    }

    /**
     * Destination IP range of the route.
     *
     * Generated from protobuf field <code>string dest_ip_range = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDestIpRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->dest_ip_range = $var;

        return $this;
    }

    /**
     * Next hop of the route.
     *
     * Generated from protobuf field <code>string next_hop = 4;</code>
     * @return string
     */
    public function getNextHop()
    {
        return $this->next_hop;
    }

    /**
     * Next hop of the route.
     *
     * Generated from protobuf field <code>string next_hop = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setNextHop($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_hop = $var;

        return $this;
    }

    /**
     * URI of a Compute Engine network. NETWORK routes only.
     *
     * Generated from protobuf field <code>string network_uri = 5;</code>
     * @return string
     */
    public function getNetworkUri()
    {
        return $this->network_uri;
    }

    /**
     * URI of a Compute Engine network. NETWORK routes only.
     *
     * Generated from protobuf field <code>string network_uri = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->network_uri = $var;

        return $this;
    }

    /**
     * Priority of the route.
     *
     * Generated from protobuf field <code>int32 priority = 6;</code>
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Priority of the route.
     *
     * Generated from protobuf field <code>int32 priority = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkInt32($var);
        $this->priority = $var;

        return $this;
    }

    /**
     * Instance tags of the route.
     *
     * Generated from protobuf field <code>repeated string instance_tags = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstanceTags()
    {
        return $this->instance_tags;
    }

    /**
     * Instance tags of the route.
     *
     * Generated from protobuf field <code>repeated string instance_tags = 7;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstanceTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->instance_tags = $arr;

        return $this;
    }

    /**
     * Source IP address range of the route. Policy based routes only.
     *
     * Generated from protobuf field <code>string src_ip_range = 10;</code>
     * @return string
     */
    public function getSrcIpRange()
    {
        return $this->src_ip_range;
    }

    /**
     * Source IP address range of the route. Policy based routes only.
     *
     * Generated from protobuf field <code>string src_ip_range = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setSrcIpRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->src_ip_range = $var;

        return $this;
    }

    /**
     * Destination port ranges of the route. Policy based routes only.
     *
     * Generated from protobuf field <code>repeated string dest_port_ranges = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDestPortRanges()
    {
        return $this->dest_port_ranges;
    }

    /**
     * Destination port ranges of the route. Policy based routes only.
     *
     * Generated from protobuf field <code>repeated string dest_port_ranges = 11;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDestPortRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->dest_port_ranges = $arr;

        return $this;
    }

    /**
     * Source port ranges of the route. Policy based routes only.
     *
     * Generated from protobuf field <code>repeated string src_port_ranges = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSrcPortRanges()
    {
        return $this->src_port_ranges;
    }

    /**
     * Source port ranges of the route. Policy based routes only.
     *
     * Generated from protobuf field <code>repeated string src_port_ranges = 12;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSrcPortRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->src_port_ranges = $arr;

        return $this;
    }

    /**
     * Protocols of the route. Policy based routes only.
     *
     * Generated from protobuf field <code>repeated string protocols = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProtocols()
    {
        return $this->protocols;
    }

    /**
     * Protocols of the route. Policy based routes only.
     *
     * Generated from protobuf field <code>repeated string protocols = 13;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProtocols($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->protocols = $arr;

        return $this;
    }

    /**
     * URI of a NCC Hub. NCC_HUB routes only.
     *
     * Generated from protobuf field <code>optional string ncc_hub_uri = 15;</code>
     * @return string
     */
    public function getNccHubUri()
    {
        return isset($this->ncc_hub_uri) ? $this->ncc_hub_uri : '';
    }

    public function hasNccHubUri()
    {
        return isset($this->ncc_hub_uri);
    }

    public function clearNccHubUri()
    {
        unset($this->ncc_hub_uri);
    }

    /**
     * URI of a NCC Hub. NCC_HUB routes only.
     *
     * Generated from protobuf field <code>optional string ncc_hub_uri = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setNccHubUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->ncc_hub_uri = $var;

        return $this;
    }

    /**
     * URI of a NCC Spoke. NCC_HUB routes only.
     *
     * Generated from protobuf field <code>optional string ncc_spoke_uri = 16;</code>
     * @return string
     */
    public function getNccSpokeUri()
    {
        return isset($this->ncc_spoke_uri) ? $this->ncc_spoke_uri : '';
    }

    public function hasNccSpokeUri()
    {
        return isset($this->ncc_spoke_uri);
    }

    public function clearNccSpokeUri()
    {
        unset($this->ncc_spoke_uri);
    }

    /**
     * URI of a NCC Spoke. NCC_HUB routes only.
     *
     * Generated from protobuf field <code>optional string ncc_spoke_uri = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setNccSpokeUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->ncc_spoke_uri = $var;

        return $this;
    }

    /**
     * For advertised dynamic routes, the URI of the Cloud Router that advertised
     * the corresponding IP prefix.
     *
     * Generated from protobuf field <code>optional string advertised_route_source_router_uri = 17;</code>
     * @return string
     */
    public function getAdvertisedRouteSourceRouterUri()
    {
        return isset($this->advertised_route_source_router_uri) ? $this->advertised_route_source_router_uri : '';
    }

    public function hasAdvertisedRouteSourceRouterUri()
    {
        return isset($this->advertised_route_source_router_uri);
    }

    public function clearAdvertisedRouteSourceRouterUri()
    {
        unset($this->advertised_route_source_router_uri);
    }

    /**
     * For advertised dynamic routes, the URI of the Cloud Router that advertised
     * the corresponding IP prefix.
     *
     * Generated from protobuf field <code>optional string advertised_route_source_router_uri = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setAdvertisedRouteSourceRouterUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->advertised_route_source_router_uri = $var;

        return $this;
    }

    /**
     * For advertised routes, the URI of their next hop, i.e. the URI of the
     * hybrid endpoint (VPN tunnel, Interconnect attachment, NCC router appliance)
     * the advertised prefix is advertised through, or URI of the source peered
     * network.
     *
     * Generated from protobuf field <code>optional string advertised_route_next_hop_uri = 18;</code>
     * @return string
     */
    public function getAdvertisedRouteNextHopUri()
    {
        return isset($this->advertised_route_next_hop_uri) ? $this->advertised_route_next_hop_uri : '';
    }

    public function hasAdvertisedRouteNextHopUri()
    {
        return isset($this->advertised_route_next_hop_uri);
    }

    public function clearAdvertisedRouteNextHopUri()
    {
        unset($this->advertised_route_next_hop_uri);
    }

    /**
     * For advertised routes, the URI of their next hop, i.e. the URI of the
     * hybrid endpoint (VPN tunnel, Interconnect attachment, NCC router appliance)
     * the advertised prefix is advertised through, or URI of the source peered
     * network.
     *
     * Generated from protobuf field <code>optional string advertised_route_next_hop_uri = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setAdvertisedRouteNextHopUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->advertised_route_next_hop_uri = $var;

        return $this;
    }

}

