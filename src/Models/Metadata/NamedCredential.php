<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class NamedCredential
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $allowMergeFieldsInBody
 * @property bool|null $allowMergeFieldsInHeader
 * @property string|null $authProvider
 * @property string|null $authTokenEndpointUrl
 * @property string|null $awsAccessKey
 * @property string|null $awsAccessSecret
 * @property string|null $awsRegion
 * @property string|null $awsService
 * @property string|null $certificate
 * @property string|null $endpoint
 * @property bool|null $generateAuthorizationHeader
 * @property string|null $jwtAudience
 * @property string|null $jwtFormulaSubject
 * @property string|null $jwtIssuer
 * @property string|null $jwtSigningCertificate
 * @property string|null $jwtTextSubject
 * @property int|null $jwtValidityPeriodSeconds
 * @property string|null $label
 * @property string|null $oauthRefreshToken
 * @property string|null $oauthScope
 * @property string|null $oauthToken
 * @property string|null $password
 * @property string|null $principalType
 * @property string|null $privateConnection
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

    public function setAuthTokenEndpointUrl(string $authTokenEndpointUrl)
    {
        $this->authTokenEndpointUrl = $authTokenEndpointUrl;
    }

    public function setAwsAccessKey(string $awsAccessKey)
    {
        $this->awsAccessKey = $awsAccessKey;
    }

    public function setAwsAccessSecret(string $awsAccessSecret)
    {
        $this->awsAccessSecret = $awsAccessSecret;
    }

    public function setAwsRegion(string $awsRegion)
    {
        $this->awsRegion = $awsRegion;
    }

    public function setAwsService(string $awsService)
    {
        $this->awsService = $awsService;
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

    public function setJwtAudience(string $jwtAudience)
    {
        $this->jwtAudience = $jwtAudience;
    }

    public function setJwtFormulaSubject(string $jwtFormulaSubject)
    {
        $this->jwtFormulaSubject = $jwtFormulaSubject;
    }

    public function setJwtIssuer(string $jwtIssuer)
    {
        $this->jwtIssuer = $jwtIssuer;
    }

    public function setJwtSigningCertificate(string $jwtSigningCertificate)
    {
        $this->jwtSigningCertificate = $jwtSigningCertificate;
    }

    public function setJwtTextSubject(string $jwtTextSubject)
    {
        $this->jwtTextSubject = $jwtTextSubject;
    }

    public function setJwtValidityPeriodSeconds(int $jwtValidityPeriodSeconds)
    {
        $this->jwtValidityPeriodSeconds = $jwtValidityPeriodSeconds;
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

    public function setPrivateConnection(string $privateConnection)
    {
        $this->privateConnection = $privateConnection;
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
