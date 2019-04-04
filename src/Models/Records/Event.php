<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Event
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Event[] query()
 *
 * @property string $Id
 * @property string $WhoId
 * @property string $WhatId
 * @property mixed $WhoCount
 * @property mixed $WhatCount
 * @property mixed $Subject
 * @property string $Location
 * @property bool $IsAllDayEvent
 * @property \Carbon\Carbon $ActivityDateTime
 * @property \Carbon\Carbon $ActivityDate
 * @property mixed $DurationInMinutes
 * @property \Carbon\Carbon $StartDateTime
 * @property \Carbon\Carbon $EndDateTime
 * @property string $Description
 * @property string $AccountId
 * @property string $OwnerId
 * @property string $CurrencyIsoCode
 * @property string $Type
 * @property bool $IsPrivate
 * @property string $ShowAs
 * @property bool $IsDeleted
 * @property bool $IsChild
 * @property bool $IsGroupEvent
 * @property string $GroupEventType
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property bool $IsArchived
 * @property string $RecurrenceActivityId
 * @property bool $IsRecurrence
 * @property \Carbon\Carbon $RecurrenceStartDateTime
 * @property \Carbon\Carbon $RecurrenceEndDateOnly
 * @property string $RecurrenceTimeZoneSidKey
 * @property string $RecurrenceType
 * @property mixed $RecurrenceInterval
 * @property mixed $RecurrenceDayOfWeekMask
 * @property mixed $RecurrenceDayOfMonth
 * @property string $RecurrenceInstance
 * @property string $RecurrenceMonthOfYear
 * @property \Carbon\Carbon $ReminderDateTime
 * @property bool $IsReminderSet
 * @property string $EventSubtype
 * @property bool $IsRecurrence2Exclusion
 * @property string $Recurrence2PatternText
 * @property string $Recurrence2PatternVersion
 * @property bool $IsRecurrence2
 * @property bool $IsRecurrence2Exception
 * @property \Carbon\Carbon $Recurrence2PatternStartDate
 * @property string $Recurrence2PatternTimeZone
 */
class Event extends BaseRecordModel
{
    public static $objectApiName = 'Event';
    protected $defaultFields = [
        'Id' => null,
        'WhoId' => null,
        'WhatId' => null,
        'WhoCount' => null,
        'WhatCount' => null,
        'Subject' => null,
        'Location' => null,
        'IsAllDayEvent' => 'bool',
        'ActivityDateTime' => 'datetime',
        'ActivityDate' => 'date',
        'DurationInMinutes' => null,
        'StartDateTime' => 'datetime',
        'EndDateTime' => 'datetime',
        'Description' => null,
        'AccountId' => null,
        'OwnerId' => null,
        'CurrencyIsoCode' => null,
        'Type' => null,
        'IsPrivate' => 'bool',
        'ShowAs' => null,
        'IsDeleted' => 'bool',
        'IsChild' => 'bool',
        'IsGroupEvent' => 'bool',
        'GroupEventType' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'IsArchived' => 'bool',
        'RecurrenceActivityId' => null,
        'IsRecurrence' => 'bool',
        'RecurrenceStartDateTime' => 'datetime',
        'RecurrenceEndDateOnly' => 'date',
        'RecurrenceTimeZoneSidKey' => null,
        'RecurrenceType' => null,
        'RecurrenceInterval' => null,
        'RecurrenceDayOfWeekMask' => null,
        'RecurrenceDayOfMonth' => null,
        'RecurrenceInstance' => null,
        'RecurrenceMonthOfYear' => null,
        'ReminderDateTime' => 'datetime',
        'IsReminderSet' => 'bool',
        'EventSubtype' => null,
        'IsRecurrence2Exclusion' => 'bool',
        'Recurrence2PatternText' => null,
        'Recurrence2PatternVersion' => null,
        'IsRecurrence2' => 'bool',
        'IsRecurrence2Exception' => 'bool',
        'Recurrence2PatternStartDate' => 'datetime',
        'Recurrence2PatternTimeZone' => null,
    ];
}
