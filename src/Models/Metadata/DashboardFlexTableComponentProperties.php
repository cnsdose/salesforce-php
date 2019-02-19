<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DashboardFlexTableComponentProperties
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property int|null $decimalPrecision
 * @property DashboardComponentColumn[]|null $flexTableColumn
 * @property DashboardComponentSortInfo|null $flexTableSortInfo
 * @property bool|null $hideChatterPhotos
 */
class DashboardFlexTableComponentProperties
{
    public static $classMap = [
        'flexTableColumn' => [
            'multiple' => true,
            'type' => DashboardComponentColumn::class,
        ],
        'flexTableSortInfo' => [
            'multiple' => false,
            'type' => DashboardComponentSortInfo::class,
        ],
    ];

    public function setDecimalPrecision(int $decimalPrecision)
    {
        $this->decimalPrecision = $decimalPrecision;
    }

    public function setFlexTableColumn(array $flexTableColumn)
    {
        $this->flexTableColumn = $flexTableColumn;
    }

    public function setFlexTableSortInfo(DashboardComponentSortInfo $flexTableSortInfo)
    {
        $this->flexTableSortInfo = $flexTableSortInfo;
    }

    public function setHideChatterPhotos(bool $hideChatterPhotos)
    {
        $this->hideChatterPhotos = $hideChatterPhotos;
    }
}
