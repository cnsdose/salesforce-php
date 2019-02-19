<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowScreenRule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $conditionLogic
 * @property FlowCondition[]|null $conditions
 * @property string|null $label
 * @property FlowScreenRuleAction[]|null $ruleActions
 */
class FlowScreenRule extends FlowBaseElement
{
    public static $classMap = [
        'conditions' => [
            'multiple' => true,
            'type' => FlowCondition::class,
        ],
        'ruleActions' => [
            'multiple' => true,
            'type' => FlowScreenRuleAction::class,
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

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setRuleActions(array $ruleActions)
    {
        $this->ruleActions = $ruleActions;
    }
}
