<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class OwnerChangeOptionInfo
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method OwnerChangeOptionInfo[] query()
 *
 * @property string $Id
 * @property string $DurableId
 * @property string $EntityDefinitionId
 * @property string $Name
 * @property string $Label
 * @property bool $IsEditable
 * @property bool $DefaultValue
 * @property string $ParentId
 */
class OwnerChangeOptionInfo extends BaseRecordModel
{
    public static $objectApiName = 'OwnerChangeOptionInfo';
    protected $defaultFields = [
        'Id' => null,
        'DurableId' => null,
        'EntityDefinitionId' => null,
        'Name' => null,
        'Label' => null,
        'IsEditable' => 'bool',
        'DefaultValue' => 'bool',
        'ParentId' => null,
    ];
}
