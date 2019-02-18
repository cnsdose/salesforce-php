<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomValue
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $color
 * @property bool|null $default
 * @property string|null $description
 * @property bool|null $isActive
 * @property string|null $label
 */
class CustomValue extends Metadata
{
    public static $classMap = [
    ];

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function setDefault(bool $default)
    {
        $this->default = $default;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}
