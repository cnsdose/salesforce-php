<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class BusinessHoursSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property BusinessHoursEntry[]|null $businessHours
 * @property Holiday[]|null $holidays
 */
class BusinessHoursSettings extends Metadata
{
    public static $classMap = [
        'businessHours' => [
            'multiple' => true,
            'type' => BusinessHoursEntry::class,
        ],
        'holidays' => [
            'multiple' => true,
            'type' => Holiday::class,
        ],
    ];

    public function setBusinessHours(array $businessHours)
    {
        $this->businessHours = $businessHours;
    }

    public function setHolidays(array $holidays)
    {
        $this->holidays = $holidays;
    }
}
