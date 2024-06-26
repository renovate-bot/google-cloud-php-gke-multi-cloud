<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/azure_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `AzureClient` resources hold client authentication information needed by the
 * Anthos Multi-Cloud API to manage Azure resources on your Azure subscription.
 * When an [AzureCluster][google.cloud.gkemulticloud.v1.AzureCluster] is
 * created, an `AzureClient` resource needs to be provided and all operations on
 * Azure resources associated to that cluster will authenticate to Azure
 * services using the given client.
 * `AzureClient` resources are immutable and cannot be modified upon creation.
 * Each `AzureClient` resource is bound to a single Azure Active Directory
 * Application and tenant.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.AzureClient</code>
 */
class AzureClient extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of this resource.
     * `AzureClient` resource names are formatted as
     * `projects/<project-number>/locations/<region>/azureClients/<client-id>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Required. The Azure Active Directory Tenant ID.
     *
     * Generated from protobuf field <code>string tenant_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $tenant_id = '';
    /**
     * Required. The Azure Active Directory Application ID.
     *
     * Generated from protobuf field <code>string application_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $application_id = '';
    /**
     * Output only. If set, there are currently pending changes to the client.
     *
     * Generated from protobuf field <code>bool reconciling = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $reconciling = false;
    /**
     * Optional. Annotations on the resource.
     * This field has the same restrictions as Kubernetes annotations.
     * The total size of all keys and values combined is limited to 256k.
     * Keys can have 2 segments: prefix (optional) and name (required),
     * separated by a slash (/).
     * Prefix must be a DNS subdomain.
     * Name must be 63 characters or less, begin and end with alphanumerics,
     * with dashes (-), underscores (_), dots (.), and alphanumerics between.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $annotations;
    /**
     * Output only. The PEM encoded x509 certificate.
     *
     * Generated from protobuf field <code>string pem_certificate = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $pem_certificate = '';
    /**
     * Output only. A globally unique identifier for the client.
     *
     * Generated from protobuf field <code>string uid = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';
    /**
     * Output only. The time at which this resource was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time at which this client was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of this resource.
     *           `AzureClient` resource names are formatted as
     *           `projects/<project-number>/locations/<region>/azureClients/<client-id>`.
     *           See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     *           for more details on Google Cloud resource names.
     *     @type string $tenant_id
     *           Required. The Azure Active Directory Tenant ID.
     *     @type string $application_id
     *           Required. The Azure Active Directory Application ID.
     *     @type bool $reconciling
     *           Output only. If set, there are currently pending changes to the client.
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *           Optional. Annotations on the resource.
     *           This field has the same restrictions as Kubernetes annotations.
     *           The total size of all keys and values combined is limited to 256k.
     *           Keys can have 2 segments: prefix (optional) and name (required),
     *           separated by a slash (/).
     *           Prefix must be a DNS subdomain.
     *           Name must be 63 characters or less, begin and end with alphanumerics,
     *           with dashes (-), underscores (_), dots (.), and alphanumerics between.
     *     @type string $pem_certificate
     *           Output only. The PEM encoded x509 certificate.
     *     @type string $uid
     *           Output only. A globally unique identifier for the client.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which this resource was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time at which this client was last updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AzureResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of this resource.
     * `AzureClient` resource names are formatted as
     * `projects/<project-number>/locations/<region>/azureClients/<client-id>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of this resource.
     * `AzureClient` resource names are formatted as
     * `projects/<project-number>/locations/<region>/azureClients/<client-id>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The Azure Active Directory Tenant ID.
     *
     * Generated from protobuf field <code>string tenant_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTenantId()
    {
        return $this->tenant_id;
    }

    /**
     * Required. The Azure Active Directory Tenant ID.
     *
     * Generated from protobuf field <code>string tenant_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTenantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tenant_id = $var;

        return $this;
    }

    /**
     * Required. The Azure Active Directory Application ID.
     *
     * Generated from protobuf field <code>string application_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getApplicationId()
    {
        return $this->application_id;
    }

    /**
     * Required. The Azure Active Directory Application ID.
     *
     * Generated from protobuf field <code>string application_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setApplicationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->application_id = $var;

        return $this;
    }

    /**
     * Output only. If set, there are currently pending changes to the client.
     *
     * Generated from protobuf field <code>bool reconciling = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getReconciling()
    {
        return $this->reconciling;
    }

    /**
     * Output only. If set, there are currently pending changes to the client.
     *
     * Generated from protobuf field <code>bool reconciling = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setReconciling($var)
    {
        GPBUtil::checkBool($var);
        $this->reconciling = $var;

        return $this;
    }

    /**
     * Optional. Annotations on the resource.
     * This field has the same restrictions as Kubernetes annotations.
     * The total size of all keys and values combined is limited to 256k.
     * Keys can have 2 segments: prefix (optional) and name (required),
     * separated by a slash (/).
     * Prefix must be a DNS subdomain.
     * Name must be 63 characters or less, begin and end with alphanumerics,
     * with dashes (-), underscores (_), dots (.), and alphanumerics between.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Optional. Annotations on the resource.
     * This field has the same restrictions as Kubernetes annotations.
     * The total size of all keys and values combined is limited to 256k.
     * Keys can have 2 segments: prefix (optional) and name (required),
     * separated by a slash (/).
     * Prefix must be a DNS subdomain.
     * Name must be 63 characters or less, begin and end with alphanumerics,
     * with dashes (-), underscores (_), dots (.), and alphanumerics between.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAnnotations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotations = $arr;

        return $this;
    }

    /**
     * Output only. The PEM encoded x509 certificate.
     *
     * Generated from protobuf field <code>string pem_certificate = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getPemCertificate()
    {
        return $this->pem_certificate;
    }

    /**
     * Output only. The PEM encoded x509 certificate.
     *
     * Generated from protobuf field <code>string pem_certificate = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPemCertificate($var)
    {
        GPBUtil::checkString($var, True);
        $this->pem_certificate = $var;

        return $this;
    }

    /**
     * Output only. A globally unique identifier for the client.
     *
     * Generated from protobuf field <code>string uid = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. A globally unique identifier for the client.
     *
     * Generated from protobuf field <code>string uid = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Output only. The time at which this resource was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time at which this resource was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time at which this client was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time at which this client was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

}

