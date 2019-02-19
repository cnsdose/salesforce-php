<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ListPlacement
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property int|null $height
 * @property string|null $location
 * @property string|null $units
 * @property int|null $width
 */
class ListPlacement
{
    public static $classMap = [
    ];

    public function setHeight(int $height)
    {
        $this->height = $height;
    }

    public function setLocation(string $location)
    {
        $this->location = $location;
    }

    public function setUnits(string $units)
    {
        $this->units = $units;
    }

    public function setWidth(int $width)
    {
        $this->width = $width;
    }
}
