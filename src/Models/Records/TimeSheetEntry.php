<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class TimeSheetEntry
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method TimeSheetEntry[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $TimeSheetEntryNumber
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $TimeSheetId
 * @property \Carbon\Carbon $StartTime
 * @property \Carbon\Carbon $EndTime
 * @property mixed $Status
 * @property mixed $Type
 * @property string $WorkOrderId
 * @property string $WorkOrderLineItemId
 * @property string $Description
 * @property string $Subject
 * @property mixed $DurationInMinutes
 */
class TimeSheetEntry extends BaseRecordModel
{
    protected static $objectApiName = 'TimeSheetEntry';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'TimeSheetEntryNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'TimeSheetId' => null,
        'StartTime' => 'datetime',
        'EndTime' => 'datetime',
        'Status' => null,
        'Type' => null,
        'WorkOrderId' => null,
        'WorkOrderLineItemId' => null,
        'Description' => null,
        'Subject' => null,
        'DurationInMinutes' => null,
    ];
}
