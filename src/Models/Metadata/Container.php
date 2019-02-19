<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Container
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property int|null $height
 * @property bool|null $isContainerAutoSizeEnabled
 * @property string|null $region
 * @property SidebarComponent[]|null $sidebarComponents
 * @property string|null $style
 * @property string|null $unit
 * @property int|null $width
 */
class Container
{
    public static $classMap = [
        'sidebarComponents' => [
            'multiple' => true,
            'type' => SidebarComponent::class,
        ],
    ];

    public function setHeight(int $height)
    {
        $this->height = $height;
    }

    public function setIsContainerAutoSizeEnabled(bool $isContainerAutoSizeEnabled)
    {
        $this->isContainerAutoSizeEnabled = $isContainerAutoSizeEnabled;
    }

    public function setRegion(string $region)
    {
        $this->region = $region;
    }

    public function setSidebarComponents(array $sidebarComponents)
    {
        $this->sidebarComponents = $sidebarComponents;
    }

    public function setStyle(string $style)
    {
        $this->style = $style;
    }

    public function setUnit(string $unit)
    {
        $this->unit = $unit;
    }

    public function setWidth(int $width)
    {
        $this->width = $width;
    }
}
