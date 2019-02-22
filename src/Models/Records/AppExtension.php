<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AppExtension
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AppExtension[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $FieldServiceMobileSettingsId
 * @property string $AppExtensionName
 * @property string $Type
 * @property string $LaunchValue
 * @property string $ScopedToObjectTypes
 * @property string $InstallationUrl
 * @property string $AppExtensionLabel
 */
class AppExtension extends BaseRecordModel
{
    public static $objectApiName = 'AppExtension';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'FieldServiceMobileSettingsId' => null,
        'AppExtensionName' => null,
        'Type' => null,
        'LaunchValue' => null,
        'ScopedToObjectTypes' => null,
        'InstallationUrl' => null,
        'AppExtensionLabel' => null,
    ];
}
