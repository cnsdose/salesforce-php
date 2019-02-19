<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Report
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ReportAggregate[]|null $aggregates
 * @property Report[]|null $block
 * @property ReportBlockInfo|null $blockInfo
 * @property ReportBucketField[]|null $buckets
 * @property ReportChart|null $chart
 * @property ReportColorRange[]|null $colorRanges
 * @property ReportColumn[]|null $columns
 * @property ReportCrossFilter[]|null $crossFilters
 * @property string|null $currency
 * @property ReportDataCategoryFilter[]|null $dataCategoryFilters
 * @property string|null $description
 * @property string|null $division
 * @property ReportFilter|null $filter
 * @property string|null $folderName
 * @property string|null $format
 * @property ReportGrouping[]|null $groupingsAcross
 * @property ReportGrouping[]|null $groupingsDown
 * @property ReportHistoricalSelector|null $historicalSelector
 * @property string|null $name
 * @property int|null $numSubscriptions
 * @property ReportParam[]|null $params
 * @property string|null $reportType
 * @property string|null $roleHierarchyFilter
 * @property int|null $rowLimit
 * @property string|null $scope
 * @property bool|null $showCurrentDate
 * @property bool|null $showDetails
 * @property bool|null $showGrandTotal
 * @property bool|null $showSubTotals
 * @property string|null $sortColumn
 * @property string|null $sortOrder
 * @property string|null $territoryHierarchyFilter
 * @property ReportTimeFrameFilter|null $timeFrameFilter
 * @property string|null $userFilter
 */
class Report extends Metadata
{
    public static $classMap = [
        'aggregates' => [
            'multiple' => true,
            'type' => ReportAggregate::class,
        ],
        'block' => [
            'multiple' => true,
            'type' => Report::class,
        ],
        'blockInfo' => [
            'multiple' => false,
            'type' => ReportBlockInfo::class,
        ],
        'buckets' => [
            'multiple' => true,
            'type' => ReportBucketField::class,
        ],
        'chart' => [
            'multiple' => false,
            'type' => ReportChart::class,
        ],
        'colorRanges' => [
            'multiple' => true,
            'type' => ReportColorRange::class,
        ],
        'columns' => [
            'multiple' => true,
            'type' => ReportColumn::class,
        ],
        'crossFilters' => [
            'multiple' => true,
            'type' => ReportCrossFilter::class,
        ],
        'dataCategoryFilters' => [
            'multiple' => true,
            'type' => ReportDataCategoryFilter::class,
        ],
        'filter' => [
            'multiple' => false,
            'type' => ReportFilter::class,
        ],
        'groupingsAcross' => [
            'multiple' => true,
            'type' => ReportGrouping::class,
        ],
        'groupingsDown' => [
            'multiple' => true,
            'type' => ReportGrouping::class,
        ],
        'historicalSelector' => [
            'multiple' => false,
            'type' => ReportHistoricalSelector::class,
        ],
        'params' => [
            'multiple' => true,
            'type' => ReportParam::class,
        ],
        'timeFrameFilter' => [
            'multiple' => false,
            'type' => ReportTimeFrameFilter::class,
        ],
    ];

    public function setAggregates(array $aggregates)
    {
        $this->aggregates = $aggregates;
    }

    public function setBlock(array $block)
    {
        $this->block = $block;
    }

    public function setBlockInfo(ReportBlockInfo $blockInfo)
    {
        $this->blockInfo = $blockInfo;
    }

    public function setBuckets(array $buckets)
    {
        $this->buckets = $buckets;
    }

    public function setChart(ReportChart $chart)
    {
        $this->chart = $chart;
    }

    public function setColorRanges(array $colorRanges)
    {
        $this->colorRanges = $colorRanges;
    }

    public function setColumns(array $columns)
    {
        $this->columns = $columns;
    }

    public function setCrossFilters(array $crossFilters)
    {
        $this->crossFilters = $crossFilters;
    }

    public function setCurrency(CurrencyIsoCode $currency)
    {
        $this->currency = $currency->getValue();
    }

    public function setDataCategoryFilters(array $dataCategoryFilters)
    {
        $this->dataCategoryFilters = $dataCategoryFilters;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setDivision(string $division)
    {
        $this->division = $division;
    }

    public function setFilter(ReportFilter $filter)
    {
        $this->filter = $filter;
    }

    public function setFolderName(string $folderName)
    {
        $this->folderName = $folderName;
    }

    public function setFormat(ReportFormat $format)
    {
        $this->format = $format->getValue();
    }

    public function setGroupingsAcross(array $groupingsAcross)
    {
        $this->groupingsAcross = $groupingsAcross;
    }

    public function setGroupingsDown(array $groupingsDown)
    {
        $this->groupingsDown = $groupingsDown;
    }

    public function setHistoricalSelector(ReportHistoricalSelector $historicalSelector)
    {
        $this->historicalSelector = $historicalSelector;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setNumSubscriptions(int $numSubscriptions)
    {
        $this->numSubscriptions = $numSubscriptions;
    }

    public function setParams(array $params)
    {
        $this->params = $params;
    }

    public function setReportType(string $reportType)
    {
        $this->reportType = $reportType;
    }

    public function setRoleHierarchyFilter(string $roleHierarchyFilter)
    {
        $this->roleHierarchyFilter = $roleHierarchyFilter;
    }

    public function setRowLimit(int $rowLimit)
    {
        $this->rowLimit = $rowLimit;
    }

    public function setScope(string $scope)
    {
        $this->scope = $scope;
    }

    public function setShowCurrentDate(bool $showCurrentDate)
    {
        $this->showCurrentDate = $showCurrentDate;
    }

    public function setShowDetails(bool $showDetails)
    {
        $this->showDetails = $showDetails;
    }

    public function setShowGrandTotal(bool $showGrandTotal)
    {
        $this->showGrandTotal = $showGrandTotal;
    }

    public function setShowSubTotals(bool $showSubTotals)
    {
        $this->showSubTotals = $showSubTotals;
    }

    public function setSortColumn(string $sortColumn)
    {
        $this->sortColumn = $sortColumn;
    }

    public function setSortOrder(SortOrder $sortOrder)
    {
        $this->sortOrder = $sortOrder->getValue();
    }

    public function setTerritoryHierarchyFilter(string $territoryHierarchyFilter)
    {
        $this->territoryHierarchyFilter = $territoryHierarchyFilter;
    }

    public function setTimeFrameFilter(ReportTimeFrameFilter $timeFrameFilter)
    {
        $this->timeFrameFilter = $timeFrameFilter;
    }

    public function setUserFilter(string $userFilter)
    {
        $this->userFilter = $userFilter;
    }
}
