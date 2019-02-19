<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EmbeddedServiceLiveAgent
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $avatarImg
 * @property string|null $customPrechatComponent
 * @property string|null $embeddedServiceConfig
 * @property EmbeddedServiceQuickAction[]|null $embeddedServiceQuickActions
 * @property bool|null $enabled
 * @property string|null $fontSize
 * @property string|null $headerBackgroundImg
 * @property bool|null $isOfflineCaseEnabled
 * @property bool|null $isQueuePositionEnabled
 * @property string|null $liveAgentChatUrl
 * @property string|null $liveAgentContentUrl
 * @property string|null $liveChatButton
 * @property string|null $liveChatDeployment
 * @property string|null $masterLabel
 * @property string|null $offlineCaseBackgroundImg
 * @property string|null $prechatBackgroundImg
 * @property bool|null $prechatEnabled
 * @property string|null $prechatJson
 * @property string|null $scenario
 * @property string|null $smallCompanyLogoImg
 * @property string|null $waitingStateBackgroundImg
 */
class EmbeddedServiceLiveAgent extends Metadata
{
    public static $classMap = [
        'embeddedServiceQuickActions' => [
            'multiple' => true,
            'type' => EmbeddedServiceQuickAction::class,
        ],
    ];

    public function setAvatarImg(string $avatarImg)
    {
        $this->avatarImg = $avatarImg;
    }

    public function setCustomPrechatComponent(string $customPrechatComponent)
    {
        $this->customPrechatComponent = $customPrechatComponent;
    }

    public function setEmbeddedServiceConfig(string $embeddedServiceConfig)
    {
        $this->embeddedServiceConfig = $embeddedServiceConfig;
    }

    public function setEmbeddedServiceQuickActions(array $embeddedServiceQuickActions)
    {
        $this->embeddedServiceQuickActions = $embeddedServiceQuickActions;
    }

    public function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;
    }

    public function setFontSize(EmbeddedServiceFontSize $fontSize)
    {
        $this->fontSize = $fontSize->getValue();
    }

    public function setHeaderBackgroundImg(string $headerBackgroundImg)
    {
        $this->headerBackgroundImg = $headerBackgroundImg;
    }

    public function setIsOfflineCaseEnabled(bool $isOfflineCaseEnabled)
    {
        $this->isOfflineCaseEnabled = $isOfflineCaseEnabled;
    }

    public function setIsQueuePositionEnabled(bool $isQueuePositionEnabled)
    {
        $this->isQueuePositionEnabled = $isQueuePositionEnabled;
    }

    public function setLiveAgentChatUrl(string $liveAgentChatUrl)
    {
        $this->liveAgentChatUrl = $liveAgentChatUrl;
    }

    public function setLiveAgentContentUrl(string $liveAgentContentUrl)
    {
        $this->liveAgentContentUrl = $liveAgentContentUrl;
    }

    public function setLiveChatButton(string $liveChatButton)
    {
        $this->liveChatButton = $liveChatButton;
    }

    public function setLiveChatDeployment(string $liveChatDeployment)
    {
        $this->liveChatDeployment = $liveChatDeployment;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setOfflineCaseBackgroundImg(string $offlineCaseBackgroundImg)
    {
        $this->offlineCaseBackgroundImg = $offlineCaseBackgroundImg;
    }

    public function setPrechatBackgroundImg(string $prechatBackgroundImg)
    {
        $this->prechatBackgroundImg = $prechatBackgroundImg;
    }

    public function setPrechatEnabled(bool $prechatEnabled)
    {
        $this->prechatEnabled = $prechatEnabled;
    }

    public function setPrechatJson(string $prechatJson)
    {
        $this->prechatJson = $prechatJson;
    }

    public function setScenario(EmbeddedServiceScenario $scenario)
    {
        $this->scenario = $scenario->getValue();
    }

    public function setSmallCompanyLogoImg(string $smallCompanyLogoImg)
    {
        $this->smallCompanyLogoImg = $smallCompanyLogoImg;
    }

    public function setWaitingStateBackgroundImg(string $waitingStateBackgroundImg)
    {
        $this->waitingStateBackgroundImg = $waitingStateBackgroundImg;
    }
}
