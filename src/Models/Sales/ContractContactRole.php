<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Sales;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class ContractContactRole
 * @package CNSDose\Salesforce\Models\Sales
 *
 * @method ContractContactRole[] query()
 *
 * @property string Id
 * @property string ContractId
 * @property string ContactId
 * @property mixed Role
 * @property bool IsPrimary
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property bool IsDeleted
 */
class ContractContactRole extends BaseModel
{
    protected static $objectApiName = 'ContractContactRole';
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
