<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ExternalDataSource
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $authProvider
 * @property string|null $certificate
 * @property string|null $customConfiguration
 * @property CustomHttpHeader[]|null $customHttpHeaders
 * @property string|null $endpoint
 * @property bool|null $isWritable
 * @property string|null $label
 * @property string|null $oauthRefreshToken
 * @property string|null $oauthScope
 * @property string|null $oauthToken
 * @property string|null $password
 * @property string|null $principalType
 * @property string|null $protocol
 * @property string|null $repository
 * @property string|null $type
 * @property string|null $username
 * @property string|null $version
 */
class ExternalDataSource extends Metadata
{
    public static $classMap = [
        'customHttpHeaders' => [
            'multiple' => true,
            'type' => CustomHttpHeader::class,
        ],
    ];

    public function setAuthProvider(string $authProvider)
    {
        $this->authProvider = $authProvider;
    }

    public function setCertificate(string $certificate)
    {
        $this->certificate = $certificate;
    }

    public function setCustomConfiguration(string $customConfiguration)
    {
        $this->customConfiguration = $customConfiguration;
    }

    public function setCustomHttpHeaders(array $customHttpHeaders)
    {
        $this->customHttpHeaders = $customHttpHeaders;
    }

    public function setEndpoint(string $endpoint)
    {
        $this->endpoint = $endpoint;
    }

    public function setIsWritable(bool $isWritable)
    {
        $this->isWritable = $isWritable;
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

    public function setRepository(string $repository)
    {
        $this->repository = $repository;
    }

    public function setType(ExternalDataSourceType $type)
    {
        $this->type = $type->getValue();
    }

    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    public function setVersion(string $version)
    {
        $this->version = $version;
    }
}
