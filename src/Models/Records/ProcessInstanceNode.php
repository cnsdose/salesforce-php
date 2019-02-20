<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ProcessInstanceNode
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ProcessInstanceNode[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $ProcessInstanceId
 * @property string $ProcessNodeId
 * @property mixed $NodeStatus
 * @property \Carbon\Carbon $CompletedDate
 * @property string $LastActorId
 * @property string $ProcessNodeName
 * @property float $ElapsedTimeInDays
 * @property float $ElapsedTimeInHours
 * @property float $ElapsedTimeInMinutes
 */
class ProcessInstanceNode extends BaseRecordModel
{
    public static $objectApiName = 'ProcessInstanceNode';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'ProcessInstanceId' => null,
        'ProcessNodeId' => null,
        'NodeStatus' => null,
        'CompletedDate' => 'datetime',
        'LastActorId' => null,
        'ProcessNodeName' => null,
        'ElapsedTimeInDays' => 'number:4,3',
        'ElapsedTimeInHours' => 'number:5,2',
        'ElapsedTimeInMinutes' => 'number:8,0',
    ];
}
