<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class upsertMetadata
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property Metadata[]|null $metadata
 */
class upsertMetadata
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
