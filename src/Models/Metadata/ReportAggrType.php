<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ReportAggrType extends Enum
{
    const SUM = 'Sum';
    const AVERAGE = 'Average';
    const MAXIMUM = 'Maximum';
    const MINIMUM = 'Minimum';
    const UNIQUE = 'Unique';
    const ROW_COUNT = 'RowCount';
}
