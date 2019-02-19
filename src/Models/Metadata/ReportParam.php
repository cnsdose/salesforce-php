<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportParam
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $name
 * @property string|null $value
 */
class ReportParam
{
    public static $classMap = [
    ];

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setValue(string $value)
    {
        $this->value = $value;
    }
}
