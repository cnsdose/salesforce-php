<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CategoryNode
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CategoryNode[] query()
 *
 * @property string $Id
 * @property string $ParentId
 * @property string $MasterLabel
 * @property mixed $SortOrder
 * @property mixed $SortStyle
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class CategoryNode extends BaseRecordModel
{
    public static $objectApiName = 'CategoryNode';
    protected $defaultFields = [
        'Id' => null,
        'ParentId' => null,
        'MasterLabel' => null,
        'SortOrder' => null,
        'SortStyle' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}
