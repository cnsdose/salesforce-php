<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class WorkTypeHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method WorkTypeHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $WorkTypeId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property mixed $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class WorkTypeHistory extends BaseRecordModel
{
    protected static $objectApiName = 'WorkTypeHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'WorkTypeId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
