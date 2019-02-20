<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Holiday
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Holiday[] query()
 *
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property bool $IsAllDay
 * @property \Carbon\Carbon $ActivityDate
 * @property mixed $StartTimeInMinutes
 * @property mixed $EndTimeInMinutes
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property bool $IsRecurrence
 * @property \Carbon\Carbon $RecurrenceStartDate
 * @property \Carbon\Carbon $RecurrenceEndDateOnly
 * @property mixed $RecurrenceType
 * @property mixed $RecurrenceInterval
 * @property mixed $RecurrenceDayOfWeekMask
 * @property mixed $RecurrenceDayOfMonth
 * @property mixed $RecurrenceInstance
 * @property mixed $RecurrenceMonthOfYear
 */
class Holiday extends BaseRecordModel
{
    public static $objectApiName = 'Holiday';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'Description' => null,
        'IsAllDay' => 'bool',
        'ActivityDate' => 'date',
        'StartTimeInMinutes' => null,
        'EndTimeInMinutes' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'IsRecurrence' => 'bool',
        'RecurrenceStartDate' => 'date',
        'RecurrenceEndDateOnly' => 'date',
        'RecurrenceType' => null,
        'RecurrenceInterval' => null,
        'RecurrenceDayOfWeekMask' => null,
        'RecurrenceDayOfMonth' => null,
        'RecurrenceInstance' => null,
        'RecurrenceMonthOfYear' => null,
    ];
}
