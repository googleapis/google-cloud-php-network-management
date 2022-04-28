<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/trace.proto

namespace Google\Cloud\NetworkManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * For display only. Metadata associated with a Compute Engine VPN gateway.
 *
 * Generated from protobuf message <code>google.cloud.networkmanagement.v1.VpnGatewayInfo</code>
 */
class VpnGatewayInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of a VPN gateway.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     */
    protected $display_name = '';
    /**
     * URI of a VPN gateway.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     */
    protected $uri = '';
    /**
     * URI of a Compute Engine network where the VPN gateway is configured.
     *
     * Generated from protobuf field <code>string network_uri = 3;</code>
     */
    protected $network_uri = '';
    /**
     * IP address of the VPN gateway.
     *
     * Generated from protobuf field <code>string ip_address = 4;</code>
     */
    protected $ip_address = '';
    /**
     * A VPN tunnel that is associated with this VPN gateway.
     * There may be multiple VPN tunnels configured on a VPN gateway, and only
     * the one relevant to the test is displayed.
     *
     * Generated from protobuf field <code>string vpn_tunnel_uri = 5;</code>
     */
    protected $vpn_tunnel_uri = '';
    /**
     * Name of a Google Cloud region where this VPN gateway is configured.
     *
     * Generated from protobuf field <code>string region = 6;</code>
     */
    protected $region = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $display_name
     *           Name of a VPN gateway.
     *     @type string $uri
     *           URI of a VPN gateway.
     *     @type string $network_uri
     *           URI of a Compute Engine network where the VPN gateway is configured.
     *     @type string $ip_address
     *           IP address of the VPN gateway.
     *     @type string $vpn_tunnel_uri
     *           A VPN tunnel that is associated with this VPN gateway.
     *           There may be multiple VPN tunnels configured on a VPN gateway, and only
     *           the one relevant to the test is displayed.
     *     @type string $region
     *           Name of a Google Cloud region where this VPN gateway is configured.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkmanagement\V1\Trace::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of a VPN gateway.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Name of a VPN gateway.
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
     * URI of a VPN gateway.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * URI of a VPN gateway.
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
     * URI of a Compute Engine network where the VPN gateway is configured.
     *
     * Generated from protobuf field <code>string network_uri = 3;</code>
     * @return string
     */
    public function getNetworkUri()
    {
        return $this->network_uri;
    }

    /**
     * URI of a Compute Engine network where the VPN gateway is configured.
     *
     * Generated from protobuf field <code>string network_uri = 3;</code>
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
     * IP address of the VPN gateway.
     *
     * Generated from protobuf field <code>string ip_address = 4;</code>
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }

    /**
     * IP address of the VPN gateway.
     *
     * Generated from protobuf field <code>string ip_address = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setIpAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip_address = $var;

        return $this;
    }

    /**
     * A VPN tunnel that is associated with this VPN gateway.
     * There may be multiple VPN tunnels configured on a VPN gateway, and only
     * the one relevant to the test is displayed.
     *
     * Generated from protobuf field <code>string vpn_tunnel_uri = 5;</code>
     * @return string
     */
    public function getVpnTunnelUri()
    {
        return $this->vpn_tunnel_uri;
    }

    /**
     * A VPN tunnel that is associated with this VPN gateway.
     * There may be multiple VPN tunnels configured on a VPN gateway, and only
     * the one relevant to the test is displayed.
     *
     * Generated from protobuf field <code>string vpn_tunnel_uri = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setVpnTunnelUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->vpn_tunnel_uri = $var;

        return $this;
    }

    /**
     * Name of a Google Cloud region where this VPN gateway is configured.
     *
     * Generated from protobuf field <code>string region = 6;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Name of a Google Cloud region where this VPN gateway is configured.
     *
     * Generated from protobuf field <code>string region = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

}

