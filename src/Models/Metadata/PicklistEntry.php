<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PicklistEntry
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $active
 * @property bool|null $defaultValue
 * @property string|null $label
 * @property string|null $validFor
 * @property string|null $value
 */
class PicklistEntry
{
    public static $classMap = [
    ];

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setDefaultValue(bool $defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setValidFor(string $validFor)
    {
        $this->validFor = $validFor;
    }

    public function setValue(string $value)
    {
        $this->value = $value;
    }
}
