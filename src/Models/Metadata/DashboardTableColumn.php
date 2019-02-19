<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DashboardTableColumn
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $aggregateType
 * @property bool|null $calculatePercent
 * @property string|null $column
 * @property int|null $decimalPlaces
 * @property bool|null $showTotal
 * @property string|null $sortBy
 */
class DashboardTableColumn
{
    public static $classMap = [
    ];

    public function setAggregateType(ReportSummaryType $aggregateType)
    {
        $this->aggregateType = $aggregateType->getValue();
    }

    public function setCalculatePercent(bool $calculatePercent)
    {
        $this->calculatePercent = $calculatePercent;
    }

    public function setColumn(string $column)
    {
        $this->column = $column;
    }

    public function setDecimalPlaces(int $decimalPlaces)
    {
        $this->decimalPlaces = $decimalPlaces;
    }

    public function setShowTotal(bool $showTotal)
    {
        $this->showTotal = $showTotal;
    }

    public function setSortBy(DashboardComponentFilter $sortBy)
    {
        $this->sortBy = $sortBy->getValue();
    }
}
