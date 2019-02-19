<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DashboardGridLayout
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property DashboardGridComponent[]|null $dashboardGridComponents
 * @property int|null $numberOfColumns
 * @property int|null $rowHeight
 */
class DashboardGridLayout
{
    public static $classMap = [
        'dashboardGridComponents' => [
            'multiple' => true,
            'type' => DashboardGridComponent::class,
        ],
    ];

    public function setDashboardGridComponents(array $dashboardGridComponents)
    {
        $this->dashboardGridComponents = $dashboardGridComponents;
    }

    public function setNumberOfColumns(int $numberOfColumns)
    {
        $this->numberOfColumns = $numberOfColumns;
    }

    public function setRowHeight(int $rowHeight)
    {
        $this->rowHeight = $rowHeight;
    }
}
