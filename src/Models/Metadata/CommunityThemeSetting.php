<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CommunityThemeSetting
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $customThemeLayoutType
 * @property string|null $themeLayout
 * @property string|null $themeLayoutType
 */
class CommunityThemeSetting
{
    public static $classMap = [
    ];

    public function setCustomThemeLayoutType(string $customThemeLayoutType)
    {
        $this->customThemeLayoutType = $customThemeLayoutType;
    }

    public function setThemeLayout(string $themeLayout)
    {
        $this->themeLayout = $themeLayout;
    }

    public function setThemeLayoutType(CommunityThemeLayoutType $themeLayoutType)
    {
        $this->themeLayoutType = $themeLayoutType->getValue();
    }
}
