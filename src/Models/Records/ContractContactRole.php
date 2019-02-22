<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContractContactRole
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContractContactRole[] query()
 *
 * @property string $Id
 * @property string $ContractId
 * @property string $ContactId
 * @property string $Role
 * @property bool $IsPrimary
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property bool $IsDeleted
 */
class ContractContactRole extends BaseRecordModel
{
    public static $objectApiName = 'ContractContactRole';
    protected $defaultFields = [
        'Id' => null,
        'ContractId' => null,
        'ContactId' => null,
        'Role' => null,
        'IsPrimary' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'IsDeleted' => 'bool',
    ];
}
