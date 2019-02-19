<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class NavigationSubMenu
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property NavigationMenuItem[]|null $navigationMenuItem
 */
class NavigationSubMenu
{
    public static $classMap = [
        'navigationMenuItem' => [
            'multiple' => true,
            'type' => NavigationMenuItem::class,
        ],
    ];

    public function setNavigationMenuItem(array $navigationMenuItem)
    {
        $this->navigationMenuItem = $navigationMenuItem;
    }
}
