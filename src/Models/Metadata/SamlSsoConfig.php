<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SamlSsoConfig
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $attributeName
 * @property string|null $attributeNameIdFormat
 * @property string|null $decryptionCertificate
 * @property string|null $errorUrl
 * @property string|null $executionUserId
 * @property string|null $identityLocation
 * @property string|null $identityMapping
 * @property string|null $issuer
 * @property string|null $loginUrl
 * @property string|null $logoutUrl
 * @property string|null $name
 * @property string|null $oauthTokenEndpoint
 * @property bool|null $redirectBinding
 * @property string|null $requestSignatureMethod
 * @property string|null $requestSigningCertId
 * @property string|null $salesforceLoginUrl
 * @property string|null $samlEntityId
 * @property string|null $samlJitHandlerId
 * @property string|null $samlVersion
 * @property string|null $singleLogoutBinding
 * @property string|null $singleLogoutUrl
 * @property bool|null $userProvisioning
 * @property string|null $validationCert
 */
class SamlSsoConfig extends Metadata
{
    public static $classMap = [
    ];

    public function setAttributeName(string $attributeName)
    {
        $this->attributeName = $attributeName;
    }

    public function setAttributeNameIdFormat(string $attributeNameIdFormat)
    {
        $this->attributeNameIdFormat = $attributeNameIdFormat;
    }

    public function setDecryptionCertificate(string $decryptionCertificate)
    {
        $this->decryptionCertificate = $decryptionCertificate;
    }

    public function setErrorUrl(string $errorUrl)
    {
        $this->errorUrl = $errorUrl;
    }

    public function setExecutionUserId(string $executionUserId)
    {
        $this->executionUserId = $executionUserId;
    }

    public function setIdentityLocation(SamlIdentityLocationType $identityLocation)
    {
        $this->identityLocation = $identityLocation->getValue();
    }

    public function setIdentityMapping(SamlIdentityType $identityMapping)
    {
        $this->identityMapping = $identityMapping->getValue();
    }

    public function setIssuer(string $issuer)
    {
        $this->issuer = $issuer;
    }

    public function setLoginUrl(string $loginUrl)
    {
        $this->loginUrl = $loginUrl;
    }

    public function setLogoutUrl(string $logoutUrl)
    {
        $this->logoutUrl = $logoutUrl;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setOauthTokenEndpoint(string $oauthTokenEndpoint)
    {
        $this->oauthTokenEndpoint = $oauthTokenEndpoint;
    }

    public function setRedirectBinding(bool $redirectBinding)
    {
        $this->redirectBinding = $redirectBinding;
    }

    public function setRequestSignatureMethod(string $requestSignatureMethod)
    {
        $this->requestSignatureMethod = $requestSignatureMethod;
    }

    public function setRequestSigningCertId(string $requestSigningCertId)
    {
        $this->requestSigningCertId = $requestSigningCertId;
    }

    public function setSalesforceLoginUrl(string $salesforceLoginUrl)
    {
        $this->salesforceLoginUrl = $salesforceLoginUrl;
    }

    public function setSamlEntityId(string $samlEntityId)
    {
        $this->samlEntityId = $samlEntityId;
    }

    public function setSamlJitHandlerId(string $samlJitHandlerId)
    {
        $this->samlJitHandlerId = $samlJitHandlerId;
    }

    public function setSamlVersion(SamlType $samlVersion)
    {
        $this->samlVersion = $samlVersion->getValue();
    }

    public function setSingleLogoutBinding(SamlSpSLOBinding $singleLogoutBinding)
    {
        $this->singleLogoutBinding = $singleLogoutBinding->getValue();
    }

    public function setSingleLogoutUrl(string $singleLogoutUrl)
    {
        $this->singleLogoutUrl = $singleLogoutUrl;
    }

    public function setUserProvisioning(bool $userProvisioning)
    {
        $this->userProvisioning = $userProvisioning;
    }

    public function setValidationCert(string $validationCert)
    {
        $this->validationCert = $validationCert;
    }
}
