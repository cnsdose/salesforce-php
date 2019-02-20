<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ProductRequestHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ProductRequestHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ProductRequestId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property mixed $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class ProductRequestHistory extends BaseRecordModel
{
    public static $objectApiName = 'ProductRequestHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ProductRequestId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
