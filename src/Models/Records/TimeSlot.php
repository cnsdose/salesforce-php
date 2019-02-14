<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class TimeSlot
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method TimeSlot[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string TimeSlotNumber
 * @property mixed CurrencyIsoCode
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property \Carbon\Carbon LastViewedDate
 * @property \Carbon\Carbon LastReferencedDate
 * @property string OperatingHoursId
 * @property \Carbon\Carbon StartTime
 * @property \Carbon\Carbon EndTime
 * @property mixed DayOfWeek
 * @property mixed Type
 */
class TimeSlot extends BaseRecordModel
{
    protected static $objectApiName = 'TimeSlot';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'TimeSlotNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'OperatingHoursId' => null,
        'StartTime' => 'time',
        'EndTime' => 'time',
        'DayOfWeek' => null,
        'Type' => null,
    ];
}
