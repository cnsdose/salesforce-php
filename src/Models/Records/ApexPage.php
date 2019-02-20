<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ApexPage
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ApexPage[] query()
 *
 * @property string $Id
 * @property string $NamespacePrefix
 * @property string $Name
 * @property float $ApiVersion
 * @property string $MasterLabel
 * @property string $Description
 * @property mixed $ControllerType
 * @property string $ControllerKey
 * @property bool $IsAvailableInTouch
 * @property bool $IsConfirmationTokenRequired
 * @property string $Markup
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class ApexPage extends BaseRecordModel
{
    public static $objectApiName = 'ApexPage';
    protected $defaultFields = [
        'Id' => null,
        'NamespacePrefix' => null,
        'Name' => null,
        'ApiVersion' => 'number:17,1',
        'MasterLabel' => null,
        'Description' => null,
        'ControllerType' => null,
        'ControllerKey' => null,
        'IsAvailableInTouch' => 'bool',
        'IsConfirmationTokenRequired' => 'bool',
        'Markup' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}
