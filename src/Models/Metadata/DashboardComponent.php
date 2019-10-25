<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DashboardComponent
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $autoselectColumnsFromReport
 * @property string|null $chartAxisRange
 * @property float|null $chartAxisRangeMax
 * @property float|null $chartAxisRangeMin
 * @property ChartSummary[]|null $chartSummary
 * @property string|null $componentChartTheme
 * @property string|null $componentType
 * @property DashboardFilterColumn[]|null $dashboardFilterColumns
 * @property DashboardTableColumn[]|null $dashboardTableColumn
 * @property int|null $decimalPrecision
 * @property string|null $displayUnits
 * @property string|null $drillDownUrl
 * @property bool|null $drillEnabled
 * @property bool|null $drillToDetailEnabled
 * @property bool|null $enableHover
 * @property bool|null $expandOthers
 * @property DashboardFlexTableComponentProperties|null $flexComponentProperties
 * @property string|null $footer
 * @property float|null $gaugeMax
 * @property float|null $gaugeMin
 * @property string[]|null $groupingColumn
 * @property DashboardComponentGroupingSortProperties|null $groupingSortProperties
 * @property string|null $header
 * @property float|null $indicatorBreakpoint1
 * @property float|null $indicatorBreakpoint2
 * @property string|null $indicatorHighColor
 * @property string|null $indicatorLowColor
 * @property string|null $indicatorMiddleColor
 * @property string|null $legendPosition
 * @property int|null $maxValuesDisplayed
 * @property string|null $metricLabel
 * @property string|null $page
 * @property int|null $pageHeightInPixels
 * @property string|null $report
 * @property string|null $scontrol
 * @property int|null $scontrolHeightInPixels
 * @property bool|null $showPercentage
 * @property bool|null $showPicturesOnCharts
 * @property bool|null $showPicturesOnTables
 * @property bool|null $showRange
 * @property bool|null $showTotal
 * @property bool|null $showValues
 * @property string|null $sortBy
 * @property string|null $title
 * @property bool|null $useReportChart
 */
class DashboardComponent
{
    public static $classMap = [
        'chartSummary' => [
            'multiple' => true,
            'type' => ChartSummary::class,
        ],
        'dashboardFilterColumns' => [
            'multiple' => true,
            'type' => DashboardFilterColumn::class,
        ],
        'dashboardTableColumn' => [
            'multiple' => true,
            'type' => DashboardTableColumn::class,
        ],
        'flexComponentProperties' => [
            'multiple' => false,
            'type' => DashboardFlexTableComponentProperties::class,
        ],
        'groupingSortProperties' => [
            'multiple' => false,
            'type' => DashboardComponentGroupingSortProperties::class,
        ],
    ];

    public function setAutoselectColumnsFromReport(bool $autoselectColumnsFromReport)
    {
        $this->autoselectColumnsFromReport = $autoselectColumnsFromReport;
    }

    public function setChartAxisRange(ChartRangeType $chartAxisRange)
    {
        $this->chartAxisRange = $chartAxisRange->getValue();
    }

    public function setChartAxisRangeMax(float $chartAxisRangeMax)
    {
        $this->chartAxisRangeMax = $chartAxisRangeMax;
    }

    public function setChartAxisRangeMin(float $chartAxisRangeMin)
    {
        $this->chartAxisRangeMin = $chartAxisRangeMin;
    }

    public function setChartSummary(array $chartSummary)
    {
        $this->chartSummary = $chartSummary;
    }

    public function setComponentChartTheme(ChartTheme $componentChartTheme)
    {
        $this->componentChartTheme = $componentChartTheme->getValue();
    }

    public function setComponentType(DashboardComponentType $componentType)
    {
        $this->componentType = $componentType->getValue();
    }

    public function setDashboardFilterColumns(array $dashboardFilterColumns)
    {
        $this->dashboardFilterColumns = $dashboardFilterColumns;
    }

    public function setDashboardTableColumn(array $dashboardTableColumn)
    {
        $this->dashboardTableColumn = $dashboardTableColumn;
    }

    public function setDecimalPrecision(int $decimalPrecision)
    {
        $this->decimalPrecision = $decimalPrecision;
    }

    public function setDisplayUnits(ChartUnits $displayUnits)
    {
        $this->displayUnits = $displayUnits->getValue();
    }

