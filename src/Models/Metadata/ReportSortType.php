<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ReportSortType extends Enum
{
    const COLUMN = 'Column';
    const AGGREGATE = 'Aggregate';
    const CUSTOM_SUMMARY_FORMULA = 'CustomSummaryFormula';
}
