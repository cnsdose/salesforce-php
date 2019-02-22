<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ReturnOrderLineItemHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ReturnOrderLineItemHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ReturnOrderLineItemId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class ReturnOrderLineItemHistory extends BaseRecordModel
{
    public static $objectApiName = 'ReturnOrderLineItemHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ReturnOrderLineItemId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
