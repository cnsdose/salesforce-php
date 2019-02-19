<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowWaitEvent
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $conditionLogic
 * @property FlowCondition[]|null $conditions
 * @property FlowConnector|null $connector
 * @property string|null $eventType
 * @property FlowWaitEventInputParameter[]|null $inputParameters
 * @property string|null $label
 * @property FlowWaitEventOutputParameter[]|null $outputParameters
 */
class FlowWaitEvent extends FlowElement
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
        'inputParameters' => [
            'multiple' => true,
            'type' => FlowWaitEventInputParameter::class,
        ],
        'outputParameters' => [
            'multiple' => true,
            'type' => FlowWaitEventOutputParameter::class,
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

    public function setEventType(string $eventType)
    {
        $this->eventType = $eventType;
    }

    public function setInputParameters(array $inputParameters)
    {
        $this->inputParameters = $inputParameters;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setOutputParameters(array $outputParameters)
    {
        $this->outputParameters = $outputParameters;
    }
}
