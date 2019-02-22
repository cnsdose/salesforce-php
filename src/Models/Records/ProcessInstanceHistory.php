<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ProcessInstanceHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ProcessInstanceHistory[] query()
 *
 * @property string $Id
 * @property bool $IsPending
 * @property string $ProcessInstanceId
 * @property string $TargetObjectId
 * @property string $StepStatus
 * @property string $ProcessNodeId
 * @property string $OriginalActorId
 * @property string $ActorId
 * @property mixed $RemindersSent
 * @property float $ElapsedTimeInDays
 * @property float $ElapsedTimeInHours
 * @property float $ElapsedTimeInMinutes
 * @property string $Comments
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class ProcessInstanceHistory extends BaseRecordModel
{
    public static $objectApiName = 'ProcessInstanceHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsPending' => 'bool',
        'ProcessInstanceId' => null,
        'TargetObjectId' => null,
        'StepStatus' => null,
        'ProcessNodeId' => null,
        'OriginalActorId' => null,
        'ActorId' => null,
        'RemindersSent' => null,
        'ElapsedTimeInDays' => 'number:18,0',
        'ElapsedTimeInHours' => 'number:5,2',
        'ElapsedTimeInMinutes' => 'number:8,0',
        'Comments' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}
