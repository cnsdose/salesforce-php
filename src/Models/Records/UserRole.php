<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class UserRole
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method UserRole[] query()
 *
 * @property string $Id
 * @property string $Name
 * @property string $ParentRoleId
 * @property string $RollupDescription
 * @property mixed $OpportunityAccessForAccountOwner
 * @property mixed $CaseAccessForAccountOwner
 * @property mixed $ContactAccessForAccountOwner
 * @property string $ForecastUserId
 * @property bool $MayForecastManagerShare
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $DeveloperName
 * @property string $PortalAccountId
 * @property mixed $PortalType
 * @property string $PortalAccountOwnerId
 */
class UserRole extends BaseRecordModel
{
    public static $objectApiName = 'UserRole';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'ParentRoleId' => null,
        'RollupDescription' => null,
        'OpportunityAccessForAccountOwner' => null,
        'CaseAccessForAccountOwner' => null,
        'ContactAccessForAccountOwner' => null,
        'ForecastUserId' => null,
        'MayForecastManagerShare' => 'bool',
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'DeveloperName' => null,
        'PortalAccountId' => null,
        'PortalType' => null,
        'PortalAccountOwnerId' => null,
    ];
}
