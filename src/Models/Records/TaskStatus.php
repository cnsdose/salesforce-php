<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class TaskStatus
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method TaskStatus[] query()
 *
 * @property string $Id
 * @property string $MasterLabel
 * @property string $ApiName
 * @property mixed $SortOrder
 * @property bool $IsDefault
 * @property bool $IsClosed
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property \Carbon\Carbon $SystemModstamp
 */
class TaskStatus extends BaseRecordModel
{
    public static $objectApiName = 'TaskStatus';
    protected $defaultFields = [
        'Id' => null,
        'MasterLabel' => null,
        'ApiName' => null,
        'SortOrder' => null,
        'IsDefault' => 'bool',
        'IsClosed' => 'bool',
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedById' => null,
        'LastModifiedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
    ];
}
