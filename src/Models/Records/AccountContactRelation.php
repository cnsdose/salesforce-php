<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AccountContactRelation
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AccountContactRelation[] query()
 *
 * @property string $Id
 * @property string $AccountId
 * @property string $ContactId
 * @property string[] $Roles
 * @property bool $IsDirect
 * @property bool $IsActive
 * @property \Carbon\Carbon $StartDate
 * @property \Carbon\Carbon $EndDate
 * @property string $CurrencyIsoCode
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class AccountContactRelation extends BaseRecordModel
{
    public static $objectApiName = 'AccountContactRelation';
    protected $defaultFields = [
        'Id' => null,
        'AccountId' => null,
        'ContactId' => null,
        'Roles' => 'multipicklist',
        'IsDirect' => 'bool',
        'IsActive' => 'bool',
        'StartDate' => 'date',
        'EndDate' => 'date',
        'CurrencyIsoCode' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}
