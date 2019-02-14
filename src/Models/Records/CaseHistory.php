<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CaseHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CaseHistory[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string CaseId
 * @property string CreatedById
 * @property \Carbon\Carbon CreatedDate
 * @property mixed Field
 * @property mixed OldValue
 * @property mixed NewValue
 */
class CaseHistory extends BaseRecordModel
{
    protected static $objectApiName = 'CaseHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CaseId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
