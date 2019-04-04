<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ProfileSkillEndorsementHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ProfileSkillEndorsementHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ProfileSkillEndorsementId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class ProfileSkillEndorsementHistory extends BaseRecordModel
{
    public static $objectApiName = 'ProfileSkillEndorsementHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ProfileSkillEndorsementId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
