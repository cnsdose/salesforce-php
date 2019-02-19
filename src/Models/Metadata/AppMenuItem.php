<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AppMenuItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $name
 * @property string|null $type
 */
class AppMenuItem
{
    public static $classMap = [
    ];

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }
}
