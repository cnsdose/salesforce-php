<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class DashboardComponentType extends Enum
{
    const BAR = 'Bar';
    const BAR_GROUPED = 'BarGrouped';
    const BAR_STACKED = 'BarStacked';
    const BAR_STACKED100 = 'BarStacked100';
    const COLUMN = 'Column';
    const COLUMN_GROUPED = 'ColumnGrouped';
    const COLUMN_STACKED = 'ColumnStacked';
    const COLUMN_STACKED100 = 'ColumnStacked100';
    const LINE = 'Line';
    const LINE_GROUPED = 'LineGrouped';
    const PIE = 'Pie';
    const TABLE = 'Table';
    const METRIC = 'Metric';
    const GAUGE = 'Gauge';
    const LINE_CUMULATIVE = 'LineCumulative';
    const LINE_GROUPED_CUMULATIVE = 'LineGroupedCumulative';
    const SCONTROL = 'Scontrol';
    const VISUALFORCE_PAGE = 'VisualforcePage';
    const DONUT = 'Donut';
    const FUNNEL = 'Funnel';
    const COLUMN_LINE = 'ColumnLine';
    const COLUMN_LINE_GROUPED = 'ColumnLineGrouped';
    const COLUMN_LINE_STACKED = 'ColumnLineStacked';
    const COLUMN_LINE_STACKED100 = 'ColumnLineStacked100';
    const SCATTER = 'Scatter';
    const SCATTER_GROUPED = 'ScatterGrouped';
    const FLEX_TABLE = 'FlexTable';
}
