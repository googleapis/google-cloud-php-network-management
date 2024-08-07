<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/trace.proto

namespace Google\Cloud\NetworkManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * For display only. Metadata associated with ProxyConnection.
 *
 * Generated from protobuf message <code>google.cloud.networkmanagement.v1.ProxyConnectionInfo</code>
 */
class ProxyConnectionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * IP protocol in string format, for example: "TCP", "UDP", "ICMP".
     *
     * Generated from protobuf field <code>string protocol = 1;</code>
     */
    protected $protocol = '';
    /**
     * Source IP address of an original connection.
     *
     * Generated from protobuf field <code>string old_source_ip = 2;</code>
     */
    protected $old_source_ip = '';
    /**
     * Source IP address of a new connection.
     *
     * Generated from protobuf field <code>string new_source_ip = 3;</code>
     */
    protected $new_source_ip = '';
    /**
     * Destination IP address of an original connection
     *
     * Generated from protobuf field <code>string old_destination_ip = 4;</code>
     */
    protected $old_destination_ip = '';
    /**
     * Destination IP address of a new connection.
     *
     * Generated from protobuf field <code>string new_destination_ip = 5;</code>
     */
    protected $new_destination_ip = '';
    /**
     * Source port of an original connection. Only valid when protocol is TCP or
     * UDP.
     *
     * Generated from protobuf field <code>int32 old_source_port = 6;</code>
     */
    protected $old_source_port = 0;
    /**
     * Source port of a new connection. Only valid when protocol is TCP or UDP.
     *
     * Generated from protobuf field <code>int32 new_source_port = 7;</code>
     */
    protected $new_source_port = 0;
    /**
     * Destination port of an original connection. Only valid when protocol is TCP
     * or UDP.
     *
     * Generated from protobuf field <code>int32 old_destination_port = 8;</code>
     */
    protected $old_destination_port = 0;
    /**
     * Destination port of a new connection. Only valid when protocol is TCP or
     * UDP.
     *
     * Generated from protobuf field <code>int32 new_destination_port = 9;</code>
     */
    protected $new_destination_port = 0;
    /**
     * Uri of proxy subnet.
     *
     * Generated from protobuf field <code>string subnet_uri = 10;</code>
     */
    protected $subnet_uri = '';
    /**
     * URI of the network where connection is proxied.
     *
     * Generated from protobuf field <code>string network_uri = 11;</code>
     */
    protected $network_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $protocol
     *           IP protocol in string format, for example: "TCP", "UDP", "ICMP".
     *     @type string $old_source_ip
     *           Source IP address of an original connection.
     *     @type string $new_source_ip
     *           Source IP address of a new connection.
     *     @type string $old_destination_ip
     *           Destination IP address of an original connection
     *     @type string $new_destination_ip
     *           Destination IP address of a new connection.
     *     @type int $old_source_port
     *           Source port of an original connection. Only valid when protocol is TCP or
     *           UDP.
     *     @type int $new_source_port
     *           Source port of a new connection. Only valid when protocol is TCP or UDP.
     *     @type int $old_destination_port
     *           Destination port of an original connection. Only valid when protocol is TCP
     *           or UDP.
     *     @type int $new_destination_port
     *           Destination port of a new connection. Only valid when protocol is TCP or
     *           UDP.
     *     @type string $subnet_uri
     *           Uri of proxy subnet.
     *     @type string $network_uri
     *           URI of the network where connection is proxied.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkmanagement\V1\Trace::initOnce();
        parent::__construct($data);
    }

    /**
     * IP protocol in string format, for example: "TCP", "UDP", "ICMP".
     *
     * Generated from protobuf field <code>string protocol = 1;</code>
     * @return string
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * IP protocol in string format, for example: "TCP", "UDP", "ICMP".
     *
     * Generated from protobuf field <code>string protocol = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProtocol($var)
    {
        GPBUtil::checkString($var, True);
        $this->protocol = $var;

        return $this;
    }

    /**
     * Source IP address of an original connection.
     *
     * Generated from protobuf field <code>string old_source_ip = 2;</code>
     * @return string
     */
    public function getOldSourceIp()
    {
        return $this->old_source_ip;
    }

    /**
     * Source IP address of an original connection.
     *
     * Generated from protobuf field <code>string old_source_ip = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOldSourceIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->old_source_ip = $var;

        return $this;
    }

    /**
     * Source IP address of a new connection.
     *
     * Generated from protobuf field <code>string new_source_ip = 3;</code>
     * @return string
     */
    public function getNewSourceIp()
    {
        return $this->new_source_ip;
    }

    /**
     * Source IP address of a new connection.
     *
     * Generated from protobuf field <code>string new_source_ip = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNewSourceIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->new_source_ip = $var;

        return $this;
    }

    /**
     * Destination IP address of an original connection
     *
     * Generated from protobuf field <code>string old_destination_ip = 4;</code>
     * @return string
     */
    public function getOldDestinationIp()
    {
        return $this->old_destination_ip;
    }

    /**
     * Destination IP address of an original connection
     *
     * Generated from protobuf field <code>string old_destination_ip = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOldDestinationIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->old_destination_ip = $var;

        return $this;
    }

    /**
     * Destination IP address of a new connection.
     *
     * Generated from protobuf field <code>string new_destination_ip = 5;</code>
     * @return string
     */
    public function getNewDestinationIp()
    {
        return $this->new_destination_ip;
    }

    /**
     * Destination IP address of a new connection.
     *
     * Generated from protobuf field <code>string new_destination_ip = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setNewDestinationIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->new_destination_ip = $var;

        return $this;
    }

    /**
     * Source port of an original connection. Only valid when protocol is TCP or
     * UDP.
     *
     * Generated from protobuf field <code>int32 old_source_port = 6;</code>
     * @return int
     */
    public function getOldSourcePort()
    {
        return $this->old_source_port;
    }

    /**
     * Source port of an original connection. Only valid when protocol is TCP or
     * UDP.
     *
     * Generated from protobuf field <code>int32 old_source_port = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setOldSourcePort($var)
    {
        GPBUtil::checkInt32($var);
        $this->old_source_port = $var;

        return $this;
    }

    /**
     * Source port of a new connection. Only valid when protocol is TCP or UDP.
     *
     * Generated from protobuf field <code>int32 new_source_port = 7;</code>
     * @return int
     */
    public function getNewSourcePort()
    {
        return $this->new_source_port;
    }

    /**
     * Source port of a new connection. Only valid when protocol is TCP or UDP.
     *
     * Generated from protobuf field <code>int32 new_source_port = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setNewSourcePort($var)
    {
        GPBUtil::checkInt32($var);
        $this->new_source_port = $var;

        return $this;
    }

    /**
     * Destination port of an original connection. Only valid when protocol is TCP
     * or UDP.
     *
     * Generated from protobuf field <code>int32 old_destination_port = 8;</code>
     * @return int
     */
    public function getOldDestinationPort()
    {
        return $this->old_destination_port;
    }

    /**
     * Destination port of an original connection. Only valid when protocol is TCP
     * or UDP.
     *
     * Generated from protobuf field <code>int32 old_destination_port = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setOldDestinationPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->old_destination_port = $var;

        return $this;
    }

    /**
     * Destination port of a new connection. Only valid when protocol is TCP or
     * UDP.
     *
     * Generated from protobuf field <code>int32 new_destination_port = 9;</code>
     * @return int
     */
    public function getNewDestinationPort()
    {
        return $this->new_destination_port;
    }

    /**
     * Destination port of a new connection. Only valid when protocol is TCP or
     * UDP.
     *
     * Generated from protobuf field <code>int32 new_destination_port = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setNewDestinationPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->new_destination_port = $var;

        return $this;
    }

    /**
     * Uri of proxy subnet.
     *
     * Generated from protobuf field <code>string subnet_uri = 10;</code>
     * @return string
     */
    public function getSubnetUri()
    {
        return $this->subnet_uri;
    }

    /**
     * Uri of proxy subnet.
     *
     * Generated from protobuf field <code>string subnet_uri = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnet_uri = $var;

        return $this;
    }

    /**
     * URI of the network where connection is proxied.
     *
     * Generated from protobuf field <code>string network_uri = 11;</code>
     * @return string
     */
    public function getNetworkUri()
    {
        return $this->network_uri;
    }

    /**
     * URI of the network where connection is proxied.
     *
     * Generated from protobuf field <code>string network_uri = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->network_uri = $var;

        return $this;
    }

}

