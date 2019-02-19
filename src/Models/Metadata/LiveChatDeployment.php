<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LiveChatDeployment
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $brandingImage
 * @property int|null $connectionTimeoutDuration
 * @property int|null $connectionWarningDuration
 * @property bool|null $displayQueuePosition
 * @property LiveChatDeploymentDomainWhitelist|null $domainWhiteList
 * @property bool|null $enablePrechatApi
 * @property bool|null $enableTranscriptSave
 * @property string|null $label
 * @property string|null $mobileBrandingImage
 * @property string|null $site
 * @property string|null $windowTitle
 */
class LiveChatDeployment extends Metadata
{
    public static $classMap = [
        'domainWhiteList' => [
            'multiple' => false,
            'type' => LiveChatDeploymentDomainWhitelist::class,
        ],
    ];

    public function setBrandingImage(string $brandingImage)
    {
        $this->brandingImage = $brandingImage;
    }

    public function setConnectionTimeoutDuration(int $connectionTimeoutDuration)
    {
        $this->connectionTimeoutDuration = $connectionTimeoutDuration;
    }

    public function setConnectionWarningDuration(int $connectionWarningDuration)
    {
        $this->connectionWarningDuration = $connectionWarningDuration;
    }

    public function setDisplayQueuePosition(bool $displayQueuePosition)
    {
        $this->displayQueuePosition = $displayQueuePosition;
    }

    public function setDomainWhiteList(LiveChatDeploymentDomainWhitelist $domainWhiteList)
    {
        $this->domainWhiteList = $domainWhiteList;
    }

    public function setEnablePrechatApi(bool $enablePrechatApi)
    {
        $this->enablePrechatApi = $enablePrechatApi;
    }

    public function setEnableTranscriptSave(bool $enableTranscriptSave)
    {
        $this->enableTranscriptSave = $enableTranscriptSave;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setMobileBrandingImage(string $mobileBrandingImage)
    {
        $this->mobileBrandingImage = $mobileBrandingImage;
    }

    public function setSite(string $site)
    {
        $this->site = $site;
    }

    public function setWindowTitle(string $windowTitle)
    {
        $this->windowTitle = $windowTitle;
    }
}
