<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ForecastRangeSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property int|null $beginning
 * @property int|null $displaying
 * @property string|null $periodType
 */
class ForecastRangeSettings
{
    public static $classMap = [
    ];

    public function setBeginning(int $beginning)
    {
        $this->beginning = $beginning;
    }

    public function setDisplaying(int $displaying)
    {
        $this->displaying = $displaying;
    }

    public function setPeriodType(PeriodTypes $periodType)
    {
        $this->periodType = $periodType->getValue();
    }
}
