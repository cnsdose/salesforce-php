<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class OpportunityContactRole
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method OpportunityContactRole[] query()
 *
 * @property string $Id
 * @property string $OpportunityId
 * @property string $ContactId
 * @property mixed $Role
 * @property bool $IsPrimary
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property bool $IsDeleted
 */
class OpportunityContactRole extends BaseRecordModel
{
    protected static $objectApiName = 'OpportunityContactRole';
    protected $defaultFields = [
        'Id' => null,
        'OpportunityId' => null,
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
