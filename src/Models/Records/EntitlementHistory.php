<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class EntitlementHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method EntitlementHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $EntitlementId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class EntitlementHistory extends BaseRecordModel
{
    public static $objectApiName = 'EntitlementHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'EntitlementId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
