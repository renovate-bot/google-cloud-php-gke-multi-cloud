<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/azure_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration related to config data encryption.
 * Azure VM bootstrap secret is envelope encrypted with the provided key vault
 * key.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.AzureConfigEncryption</code>
 */
class AzureConfigEncryption extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ARM ID of the Azure Key Vault key to encrypt / decrypt config data.
     * For example:
     * `/subscriptions/<subscription-id>/resourceGroups/<resource-group-id>/providers/Microsoft.KeyVault/vaults/<key-vault-id>/keys/<key-name>`
     *
     * Generated from protobuf field <code>string key_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $key_id = '';
    /**
     * Optional. RSA key of the Azure Key Vault public key to use for encrypting the data.
     * This key must be formatted as a PEM-encoded SubjectPublicKeyInfo (RFC 5280)
     * in ASN.1 DER form. The string must be comprised of a single PEM block of
     * type "PUBLIC KEY".
     *
     * Generated from protobuf field <code>string public_key = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $public_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key_id
     *           Required. The ARM ID of the Azure Key Vault key to encrypt / decrypt config data.
     *           For example:
     *           `/subscriptions/<subscription-id>/resourceGroups/<resource-group-id>/providers/Microsoft.KeyVault/vaults/<key-vault-id>/keys/<key-name>`
     *     @type string $public_key
     *           Optional. RSA key of the Azure Key Vault public key to use for encrypting the data.
     *           This key must be formatted as a PEM-encoded SubjectPublicKeyInfo (RFC 5280)
     *           in ASN.1 DER form. The string must be comprised of a single PEM block of
     *           type "PUBLIC KEY".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AzureResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ARM ID of the Azure Key Vault key to encrypt / decrypt config data.
     * For example:
     * `/subscriptions/<subscription-id>/resourceGroups/<resource-group-id>/providers/Microsoft.KeyVault/vaults/<key-vault-id>/keys/<key-name>`
     *
     * Generated from protobuf field <code>string key_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getKeyId()
    {
        return $this->key_id;
    }

    /**
     * Required. The ARM ID of the Azure Key Vault key to encrypt / decrypt config data.
     * For example:
     * `/subscriptions/<subscription-id>/resourceGroups/<resource-group-id>/providers/Microsoft.KeyVault/vaults/<key-vault-id>/keys/<key-name>`
     *
     * Generated from protobuf field <code>string key_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setKeyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->key_id = $var;

        return $this;
    }

    /**
     * Optional. RSA key of the Azure Key Vault public key to use for encrypting the data.
     * This key must be formatted as a PEM-encoded SubjectPublicKeyInfo (RFC 5280)
     * in ASN.1 DER form. The string must be comprised of a single PEM block of
     * type "PUBLIC KEY".
     *
     * Generated from protobuf field <code>string public_key = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPublicKey()
    {
        return $this->public_key;
    }

    /**
     * Optional. RSA key of the Azure Key Vault public key to use for encrypting the data.
     * This key must be formatted as a PEM-encoded SubjectPublicKeyInfo (RFC 5280)
     * in ASN.1 DER form. The string must be comprised of a single PEM block of
     * type "PUBLIC KEY".
     *
     * Generated from protobuf field <code>string public_key = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPublicKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->public_key = $var;

        return $this;
    }

}

