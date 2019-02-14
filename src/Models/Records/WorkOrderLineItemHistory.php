<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class WorkOrderLineItemHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method WorkOrderLineItemHistory[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string WorkOrderLineItemId
 * @property string CreatedById
 * @property \Carbon\Carbon CreatedDate
 * @property mixed Field
 * @property mixed OldValue
 * @property mixed NewValue
 */
class WorkOrderLineItemHistory extends BaseRecordModel
{
    protected static $objectApiName = 'WorkOrderLineItemHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'WorkOrderLineItemId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
