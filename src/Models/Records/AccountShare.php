<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AccountShare
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AccountShare[] query()
 *
 * @property string Id
 * @property string AccountId
 * @property string UserOrGroupId
 * @property mixed AccountAccessLevel
 * @property mixed OpportunityAccessLevel
 * @property mixed CaseAccessLevel
 * @property mixed ContactAccessLevel
 * @property mixed RowCause
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property bool IsDeleted
 */
class AccountShare extends BaseRecordModel
{
    protected static $objectApiName = 'AccountShare';
    protected $defaultFields = [
        'Id' => null,
        'AccountId' => null,
        'UserOrGroupId' => null,
        'AccountAccessLevel' => null,
        'OpportunityAccessLevel' => null,
        'CaseAccessLevel' => null,
        'ContactAccessLevel' => null,
        'RowCause' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'IsDeleted' => 'bool',
    ];
}
