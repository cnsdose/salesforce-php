<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class UserProvAccountStaging
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method UserProvAccountStaging[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $Name
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $ConnectedAppId
 * @property string $SalesforceUserId
 * @property string $ExternalUserId
 * @property string $ExternalUsername
 * @property string $ExternalEmail
 * @property string $ExternalFirstName
 * @property string $ExternalLastName
 * @property mixed $LinkState
 * @property mixed $Status
 */
class UserProvAccountStaging extends BaseRecordModel
{
    protected static $objectApiName = 'UserProvAccountStaging';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'ConnectedAppId' => null,
        'SalesforceUserId' => null,
        'ExternalUserId' => null,
        'ExternalUsername' => null,
        'ExternalEmail' => null,
        'ExternalFirstName' => null,
        'ExternalLastName' => null,
        'LinkState' => null,
        'Status' => null,
    ];
}
