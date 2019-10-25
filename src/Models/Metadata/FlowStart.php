<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowStart
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property FlowConnector|null $connector
 * @property FlowRecordFilter[]|null $filters
 * @property string|null $object
 * @property FlowSchedule|null $schedule
 * @property string|null $triggerType
 */
class FlowStart extends FlowNode
{
    public static $classMap = [
        'connector' => [
            'multiple' => false,
            'type' => FlowConnector::class,
        ],
        'filters' => [
            'multiple' => true,
            'type' => FlowRecordFilter::class,
        ],
        'schedule' => [
            'multiple' => false,
            'type' => FlowSchedule::class,
        ],
    ];

    public function setConnector(FlowConnector $connector)
    {
        $this->connector = $connector;
    }

    public function setFilters(array $filters)
    {
        $this->filters = $filters;
    }

    public function setObject(string $object)
    {
        $this->object = $object;
    }

    public function setSchedule(FlowSchedule $schedule)
    {
        $this->schedule = $schedule;
    }

    public function setTriggerType(FlowTriggerType $triggerType)
    {
        $this->triggerType = $triggerType->getValue();
    }
}
