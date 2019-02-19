<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DataCategory
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property DataCategory[]|null $dataCategory
 * @property string|null $label
 * @property string|null $name
 */
class DataCategory
{
    public static $classMap = [
        'dataCategory' => [
            'multiple' => true,
            'type' => DataCategory::class,
        ],
    ];

    public function setDataCategory(array $dataCategory)
    {
        $this->dataCategory = $dataCategory;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}
