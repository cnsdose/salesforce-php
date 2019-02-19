<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReputationLevelDefinitions
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ReputationLevel[]|null $level
 */
class ReputationLevelDefinitions
{
    public static $classMap = [
        'level' => [
            'multiple' => true,
            'type' => ReputationLevel::class,
        ],
    ];

    public function setLevel(array $level)
    {
        $this->level = $level;
    }
}
