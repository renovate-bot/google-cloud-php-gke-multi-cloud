<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/aws_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * UpdateSettings control the level of parallelism and the level of
 * disruption caused during the update of a node pool.
 * These settings are applicable when the node pool update requires replacing
 * the existing node pool nodes with the updated ones.
 * UpdateSettings are optional. When UpdateSettings are not specified during the
 * node pool creation, a default is chosen based on the parent cluster's
 * version. For clusters with minor version 1.27 and later, a default
 * surge_settings configuration with max_surge = 1 and max_unavailable = 0 is
 * used. For clusters with older versions, node pool updates use the traditional
 * rolling update mechanism of updating one node at a time in a
 * "terminate before create" fashion and update_settings is not applicable.
 * Set the surge_settings parameter to use the Surge Update mechanism for
 * the rolling update of node pool nodes.
 * 1. max_surge controls the number of additional nodes that can be created
 * beyond the current size of the node pool temporarily for the time of the
 * update to increase the number of available nodes.
 * 2. max_unavailable controls the number of nodes that can be simultaneously
 * unavailable during the update.
 * 3. (max_surge + max_unavailable) determines the level of parallelism (i.e.,
 * the number of nodes being updated at the same time).
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.UpdateSettings</code>
 */
class UpdateSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Settings for surge update.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.SurgeSettings surge_settings = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $surge_settings = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\GkeMultiCloud\V1\SurgeSettings $surge_settings
     *           Optional. Settings for surge update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AwsResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Settings for surge update.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.SurgeSettings surge_settings = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\SurgeSettings|null
     */
    public function getSurgeSettings()
    {
        return $this->surge_settings;
    }

    public function hasSurgeSettings()
    {
        return isset($this->surge_settings);
    }

    public function clearSurgeSettings()
    {
        unset($this->surge_settings);
    }

    /**
     * Optional. Settings for surge update.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.SurgeSettings surge_settings = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\SurgeSettings $var
     * @return $this
     */
    public function setSurgeSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\SurgeSettings::class);
        $this->surge_settings = $var;

        return $this;
    }

}
