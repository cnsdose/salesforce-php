<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class IconDefinition
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method IconDefinition[] query()
 *
 * @property string $Id
 * @property string $DurableId
 * @property string $TabDefinitionId
 * @property string $Url
 * @property string $ContentType
 * @property string $Theme
 * @property mixed $Height
 * @property mixed $Width
 */
class IconDefinition extends BaseRecordModel
{
    protected static $objectApiName = 'IconDefinition';
    protected $defaultFields = [
        'Id' => null,
        'DurableId' => null,
        'TabDefinitionId' => null,
        'Url' => null,
        'ContentType' => null,
        'Theme' => null,
        'Height' => null,
        'Width' => null,
    ];
}
