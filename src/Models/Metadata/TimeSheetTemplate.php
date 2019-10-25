<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class TimeSheetTemplate
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $active
 * @property string|null $description
 * @property string|null $frequency
 * @property string|null $masterLabel
 * @property string|null $startDate
 * @property TimeSheetTemplateAssignment[]|null $timeSheetTemplateAssignments
 * @property string|null $workWeekEndDay
 * @property string|null $workWeekStartDay
 */
class TimeSheetTemplate extends Metadata
{
    public static $classMap = [
        'timeSheetTemplateAssignments' => [
            'multiple' => true,
            'type' => TimeSheetTemplateAssignment::class,
        ],
    ];

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setFrequency(TimeSheetFrequency $frequency)
    {
        $this->frequency = $frequency->getValue();
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setStartDate(string $startDate)
    {
        $this->startDate = $startDate;
    }

    public function setTimeSheetTemplateAssignments(array $timeSheetTemplateAssignments)
    {
        $this->timeSheetTemplateAssignments = $timeSheetTemplateAssignments;
    }

    public function setWorkWeekEndDay(DaysOfWeek $workWeekEndDay)
    {
        $this->workWeekEndDay = $workWeekEndDay->getValue();
    }

    public function setWorkWeekStartDay(DaysOfWeek $workWeekStartDay)
    {
        $this->workWeekStartDay = $workWeekStartDay->getValue();
    }
}
