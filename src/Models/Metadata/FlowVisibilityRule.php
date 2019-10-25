<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowVisibilityRule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $conditionLogic
 * @property FlowCondition[]|null $conditions
 */
class FlowVisibilityRule extends FlowBaseElement
{
    public static $classMap = [
        'conditions' => [
            'multiple' => true,
            'type' => FlowCondition::class,
        ],
    ];

    public function setConditionLogic(string $conditionLogic)
    {
        $this->conditionLogic = $conditionLogic;
    }

    public function setConditions(array $conditions)
    {
        $this->conditions = $conditions;
    }
}
