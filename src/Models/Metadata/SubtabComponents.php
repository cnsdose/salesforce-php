<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SubtabComponents
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property Container[]|null $containers
 */
class SubtabComponents
{
    public static $classMap = [
        'containers' => [
            'multiple' => true,
            'type' => Container::class,
        ],
    ];

    public function setContainers(array $containers)
    {
        $this->containers = $containers;
    }
}
