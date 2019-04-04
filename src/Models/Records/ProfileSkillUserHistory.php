<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ProfileSkillUserHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ProfileSkillUserHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ProfileSkillUserId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class ProfileSkillUserHistory extends BaseRecordModel
{
    public static $objectApiName = 'ProfileSkillUserHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ProfileSkillUserId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
