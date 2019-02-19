<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EclairGeoData
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property EclairMap[]|null $maps
 * @property string|null $masterLabel
 */
class EclairGeoData extends MetadataWithContent
{
    public static $classMap = [
        'maps' => [
            'multiple' => true,
            'type' => EclairMap::class,
        ],
    ];

    public function setMaps(array $maps)
    {
        $this->maps = $maps;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }
}
