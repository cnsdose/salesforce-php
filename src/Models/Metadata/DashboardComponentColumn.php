<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DashboardComponentColumn
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property float|null $breakPoint1
 * @property float|null $breakPoint2
 * @property int|null $breakPointOrder
 * @property int|null $highRangeColor
 * @property int|null $lowRangeColor
 * @property int|null $midRangeColor
 * @property string|null $reportColumn
 * @property bool|null $showTotal
 * @property DashboardComponentColumnType|null $type
 */
class DashboardComponentColumn
{
    public static $classMap = [
    ];

    public function setBreakPoint1(float $breakPoint1)
    {
        $this->breakPoint1 = $breakPoint1;
    }

    public function setBreakPoint2(float $breakPoint2)
    {
        $this->breakPoint2 = $breakPoint2;
    }

    public function setBreakPointOrder(int $breakPointOrder)
    {
        $this->breakPointOrder = $breakPointOrder;
    }

    public function setHighRangeColor(int $highRangeColor)
    {
        $this->highRangeColor = $highRangeColor;
    }

    public function setLowRangeColor(int $lowRangeColor)
    {
        $this->lowRangeColor = $lowRangeColor;
    }

    public function setMidRangeColor(int $midRangeColor)
    {
        $this->midRangeColor = $midRangeColor;
    }

    public function setReportColumn(string $reportColumn)
    {
        $this->reportColumn = $reportColumn;
    }

    public function setShowTotal(bool $showTotal)
    {
        $this->showTotal = $showTotal;
    }

    public function setType(DashboardComponentColumnType $type)
    {
        $this->type = $type;
    }
}
