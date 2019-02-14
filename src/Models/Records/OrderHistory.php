<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class OrderHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method OrderHistory[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string OrderId
 * @property string CreatedById
 * @property \Carbon\Carbon CreatedDate
 * @property mixed Field
 * @property mixed OldValue
 * @property mixed NewValue
 */
class OrderHistory extends BaseRecordModel
{
    protected static $objectApiName = 'OrderHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'OrderId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
