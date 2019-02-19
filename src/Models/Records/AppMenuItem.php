<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AppMenuItem
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AppMenuItem[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property mixed $SortOrder
 * @property string $Name
 * @property string $NamespacePrefix
 * @property string $Label
 * @property string $Description
 * @property mixed $StartUrl
 * @property mixed $MobileStartUrl
 * @property mixed $LogoUrl
 * @property mixed $IconUrl
 * @property mixed $InfoUrl
 * @property bool $IsUsingAdminAuthorization
 * @property mixed $MobilePlatform
 * @property string $MobileMinOsVer
 * @property string $MobileDeviceType
 * @property bool $IsRegisteredDeviceOnly
 * @property string $MobileAppVer
 * @property \Carbon\Carbon $MobileAppInstalledDate
 * @property string $MobileAppInstalledVersion
 * @property string $MobileAppBinaryId
 * @property mixed $MobileAppInstallUrl
 * @property bool $CanvasEnabled
 * @property string $CanvasReferenceId
 * @property mixed $CanvasUrl
 * @property mixed $CanvasAccessMethod
 * @property string $CanvasSelectedLocations
 * @property string $CanvasOptions
 * @property mixed $Type
 * @property string $ApplicationId
 * @property mixed $UserSortOrder
 * @property bool $IsVisible
 * @property bool $IsAccessible
 */
class AppMenuItem extends BaseRecordModel
{
    protected static $objectApiName = 'AppMenuItem';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'SortOrder' => null,
        'Name' => null,
        'NamespacePrefix' => null,
        'Label' => null,
        'Description' => null,
        'StartUrl' => null,
        'MobileStartUrl' => null,
        'LogoUrl' => null,
        'IconUrl' => null,
        'InfoUrl' => null,
        'IsUsingAdminAuthorization' => 'bool',
        'MobilePlatform' => null,
        'MobileMinOsVer' => null,
        'MobileDeviceType' => null,
        'IsRegisteredDeviceOnly' => 'bool',
        'MobileAppVer' => null,
        'MobileAppInstalledDate' => 'datetime',
        'MobileAppInstalledVersion' => null,
        'MobileAppBinaryId' => null,
        'MobileAppInstallUrl' => null,
        'CanvasEnabled' => 'bool',
        'CanvasReferenceId' => null,
        'CanvasUrl' => null,
        'CanvasAccessMethod' => null,
        'CanvasSelectedLocations' => null,
        'CanvasOptions' => null,
        'Type' => null,
        'ApplicationId' => null,
        'UserSortOrder' => null,
        'IsVisible' => 'bool',
        'IsAccessible' => 'bool',
    ];
}