    public function setDrillDownUrl(string $drillDownUrl)
    {
        $this->drillDownUrl = $drillDownUrl;
    }

    public function setDrillEnabled(bool $drillEnabled)
    {
        $this->drillEnabled = $drillEnabled;
    }

    public function setDrillToDetailEnabled(bool $drillToDetailEnabled)
    {
        $this->drillToDetailEnabled = $drillToDetailEnabled;
    }

    public function setEnableHover(bool $enableHover)
    {
        $this->enableHover = $enableHover;
    }

    public function setExpandOthers(bool $expandOthers)
    {
        $this->expandOthers = $expandOthers;
    }

    public function setFlexComponentProperties(DashboardFlexTableComponentProperties $flexComponentProperties)
    {
        $this->flexComponentProperties = $flexComponentProperties;
    }

    public function setFooter(string $footer)
    {
        $this->footer = $footer;
    }

    public function setGaugeMax(float $gaugeMax)
    {
        $this->gaugeMax = $gaugeMax;
    }

    public function setGaugeMin(float $gaugeMin)
    {
        $this->gaugeMin = $gaugeMin;
    }

    public function setGroupingColumn(array $groupingColumn)
    {
        $this->groupingColumn = $groupingColumn;
    }

    public function setGroupingSortProperties(DashboardComponentGroupingSortProperties $groupingSortProperties)
    {
        $this->groupingSortProperties = $groupingSortProperties;
    }

    public function setHeader(string $header)
    {
        $this->header = $header;
    }

    public function setIndicatorBreakpoint1(float $indicatorBreakpoint1)
    {
        $this->indicatorBreakpoint1 = $indicatorBreakpoint1;
    }

    public function setIndicatorBreakpoint2(float $indicatorBreakpoint2)
    {
        $this->indicatorBreakpoint2 = $indicatorBreakpoint2;
    }

    public function setIndicatorHighColor(string $indicatorHighColor)
    {
        $this->indicatorHighColor = $indicatorHighColor;
    }

    public function setIndicatorLowColor(string $indicatorLowColor)
    {
        $this->indicatorLowColor = $indicatorLowColor;
    }

    public function setIndicatorMiddleColor(string $indicatorMiddleColor)
    {
        $this->indicatorMiddleColor = $indicatorMiddleColor;
    }

    public function setLegendPosition(ChartLegendPosition $legendPosition)
    {
        $this->legendPosition = $legendPosition->getValue();
    }

    public function setMaxValuesDisplayed(int $maxValuesDisplayed)
    {
        $this->maxValuesDisplayed = $maxValuesDisplayed;
    }

    public function setMetricLabel(string $metricLabel)
    {
        $this->metricLabel = $metricLabel;
    }

    public function setPage(string $page)
    {
        $this->page = $page;
    }

    public function setPageHeightInPixels(int $pageHeightInPixels)
    {
        $this->pageHeightInPixels = $pageHeightInPixels;
    }

    public function setReport(string $report)
    {
        $this->report = $report;
    }

    public function setScontrol(string $scontrol)
    {
        $this->scontrol = $scontrol;
    }

    public function setScontrolHeightInPixels(int $scontrolHeightInPixels)
    {
        $this->scontrolHeightInPixels = $scontrolHeightInPixels;
    }

    public function setShowPercentage(bool $showPercentage)
    {
        $this->showPercentage = $showPercentage;
    }

    public function setShowPicturesOnCharts(bool $showPicturesOnCharts)
    {
        $this->showPicturesOnCharts = $showPicturesOnCharts;
    }

    public function setShowPicturesOnTables(bool $showPicturesOnTables)
    {
        $this->showPicturesOnTables = $showPicturesOnTables;
    }

    public function setShowRange(bool $showRange)
    {
        $this->showRange = $showRange;
    }

    public function setShowTotal(bool $showTotal)
    {
        $this->showTotal = $showTotal;
    }

    public function setShowValues(bool $showValues)
    {
        $this->showValues = $showValues;
    }

    public function setSortBy(DashboardComponentFilter $sortBy)
    {
        $this->sortBy = $sortBy->getValue();
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setUseReportChart(bool $useReportChart)
    {
        $this->useReportChart = $useReportChart;
    }
}
