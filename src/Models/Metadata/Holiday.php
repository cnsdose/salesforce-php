<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Holiday
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $activityDate
 * @property string[]|null $businessHours
 * @property string|null $description
 * @property string|null $endTime
 * @property bool|null $isRecurring
 * @property string|null $name
 * @property int|null $recurrenceDayOfMonth
 * @property string[]|null $recurrenceDayOfWeek
 * @property int|null $recurrenceDayOfWeekMask
 * @property string|null $recurrenceEndDate
 * @property string|null $recurrenceInstance
 * @property int|null $recurrenceInterval
 * @property string|null $recurrenceMonthOfYear
 * @property string|null $recurrenceStartDate
 * @property string|null $recurrenceType
 * @property string|null $startTime
 */
class Holiday
{
    public static $classMap = [
    ];

    public function setActivityDate(string $activityDate)
    {
        $this->activityDate = $activityDate;
    }

    public function setBusinessHours(array $businessHours)
    {
        $this->businessHours = $businessHours;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setEndTime(string $endTime)
    {
        $this->endTime = $endTime;
    }

    public function setIsRecurring(bool $isRecurring)
    {
        $this->isRecurring = $isRecurring;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setRecurrenceDayOfMonth(int $recurrenceDayOfMonth)
    {
        $this->recurrenceDayOfMonth = $recurrenceDayOfMonth;
    }

    public function setRecurrenceDayOfWeek(array $recurrenceDayOfWeek)
    {
        $this->recurrenceDayOfWeek = $recurrenceDayOfWeek;
    }

    public function setRecurrenceDayOfWeekMask(int $recurrenceDayOfWeekMask)
    {
        $this->recurrenceDayOfWeekMask = $recurrenceDayOfWeekMask;
    }

    public function setRecurrenceEndDate(string $recurrenceEndDate)
    {
        $this->recurrenceEndDate = $recurrenceEndDate;
    }

    public function setRecurrenceInstance(string $recurrenceInstance)
    {
        $this->recurrenceInstance = $recurrenceInstance;
    }

    public function setRecurrenceInterval(int $recurrenceInterval)
    {
        $this->recurrenceInterval = $recurrenceInterval;
    }

    public function setRecurrenceMonthOfYear(string $recurrenceMonthOfYear)
    {
        $this->recurrenceMonthOfYear = $recurrenceMonthOfYear;
    }

    public function setRecurrenceStartDate(string $recurrenceStartDate)
    {
        $this->recurrenceStartDate = $recurrenceStartDate;
    }

    public function setRecurrenceType(string $recurrenceType)
    {
        $this->recurrenceType = $recurrenceType;
    }

    public function setStartTime(string $startTime)
    {
        $this->startTime = $startTime;
    }
}
