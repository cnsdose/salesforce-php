<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class UserProvisioningRequest
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method UserProvisioningRequest[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property bool $IsDeleted
 * @property string $Name
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $SalesforceUserId
 * @property string $ExternalUserId
 * @property string $AppName
 * @property string $State
 * @property string $Operation
 * @property \Carbon\Carbon $ScheduleDate
 * @property string $ConnectedAppId
 * @property string $UserProvConfigId
 * @property string $UserProvAccountId
 * @property string $ApprovalStatus
 * @property string $ManagerId
 * @property mixed $RetryCount
 * @property string $ParentId
 */
class UserProvisioningRequest extends BaseRecordModel
{
    public static $objectApiName = 'UserProvisioningRequest';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'SalesforceUserId' => null,
        'ExternalUserId' => null,
        'AppName' => null,
        'State' => null,
        'Operation' => null,
        'ScheduleDate' => 'datetime',
        'ConnectedAppId' => null,
        'UserProvConfigId' => null,
        'UserProvAccountId' => null,
        'ApprovalStatus' => null,
        'ManagerId' => null,
        'RetryCount' => null,
        'ParentId' => null,
    ];
}
