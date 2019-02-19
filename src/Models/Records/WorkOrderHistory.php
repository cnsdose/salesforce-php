<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class WorkOrderHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method WorkOrderHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $WorkOrderId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property mixed $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class WorkOrderHistory extends BaseRecordModel
{
    protected static $objectApiName = 'WorkOrderHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'WorkOrderId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
