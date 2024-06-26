<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/attached_service.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `AttachedClusters.ListAttachedClusters` method.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.ListAttachedClustersRequest</code>
 */
class ListAttachedClustersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent location which owns this collection of
     * [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster] resources.
     * Location names are formatted as `projects/<project-id>/locations/<region>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud Platform resource names.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The maximum number of items to return.
     * If not specified, a default value of 50 will be used by the service.
     * Regardless of the pageSize value, the response can include a partial list
     * and a caller should only rely on response's
     * [nextPageToken][google.cloud.gkemulticloud.v1.ListAttachedClustersResponse.next_page_token]
     * to determine if there are more instances left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * The `nextPageToken` value returned from a previous
     * [attachedClusters.list][google.cloud.gkemulticloud.v1.AttachedClusters.ListAttachedClusters]
     * request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The parent location which owns this collection of
     *                       [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster] resources.
     *
     *                       Location names are formatted as `projects/<project-id>/locations/<region>`.
     *
     *                       See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     *                       for more details on Google Cloud Platform resource names. Please see
     *                       {@see AttachedClustersClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\GkeMultiCloud\V1\ListAttachedClustersRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent location which owns this collection of
     *           [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster] resources.
     *           Location names are formatted as `projects/<project-id>/locations/<region>`.
     *           See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     *           for more details on Google Cloud Platform resource names.
     *     @type int $page_size
     *           The maximum number of items to return.
     *           If not specified, a default value of 50 will be used by the service.
     *           Regardless of the pageSize value, the response can include a partial list
     *           and a caller should only rely on response's
     *           [nextPageToken][google.cloud.gkemulticloud.v1.ListAttachedClustersResponse.next_page_token]
     *           to determine if there are more instances left to be queried.
     *     @type string $page_token
     *           The `nextPageToken` value returned from a previous
     *           [attachedClusters.list][google.cloud.gkemulticloud.v1.AttachedClusters.ListAttachedClusters]
     *           request, if any.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AttachedService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent location which owns this collection of
     * [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster] resources.
     * Location names are formatted as `projects/<project-id>/locations/<region>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud Platform resource names.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent location which owns this collection of
     * [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster] resources.
     * Location names are formatted as `projects/<project-id>/locations/<region>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud Platform resource names.
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
     * The maximum number of items to return.
     * If not specified, a default value of 50 will be used by the service.
     * Regardless of the pageSize value, the response can include a partial list
     * and a caller should only rely on response's
     * [nextPageToken][google.cloud.gkemulticloud.v1.ListAttachedClustersResponse.next_page_token]
     * to determine if there are more instances left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of items to return.
     * If not specified, a default value of 50 will be used by the service.
     * Regardless of the pageSize value, the response can include a partial list
     * and a caller should only rely on response's
     * [nextPageToken][google.cloud.gkemulticloud.v1.ListAttachedClustersResponse.next_page_token]
     * to determine if there are more instances left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The `nextPageToken` value returned from a previous
     * [attachedClusters.list][google.cloud.gkemulticloud.v1.AttachedClusters.ListAttachedClusters]
     * request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The `nextPageToken` value returned from a previous
     * [attachedClusters.list][google.cloud.gkemulticloud.v1.AttachedClusters.ListAttachedClusters]
     * request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

