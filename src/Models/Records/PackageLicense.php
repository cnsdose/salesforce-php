<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class PackageLicense
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method PackageLicense[] query()
 *
 * @property string $Id
 * @property mixed $Status
 * @property bool $IsProvisioned
 * @property mixed $AllowedLicenses
 * @property mixed $UsedLicenses
 * @property \Carbon\Carbon $ExpirationDate
 * @property \Carbon\Carbon $CreatedDate
 * @property \Carbon\Carbon $LastModifiedDate
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $NamespacePrefix
 */
class PackageLicense extends BaseRecordModel
{
    protected static $objectApiName = 'PackageLicense';
    protected $defaultFields = [
        'Id' => null,
        'Status' => null,
        'IsProvisioned' => 'bool',
        'AllowedLicenses' => null,
        'UsedLicenses' => null,
        'ExpirationDate' => 'datetime',
        'CreatedDate' => 'datetime',
        'LastModifiedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
        'NamespacePrefix' => null,
    ];
}
