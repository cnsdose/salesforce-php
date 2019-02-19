<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EntitlementProcessMilestoneTimeTrigger
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property WorkflowActionReference[]|null $actions
 * @property int|null $timeLength
 * @property string|null $workflowTimeTriggerUnit
 */
class EntitlementProcessMilestoneTimeTrigger
{
    public static $classMap = [
        'actions' => [
            'multiple' => true,
            'type' => WorkflowActionReference::class,
        ],
    ];

    public function setActions(array $actions)
    {
        $this->actions = $actions;
    }

    public function setTimeLength(int $timeLength)
    {
        $this->timeLength = $timeLength;
    }

    public function setWorkflowTimeTriggerUnit(MilestoneTimeUnits $workflowTimeTriggerUnit)
    {
        $this->workflowTimeTriggerUnit = $workflowTimeTriggerUnit->getValue();
    }
}
