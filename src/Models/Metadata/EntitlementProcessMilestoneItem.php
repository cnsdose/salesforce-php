<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EntitlementProcessMilestoneItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $businessHours
 * @property string|null $criteriaBooleanFilter
 * @property FilterItem[]|null $milestoneCriteriaFilterItems
 * @property string|null $milestoneCriteriaFormula
 * @property string|null $milestoneName
 * @property string|null $minutesCustomClass
 * @property int|null $minutesToComplete
 * @property WorkflowActionReference[]|null $successActions
 * @property EntitlementProcessMilestoneTimeTrigger[]|null $timeTriggers
 * @property bool|null $useCriteriaStartTime
 */
class EntitlementProcessMilestoneItem
{
    public static $classMap = [
        'milestoneCriteriaFilterItems' => [
            'multiple' => true,
            'type' => FilterItem::class,
        ],
        'successActions' => [
            'multiple' => true,
            'type' => WorkflowActionReference::class,
        ],
        'timeTriggers' => [
            'multiple' => true,
            'type' => EntitlementProcessMilestoneTimeTrigger::class,
        ],
    ];

    public function setBusinessHours(string $businessHours)
    {
        $this->businessHours = $businessHours;
    }

    public function setCriteriaBooleanFilter(string $criteriaBooleanFilter)
    {
        $this->criteriaBooleanFilter = $criteriaBooleanFilter;
    }

    public function setMilestoneCriteriaFilterItems(array $milestoneCriteriaFilterItems)
    {
        $this->milestoneCriteriaFilterItems = $milestoneCriteriaFilterItems;
    }

    public function setMilestoneCriteriaFormula(string $milestoneCriteriaFormula)
    {
        $this->milestoneCriteriaFormula = $milestoneCriteriaFormula;
    }

    public function setMilestoneName(string $milestoneName)
    {
        $this->milestoneName = $milestoneName;
    }

    public function setMinutesCustomClass(string $minutesCustomClass)
    {
        $this->minutesCustomClass = $minutesCustomClass;
    }

    public function setMinutesToComplete(int $minutesToComplete)
    {
        $this->minutesToComplete = $minutesToComplete;
    }

    public function setSuccessActions(array $successActions)
    {
        $this->successActions = $successActions;
    }

    public function setTimeTriggers(array $timeTriggers)
    {
        $this->timeTriggers = $timeTriggers;
    }

    public function setUseCriteriaStartTime(bool $useCriteriaStartTime)
    {
        $this->useCriteriaStartTime = $useCriteriaStartTime;
    }
}
