<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class OpportunityPartner
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method OpportunityPartner[] query()
 *
 * @property string $Id
 * @property string $OpportunityId
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
class OpportunityPartner extends BaseRecordModel
{
    public static $objectApiName = 'OpportunityPartner';
    protected $defaultFields = [
        'Id' => null,
        'OpportunityId' => null,
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
