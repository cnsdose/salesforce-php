<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowSubflow
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property FlowConnector|null $connector
 * @property string|null $flowName
 * @property FlowSubflowInputAssignment[]|null $inputAssignments
 * @property FlowSubflowOutputAssignment[]|null $outputAssignments
 */
class FlowSubflow extends FlowNode
{
    public static $classMap = [
        'connector' => [
            'multiple' => false,
            'type' => FlowConnector::class,
        ],
        'inputAssignments' => [
            'multiple' => true,
            'type' => FlowSubflowInputAssignment::class,
        ],
        'outputAssignments' => [
            'multiple' => true,
            'type' => FlowSubflowOutputAssignment::class,
        ],
    ];

    public function setConnector(FlowConnector $connector)
    {
        $this->connector = $connector;
    }

    public function setFlowName(string $flowName)
    {
        $this->flowName = $flowName;
    }

    public function setInputAssignments(array $inputAssignments)
    {
        $this->inputAssignments = $inputAssignments;
    }

    public function setOutputAssignments(array $outputAssignments)
    {
        $this->outputAssignments = $outputAssignments;
    }
}
