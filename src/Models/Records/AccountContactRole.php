<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AccountContactRole
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AccountContactRole[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $AccountId
 * @property string $ContactId
 * @property mixed $Role
 * @property bool $IsPrimary
 */
class AccountContactRole extends BaseRecordModel
{
    public static $objectApiName = 'AccountContactRole';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'AccountId' => null,
        'ContactId' => null,
        'Role' => null,
        'IsPrimary' => 'bool',
    ];
}
