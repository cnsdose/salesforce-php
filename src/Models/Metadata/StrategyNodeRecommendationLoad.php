<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class StrategyNodeRecommendationLoad
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property RecommendationLoadCondition[]|null $condition
 * @property string|null $conditionLogic
 */
class StrategyNodeRecommendationLoad extends StrategyNodeUnionBase
{
    public static $classMap = [
        'condition' => [
            'multiple' => true,
            'type' => RecommendationLoadCondition::class,
        ],
    ];

    public function setCondition(array $condition)
    {
        $this->condition = $condition;
    }

    public function setConditionLogic(string $conditionLogic)
    {
        $this->conditionLogic = $conditionLogic;
    }
}
