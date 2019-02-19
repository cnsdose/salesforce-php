<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowRule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $conditionLogic
 * @property FlowCondition[]|null $conditions
 * @property FlowConnector|null $connector
 * @property string|null $label
 */
class FlowRule extends FlowElement
{
    public static $classMap = [
        'conditions' => [
            'multiple' => true,
            'type' => FlowCondition::class,
        ],
        'connector' => [
            'multiple' => false,
            'type' => FlowConnector::class,
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

    public function setConnector(FlowConnector $connector)
    {
        $this->connector = $connector;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}
