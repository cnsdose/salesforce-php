<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Task
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Task[] query()
 *
 * @property string Id
 * @property string WhoId
 * @property string WhatId
 * @property mixed Subject
 * @property \Carbon\Carbon ActivityDate
 * @property mixed Status
 * @property mixed Priority
 * @property bool IsHighPriority
 * @property string OwnerId
 * @property string Description
 * @property mixed CurrencyIsoCode
 * @property bool IsDeleted
 * @property string AccountId
 * @property bool IsClosed
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property bool IsArchived
 * @property mixed CallDurationInSeconds
 * @property mixed CallType
 * @property string CallDisposition
 * @property string CallObject
 * @property \Carbon\Carbon ReminderDateTime
 * @property bool IsReminderSet
 * @property string RecurrenceActivityId
 * @property bool IsRecurrence
 * @property \Carbon\Carbon RecurrenceStartDateOnly
 * @property \Carbon\Carbon RecurrenceEndDateOnly
 * @property mixed RecurrenceTimeZoneSidKey
 * @property mixed RecurrenceType
 * @property mixed RecurrenceInterval
 * @property mixed RecurrenceDayOfWeekMask
 * @property mixed RecurrenceDayOfMonth
 * @property mixed RecurrenceInstance
 * @property mixed RecurrenceMonthOfYear
 * @property mixed RecurrenceRegeneratedType
 * @property mixed TaskSubtype
 * @property \Carbon\Carbon CompletedDateTime
 */
class Task extends BaseRecordModel
{
    protected static $objectApiName = 'Task';
    protected $defaultFields = [
        'Id' => null,
        'WhoId' => null,
        'WhatId' => null,
        'Subject' => null,
        'ActivityDate' => 'date',
        'Status' => null,
        'Priority' => null,
        'IsHighPriority' => 'bool',
        'OwnerId' => null,
        'Description' => null,
        'CurrencyIsoCode' => null,
        'IsDeleted' => 'bool',
        'AccountId' => null,
        'IsClosed' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'IsArchived' => 'bool',
        'CallDurationInSeconds' => null,
        'CallType' => null,
        'CallDisposition' => null,
        'CallObject' => null,
        'ReminderDateTime' => 'datetime',
        'IsReminderSet' => 'bool',
        'RecurrenceActivityId' => null,
        'IsRecurrence' => 'bool',
        'RecurrenceStartDateOnly' => 'date',
        'RecurrenceEndDateOnly' => 'date',
        'RecurrenceTimeZoneSidKey' => null,
        'RecurrenceType' => null,
        'RecurrenceInterval' => null,
        'RecurrenceDayOfWeekMask' => null,
        'RecurrenceDayOfMonth' => null,
        'RecurrenceInstance' => null,
        'RecurrenceMonthOfYear' => null,
        'RecurrenceRegeneratedType' => null,
        'TaskSubtype' => null,
        'CompletedDateTime' => 'datetime',
    ];
}
