<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportChart
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $backgroundColor1
 * @property string|null $backgroundColor2
 * @property string|null $backgroundFadeDir
 * @property ChartSummary[]|null $chartSummaries
 * @property string|null $chartType
 * @property bool|null $enableHoverLabels
 * @property bool|null $expandOthers
 * @property string|null $groupingColumn
 * @property string|null $legendPosition
 * @property string|null $location
 * @property string|null $secondaryGroupingColumn
 * @property bool|null $showAxisLabels
 * @property bool|null $showPercentage
 * @property bool|null $showTotal
 * @property bool|null $showValues
 * @property string|null $size
 * @property float|null $summaryAxisManualRangeEnd
 * @property float|null $summaryAxisManualRangeStart
 * @property string|null $summaryAxisRange
 * @property string|null $textColor
 * @property int|null $textSize
 * @property string|null $title
 * @property string|null $titleColor
 * @property int|null $titleSize
 */
class ReportChart
{
    public static $classMap = [
        'chartSummaries' => [
            'multiple' => true,
            'type' => ChartSummary::class,
        ],
    ];

    public function setBackgroundColor1(string $backgroundColor1)
    {
        $this->backgroundColor1 = $backgroundColor1;
    }

    public function setBackgroundColor2(string $backgroundColor2)
    {
        $this->backgroundColor2 = $backgroundColor2;
    }

    public function setBackgroundFadeDir(ChartBackgroundDirection $backgroundFadeDir)
    {
        $this->backgroundFadeDir = $backgroundFadeDir->getValue();
    }

    public function setChartSummaries(array $chartSummaries)
    {
        $this->chartSummaries = $chartSummaries;
    }

    public function setChartType(ChartType $chartType)
    {
        $this->chartType = $chartType->getValue();
    }

    public function setEnableHoverLabels(bool $enableHoverLabels)
    {
        $this->enableHoverLabels = $enableHoverLabels;
    }

    public function setExpandOthers(bool $expandOthers)
    {
        $this->expandOthers = $expandOthers;
    }

    public function setGroupingColumn(string $groupingColumn)
    {
        $this->groupingColumn = $groupingColumn;
    }

    public function setLegendPosition(ChartLegendPosition $legendPosition)
    {
        $this->legendPosition = $legendPosition->getValue();
    }

    public function setLocation(ChartPosition $location)
    {
        $this->location = $location->getValue();
    }

    public function setSecondaryGroupingColumn(string $secondaryGroupingColumn)
    {
        $this->secondaryGroupingColumn = $secondaryGroupingColumn;
    }

    public function setShowAxisLabels(bool $showAxisLabels)
    {
        $this->showAxisLabels = $showAxisLabels;
    }

    public function setShowPercentage(bool $showPercentage)
    {
        $this->showPercentage = $showPercentage;
    }

    public function setShowTotal(bool $showTotal)
    {
        $this->showTotal = $showTotal;
    }

    public function setShowValues(bool $showValues)
    {
        $this->showValues = $showValues;
    }

    public function setSize(ReportChartSize $size)
    {
        $this->size = $size->getValue();
    }

    public function setSummaryAxisManualRangeEnd(float $summaryAxisManualRangeEnd)
    {
        $this->summaryAxisManualRangeEnd = $summaryAxisManualRangeEnd;
    }

    public function setSummaryAxisManualRangeStart(float $summaryAxisManualRangeStart)
    {
        $this->summaryAxisManualRangeStart = $summaryAxisManualRangeStart;
    }

    public function setSummaryAxisRange(ChartRangeType $summaryAxisRange)
    {
        $this->summaryAxisRange = $summaryAxisRange->getValue();
    }

    public function setTextColor(string $textColor)
    {
        $this->textColor = $textColor;
    }

    public function setTextSize(int $textSize)
    {
        $this->textSize = $textSize;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setTitleColor(string $titleColor)
    {
        $this->titleColor = $titleColor;
    }

    public function setTitleSize(int $titleSize)
    {
        $this->titleSize = $titleSize;
    }
}
