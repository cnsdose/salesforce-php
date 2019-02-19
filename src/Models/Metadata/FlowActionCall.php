<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowActionCall
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $actionName
 * @property string|null $actionType
 * @property FlowConnector|null $connector
 * @property FlowConnector|null $faultConnector
 * @property FlowActionCallInputParameter[]|null $inputParameters
 * @property FlowActionCallOutputParameter[]|null $outputParameters
 */
class FlowActionCall extends FlowNode
{
    public static $classMap = [
        'connector' => [
            'multiple' => false,
            'type' => FlowConnector::class,
        ],
        'faultConnector' => [
            'multiple' => false,
            'type' => FlowConnector::class,
        ],
        'inputParameters' => [
            'multiple' => true,
            'type' => FlowActionCallInputParameter::class,
        ],
        'outputParameters' => [
            'multiple' => true,
            'type' => FlowActionCallOutputParameter::class,
        ],
    ];

    public function setActionName(string $actionName)
    {
        $this->actionName = $actionName;
    }

    public function setActionType(InvocableActionType $actionType)
    {
        $this->actionType = $actionType->getValue();
    }

    public function setConnector(FlowConnector $connector)
    {
        $this->connector = $connector;
    }

    public function setFaultConnector(FlowConnector $faultConnector)
    {
        $this->faultConnector = $faultConnector;
    }

    public function setInputParameters(array $inputParameters)
    {
        $this->inputParameters = $inputParameters;
    }

    public function setOutputParameters(array $outputParameters)
    {
        $this->outputParameters = $outputParameters;
    }
}
