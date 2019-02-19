<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowRecordUpdate
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property FlowConnector|null $connector
 * @property FlowConnector|null $faultConnector
 * @property FlowRecordFilter[]|null $filters
 * @property FlowInputFieldAssignment[]|null $inputAssignments
 * @property string|null $inputReference
 * @property string|null $object
 */
class FlowRecordUpdate extends FlowNode
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
        'filters' => [
            'multiple' => true,
            'type' => FlowRecordFilter::class,
        ],
        'inputAssignments' => [
            'multiple' => true,
            'type' => FlowInputFieldAssignment::class,
        ],
    ];

    public function setConnector(FlowConnector $connector)
    {
        $this->connector = $connector;
    }

    public function setFaultConnector(FlowConnector $faultConnector)
    {
        $this->faultConnector = $faultConnector;
    }

    public function setFilters(array $filters)
    {
        $this->filters = $filters;
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
