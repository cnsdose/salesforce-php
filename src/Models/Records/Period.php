<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Period
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Period[] query()
 *
 * @property string $Id
 * @property string $FiscalYearSettingsId
 * @property string $Type
 * @property \Carbon\Carbon $StartDate
 * @property \Carbon\Carbon $EndDate
 * @property \Carbon\Carbon $SystemModstamp
 * @property bool $IsForecastPeriod
 * @property string $QuarterLabel
 * @property string $PeriodLabel
 * @property mixed $Number
 * @property string $FullyQualifiedLabel
 */
class Period extends BaseRecordModel
{
    public static $objectApiName = 'Period';
    protected $defaultFields = [
        'Id' => null,
        'FiscalYearSettingsId' => null,
        'Type' => null,
        'StartDate' => 'date',
        'EndDate' => 'date',
        'SystemModstamp' => 'datetime',
        'IsForecastPeriod' => 'bool',
        'QuarterLabel' => null,
        'PeriodLabel' => null,
        'Number' => null,
        'FullyQualifiedLabel' => null,
    ];
}
