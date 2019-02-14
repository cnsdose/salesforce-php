<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class OpenActivity
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method OpenActivity[] query()
 *
 * @property string Id
 * @property string AccountId
 * @property string WhoId
 * @property string WhatId
 * @property mixed Subject
 * @property bool IsTask
 * @property \Carbon\Carbon ActivityDate
 * @property string OwnerId
 * @property mixed Status
 * @property mixed Priority
 * @property bool IsHighPriority
 * @property mixed ActivityType
 * @property bool IsClosed
 * @property bool IsAllDayEvent
 * @property bool IsVisibleInSelfService
 * @property mixed DurationInMinutes
 * @property string Location
 * @property string Description
 * @property mixed CurrencyIsoCode
 * @property bool IsDeleted
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property mixed CallDurationInSeconds
 * @property mixed CallType
 * @property string CallDisposition
 * @property string CallObject
 * @property \Carbon\Carbon ReminderDateTime
 * @property bool IsReminderSet
 * @property \Carbon\Carbon EndDateTime
 * @property \Carbon\Carbon StartDateTime
 * @property mixed ActivitySubtype
 * @property string AlternateDetailId
 */
class OpenActivity extends BaseRecordModel
{
    protected static $objectApiName = 'OpenActivity';
    protected $defaultFields = [
        'Id' => null,
        'AccountId' => null,
        'WhoId' => null,
        'WhatId' => null,
        'Subject' => null,
        'IsTask' => 'bool',
        'ActivityDate' => 'date',
        'OwnerId' => null,
        'Status' => null,
        'Priority' => null,
        'IsHighPriority' => 'bool',
        'ActivityType' => null,
        'IsClosed' => 'bool',
        'IsAllDayEvent' => 'bool',
        'IsVisibleInSelfService' => 'bool',
        'DurationInMinutes' => null,
        'Location' => null,
        'Description' => null,
        'CurrencyIsoCode' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'CallDurationInSeconds' => null,
        'CallType' => null,
        'CallDisposition' => null,
        'CallObject' => null,
        'ReminderDateTime' => 'datetime',
        'IsReminderSet' => 'bool',
        'EndDateTime' => 'datetime',
        'StartDateTime' => 'datetime',
        'ActivitySubtype' => null,
        'AlternateDetailId' => null,
    ];
}
