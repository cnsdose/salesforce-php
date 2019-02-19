<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PrimaryTabComponents
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property Container[]|null $containers
 */
class PrimaryTabComponents
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
