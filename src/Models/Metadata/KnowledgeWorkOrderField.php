<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class KnowledgeWorkOrderField
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $name
 */
class KnowledgeWorkOrderField
{
    public static $classMap = [
    ];

    public function setName(string $name)
    {
        $this->name = $name;
    }
}
