<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AccountPartner
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AccountPartner[] query()
 *
 * @property string $Id
 * @property string $AccountFromId
 * @property string $AccountToId
 * @property string $OpportunityId
 * @property mixed $Role
 * @property bool $IsPrimary
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property bool $IsDeleted
 * @property string $ReversePartnerId
 */
class AccountPartner extends BaseRecordModel
{
    protected static $objectApiName = 'AccountPartner';
    protected $defaultFields = [
        'Id' => null,
        'AccountFromId' => null,
        'AccountToId' => null,
        'OpportunityId' => null,
        'Role' => null,
        'IsPrimary' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'IsDeleted' => 'bool',
        'ReversePartnerId' => null,
    ];
}
