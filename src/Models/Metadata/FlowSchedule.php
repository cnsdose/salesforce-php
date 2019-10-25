<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowSchedule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $frequency
 * @property string|null $startDate
 * @property string|null $startTime
 */
class FlowSchedule
{
    public static $classMap = [
    ];

    public function setFrequency(FlowStartFrequency $frequency)
    {
        $this->frequency = $frequency->getValue();
    }

    public function setStartDate(string $startDate)
    {
        $this->startDate = $startDate;
    }

    public function setStartTime(string $startTime)
    {
        $this->startTime = $startTime;
    }
}
