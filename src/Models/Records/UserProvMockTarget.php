<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class UserProvMockTarget
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method UserProvMockTarget[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $Name
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $ExternalUserId
 * @property string $ExternalUsername
 * @property string $ExternalEmail
 * @property string $ExternalFirstName
 * @property string $ExternalLastName
 */
class UserProvMockTarget extends BaseRecordModel
{
    public static $objectApiName = 'UserProvMockTarget';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'ExternalUserId' => null,
        'ExternalUsername' => null,
        'ExternalEmail' => null,
        'ExternalFirstName' => null,
        'ExternalLastName' => null,
    ];
}
