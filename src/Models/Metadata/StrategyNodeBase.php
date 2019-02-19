<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class StrategyNodeBase
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $childNode
 * @property string|null $description
 * @property string|null $label
 * @property string|null $name
 */
class StrategyNodeBase
{
    public static $classMap = [
    ];

    public function setChildNode(array $childNode)
    {
        $this->childNode = $childNode;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}
