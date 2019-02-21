<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CreateMetadata
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property Metadata[]|null $metadata
 */
class CreateMetadata
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
