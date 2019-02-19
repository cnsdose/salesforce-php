<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ChartType extends Enum
{
    const NONE = 'None';
    const SCATTER = 'Scatter';
    const SCATTER_GROUPED = 'ScatterGrouped';
    const BUBBLE = 'Bubble';
    const BUBBLE_GROUPED = 'BubbleGrouped';
    const HORIZONTAL_BAR = 'HorizontalBar';
    const HORIZONTAL_BAR_GROUPED = 'HorizontalBarGrouped';
    const HORIZONTAL_BAR_STACKED = 'HorizontalBarStacked';
    const HORIZONTAL_BAR_STACKED_TO100 = 'HorizontalBarStackedTo100';
    const VERTICAL_COLUMN = 'VerticalColumn';
    const VERTICAL_COLUMN_GROUPED = 'VerticalColumnGrouped';
    const VERTICAL_COLUMN_STACKED = 'VerticalColumnStacked';
    const VERTICAL_COLUMN_STACKED_TO100 = 'VerticalColumnStackedTo100';
    const LINE = 'Line';
    const LINE_GROUPED = 'LineGrouped';
    const LINE_CUMULATIVE = 'LineCumulative';
    const LINE_CUMULATIVE_GROUPED = 'LineCumulativeGrouped';
    const PIE = 'Pie';
    const DONUT = 'Donut';
    const FUNNEL = 'Funnel';
    const VERTICAL_COLUMN_LINE = 'VerticalColumnLine';
    const VERTICAL_COLUMN_GROUPED_LINE = 'VerticalColumnGroupedLine';
    const VERTICAL_COLUMN_STACKED_LINE = 'VerticalColumnStackedLine';
    const PLUGIN = 'Plugin';
}
