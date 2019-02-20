<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class WorkOrderLineItemStatus
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method WorkOrderLineItemStatus[] query()
 *
 * @property string $Id
 * @property string $MasterLabel
 * @property string $ApiName
 * @property mixed $SortOrder
 * @property bool $IsDefault
 * @property mixed $StatusCode
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property \Carbon\Carbon $SystemModstamp
 */
class WorkOrderLineItemStatus extends BaseRecordModel
{
    public static $objectApiName = 'WorkOrderLineItemStatus';
    protected $defaultFields = [
        'Id' => null,
        'MasterLabel' => null,
        'ApiName' => null,
        'SortOrder' => null,
        'IsDefault' => 'bool',
        'StatusCode' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedById' => null,
        'LastModifiedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
    ];
}
