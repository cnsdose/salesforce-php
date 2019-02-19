<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DashboardGridComponent
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property int|null $colSpan
 * @property int|null $columnIndex
 * @property DashboardComponent|null $dashboardComponent
 * @property int|null $rowIndex
 * @property int|null $rowSpan
 */
class DashboardGridComponent
{
    public static $classMap = [
        'dashboardComponent' => [
            'multiple' => false,
            'type' => DashboardComponent::class,
        ],
    ];

    public function setColSpan(int $colSpan)
    {
        $this->colSpan = $colSpan;
    }

    public function setColumnIndex(int $columnIndex)
    {
        $this->columnIndex = $columnIndex;
    }

    public function setDashboardComponent(DashboardComponent $dashboardComponent)
    {
        $this->dashboardComponent = $dashboardComponent;
    }

    public function setRowIndex(int $rowIndex)
    {
        $this->rowIndex = $rowIndex;
    }

    public function setRowSpan(int $rowSpan)
    {
        $this->rowSpan = $rowSpan;
    }
}
