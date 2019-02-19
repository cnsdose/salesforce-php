<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowElement
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $name
 */
class FlowElement extends FlowBaseElement
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
}
