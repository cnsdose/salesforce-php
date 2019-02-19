<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LayoutItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property AnalyticsCloudComponentLayoutItem|null $analyticsCloudComponent
 * @property string|null $behavior
 * @property string|null $canvas
 * @property string|null $component
 * @property string|null $customLink
 * @property bool|null $emptySpace
 * @property string|null $field
 * @property int|null $height
 * @property string|null $page
 * @property ReportChartComponentLayoutItem|null $reportChartComponent
 * @property string|null $scontrol
 * @property bool|null $showLabel
 * @property bool|null $showScrollbars
 * @property string|null $width
 */
class LayoutItem
{
    public static $classMap = [
        'analyticsCloudComponent' => [
            'multiple' => false,
            'type' => AnalyticsCloudComponentLayoutItem::class,
        ],
        'reportChartComponent' => [
            'multiple' => false,
            'type' => ReportChartComponentLayoutItem::class,
        ],
    ];

    public function setAnalyticsCloudComponent(AnalyticsCloudComponentLayoutItem $analyticsCloudComponent)
    {
        $this->analyticsCloudComponent = $analyticsCloudComponent;
    }

    public function setBehavior(UiBehavior $behavior)
    {
        $this->behavior = $behavior->getValue();
    }

    public function setCanvas(string $canvas)
    {
        $this->canvas = $canvas;
    }

    public function setComponent(string $component)
    {
        $this->component = $component;
    }

    public function setCustomLink(string $customLink)
    {
        $this->customLink = $customLink;
    }

    public function setEmptySpace(bool $emptySpace)
    {
        $this->emptySpace = $emptySpace;
    }

    public function setField(string $field)
    {
        $this->field = $field;
    }

    public function setHeight(int $height)
    {
        $this->height = $height;
    }

    public function setPage(string $page)
    {
        $this->page = $page;
    }

    public function setReportChartComponent(ReportChartComponentLayoutItem $reportChartComponent)
    {
        $this->reportChartComponent = $reportChartComponent;
    }

    public function setScontrol(string $scontrol)
    {
        $this->scontrol = $scontrol;
    }

    public function setShowLabel(bool $showLabel)
    {
        $this->showLabel = $showLabel;
    }

    public function setShowScrollbars(bool $showScrollbars)
    {
        $this->showScrollbars = $showScrollbars;
    }

    public function setWidth(string $width)
    {
        $this->width = $width;
    }
}
