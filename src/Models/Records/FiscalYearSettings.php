<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class FiscalYearSettings
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method FiscalYearSettings[] query()
 *
 * @property string $Id
 * @property string $PeriodId
 * @property \Carbon\Carbon $StartDate
 * @property \Carbon\Carbon $EndDate
 * @property string $Name
 * @property bool $IsStandardYear
 * @property string $YearType
 * @property string $QuarterLabelScheme
 * @property string $PeriodLabelScheme
 * @property string $WeekLabelScheme
 * @property string $QuarterPrefix
 * @property string $PeriodPrefix
 * @property mixed $WeekStartDay
 * @property string $Description
 * @property \Carbon\Carbon $SystemModstamp
 */
class FiscalYearSettings extends BaseRecordModel
{
    public static $objectApiName = 'FiscalYearSettings';
    protected $defaultFields = [
        'Id' => null,
        'PeriodId' => null,
        'StartDate' => 'date',
        'EndDate' => 'date',
        'Name' => null,
        'IsStandardYear' => 'bool',
        'YearType' => null,
        'QuarterLabelScheme' => null,
        'PeriodLabelScheme' => null,
        'WeekLabelScheme' => null,
        'QuarterPrefix' => null,
        'PeriodPrefix' => null,
        'WeekStartDay' => null,
        'Description' => null,
        'SystemModstamp' => 'datetime',
    ];
}
