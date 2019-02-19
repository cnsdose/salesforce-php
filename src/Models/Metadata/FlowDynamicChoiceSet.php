<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowDynamicChoiceSet
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $dataType
 * @property string|null $displayField
 * @property FlowRecordFilter[]|null $filters
 * @property int|null $limit
 * @property string|null $object
 * @property FlowOutputFieldAssignment[]|null $outputAssignments
 * @property string|null $picklistField
 * @property string|null $picklistObject
 * @property string|null $sortField
 * @property string|null $sortOrder
 * @property string|null $valueField
 */
class FlowDynamicChoiceSet extends FlowElement
{
    public static $classMap = [
        'filters' => [
            'multiple' => true,
            'type' => FlowRecordFilter::class,
        ],
        'outputAssignments' => [
            'multiple' => true,
            'type' => FlowOutputFieldAssignment::class,
        ],
    ];

    public function setDataType(FlowDataType $dataType)
    {
        $this->dataType = $dataType->getValue();
    }

    public function setDisplayField(string $displayField)
    {
        $this->displayField = $displayField;
    }

    public function setFilters(array $filters)
    {
        $this->filters = $filters;
    }

    public function setLimit(int $limit)
    {
        $this->limit = $limit;
    }

    public function setObject(string $object)
    {
        $this->object = $object;
    }

    public function setOutputAssignments(array $outputAssignments)
    {
        $this->outputAssignments = $outputAssignments;
    }

    public function setPicklistField(string $picklistField)
    {
        $this->picklistField = $picklistField;
    }

    public function setPicklistObject(string $picklistObject)
    {
        $this->picklistObject = $picklistObject;
    }

    public function setSortField(string $sortField)
    {
        $this->sortField = $sortField;
    }

    public function setSortOrder(SortOrder $sortOrder)
    {
        $this->sortOrder = $sortOrder->getValue();
    }

    public function setValueField(string $valueField)
    {
        $this->valueField = $valueField;
    }
}
