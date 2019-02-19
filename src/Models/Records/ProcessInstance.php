<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ProcessInstance
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ProcessInstance[] query()
 *
 * @property string $Id
 * @property string $ProcessDefinitionId
 * @property string $TargetObjectId
 * @property mixed $Status
 * @property \Carbon\Carbon $CompletedDate
 * @property string $LastActorId
 * @property float $ElapsedTimeInDays
 * @property float $ElapsedTimeInHours
 * @property float $ElapsedTimeInMinutes
 * @property string $SubmittedById
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class ProcessInstance extends BaseRecordModel
{
    protected static $objectApiName = 'ProcessInstance';
    protected $defaultFields = [
        'Id' => null,
        'ProcessDefinitionId' => null,
        'TargetObjectId' => null,
        'Status' => null,
        'CompletedDate' => 'datetime',
        'LastActorId' => null,
        'ElapsedTimeInDays' => 'number:4,3',
        'ElapsedTimeInHours' => 'number:5,2',
        'ElapsedTimeInMinutes' => 'number:8,0',
        'SubmittedById' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}
