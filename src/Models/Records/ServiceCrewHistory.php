<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ServiceCrewHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ServiceCrewHistory[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string ServiceCrewId
 * @property string CreatedById
 * @property \Carbon\Carbon CreatedDate
 * @property mixed Field
 * @property mixed OldValue
 * @property mixed NewValue
 */
class ServiceCrewHistory extends BaseRecordModel
{
    protected static $objectApiName = 'ServiceCrewHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ServiceCrewId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
