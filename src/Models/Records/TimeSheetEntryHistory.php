<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class TimeSheetEntryHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method TimeSheetEntryHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $TimeSheetEntryId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property mixed $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class TimeSheetEntryHistory extends BaseRecordModel
{
    public static $objectApiName = 'TimeSheetEntryHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'TimeSheetEntryId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
