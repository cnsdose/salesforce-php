<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ContentAssetVersions
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ContentAssetVersion[]|null $version
 */
class ContentAssetVersions
{
    public static $classMap = [
        'version' => [
            'multiple' => true,
            'type' => ContentAssetVersion::class,
        ],
    ];

    public function setVersion(array $version)
    {
        $this->version = $version;
    }
}
