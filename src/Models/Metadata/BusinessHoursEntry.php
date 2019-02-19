<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class BusinessHoursEntry
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $active
 * @property bool|null $default
 * @property string|null $fridayEndTime
 * @property string|null $fridayStartTime
 * @property string|null $mondayEndTime
 * @property string|null $mondayStartTime
 * @property string|null $name
 * @property string|null $saturdayEndTime
 * @property string|null $saturdayStartTime
 * @property string|null $sundayEndTime
 * @property string|null $sundayStartTime
 * @property string|null $thursdayEndTime
 * @property string|null $thursdayStartTime
 * @property string|null $timeZoneId
 * @property string|null $tuesdayEndTime
 * @property string|null $tuesdayStartTime
 * @property string|null $wednesdayEndTime
 * @property string|null $wednesdayStartTime
 */
class BusinessHoursEntry extends Metadata
{
    public static $classMap = [
    ];

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setDefault(bool $default)
    {
        $this->default = $default;
    }

    public function setFridayEndTime(string $fridayEndTime)
    {
        $this->fridayEndTime = $fridayEndTime;
    }

    public function setFridayStartTime(string $fridayStartTime)
    {
        $this->fridayStartTime = $fridayStartTime;
    }

    public function setMondayEndTime(string $mondayEndTime)
    {
        $this->mondayEndTime = $mondayEndTime;
    }

    public function setMondayStartTime(string $mondayStartTime)
    {
        $this->mondayStartTime = $mondayStartTime;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setSaturdayEndTime(string $saturdayEndTime)
    {
        $this->saturdayEndTime = $saturdayEndTime;
    }

    public function setSaturdayStartTime(string $saturdayStartTime)
    {
        $this->saturdayStartTime = $saturdayStartTime;
    }

    public function setSundayEndTime(string $sundayEndTime)
    {
        $this->sundayEndTime = $sundayEndTime;
    }

    public function setSundayStartTime(string $sundayStartTime)
    {
        $this->sundayStartTime = $sundayStartTime;
    }

    public function setThursdayEndTime(string $thursdayEndTime)
    {
        $this->thursdayEndTime = $thursdayEndTime;
    }

    public function setThursdayStartTime(string $thursdayStartTime)
    {
        $this->thursdayStartTime = $thursdayStartTime;
    }

    public function setTimeZoneId(string $timeZoneId)
    {
        $this->timeZoneId = $timeZoneId;
    }

    public function setTuesdayEndTime(string $tuesdayEndTime)
    {
        $this->tuesdayEndTime = $tuesdayEndTime;
    }

    public function setTuesdayStartTime(string $tuesdayStartTime)
    {
        $this->tuesdayStartTime = $tuesdayStartTime;
    }

    public function setWednesdayEndTime(string $wednesdayEndTime)
    {
        $this->wednesdayEndTime = $wednesdayEndTime;
    }

    public function setWednesdayStartTime(string $wednesdayStartTime)
    {
        $this->wednesdayStartTime = $wednesdayStartTime;
    }
}
