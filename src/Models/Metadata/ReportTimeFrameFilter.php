<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportTimeFrameFilter
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $dateColumn
 * @property string|null $endDate
 * @property string|null $interval
 * @property string|null $startDate
 */
class ReportTimeFrameFilter
{
    public static $classMap = [
    ];

    public function setDateColumn(string $dateColumn)
    {
        $this->dateColumn = $dateColumn;
    }

    public function setEndDate(string $endDate)
    {
        $this->endDate = $endDate;
    }

    public function setInterval(UserDateInterval $interval)
    {
        $this->interval = $interval->getValue();
    }

    public function setStartDate(string $startDate)
    {
        $this->startDate = $startDate;
    }
}
