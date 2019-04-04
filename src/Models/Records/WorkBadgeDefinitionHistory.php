<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class WorkBadgeDefinitionHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method WorkBadgeDefinitionHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $WorkBadgeDefinitionId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class WorkBadgeDefinitionHistory extends BaseRecordModel
{
    public static $objectApiName = 'WorkBadgeDefinitionHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'WorkBadgeDefinitionId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
