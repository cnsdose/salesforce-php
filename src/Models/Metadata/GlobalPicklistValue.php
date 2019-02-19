<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class GlobalPicklistValue
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $color
 * @property bool|null $default
 * @property string|null $description
 * @property bool|null $isActive
 */
class GlobalPicklistValue extends Metadata
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
}
