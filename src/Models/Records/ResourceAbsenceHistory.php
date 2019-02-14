<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ResourceAbsenceHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ResourceAbsenceHistory[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string ResourceAbsenceId
 * @property string CreatedById
 * @property \Carbon\Carbon CreatedDate
 * @property mixed Field
 * @property mixed OldValue
 * @property mixed NewValue
 */
class ResourceAbsenceHistory extends BaseRecordModel
{
    protected static $objectApiName = 'ResourceAbsenceHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ResourceAbsenceId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
