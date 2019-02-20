<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ReturnOrderHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ReturnOrderHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ReturnOrderId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property mixed $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class ReturnOrderHistory extends BaseRecordModel
{
    public static $objectApiName = 'ReturnOrderHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ReturnOrderId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
