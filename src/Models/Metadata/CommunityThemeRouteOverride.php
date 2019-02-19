<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CommunityThemeRouteOverride
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $customThemeLayoutType
 * @property string|null $pageAttributes
 * @property string|null $pageType
 * @property string|null $themeLayoutType
 */
class CommunityThemeRouteOverride
{
    public static $classMap = [
    ];

    public function setCustomThemeLayoutType(string $customThemeLayoutType)
    {
        $this->customThemeLayoutType = $customThemeLayoutType;
    }

    public function setPageAttributes(string $pageAttributes)
    {
        $this->pageAttributes = $pageAttributes;
    }

    public function setPageType(string $pageType)
    {
        $this->pageType = $pageType;
    }

    public function setThemeLayoutType(CommunityThemeLayoutType $themeLayoutType)
    {
        $this->themeLayoutType = $themeLayoutType->getValue();
    }
}
