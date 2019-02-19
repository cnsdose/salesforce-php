<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Territory2Type
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $name
 * @property int|null $priority
 */
class Territory2Type extends Metadata
{
    public static $classMap = [
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setPriority(int $priority)
    {
        $this->priority = $priority;
    }
}
