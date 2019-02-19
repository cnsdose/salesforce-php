<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class PermissionSetLicenseAssign
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method PermissionSetLicenseAssign[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $PermissionSetLicenseId
 * @property string $AssigneeId
 */
class PermissionSetLicenseAssign extends BaseRecordModel
{
    protected static $objectApiName = 'PermissionSetLicenseAssign';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'PermissionSetLicenseId' => null,
        'AssigneeId' => null,
    ];
}
