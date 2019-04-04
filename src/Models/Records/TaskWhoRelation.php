<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class TaskWhoRelation
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method TaskWhoRelation[] query()
 *
 * @property string $Id
 * @property string $RelationId
 * @property string $TaskId
 * @property string $AccountId
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property bool $IsDeleted
 * @property string $Type
 */
class TaskWhoRelation extends BaseRecordModel
{
    public static $objectApiName = 'TaskWhoRelation';
    protected $defaultFields = [
        'Id' => null,
        'RelationId' => null,
        'TaskId' => null,
        'AccountId' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'IsDeleted' => 'bool',
        'Type' => null,
    ];
}
