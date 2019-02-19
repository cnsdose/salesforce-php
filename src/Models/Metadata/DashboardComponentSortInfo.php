<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DashboardComponentSortInfo
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $sortColumn
 * @property string|null $sortOrder
 */
class DashboardComponentSortInfo
{
    public static $classMap = [
    ];

    public function setSortColumn(string $sortColumn)
    {
        $this->sortColumn = $sortColumn;
    }

    public function setSortOrder(string $sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }
}
