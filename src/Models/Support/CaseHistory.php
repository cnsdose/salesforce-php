<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Support;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class CaseHistory
 * @package CNSDose\Salesforce\Models\Support
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
class CaseHistory extends BaseModel
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
