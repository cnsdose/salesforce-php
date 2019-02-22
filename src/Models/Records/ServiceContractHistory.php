<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ServiceContractHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ServiceContractHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ServiceContractId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class ServiceContractHistory extends BaseRecordModel
{
    public static $objectApiName = 'ServiceContractHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ServiceContractId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
