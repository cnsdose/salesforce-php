<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportColorRange
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $aggregate
 * @property string|null $columnName
 * @property float|null $highBreakpoint
 * @property string|null $highColor
 * @property float|null $lowBreakpoint
 * @property string|null $lowColor
 * @property string|null $midColor
 */
class ReportColorRange
{
    public static $classMap = [
    ];

    public function setAggregate(ReportSummaryType $aggregate)
    {
        $this->aggregate = $aggregate->getValue();
    }

    public function setColumnName(string $columnName)
    {
        $this->columnName = $columnName;
    }

    public function setHighBreakpoint(float $highBreakpoint)
    {
        $this->highBreakpoint = $highBreakpoint;
    }

    public function setHighColor(string $highColor)
    {
        $this->highColor = $highColor;
    }

    public function setLowBreakpoint(float $lowBreakpoint)
    {
        $this->lowBreakpoint = $lowBreakpoint;
    }

    public function setLowColor(string $lowColor)
    {
        $this->lowColor = $lowColor;
    }

    public function setMidColor(string $midColor)
    {
        $this->midColor = $midColor;
    }
}
