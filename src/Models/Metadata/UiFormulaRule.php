<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class UiFormulaRule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $booleanFilter
 * @property UiFormulaCriterion[]|null $criteria
 */
class UiFormulaRule
{
    public static $classMap = [
        'criteria' => [
            'multiple' => true,
            'type' => UiFormulaCriterion::class,
        ],
    ];

    public function setBooleanFilter(string $booleanFilter)
    {
        $this->booleanFilter = $booleanFilter;
    }

    public function setCriteria(array $criteria)
    {
        $this->criteria = $criteria;
    }
}
