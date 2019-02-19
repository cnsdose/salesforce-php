<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AppWorkspaceConfig
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property WorkspaceMapping[]|null $mappings
 */
class AppWorkspaceConfig
{
    public static $classMap = [
        'mappings' => [
            'multiple' => true,
            'type' => WorkspaceMapping::class,
        ],
    ];

    public function setMappings(array $mappings)
    {
        $this->mappings = $mappings;
    }
}
