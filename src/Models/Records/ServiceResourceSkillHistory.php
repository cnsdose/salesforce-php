<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ServiceResourceSkillHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ServiceResourceSkillHistory[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string ServiceResourceSkillId
 * @property string CreatedById
 * @property \Carbon\Carbon CreatedDate
 * @property mixed Field
 * @property mixed OldValue
 * @property mixed NewValue
 */
class ServiceResourceSkillHistory extends BaseRecordModel
{
    protected static $objectApiName = 'ServiceResourceSkillHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ServiceResourceSkillId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
