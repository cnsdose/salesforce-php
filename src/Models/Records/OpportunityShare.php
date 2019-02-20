<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class OpportunityShare
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method OpportunityShare[] query()
 *
 * @property string $Id
 * @property string $OpportunityId
 * @property string $UserOrGroupId
 * @property mixed $OpportunityAccessLevel
 * @property mixed $RowCause
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property bool $IsDeleted
 */
class OpportunityShare extends BaseRecordModel
{
    public static $objectApiName = 'OpportunityShare';
    protected $defaultFields = [
        'Id' => null,
        'OpportunityId' => null,
        'UserOrGroupId' => null,
        'OpportunityAccessLevel' => null,
        'RowCause' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'IsDeleted' => 'bool',
    ];
}
