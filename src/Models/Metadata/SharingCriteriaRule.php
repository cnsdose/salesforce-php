<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SharingCriteriaRule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $booleanFilter
 * @property FilterItem[]|null $criteriaItems
 */
class SharingCriteriaRule extends SharingBaseRule
{
    public static $classMap = [
        'criteriaItems' => [
            'multiple' => true,
            'type' => FilterItem::class,
        ],
    ];

    public function setBooleanFilter(string $booleanFilter)
    {
        $this->booleanFilter = $booleanFilter;
    }

    public function setCriteriaItems(array $criteriaItems)
    {
        $this->criteriaItems = $criteriaItems;
    }
}
