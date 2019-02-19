<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ServiceCloudConsoleConfig
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property AppComponentList|null $componentList
 * @property string|null $detailPageRefreshMethod
 * @property string|null $footerColor
 * @property string|null $headerColor
 * @property KeyboardShortcuts|null $keyboardShortcuts
 * @property ListPlacement|null $listPlacement
 * @property string|null $listRefreshMethod
 * @property LiveAgentConfig|null $liveAgentConfig
 * @property string|null $primaryTabColor
 * @property PushNotification[]|null $pushNotifications
 * @property TabLimitConfig|null $tabLimitConfig
 * @property string[]|null $whitelistedDomains
 */
class ServiceCloudConsoleConfig
{
    public static $classMap = [
        'componentList' => [
            'multiple' => false,
            'type' => AppComponentList::class,
        ],
        'keyboardShortcuts' => [
            'multiple' => false,
            'type' => KeyboardShortcuts::class,
        ],
        'listPlacement' => [
            'multiple' => false,
            'type' => ListPlacement::class,
        ],
        'liveAgentConfig' => [
            'multiple' => false,
            'type' => LiveAgentConfig::class,
        ],
        'pushNotifications' => [
            'multiple' => true,
            'type' => PushNotification::class,
        ],
        'tabLimitConfig' => [
            'multiple' => false,
            'type' => TabLimitConfig::class,
        ],
    ];

    public function setComponentList(AppComponentList $componentList)
    {
        $this->componentList = $componentList;
    }

    public function setDetailPageRefreshMethod(string $detailPageRefreshMethod)
    {
        $this->detailPageRefreshMethod = $detailPageRefreshMethod;
    }

    public function setFooterColor(string $footerColor)
    {
        $this->footerColor = $footerColor;
    }

    public function setHeaderColor(string $headerColor)
    {
        $this->headerColor = $headerColor;
    }

    public function setKeyboardShortcuts(KeyboardShortcuts $keyboardShortcuts)
    {
        $this->keyboardShortcuts = $keyboardShortcuts;
    }

    public function setListPlacement(ListPlacement $listPlacement)
    {
        $this->listPlacement = $listPlacement;
    }

    public function setListRefreshMethod(string $listRefreshMethod)
    {
        $this->listRefreshMethod = $listRefreshMethod;
    }

    public function setLiveAgentConfig(LiveAgentConfig $liveAgentConfig)
    {
        $this->liveAgentConfig = $liveAgentConfig;
    }

    public function setPrimaryTabColor(string $primaryTabColor)
    {
        $this->primaryTabColor = $primaryTabColor;
    }

    public function setPushNotifications(array $pushNotifications)
    {
        $this->pushNotifications = $pushNotifications;
    }

    public function setTabLimitConfig(TabLimitConfig $tabLimitConfig)
    {
        $this->tabLimitConfig = $tabLimitConfig;
    }

    public function setWhitelistedDomains(array $whitelistedDomains)
    {
        $this->whitelistedDomains = $whitelistedDomains;
    }
}
