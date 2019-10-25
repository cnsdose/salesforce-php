<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class NavigationMenuItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $defaultListViewId
 * @property string|null $label
 * @property NavigationMenuItemBranding|null $menuItemBranding
 * @property int|null $position
 * @property bool|null $publiclyAvailable
 * @property NavigationSubMenu|null $subMenu
 * @property string|null $target
 * @property string|null $targetPreference
 * @property string|null $type
 */
class NavigationMenuItem
{
    public static $classMap = [
        'menuItemBranding' => [
            'multiple' => false,
            'type' => NavigationMenuItemBranding::class,
        ],
        'subMenu' => [
            'multiple' => false,
            'type' => NavigationSubMenu::class,
        ],
    ];

    public function setDefaultListViewId(string $defaultListViewId)
    {
        $this->defaultListViewId = $defaultListViewId;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setMenuItemBranding(NavigationMenuItemBranding $menuItemBranding)
    {
        $this->menuItemBranding = $menuItemBranding;
    }

    public function setPosition(int $position)
    {
        $this->position = $position;
    }

    public function setPubliclyAvailable(bool $publiclyAvailable)
    {
        $this->publiclyAvailable = $publiclyAvailable;
    }

    public function setSubMenu(NavigationSubMenu $subMenu)
    {
        $this->subMenu = $subMenu;
    }

    public function setTarget(string $target)
    {
        $this->target = $target;
    }

    public function setTargetPreference(string $targetPreference)
    {
        $this->targetPreference = $targetPreference;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }
}
