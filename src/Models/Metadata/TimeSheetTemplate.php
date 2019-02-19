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
 * @property bool|null $isProtected
 * @property string|null $masterLabel
 * @property string|null $startDate
 * @property int|null $workWeekEndDay
 * @property int|null $workWeekStartDay
 */
class TimeSheetTemplate extends Metadata
{
    public static $classMap = [
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

    public function setIsProtected(bool $isProtected)
    {
        $this->isProtected = $isProtected;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setStartDate(string $startDate)
    {
        $this->startDate = $startDate;
    }

    public function setWorkWeekEndDay(int $workWeekEndDay)
    {
        $this->workWeekEndDay = $workWeekEndDay;
    }

    public function setWorkWeekStartDay(int $workWeekStartDay)
    {
        $this->workWeekStartDay = $workWeekStartDay;
    }
}
