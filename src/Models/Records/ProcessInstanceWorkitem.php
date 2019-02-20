<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ProcessInstanceWorkitem
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ProcessInstanceWorkitem[] query()
 *
 * @property string $Id
 * @property string $ProcessInstanceId
 * @property string $OriginalActorId
 * @property string $ActorId
 * @property float $ElapsedTimeInDays
 * @property float $ElapsedTimeInHours
 * @property float $ElapsedTimeInMinutes
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class ProcessInstanceWorkitem extends BaseRecordModel
{
    public static $objectApiName = 'ProcessInstanceWorkitem';
    protected $defaultFields = [
        'Id' => null,
        'ProcessInstanceId' => null,
        'OriginalActorId' => null,
        'ActorId' => null,
        'ElapsedTimeInDays' => 'number:4,3',
        'ElapsedTimeInHours' => 'number:5,2',
        'ElapsedTimeInMinutes' => 'number:8,0',
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}
