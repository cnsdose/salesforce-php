<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FieldValue
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $name
 * @property mixed|null $value
 */
class FieldValue
{
    public static $classMap = [
    ];

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setValue(mixed $value)
    {
        $this->value = $value;
    }
}
