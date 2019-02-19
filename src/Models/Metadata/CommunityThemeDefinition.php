<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CommunityThemeDefinition
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property CommunityThemeBundleInfo[]|null $bundlesInfo
 * @property CommunityCustomThemeLayoutType[]|null $customThemeLayoutType
 * @property string|null $defaultBrandingSet
 * @property string|null $description
 * @property bool|null $enableExtendedCleanUpOnDelete
 * @property string|null $masterLabel
 * @property string|null $publisher
 * @property CommunityThemeRouteOverride[]|null $themeRouteOverride
 * @property CommunityThemeSetting[]|null $themeSetting
 */
class CommunityThemeDefinition extends Metadata
{
    public static $classMap = [
        'bundlesInfo' => [
            'multiple' => true,
            'type' => CommunityThemeBundleInfo::class,
        ],
        'customThemeLayoutType' => [
            'multiple' => true,
            'type' => CommunityCustomThemeLayoutType::class,
        ],
        'themeRouteOverride' => [
            'multiple' => true,
            'type' => CommunityThemeRouteOverride::class,
        ],
        'themeSetting' => [
            'multiple' => true,
            'type' => CommunityThemeSetting::class,
        ],
    ];

    public function setBundlesInfo(array $bundlesInfo)
    {
        $this->bundlesInfo = $bundlesInfo;
    }

    public function setCustomThemeLayoutType(array $customThemeLayoutType)
    {
        $this->customThemeLayoutType = $customThemeLayoutType;
    }

    public function setDefaultBrandingSet(string $defaultBrandingSet)
    {
        $this->defaultBrandingSet = $defaultBrandingSet;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setEnableExtendedCleanUpOnDelete(bool $enableExtendedCleanUpOnDelete)
    {
        $this->enableExtendedCleanUpOnDelete = $enableExtendedCleanUpOnDelete;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setPublisher(string $publisher)
    {
        $this->publisher = $publisher;
    }

    public function setThemeRouteOverride(array $themeRouteOverride)
    {
        $this->themeRouteOverride = $themeRouteOverride;
    }

    public function setThemeSetting(array $themeSetting)
    {
        $this->themeSetting = $themeSetting;
    }
}
