<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class OrderItemHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method OrderItemHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $OrderItemId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property mixed $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class OrderItemHistory extends BaseRecordModel
{
    public static $objectApiName = 'OrderItemHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'OrderItemId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
