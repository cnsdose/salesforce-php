<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ProfileSkillHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ProfileSkillHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ProfileSkillId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class ProfileSkillHistory extends BaseRecordModel
{
    public static $objectApiName = 'ProfileSkillHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ProfileSkillId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
