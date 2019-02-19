<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ChartSummary
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $aggregate
 * @property string|null $axisBinding
 * @property string|null $column
 */
class ChartSummary
{
    public static $classMap = [
    ];

    public function setAggregate(ReportSummaryType $aggregate)
    {
        $this->aggregate = $aggregate->getValue();
    }

    public function setAxisBinding(ChartAxis $axisBinding)
    {
        $this->axisBinding = $axisBinding->getValue();
    }

    public function setColumn(string $column)
    {
        $this->column = $column;
    }
}
