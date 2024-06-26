<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/attached_service.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `AttachedClusters.GenerateAttachedClusterInstallManifest`
 * method.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.GenerateAttachedClusterInstallManifestRequest</code>
 */
class GenerateAttachedClusterInstallManifestRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent location where this
     * [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster] resource
     * will be created.
     * Location names are formatted as `projects/<project-id>/locations/<region>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. A client provided ID of the resource. Must be unique within the
     * parent resource.
     * The provided ID will be part of the
     * [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster] resource
     * name formatted as
     * `projects/<project-id>/locations/<region>/attachedClusters/<cluster-id>`.
     * Valid characters are `/[a-z][0-9]-/`. Cannot be longer than 63 characters.
     * When generating an install manifest for importing an existing Membership
     * resource, the attached_cluster_id field must be the Membership id.
     * Membership names are formatted as
     * `projects/<project-id>/locations/<region>/memberships/<membership-id>`.
     *
     * Generated from protobuf field <code>string attached_cluster_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $attached_cluster_id = '';
    /**
     * Required. The platform version for the cluster (e.g. `1.19.0-gke.1000`).
     * You can list all supported versions on a given Google Cloud region by
     * calling
     * [GetAttachedServerConfig][google.cloud.gkemulticloud.v1.AttachedClusters.GetAttachedServerConfig].
     *
     * Generated from protobuf field <code>string platform_version = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $platform_version = '';
    /**
     * Optional. Proxy configuration for outbound HTTP(S) traffic.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AttachedProxyConfig proxy_config = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $proxy_config = null;

    /**
     * @param string $parent            Required. The parent location where this
     *                                  [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster] resource
     *                                  will be created.
     *
     *                                  Location names are formatted as `projects/<project-id>/locations/<region>`.
     *
     *                                  See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     *                                  for more details on Google Cloud resource names. Please see
     *                                  {@see AttachedClustersClient::locationName()} for help formatting this field.
     * @param string $attachedClusterId Required. A client provided ID of the resource. Must be unique within the
     *                                  parent resource.
     *
     *                                  The provided ID will be part of the
     *                                  [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster] resource
     *                                  name formatted as
     *                                  `projects/<project-id>/locations/<region>/attachedClusters/<cluster-id>`.
     *
     *                                  Valid characters are `/[a-z][0-9]-/`. Cannot be longer than 63 characters.
     *
     *                                  When generating an install manifest for importing an existing Membership
     *                                  resource, the attached_cluster_id field must be the Membership id.
     *
     *                                  Membership names are formatted as
     *                                  `projects/<project-id>/locations/<region>/memberships/<membership-id>`.
     *
     * @return \Google\Cloud\GkeMultiCloud\V1\GenerateAttachedClusterInstallManifestRequest
     *
     * @experimental
     */
    public static function build(string $parent, string $attachedClusterId): self
    {
        return (new self())
            ->setParent($parent)
            ->setAttachedClusterId($attachedClusterId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent location where this
     *           [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster] resource
     *           will be created.
     *           Location names are formatted as `projects/<project-id>/locations/<region>`.
     *           See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     *           for more details on Google Cloud resource names.
     *     @type string $attached_cluster_id
     *           Required. A client provided ID of the resource. Must be unique within the
     *           parent resource.
     *           The provided ID will be part of the
     *           [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster] resource
     *           name formatted as
     *           `projects/<project-id>/locations/<region>/attachedClusters/<cluster-id>`.
     *           Valid characters are `/[a-z][0-9]-/`. Cannot be longer than 63 characters.
     *           When generating an install manifest for importing an existing Membership
     *           resource, the attached_cluster_id field must be the Membership id.
     *           Membership names are formatted as
     *           `projects/<project-id>/locations/<region>/memberships/<membership-id>`.
     *     @type string $platform_version
     *           Required. The platform version for the cluster (e.g. `1.19.0-gke.1000`).
     *           You can list all supported versions on a given Google Cloud region by
     *           calling
     *           [GetAttachedServerConfig][google.cloud.gkemulticloud.v1.AttachedClusters.GetAttachedServerConfig].
     *     @type \Google\Cloud\GkeMultiCloud\V1\AttachedProxyConfig $proxy_config
     *           Optional. Proxy configuration for outbound HTTP(S) traffic.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AttachedService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent location where this
     * [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster] resource
     * will be created.
     * Location names are formatted as `projects/<project-id>/locations/<region>`.
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
     * Required. The parent location where this
     * [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster] resource
     * will be created.
     * Location names are formatted as `projects/<project-id>/locations/<region>`.
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
     * Required. A client provided ID of the resource. Must be unique within the
     * parent resource.
     * The provided ID will be part of the
     * [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster] resource
     * name formatted as
     * `projects/<project-id>/locations/<region>/attachedClusters/<cluster-id>`.
     * Valid characters are `/[a-z][0-9]-/`. Cannot be longer than 63 characters.
     * When generating an install manifest for importing an existing Membership
     * resource, the attached_cluster_id field must be the Membership id.
     * Membership names are formatted as
     * `projects/<project-id>/locations/<region>/memberships/<membership-id>`.
     *
     * Generated from protobuf field <code>string attached_cluster_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAttachedClusterId()
    {
        return $this->attached_cluster_id;
    }

    /**
     * Required. A client provided ID of the resource. Must be unique within the
     * parent resource.
     * The provided ID will be part of the
     * [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster] resource
     * name formatted as
     * `projects/<project-id>/locations/<region>/attachedClusters/<cluster-id>`.
     * Valid characters are `/[a-z][0-9]-/`. Cannot be longer than 63 characters.
     * When generating an install manifest for importing an existing Membership
     * resource, the attached_cluster_id field must be the Membership id.
     * Membership names are formatted as
     * `projects/<project-id>/locations/<region>/memberships/<membership-id>`.
     *
     * Generated from protobuf field <code>string attached_cluster_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAttachedClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->attached_cluster_id = $var;

        return $this;
    }

    /**
     * Required. The platform version for the cluster (e.g. `1.19.0-gke.1000`).
     * You can list all supported versions on a given Google Cloud region by
     * calling
     * [GetAttachedServerConfig][google.cloud.gkemulticloud.v1.AttachedClusters.GetAttachedServerConfig].
     *
     * Generated from protobuf field <code>string platform_version = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPlatformVersion()
    {
        return $this->platform_version;
    }

    /**
     * Required. The platform version for the cluster (e.g. `1.19.0-gke.1000`).
     * You can list all supported versions on a given Google Cloud region by
     * calling
     * [GetAttachedServerConfig][google.cloud.gkemulticloud.v1.AttachedClusters.GetAttachedServerConfig].
     *
     * Generated from protobuf field <code>string platform_version = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPlatformVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->platform_version = $var;

        return $this;
    }

    /**
     * Optional. Proxy configuration for outbound HTTP(S) traffic.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AttachedProxyConfig proxy_config = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AttachedProxyConfig|null
     */
    public function getProxyConfig()
    {
        return $this->proxy_config;
    }

    public function hasProxyConfig()
    {
        return isset($this->proxy_config);
    }

    public function clearProxyConfig()
    {
        unset($this->proxy_config);
    }

    /**
     * Optional. Proxy configuration for outbound HTTP(S) traffic.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AttachedProxyConfig proxy_config = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AttachedProxyConfig $var
     * @return $this
     */
    public function setProxyConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AttachedProxyConfig::class);
        $this->proxy_config = $var;

        return $this;
    }

}

