<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: zeebe.proto

namespace ZeebeClient;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gateway_protocol.PublishMessageResponse</code>
 */
class PublishMessageResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * the unique ID of the message that was published
     *
     * Generated from protobuf field <code>int64 key = 1;</code>
     */
    protected $key = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $key
     *           the unique ID of the message that was published
     * }
     */
    public function __construct($data = NULL) {
        \ZeebeClient\Zeebe::initOnce();
        parent::__construct($data);
    }

    /**
     * the unique ID of the message that was published
     *
     * Generated from protobuf field <code>int64 key = 1;</code>
     * @return int|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * the unique ID of the message that was published
     *
     * Generated from protobuf field <code>int64 key = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkInt64($var);
        $this->key = $var;

        return $this;
    }

}

