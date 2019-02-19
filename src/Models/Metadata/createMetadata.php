<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class createMetadata
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property Metadata[]|null $metadata
 */
class createMetadata
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
