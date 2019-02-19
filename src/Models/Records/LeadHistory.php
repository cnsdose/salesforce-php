<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class LeadHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method LeadHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $LeadId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property mixed $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class LeadHistory extends BaseRecordModel
{
    protected static $objectApiName = 'LeadHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'LeadId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
