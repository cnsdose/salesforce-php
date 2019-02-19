<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomDataTypeTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property CustomDataTypeComponentTranslation[]|null $components
 * @property string|null $customDataTypeName
 * @property string|null $description
 * @property string|null $label
 */
class CustomDataTypeTranslation
{
    public static $classMap = [
        'components' => [
            'multiple' => true,
            'type' => CustomDataTypeComponentTranslation::class,
        ],
    ];

    public function setComponents(array $components)
    {
        $this->components = $components;
    }

    public function setCustomDataTypeName(string $customDataTypeName)
    {
        $this->customDataTypeName = $customDataTypeName;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}
