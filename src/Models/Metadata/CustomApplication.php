<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomApplication
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property AppActionOverride[]|null $actionOverrides
 * @property AppBrand|null $brand
 * @property ServiceCloudConsoleConfig|null $consoleConfig
 * @property string|null $defaultLandingTab
 * @property string|null $description
 * @property string[]|null $formFactors
 * @property bool|null $isNavAutoTempTabsDisabled
 * @property bool|null $isNavPersonalizationDisabled
 * @property bool|null $isServiceCloudConsole
 * @property string|null $label
 * @property string|null $logo
 * @property string|null $navType
 * @property AppPreferences|null $preferences
 * @property AppProfileActionOverride[]|null $profileActionOverrides
 * @property string|null $setupExperience
 * @property string[]|null $subscriberTabs
 * @property string[]|null $tabs
 * @property string|null $uiType
 * @property string|null $utilityBar
 * @property AppWorkspaceConfig|null $workspaceConfig
 */
class CustomApplication extends Metadata
{
    public static $classMap = [
        'actionOverrides' => [
            'multiple' => true,
            'type' => AppActionOverride::class,
        ],
        'brand' => [
            'multiple' => false,
            'type' => AppBrand::class,
        ],
        'consoleConfig' => [
            'multiple' => false,
            'type' => ServiceCloudConsoleConfig::class,
        ],
        'preferences' => [
            'multiple' => false,
            'type' => AppPreferences::class,
        ],
        'profileActionOverrides' => [
            'multiple' => true,
            'type' => AppProfileActionOverride::class,
        ],
        'workspaceConfig' => [
            'multiple' => false,
            'type' => AppWorkspaceConfig::class,
        ],
    ];

    public function setActionOverrides(array $actionOverrides)
    {
        $this->actionOverrides = $actionOverrides;
    }

    public function setBrand(AppBrand $brand)
    {
        $this->brand = $brand;
    }

    public function setConsoleConfig(ServiceCloudConsoleConfig $consoleConfig)
    {
        $this->consoleConfig = $consoleConfig;
    }

    public function setDefaultLandingTab(string $defaultLandingTab)
    {
        $this->defaultLandingTab = $defaultLandingTab;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setFormFactors(array $formFactors)
    {
        $this->formFactors = $formFactors;
    }

    public function setIsNavAutoTempTabsDisabled(bool $isNavAutoTempTabsDisabled)
    {
        $this->isNavAutoTempTabsDisabled = $isNavAutoTempTabsDisabled;
    }

    public function setIsNavPersonalizationDisabled(bool $isNavPersonalizationDisabled)
    {
        $this->isNavPersonalizationDisabled = $isNavPersonalizationDisabled;
    }

    public function setIsServiceCloudConsole(bool $isServiceCloudConsole)
    {
        $this->isServiceCloudConsole = $isServiceCloudConsole;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setLogo(string $logo)
    {
        $this->logo = $logo;
    }

    public function setNavType(NavType $navType)
    {
        $this->navType = $navType->getValue();
    }

    public function setPreferences(AppPreferences $preferences)
    {
        $this->preferences = $preferences;
    }

    public function setProfileActionOverrides(array $profileActionOverrides)
    {
        $this->profileActionOverrides = $profileActionOverrides;
    }

    public function setSetupExperience(string $setupExperience)
    {
        $this->setupExperience = $setupExperience;
    }

    public function setSubscriberTabs(array $subscriberTabs)
    {
        $this->subscriberTabs = $subscriberTabs;
    }

    public function setTabs(array $tabs)
    {
        $this->tabs = $tabs;
    }

    public function setUiType(UiType $uiType)
    {
        $this->uiType = $uiType->getValue();
    }

    public function setUtilityBar(string $utilityBar)
    {
        $this->utilityBar = $utilityBar;
    }

    public function setWorkspaceConfig(AppWorkspaceConfig $workspaceConfig)
    {
        $this->workspaceConfig = $workspaceConfig;
    }
}
