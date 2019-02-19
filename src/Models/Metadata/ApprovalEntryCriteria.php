<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ApprovalEntryCriteria
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $booleanFilter
 * @property FilterItem[]|null $criteriaItems
 * @property string|null $formula
 */
class ApprovalEntryCriteria
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

    public function setFormula(string $formula)
    {
        $this->formula = $formula;
    }
}
