<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ServiceTerritoryMemberHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ServiceTerritoryMemberHistory[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string ServiceTerritoryMemberId
 * @property string CreatedById
 * @property \Carbon\Carbon CreatedDate
 * @property mixed Field
 * @property mixed OldValue
 * @property mixed NewValue
 */
class ServiceTerritoryMemberHistory extends BaseRecordModel
{
    protected static $objectApiName = 'ServiceTerritoryMemberHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ServiceTerritoryMemberId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
