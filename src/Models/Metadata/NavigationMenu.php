<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class NavigationMenu
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $container
 * @property string|null $containerType
 * @property string|null $label
 * @property NavigationMenuItem[]|null $navigationMenuItem
 */
class NavigationMenu extends Metadata
{
    public static $classMap = [
        'navigationMenuItem' => [
            'multiple' => true,
            'type' => NavigationMenuItem::class,
        ],
    ];

    public function setContainer(string $container)
    {
        $this->container = $container;
    }

    public function setContainerType(string $containerType)
    {
        $this->containerType = $containerType;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setNavigationMenuItem(array $navigationMenuItem)
    {
        $this->navigationMenuItem = $navigationMenuItem;
    }
}
