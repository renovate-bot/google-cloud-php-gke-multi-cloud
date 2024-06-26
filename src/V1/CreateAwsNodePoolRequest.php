<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/aws_service.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for `AwsClusters.CreateAwsNodePool` method.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.CreateAwsNodePoolRequest</code>
 */
class CreateAwsNodePoolRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster]
     * resource where this node pool will be created.
     * `AwsCluster` names are formatted as
     * `projects/<project-id>/locations/<region>/awsClusters/<cluster-id>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The specification of the
     * [AwsNodePool][google.cloud.gkemulticloud.v1.AwsNodePool] to create.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsNodePool aws_node_pool = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $aws_node_pool = null;
    /**
     * Required. A client provided ID the resource. Must be unique within the
     * parent resource.
     * The provided ID will be part of the
     * [AwsNodePool][google.cloud.gkemulticloud.v1.AwsNodePool] resource name
     * formatted as
     * `projects/<project-id>/locations/<region>/awsClusters/<cluster-id>/awsNodePools/<node-pool-id>`.
     * Valid characters are `/[a-z][0-9]-/`. Cannot be longer than 63 characters.
     *
     * Generated from protobuf field <code>string aws_node_pool_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $aws_node_pool_id = '';
    /**
     * If set, only validate the request, but do not actually create the node
     * pool.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     */
    protected $validate_only = false;

    /**
     * @param string                                     $parent        Required. The [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster]
     *                                                                  resource where this node pool will be created.
     *
     *                                                                  `AwsCluster` names are formatted as
     *                                                                  `projects/<project-id>/locations/<region>/awsClusters/<cluster-id>`.
     *
     *                                                                  See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     *                                                                  for more details on Google Cloud resource names. Please see
     *                                                                  {@see AwsClustersClient::awsClusterName()} for help formatting this field.
     * @param \Google\Cloud\GkeMultiCloud\V1\AwsNodePool $awsNodePool   Required. The specification of the
     *                                                                  [AwsNodePool][google.cloud.gkemulticloud.v1.AwsNodePool] to create.
     * @param string                                     $awsNodePoolId Required. A client provided ID the resource. Must be unique within the
     *                                                                  parent resource.
     *
     *                                                                  The provided ID will be part of the
     *                                                                  [AwsNodePool][google.cloud.gkemulticloud.v1.AwsNodePool] resource name
     *                                                                  formatted as
     *                                                                  `projects/<project-id>/locations/<region>/awsClusters/<cluster-id>/awsNodePools/<node-pool-id>`.
     *
     *                                                                  Valid characters are `/[a-z][0-9]-/`. Cannot be longer than 63 characters.
     *
     * @return \Google\Cloud\GkeMultiCloud\V1\CreateAwsNodePoolRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\GkeMultiCloud\V1\AwsNodePool $awsNodePool, string $awsNodePoolId): self
    {
        return (new self())
            ->setParent($parent)
            ->setAwsNodePool($awsNodePool)
            ->setAwsNodePoolId($awsNodePoolId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster]
     *           resource where this node pool will be created.
     *           `AwsCluster` names are formatted as
     *           `projects/<project-id>/locations/<region>/awsClusters/<cluster-id>`.
     *           See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     *           for more details on Google Cloud resource names.
     *     @type \Google\Cloud\GkeMultiCloud\V1\AwsNodePool $aws_node_pool
     *           Required. The specification of the
     *           [AwsNodePool][google.cloud.gkemulticloud.v1.AwsNodePool] to create.
     *     @type string $aws_node_pool_id
     *           Required. A client provided ID the resource. Must be unique within the
     *           parent resource.
     *           The provided ID will be part of the
     *           [AwsNodePool][google.cloud.gkemulticloud.v1.AwsNodePool] resource name
     *           formatted as
     *           `projects/<project-id>/locations/<region>/awsClusters/<cluster-id>/awsNodePools/<node-pool-id>`.
     *           Valid characters are `/[a-z][0-9]-/`. Cannot be longer than 63 characters.
     *     @type bool $validate_only
     *           If set, only validate the request, but do not actually create the node
     *           pool.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AwsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster]
     * resource where this node pool will be created.
     * `AwsCluster` names are formatted as
     * `projects/<project-id>/locations/<region>/awsClusters/<cluster-id>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster]
     * resource where this node pool will be created.
     * `AwsCluster` names are formatted as
     * `projects/<project-id>/locations/<region>/awsClusters/<cluster-id>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The specification of the
     * [AwsNodePool][google.cloud.gkemulticloud.v1.AwsNodePool] to create.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsNodePool aws_node_pool = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AwsNodePool|null
     */
    public function getAwsNodePool()
    {
        return $this->aws_node_pool;
    }

    public function hasAwsNodePool()
    {
        return isset($this->aws_node_pool);
    }

    public function clearAwsNodePool()
    {
        unset($this->aws_node_pool);
    }

    /**
     * Required. The specification of the
     * [AwsNodePool][google.cloud.gkemulticloud.v1.AwsNodePool] to create.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsNodePool aws_node_pool = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AwsNodePool $var
     * @return $this
     */
    public function setAwsNodePool($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AwsNodePool::class);
        $this->aws_node_pool = $var;

        return $this;
    }

    /**
     * Required. A client provided ID the resource. Must be unique within the
     * parent resource.
     * The provided ID will be part of the
     * [AwsNodePool][google.cloud.gkemulticloud.v1.AwsNodePool] resource name
     * formatted as
     * `projects/<project-id>/locations/<region>/awsClusters/<cluster-id>/awsNodePools/<node-pool-id>`.
     * Valid characters are `/[a-z][0-9]-/`. Cannot be longer than 63 characters.
     *
     * Generated from protobuf field <code>string aws_node_pool_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAwsNodePoolId()
    {
        return $this->aws_node_pool_id;
    }

    /**
     * Required. A client provided ID the resource. Must be unique within the
     * parent resource.
     * The provided ID will be part of the
     * [AwsNodePool][google.cloud.gkemulticloud.v1.AwsNodePool] resource name
     * formatted as
     * `projects/<project-id>/locations/<region>/awsClusters/<cluster-id>/awsNodePools/<node-pool-id>`.
     * Valid characters are `/[a-z][0-9]-/`. Cannot be longer than 63 characters.
     *
     * Generated from protobuf field <code>string aws_node_pool_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAwsNodePoolId($var)
    {
        GPBUtil::checkString($var, True);
        $this->aws_node_pool_id = $var;

        return $this;
    }

    /**
     * If set, only validate the request, but do not actually create the node
     * pool.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If set, only validate the request, but do not actually create the node
     * pool.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

