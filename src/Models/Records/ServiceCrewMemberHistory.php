<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ServiceCrewMemberHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ServiceCrewMemberHistory[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string ServiceCrewMemberId
 * @property string CreatedById
 * @property \Carbon\Carbon CreatedDate
 * @property mixed Field
 * @property mixed OldValue
 * @property mixed NewValue
 */
class ServiceCrewMemberHistory extends BaseRecordModel
{
    protected static $objectApiName = 'ServiceCrewMemberHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ServiceCrewMemberId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
