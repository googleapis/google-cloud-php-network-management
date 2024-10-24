<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/trace.proto

namespace Google\Cloud\NetworkManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * For display only. Metadata associated with the serverless network endpoint
 * group backend.
 *
 * Generated from protobuf message <code>google.cloud.networkmanagement.v1.ServerlessNegInfo</code>
 */
class ServerlessNegInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * URI of the serverless network endpoint group.
     *
     * Generated from protobuf field <code>string neg_uri = 1;</code>
     */
    protected $neg_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $neg_uri
     *           URI of the serverless network endpoint group.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkmanagement\V1\Trace::initOnce();
        parent::__construct($data);
    }

    /**
     * URI of the serverless network endpoint group.
     *
     * Generated from protobuf field <code>string neg_uri = 1;</code>
     * @return string
     */
    public function getNegUri()
    {
        return $this->neg_uri;
    }

    /**
     * URI of the serverless network endpoint group.
     *
     * Generated from protobuf field <code>string neg_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNegUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->neg_uri = $var;

        return $this;
    }

}

