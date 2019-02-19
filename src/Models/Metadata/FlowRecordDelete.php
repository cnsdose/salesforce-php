<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowRecordDelete
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property FlowConnector|null $connector
 * @property FlowConnector|null $faultConnector
 * @property FlowRecordFilter[]|null $filters
 * @property string|null $inputReference
 * @property string|null $object
 */
class FlowRecordDelete extends FlowNode
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

    public function setInputReference(string $inputReference)
    {
        $this->inputReference = $inputReference;
    }

    public function setObject(string $object)
    {
        $this->object = $object;
    }
}
