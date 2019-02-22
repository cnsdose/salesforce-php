<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class TimeSheet
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method TimeSheet[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property bool $IsDeleted
 * @property string $TimeSheetNumber
 * @property string $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $ServiceResourceId
 * @property \Carbon\Carbon $StartDate
 * @property string $Status
 * @property \Carbon\Carbon $EndDate
 * @property mixed $TimeSheetEntryCount
 */
class TimeSheet extends BaseRecordModel
{
    public static $objectApiName = 'TimeSheet';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'IsDeleted' => 'bool',
        'TimeSheetNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'ServiceResourceId' => null,
        'StartDate' => 'date',
        'Status' => null,
        'EndDate' => 'date',
        'TimeSheetEntryCount' => null,
    ];
}
