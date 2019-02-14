<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AssignmentRule
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AssignmentRule[] query()
 *
 * @property string Id
 * @property string Name
 * @property mixed SobjectType
 * @property bool Active
 * @property string CreatedById
 * @property \Carbon\Carbon CreatedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property \Carbon\Carbon SystemModstamp
 */
class AssignmentRule extends BaseRecordModel
{
    protected static $objectApiName = 'AssignmentRule';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'SobjectType' => null,
        'Active' => 'bool',
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedById' => null,
        'LastModifiedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
    ];
}
