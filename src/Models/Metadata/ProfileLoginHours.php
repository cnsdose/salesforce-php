<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ProfileLoginHours
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $fridayEnd
 * @property string|null $fridayStart
 * @property string|null $mondayEnd
 * @property string|null $mondayStart
 * @property string|null $saturdayEnd
 * @property string|null $saturdayStart
 * @property string|null $sundayEnd
 * @property string|null $sundayStart
 * @property string|null $thursdayEnd
 * @property string|null $thursdayStart
 * @property string|null $tuesdayEnd
 * @property string|null $tuesdayStart
 * @property string|null $wednesdayEnd
 * @property string|null $wednesdayStart
 */
class ProfileLoginHours
{
    public static $classMap = [
    ];

    public function setFridayEnd(string $fridayEnd)
    {
        $this->fridayEnd = $fridayEnd;
    }

    public function setFridayStart(string $fridayStart)
    {
        $this->fridayStart = $fridayStart;
    }

    public function setMondayEnd(string $mondayEnd)
    {
        $this->mondayEnd = $mondayEnd;
    }

    public function setMondayStart(string $mondayStart)
    {
        $this->mondayStart = $mondayStart;
    }

    public function setSaturdayEnd(string $saturdayEnd)
    {
        $this->saturdayEnd = $saturdayEnd;
    }

    public function setSaturdayStart(string $saturdayStart)
    {
        $this->saturdayStart = $saturdayStart;
    }

    public function setSundayEnd(string $sundayEnd)
    {
        $this->sundayEnd = $sundayEnd;
    }

    public function setSundayStart(string $sundayStart)
    {
        $this->sundayStart = $sundayStart;
    }

    public function setThursdayEnd(string $thursdayEnd)
    {
        $this->thursdayEnd = $thursdayEnd;
    }

    public function setThursdayStart(string $thursdayStart)
    {
        $this->thursdayStart = $thursdayStart;
    }

    public function setTuesdayEnd(string $tuesdayEnd)
    {
        $this->tuesdayEnd = $tuesdayEnd;
    }

    public function setTuesdayStart(string $tuesdayStart)
    {
        $this->tuesdayStart = $tuesdayStart;
    }

    public function setWednesdayEnd(string $wednesdayEnd)
    {
        $this->wednesdayEnd = $wednesdayEnd;
    }

    public function setWednesdayStart(string $wednesdayStart)
    {
        $this->wednesdayStart = $wednesdayStart;
    }
}
