<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class UserProvAccount
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method UserProvAccount[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $Name
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $SalesforceUserId
 * @property string $ConnectedAppId
 * @property string $ExternalUserId
 * @property string $ExternalUsername
 * @property string $ExternalEmail
 * @property string $ExternalFirstName
 * @property string $ExternalLastName
 * @property string $LinkState
 * @property string $Status
 * @property \Carbon\Carbon $DeletedDate
 * @property bool $IsKnownLink
 */
class UserProvAccount extends BaseRecordModel
{
    public static $objectApiName = 'UserProvAccount';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'SalesforceUserId' => null,
        'ConnectedAppId' => null,
        'ExternalUserId' => null,
        'ExternalUsername' => null,
        'ExternalEmail' => null,
        'ExternalFirstName' => null,
        'ExternalLastName' => null,
        'LinkState' => null,
        'Status' => null,
        'DeletedDate' => 'datetime',
        'IsKnownLink' => 'bool',
    ];
}
