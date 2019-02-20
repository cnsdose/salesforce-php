<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Partner
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Partner[] query()
 *
 * @property string $Id
 * @property string $OpportunityId
 * @property string $AccountFromId
 * @property string $AccountToId
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
class Partner extends BaseRecordModel
{
    public static $objectApiName = 'Partner';
    protected $defaultFields = [
        'Id' => null,
        'OpportunityId' => null,
        'AccountFromId' => null,
        'AccountToId' => null,
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
