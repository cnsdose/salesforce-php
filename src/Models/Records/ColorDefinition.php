<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ColorDefinition
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ColorDefinition[] query()
 *
 * @property string $Id
 * @property string $DurableId
 * @property string $TabDefinitionId
 * @property string $Color
 * @property string $Theme
 * @property string $Context
 */
class ColorDefinition extends BaseRecordModel
{
    protected static $objectApiName = 'ColorDefinition';
    protected $defaultFields = [
        'Id' => null,
        'DurableId' => null,
        'TabDefinitionId' => null,
        'Color' => null,
        'Theme' => null,
        'Context' => null,
    ];
}
