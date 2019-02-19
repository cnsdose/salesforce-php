<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AuthProvider
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $authorizeUrl
 * @property string|null $consumerKey
 * @property string|null $consumerSecret
 * @property string|null $customMetadataTypeRecord
 * @property string|null $defaultScopes
 * @property string|null $errorUrl
 * @property string|null $executionUser
 * @property string|null $friendlyName
 * @property string|null $iconUrl
 * @property string|null $idTokenIssuer
 * @property bool|null $includeOrgIdInIdentifier
 * @property string|null $linkKickoffUrl
 * @property string|null $logoutUrl
 * @property string|null $oauthKickoffUrl
 * @property string|null $plugin
 * @property string|null $portal
 * @property string|null $providerType
 * @property string|null $registrationHandler
 * @property bool|null $sendAccessTokenInHeader
 * @property bool|null $sendClientCredentialsInHeader
 * @property string|null $ssoKickoffUrl
 * @property string|null $tokenUrl
 * @property string|null $userInfoUrl
 */
class AuthProvider extends Metadata
{
    public static $classMap = [
    ];

    public function setAuthorizeUrl(string $authorizeUrl)
    {
        $this->authorizeUrl = $authorizeUrl;
    }

    public function setConsumerKey(string $consumerKey)
    {
        $this->consumerKey = $consumerKey;
    }

    public function setConsumerSecret(string $consumerSecret)
    {
        $this->consumerSecret = $consumerSecret;
    }

    public function setCustomMetadataTypeRecord(string $customMetadataTypeRecord)
    {
        $this->customMetadataTypeRecord = $customMetadataTypeRecord;
    }

    public function setDefaultScopes(string $defaultScopes)
    {
        $this->defaultScopes = $defaultScopes;
    }

    public function setErrorUrl(string $errorUrl)
    {
        $this->errorUrl = $errorUrl;
    }

    public function setExecutionUser(string $executionUser)
    {
        $this->executionUser = $executionUser;
    }

    public function setFriendlyName(string $friendlyName)
    {
        $this->friendlyName = $friendlyName;
    }

    public function setIconUrl(string $iconUrl)
    {
        $this->iconUrl = $iconUrl;
    }

    public function setIdTokenIssuer(string $idTokenIssuer)
    {
        $this->idTokenIssuer = $idTokenIssuer;
    }

    public function setIncludeOrgIdInIdentifier(bool $includeOrgIdInIdentifier)
    {
        $this->includeOrgIdInIdentifier = $includeOrgIdInIdentifier;
    }

    public function setLinkKickoffUrl(string $linkKickoffUrl)
    {
        $this->linkKickoffUrl = $linkKickoffUrl;
    }

    public function setLogoutUrl(string $logoutUrl)
    {
        $this->logoutUrl = $logoutUrl;
    }

    public function setOauthKickoffUrl(string $oauthKickoffUrl)
    {
        $this->oauthKickoffUrl = $oauthKickoffUrl;
    }

    public function setPlugin(string $plugin)
    {
        $this->plugin = $plugin;
    }

    public function setPortal(string $portal)
    {
        $this->portal = $portal;
    }

    public function setProviderType(AuthProviderType $providerType)
    {
        $this->providerType = $providerType->getValue();
    }

    public function setRegistrationHandler(string $registrationHandler)
    {
        $this->registrationHandler = $registrationHandler;
    }

    public function setSendAccessTokenInHeader(bool $sendAccessTokenInHeader)
    {
        $this->sendAccessTokenInHeader = $sendAccessTokenInHeader;
    }

    public function setSendClientCredentialsInHeader(bool $sendClientCredentialsInHeader)
    {
        $this->sendClientCredentialsInHeader = $sendClientCredentialsInHeader;
    }

    public function setSsoKickoffUrl(string $ssoKickoffUrl)
    {
        $this->ssoKickoffUrl = $ssoKickoffUrl;
    }

    public function setTokenUrl(string $tokenUrl)
    {
        $this->tokenUrl = $tokenUrl;
    }

    public function setUserInfoUrl(string $userInfoUrl)
    {
        $this->userInfoUrl = $userInfoUrl;
    }
}
