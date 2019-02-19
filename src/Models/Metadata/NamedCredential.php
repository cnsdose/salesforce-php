<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class NamedCredential
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $allowMergeFieldsInBody
 * @property bool|null $allowMergeFieldsInHeader
 * @property string|null $authProvider
 * @property string|null $certificate
 * @property string|null $endpoint
 * @property bool|null $generateAuthorizationHeader
 * @property string|null $label
 * @property string|null $oauthRefreshToken
 * @property string|null $oauthScope
 * @property string|null $oauthToken
 * @property string|null $password
 * @property string|null $principalType
 * @property string|null $protocol
 * @property string|null $username
 */
class NamedCredential extends Metadata
{
    public static $classMap = [
    ];

    public function setAllowMergeFieldsInBody(bool $allowMergeFieldsInBody)
    {
        $this->allowMergeFieldsInBody = $allowMergeFieldsInBody;
    }

    public function setAllowMergeFieldsInHeader(bool $allowMergeFieldsInHeader)
    {
        $this->allowMergeFieldsInHeader = $allowMergeFieldsInHeader;
    }

    public function setAuthProvider(string $authProvider)
    {
        $this->authProvider = $authProvider;
    }

    public function setCertificate(string $certificate)
    {
        $this->certificate = $certificate;
    }

    public function setEndpoint(string $endpoint)
    {
        $this->endpoint = $endpoint;
    }

    public function setGenerateAuthorizationHeader(bool $generateAuthorizationHeader)
    {
        $this->generateAuthorizationHeader = $generateAuthorizationHeader;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setOauthRefreshToken(string $oauthRefreshToken)
    {
        $this->oauthRefreshToken = $oauthRefreshToken;
    }

    public function setOauthScope(string $oauthScope)
    {
        $this->oauthScope = $oauthScope;
    }

    public function setOauthToken(string $oauthToken)
    {
        $this->oauthToken = $oauthToken;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function setPrincipalType(ExternalPrincipalType $principalType)
    {
        $this->principalType = $principalType->getValue();
    }

    public function setProtocol(AuthenticationProtocol $protocol)
    {
        $this->protocol = $protocol->getValue();
    }

    public function setUsername(string $username)
    {
        $this->username = $username;
    }
}
