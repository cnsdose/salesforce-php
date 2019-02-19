<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowAssignment
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property FlowAssignmentItem[]|null $assignmentItems
 * @property FlowConnector|null $connector
 */
class FlowAssignment extends FlowNode
{
    public static $classMap = [
        'assignmentItems' => [
            'multiple' => true,
            'type' => FlowAssignmentItem::class,
        ],
        'connector' => [
            'multiple' => false,
            'type' => FlowConnector::class,
        ],
    ];

    public function setAssignmentItems(array $assignmentItems)
    {
        $this->assignmentItems = $assignmentItems;
    }

    public function setConnector(FlowConnector $connector)
    {
        $this->connector = $connector;
    }
}
