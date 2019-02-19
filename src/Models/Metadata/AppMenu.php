<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AppMenu
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property AppMenuItem[]|null $appMenuItems
 */
class AppMenu extends Metadata
{
    public static $classMap = [
        'appMenuItems' => [
            'multiple' => true,
            'type' => AppMenuItem::class,
        ],
    ];

    public function setAppMenuItems(array $appMenuItems)
    {
        $this->appMenuItems = $appMenuItems;
    }
}
