<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class TaskRelation
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method TaskRelation[] query()
 *
 * @property string $Id
 * @property string $RelationId
 * @property string $TaskId
 * @property bool $IsWhat
 * @property string $AccountId
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property bool $IsDeleted
 */
class TaskRelation extends BaseRecordModel
{
    public static $objectApiName = 'TaskRelation';
    protected $defaultFields = [
        'Id' => null,
        'RelationId' => null,
        'TaskId' => null,
        'IsWhat' => 'bool',
        'AccountId' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'IsDeleted' => 'bool',
    ];
}
