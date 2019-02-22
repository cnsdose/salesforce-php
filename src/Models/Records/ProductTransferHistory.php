<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ProductTransferHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ProductTransferHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ProductTransferId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class ProductTransferHistory extends BaseRecordModel
{
    public static $objectApiName = 'ProductTransferHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ProductTransferId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
