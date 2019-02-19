<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WorkflowTimeTrigger
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property WorkflowActionReference[]|null $actions
 * @property string|null $offsetFromField
 * @property string|null $timeLength
 * @property string|null $workflowTimeTriggerUnit
 */
class WorkflowTimeTrigger
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

    public function setOffsetFromField(string $offsetFromField)
    {
        $this->offsetFromField = $offsetFromField;
    }

    public function setTimeLength(string $timeLength)
    {
        $this->timeLength = $timeLength;
    }

    public function setWorkflowTimeTriggerUnit(WorkflowTimeUnits $workflowTimeTriggerUnit)
    {
        $this->workflowTimeTriggerUnit = $workflowTimeTriggerUnit->getValue();
    }
}
