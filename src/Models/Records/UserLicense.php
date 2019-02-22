<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class UserLicense
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method UserLicense[] query()
 *
 * @property string $Id
 * @property string $LicenseDefinitionKey
 * @property mixed $TotalLicenses
 * @property string $Status
 * @property mixed $UsedLicenses
 * @property \Carbon\Carbon $UsedLicensesLastUpdated
 * @property string $Name
 * @property string $MasterLabel
 * @property \Carbon\Carbon $CreatedDate
 * @property \Carbon\Carbon $LastModifiedDate
 * @property \Carbon\Carbon $SystemModstamp
 */
class UserLicense extends BaseRecordModel
{
    public static $objectApiName = 'UserLicense';
    protected $defaultFields = [
        'Id' => null,
        'LicenseDefinitionKey' => null,
        'TotalLicenses' => null,
        'Status' => null,
        'UsedLicenses' => null,
        'UsedLicensesLastUpdated' => 'datetime',
        'Name' => null,
        'MasterLabel' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
    ];
}
