<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class TimeSheetHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method TimeSheetHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $TimeSheetId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class TimeSheetHistory extends BaseRecordModel
{
    public static $objectApiName = 'TimeSheetHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'TimeSheetId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
