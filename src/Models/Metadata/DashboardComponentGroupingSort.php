<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DashboardComponentGroupingSort
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $groupingLevel
 * @property string|null $inheritedReportGroupingSort
 * @property string|null $sortColumn
 * @property string|null $sortOrder
 */
class DashboardComponentGroupingSort
{
    public static $classMap = [
    ];

    public function setGroupingLevel(string $groupingLevel)
    {
        $this->groupingLevel = $groupingLevel;
    }

    public function setInheritedReportGroupingSort(string $inheritedReportGroupingSort)
    {
        $this->inheritedReportGroupingSort = $inheritedReportGroupingSort;
    }

    public function setSortColumn(string $sortColumn)
    {
        $this->sortColumn = $sortColumn;
    }

    public function setSortOrder(string $sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }
}
