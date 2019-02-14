<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AppTabMember
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AppTabMember[] query()
 *
 * @property string Id
 * @property string DurableId
 * @property string AppDefinitionId
 * @property string TabDefinitionId
 * @property mixed SortOrder
 * @property string WorkspaceDriverField
 */
class AppTabMember extends BaseRecordModel
{
    protected static $objectApiName = 'AppTabMember';
    protected $defaultFields = [
        'Id' => null,
        'DurableId' => null,
        'AppDefinitionId' => null,
        'TabDefinitionId' => null,
        'SortOrder' => null,
        'WorkspaceDriverField' => null,
    ];
}
