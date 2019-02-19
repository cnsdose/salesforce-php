<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class readMetadata
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $type
 * @property string[]|null $fullNames
 */
class readMetadata
{
    public static $classMap = [
    ];

    public function setType(string $type)
    {
        $this->type = $type;
    }

    public function setFullNames(array $fullNames)
    {
        $this->fullNames = $fullNames;
    }
}
