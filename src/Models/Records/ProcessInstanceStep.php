<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ProcessInstanceStep
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ProcessInstanceStep[] query()
 *
 * @property string $Id
 * @property string $ProcessInstanceId
 * @property mixed $StepStatus
 * @property string $OriginalActorId
 * @property string $ActorId
 * @property string $Comments
 * @property string $StepNodeId
 * @property float $ElapsedTimeInDays
 * @property float $ElapsedTimeInHours
 * @property float $ElapsedTimeInMinutes
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class ProcessInstanceStep extends BaseRecordModel
{
    public static $objectApiName = 'ProcessInstanceStep';
    protected $defaultFields = [
        'Id' => null,
        'ProcessInstanceId' => null,
        'StepStatus' => null,
        'OriginalActorId' => null,
        'ActorId' => null,
        'Comments' => null,
        'StepNodeId' => null,
        'ElapsedTimeInDays' => 'number:18,0',
        'ElapsedTimeInHours' => 'number:5,2',
        'ElapsedTimeInMinutes' => 'number:8,0',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}
