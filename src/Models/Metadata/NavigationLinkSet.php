<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class NavigationLinkSet
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property NavigationMenuItem[]|null $navigationMenuItem
 */
class NavigationLinkSet
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
