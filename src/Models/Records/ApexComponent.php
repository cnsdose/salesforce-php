<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ApexComponent
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ApexComponent[] query()
 *
 * @property string $Id
 * @property string $NamespacePrefix
 * @property string $Name
 * @property float $ApiVersion
 * @property string $MasterLabel
 * @property string $Description
 * @property mixed $ControllerType
 * @property string $ControllerKey
 * @property string $Markup
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class ApexComponent extends BaseRecordModel
{
    public static $objectApiName = 'ApexComponent';
    protected $defaultFields = [
        'Id' => null,
        'NamespacePrefix' => null,
        'Name' => null,
        'ApiVersion' => 'number:17,1',
        'MasterLabel' => null,
        'Description' => null,
        'ControllerType' => null,
        'ControllerKey' => null,
        'Markup' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}
