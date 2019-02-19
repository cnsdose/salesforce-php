<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class UserListViewCriterion
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method UserListViewCriterion[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $UserListViewId
 * @property mixed $SortOrder
 * @property string $ColumnName
 * @property mixed $Operation
 * @property string $Value
 */
class UserListViewCriterion extends BaseRecordModel
{
    protected static $objectApiName = 'UserListViewCriterion';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'UserListViewId' => null,
        'SortOrder' => null,
        'ColumnName' => null,
        'Operation' => null,
        'Value' => null,
    ];
}
