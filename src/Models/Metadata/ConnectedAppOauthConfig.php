<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ConnectedAppOauthConfig
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $callbackUrl
 * @property string|null $certificate
 * @property string|null $consumerKey
 * @property string|null $consumerSecret
 * @property ConnectedAppOauthIdToken|null $idTokenConfig
 * @property bool|null $isAdminApproved
 * @property string[]|null $scopes
 * @property string|null $singleLogoutUrl
 */
class ConnectedAppOauthConfig
{
    public static $classMap = [
        'idTokenConfig' => [
            'multiple' => false,
            'type' => ConnectedAppOauthIdToken::class,
        ],
    ];

    public function setCallbackUrl(string $callbackUrl)
    {
        $this->callbackUrl = $callbackUrl;
    }

    public function setCertificate(string $certificate)
    {
        $this->certificate = $certificate;
    }

    public function setConsumerKey(string $consumerKey)
    {
        $this->consumerKey = $consumerKey;
    }

    public function setConsumerSecret(string $consumerSecret)
    {
        $this->consumerSecret = $consumerSecret;
    }

    public function setIdTokenConfig(ConnectedAppOauthIdToken $idTokenConfig)
    {
        $this->idTokenConfig = $idTokenConfig;
    }

    public function setIsAdminApproved(bool $isAdminApproved)
    {
        $this->isAdminApproved = $isAdminApproved;
    }

    public function setScopes(array $scopes)
    {
        $this->scopes = $scopes;
    }

    public function setSingleLogoutUrl(string $singleLogoutUrl)
    {
        $this->singleLogoutUrl = $singleLogoutUrl;
    }
}
