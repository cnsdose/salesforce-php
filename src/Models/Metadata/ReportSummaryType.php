<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ReportSummaryType extends Enum
{
    const SUM = 'Sum';
    const AVERAGE = 'Average';
    const MAXIMUM = 'Maximum';
    const MINIMUM = 'Minimum';
    const NONE = 'None';
}
