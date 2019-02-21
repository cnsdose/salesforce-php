<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class UpdateMetadata
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property Metadata[]|null $metadata
 */
class UpdateMetadata
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
