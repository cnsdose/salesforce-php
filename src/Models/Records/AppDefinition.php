<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AppDefinition
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AppDefinition[] query()
 *
 * @property string Id
 * @property string DurableId
 * @property string Label
 * @property string MasterLabel
 * @property string NamespacePrefix
 * @property string DeveloperName
 * @property mixed LogoUrl
 * @property string Description
 * @property mixed UiType
 * @property mixed NavType
 * @property string UtilityBar
 * @property string HeaderColor
 * @property bool IsOverrideOrgTheme
 * @property bool IsSmallFormFactorSupported
 * @property bool IsMediumFormFactorSupported
 * @property bool IsLargeFormFactorSupported
 * @property bool IsNavPersonalizationDisabled
 * @property bool IsNavAutoTempTabsDisabled
 */
class AppDefinition extends BaseRecordModel
{
    protected static $objectApiName = 'AppDefinition';
    protected $defaultFields = [
        'Id' => null,
        'DurableId' => null,
        'Label' => null,
        'MasterLabel' => null,
        'NamespacePrefix' => null,
        'DeveloperName' => null,
        'LogoUrl' => null,
        'Description' => null,
        'UiType' => null,
        'NavType' => null,
        'UtilityBar' => null,
        'HeaderColor' => null,
        'IsOverrideOrgTheme' => 'bool',
        'IsSmallFormFactorSupported' => 'bool',
        'IsMediumFormFactorSupported' => 'bool',
        'IsLargeFormFactorSupported' => 'bool',
        'IsNavPersonalizationDisabled' => 'bool',
        'IsNavAutoTempTabsDisabled' => 'bool',
    ];
}
