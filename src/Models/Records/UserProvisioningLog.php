<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class UserProvisioningLog
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method UserProvisioningLog[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $Name
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $UserProvisioningRequestId
 * @property string $ExternalUserId
 * @property string $ExternalUsername
 * @property string $UserId
 * @property string $Status
 * @property string $Details
 */
class UserProvisioningLog extends BaseRecordModel
{
    protected static $objectApiName = 'UserProvisioningLog';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'UserProvisioningRequestId' => null,
        'ExternalUserId' => null,
        'ExternalUsername' => null,
        'UserId' => null,
        'Status' => null,
        'Details' => null,
    ];
}
