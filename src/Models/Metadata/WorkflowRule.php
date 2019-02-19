<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WorkflowRule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property WorkflowActionReference[]|null $actions
 * @property bool|null $active
 * @property string|null $booleanFilter
 * @property FilterItem[]|null $criteriaItems
 * @property string|null $description
 * @property string|null $formula
 * @property string|null $triggerType
 * @property WorkflowTimeTrigger[]|null $workflowTimeTriggers
 */
class WorkflowRule extends Metadata
{
    public static $classMap = [
        'actions' => [
            'multiple' => true,
            'type' => WorkflowActionReference::class,
        ],
        'criteriaItems' => [
            'multiple' => true,
            'type' => FilterItem::class,
        ],
        'workflowTimeTriggers' => [
            'multiple' => true,
            'type' => WorkflowTimeTrigger::class,
        ],
    ];

    public function setActions(array $actions)
    {
        $this->actions = $actions;
    }

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setBooleanFilter(string $booleanFilter)
    {
        $this->booleanFilter = $booleanFilter;
    }

    public function setCriteriaItems(array $criteriaItems)
    {
        $this->criteriaItems = $criteriaItems;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setFormula(string $formula)
    {
        $this->formula = $formula;
    }

    public function setTriggerType(WorkflowTriggerTypes $triggerType)
    {
        $this->triggerType = $triggerType->getValue();
    }

    public function setWorkflowTimeTriggers(array $workflowTimeTriggers)
    {
        $this->workflowTimeTriggers = $workflowTimeTriggers;
    }
}
