<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CommunityTemplatePageSetting
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $page
 * @property string|null $themeLayout
 */
class CommunityTemplatePageSetting
{
    public static $classMap = [
    ];

    public function setPage(string $page)
    {
        $this->page = $page;
    }

    public function setThemeLayout(string $themeLayout)
    {
        $this->themeLayout = $themeLayout;
    }
}
