<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class SkillRequirementHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method SkillRequirementHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $SkillRequirementId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property mixed $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class SkillRequirementHistory extends BaseRecordModel
{
    protected static $objectApiName = 'SkillRequirementHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'SkillRequirementId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
