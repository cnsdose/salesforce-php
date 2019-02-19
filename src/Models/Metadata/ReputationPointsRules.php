<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReputationPointsRules
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ReputationPointsRule[]|null $pointsRule
 */
class ReputationPointsRules
{
    public static $classMap = [
        'pointsRule' => [
            'multiple' => true,
            'type' => ReputationPointsRule::class,
        ],
    ];

    public function setPointsRule(array $pointsRule)
    {
        $this->pointsRule = $pointsRule;
    }
}
