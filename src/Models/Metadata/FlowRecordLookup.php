<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowRecordLookup
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $assignNullValuesIfNoRecordsFound
 * @property FlowConnector|null $connector
 * @property FlowConnector|null $faultConnector
 * @property FlowRecordFilter[]|null $filters
 * @property string|null $object
 * @property FlowOutputFieldAssignment[]|null $outputAssignments
 * @property string|null $outputReference
 * @property string[]|null $queriedFields
 * @property string|null $sortField
 * @property string|null $sortOrder
 */
class FlowRecordLookup extends FlowNode
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
        'outputAssignments' => [
            'multiple' => true,
            'type' => FlowOutputFieldAssignment::class,
        ],
    ];

    public function setAssignNullValuesIfNoRecordsFound(bool $assignNullValuesIfNoRecordsFound)
    {
        $this->assignNullValuesIfNoRecordsFound = $assignNullValuesIfNoRecordsFound;
    }

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

    public function setObject(string $object)
    {
        $this->object = $object;
    }

    public function setOutputAssignments(array $outputAssignments)
    {
        $this->outputAssignments = $outputAssignments;
    }

    public function setOutputReference(string $outputReference)
    {
        $this->outputReference = $outputReference;
    }

    public function setQueriedFields(array $queriedFields)
    {
        $this->queriedFields = $queriedFields;
    }

    public function setSortField(string $sortField)
    {
        $this->sortField = $sortField;
    }

    public function setSortOrder(SortOrder $sortOrder)
    {
        $this->sortOrder = $sortOrder->getValue();
    }
}
