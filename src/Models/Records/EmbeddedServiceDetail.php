<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class EmbeddedServiceDetail
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method EmbeddedServiceDetail[] query()
 *
 * @property string $Id
 * @property string $DurableId
 * @property string $Site
 * @property string $PrimaryColor
 * @property string $SecondaryColor
 * @property string $ContrastPrimaryColor
 * @property string $ContrastInvertedColor
 * @property string $NavBarColor
 * @property string $Font
 * @property bool $IsLiveAgentEnabled
 * @property bool $IsFieldServiceEnabled
 * @property mixed $Width
 * @property mixed $Height
 * @property bool $IsPrechatEnabled
 * @property string $CustomPrechatComponent
 * @property string $AvatarImg
 * @property string $SmallCompanyLogoImg
 * @property string $PrechatBackgroundImg
 * @property string $WaitingStateBackgroundImg
 * @property string $HeaderBackgroundImg
 * @property mixed $FontSize
 * @property string $OfflineCaseBackgroundImg
 * @property bool $IsOfflineCaseEnabled
 * @property bool $IsQueuePositionEnabled
 * @property bool $ShouldShowNewAppointment
 * @property bool $ShouldShowExistingAppointment
 * @property string $FieldServiceHomeImg
 * @property string $FieldServiceLogoImg
 * @property string $FieldServiceConfirmCardImg
 * @property bool $ShouldHideAuthDialog
 * @property string $CustomMinimizedComponent
 */
class EmbeddedServiceDetail extends BaseRecordModel
{
    protected static $objectApiName = 'EmbeddedServiceDetail';
    protected $defaultFields = [
        'Id' => null,
        'DurableId' => null,
        'Site' => null,
        'PrimaryColor' => null,
        'SecondaryColor' => null,
        'ContrastPrimaryColor' => null,
        'ContrastInvertedColor' => null,
        'NavBarColor' => null,
        'Font' => null,
        'IsLiveAgentEnabled' => 'bool',
        'IsFieldServiceEnabled' => 'bool',
        'Width' => null,
        'Height' => null,
        'IsPrechatEnabled' => 'bool',
        'CustomPrechatComponent' => null,
        'AvatarImg' => null,
        'SmallCompanyLogoImg' => null,
        'PrechatBackgroundImg' => null,
        'WaitingStateBackgroundImg' => null,
        'HeaderBackgroundImg' => null,
        'FontSize' => null,
        'OfflineCaseBackgroundImg' => null,
        'IsOfflineCaseEnabled' => 'bool',
        'IsQueuePositionEnabled' => 'bool',
        'ShouldShowNewAppointment' => 'bool',
        'ShouldShowExistingAppointment' => 'bool',
        'FieldServiceHomeImg' => null,
        'FieldServiceLogoImg' => null,
        'FieldServiceConfirmCardImg' => null,
        'ShouldHideAuthDialog' => 'bool',
        'CustomMinimizedComponent' => null,
    ];
}
