<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ConnectedApp
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ConnectedAppAttribute[]|null $attributes
 * @property ConnectedAppCanvasConfig|null $canvasConfig
 * @property string|null $contactEmail
 * @property string|null $contactPhone
 * @property string|null $description
 * @property string|null $iconUrl
 * @property string|null $infoUrl
 * @property ConnectedAppIpRange[]|null $ipRanges
 * @property string|null $label
 * @property string|null $logoUrl
 * @property ConnectedAppMobileDetailConfig|null $mobileAppConfig
 * @property string|null $mobileStartUrl
 * @property ConnectedAppOauthConfig|null $oauthConfig
 * @property string|null $plugin
 * @property ConnectedAppSamlConfig|null $samlConfig
 * @property string|null $startUrl
 */
class ConnectedApp extends Metadata
{
    public static $classMap = [
        'attributes' => [
            'multiple' => true,
            'type' => ConnectedAppAttribute::class,
        ],
        'canvasConfig' => [
            'multiple' => false,
            'type' => ConnectedAppCanvasConfig::class,
        ],
        'ipRanges' => [
            'multiple' => true,
            'type' => ConnectedAppIpRange::class,
        ],
        'mobileAppConfig' => [
            'multiple' => false,
            'type' => ConnectedAppMobileDetailConfig::class,
        ],
        'oauthConfig' => [
            'multiple' => false,
            'type' => ConnectedAppOauthConfig::class,
        ],
        'samlConfig' => [
            'multiple' => false,
            'type' => ConnectedAppSamlConfig::class,
        ],
    ];

    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;
    }

    public function setCanvasConfig(ConnectedAppCanvasConfig $canvasConfig)
    {
        $this->canvasConfig = $canvasConfig;
    }

    public function setContactEmail(string $contactEmail)
    {
        $this->contactEmail = $contactEmail;
    }

    public function setContactPhone(string $contactPhone)
    {
        $this->contactPhone = $contactPhone;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setIconUrl(string $iconUrl)
    {
        $this->iconUrl = $iconUrl;
    }

    public function setInfoUrl(string $infoUrl)
    {
        $this->infoUrl = $infoUrl;
    }

    public function setIpRanges(array $ipRanges)
    {
        $this->ipRanges = $ipRanges;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setLogoUrl(string $logoUrl)
    {
        $this->logoUrl = $logoUrl;
    }

    public function setMobileAppConfig(ConnectedAppMobileDetailConfig $mobileAppConfig)
    {
        $this->mobileAppConfig = $mobileAppConfig;
    }

    public function setMobileStartUrl(string $mobileStartUrl)
    {
        $this->mobileStartUrl = $mobileStartUrl;
    }

    public function setOauthConfig(ConnectedAppOauthConfig $oauthConfig)
    {
        $this->oauthConfig = $oauthConfig;
    }

    public function setPlugin(string $plugin)
    {
        $this->plugin = $plugin;
    }

    public function setSamlConfig(ConnectedAppSamlConfig $samlConfig)
    {
        $this->samlConfig = $samlConfig;
    }

    public function setStartUrl(string $startUrl)
    {
        $this->startUrl = $startUrl;
    }
}
