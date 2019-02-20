<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContractLineItemHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContractLineItemHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ContractLineItemId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property mixed $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class ContractLineItemHistory extends BaseRecordModel
{
    public static $objectApiName = 'ContractLineItemHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ContractLineItemId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
