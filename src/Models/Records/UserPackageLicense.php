<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class UserPackageLicense
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method UserPackageLicense[] query()
 *
 * @property string $Id
 * @property string $PackageLicenseId
 * @property string $UserId
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class UserPackageLicense extends BaseRecordModel
{
    public static $objectApiName = 'UserPackageLicense';
    protected $defaultFields = [
        'Id' => null,
        'PackageLicenseId' => null,
        'UserId' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}
