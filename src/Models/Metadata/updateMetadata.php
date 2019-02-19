<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class updateMetadata
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property Metadata[]|null $metadata
 */
class updateMetadata
{
    public static $classMap = [
        'metadata' => [
            'multiple' => true,
            'type' => Metadata::class,
        ],
    ];

    public function setMetadata(array $metadata)
    {
        $this->metadata = $metadata;
    }
}
