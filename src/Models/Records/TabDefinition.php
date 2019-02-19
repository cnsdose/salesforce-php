<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class TabDefinition
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method TabDefinition[] query()
 *
 * @property string $Id
 * @property string $DurableId
 * @property string $Name
 * @property string $Label
 * @property bool $IsCustom
 * @property string $SobjectName
 * @property string $Url
 * @property bool $IsAvailableInAloha
 * @property bool $IsAvailableInLightning
 * @property bool $IsAvailableInMobile
 * @property bool $IsAvailableInDesktop
 * @property string $MobileUrl
 */
class TabDefinition extends BaseRecordModel
{
    protected static $objectApiName = 'TabDefinition';
    protected $defaultFields = [
        'Id' => null,
        'DurableId' => null,
        'Name' => null,
        'Label' => null,
        'IsCustom' => 'bool',
        'SobjectName' => null,
        'Url' => null,
        'IsAvailableInAloha' => 'bool',
        'IsAvailableInLightning' => 'bool',
        'IsAvailableInMobile' => 'bool',
        'IsAvailableInDesktop' => 'bool',
        'MobileUrl' => null,
    ];
}
