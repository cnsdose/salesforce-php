<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class BrandingSet
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property BrandingSetProperty[]|null $brandingSetProperty
 * @property string|null $description
 * @property string|null $masterLabel
 * @property string|null $type
 */
class BrandingSet extends Metadata
{
    public static $classMap = [
        'brandingSetProperty' => [
            'multiple' => true,
            'type' => BrandingSetProperty::class,
        ],
    ];

    public function setBrandingSetProperty(array $brandingSetProperty)
    {
        $this->brandingSetProperty = $brandingSetProperty;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }
}
