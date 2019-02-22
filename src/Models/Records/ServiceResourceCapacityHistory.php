<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ServiceResourceCapacityHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ServiceResourceCapacityHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ServiceResourceCapacityId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class ServiceResourceCapacityHistory extends BaseRecordModel
{
    public static $objectApiName = 'ServiceResourceCapacityHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ServiceResourceCapacityId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
