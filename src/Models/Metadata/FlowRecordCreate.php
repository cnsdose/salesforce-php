<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowRecordCreate
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $assignRecordIdToReference
 * @property FlowConnector|null $connector
 * @property FlowConnector|null $faultConnector
 * @property FlowInputFieldAssignment[]|null $inputAssignments
 * @property string|null $inputReference
 * @property string|null $object
 */
class FlowRecordCreate extends FlowNode
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
        'inputAssignments' => [
            'multiple' => true,
            'type' => FlowInputFieldAssignment::class,
        ],
    ];

    public function setAssignRecordIdToReference(string $assignRecordIdToReference)
    {
        $this->assignRecordIdToReference = $assignRecordIdToReference;
    }

    public function setConnector(FlowConnector $connector)
    {
        $this->connector = $connector;
    }

    public function setFaultConnector(FlowConnector $faultConnector)
    {
        $this->faultConnector = $faultConnector;
    }

    public function setInputAssignments(array $inputAssignments)
    {
        $this->inputAssignments = $inputAssignments;
    }

    public function setInputReference(string $inputReference)
    {
        $this->inputReference = $inputReference;
    }

    public function setObject(string $object)
    {
        $this->object = $object;
    }
}
