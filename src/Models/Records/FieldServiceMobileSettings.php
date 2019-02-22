<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class FieldServiceMobileSettings
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method FieldServiceMobileSettings[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $DeveloperName
 * @property string $Language
 * @property string $MasterLabel
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $NavbarBackgroundColor
 * @property string $BrandInvertedColor
 * @property string $FeedbackPrimaryColor
 * @property string $FeedbackSecondaryColor
 * @property string $PrimaryBrandColor
 * @property string $SecondaryBrandColor
 * @property string $ContrastPrimaryColor
 * @property string $ContrastSecondaryColor
 * @property string $ContrastTertiaryColor
 * @property string $ContrastQuaternaryColor
 * @property string $ContrastQuinaryColor
 * @property string $ContrastInvertedColor
 * @property bool $IsSendLocationHistory
 * @property mixed $GeoLocationMinUpdateFreqMins
 * @property string $GeoLocationAccuracy
 * @property mixed $RecordDataCacheTimeMins
 * @property mixed $MetadataCacheTimeDays
 * @property mixed $UpdateScheduleTimeMins
 * @property bool $IsShowEditFullRecord
 * @property string $TimeIntervalSetupMins
 * @property string $DefaultListViewDeveloperName
 * @property string $NavbarInvertedColor
 * @property string $FeedbackSelectedColor
 * @property mixed $FutureDaysInDatePicker
 * @property mixed $PastDaysInDatePicker
 * @property bool $IsDefault
 * @property mixed $BgGeoLocationMinUpdateFreqMins
 * @property string $BgGeoLocationAccuracy
 * @property bool $IsUseSalesforceMobileActions
 */
class FieldServiceMobileSettings extends BaseRecordModel
{
    public static $objectApiName = 'FieldServiceMobileSettings';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'DeveloperName' => null,
        'Language' => null,
        'MasterLabel' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'NavbarBackgroundColor' => null,
        'BrandInvertedColor' => null,
        'FeedbackPrimaryColor' => null,
        'FeedbackSecondaryColor' => null,
        'PrimaryBrandColor' => null,
        'SecondaryBrandColor' => null,
        'ContrastPrimaryColor' => null,
        'ContrastSecondaryColor' => null,
        'ContrastTertiaryColor' => null,
        'ContrastQuaternaryColor' => null,
        'ContrastQuinaryColor' => null,
        'ContrastInvertedColor' => null,
        'IsSendLocationHistory' => 'bool',
        'GeoLocationMinUpdateFreqMins' => null,
        'GeoLocationAccuracy' => null,
        'RecordDataCacheTimeMins' => null,
        'MetadataCacheTimeDays' => null,
        'UpdateScheduleTimeMins' => null,
        'IsShowEditFullRecord' => 'bool',
        'TimeIntervalSetupMins' => null,
        'DefaultListViewDeveloperName' => null,
        'NavbarInvertedColor' => null,
        'FeedbackSelectedColor' => null,
        'FutureDaysInDatePicker' => null,
        'PastDaysInDatePicker' => null,
        'IsDefault' => 'bool',
        'BgGeoLocationMinUpdateFreqMins' => null,
        'BgGeoLocationAccuracy' => null,
        'IsUseSalesforceMobileActions' => 'bool',
    ];
}
