<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class BusinessHours
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method BusinessHours[] query()
 *
 * @property string $Id
 * @property string $Name
 * @property bool $IsActive
 * @property bool $IsDefault
 * @property \Carbon\Carbon $SundayStartTime
 * @property \Carbon\Carbon $SundayEndTime
 * @property \Carbon\Carbon $MondayStartTime
 * @property \Carbon\Carbon $MondayEndTime
 * @property \Carbon\Carbon $TuesdayStartTime
 * @property \Carbon\Carbon $TuesdayEndTime
 * @property \Carbon\Carbon $WednesdayStartTime
 * @property \Carbon\Carbon $WednesdayEndTime
 * @property \Carbon\Carbon $ThursdayStartTime
 * @property \Carbon\Carbon $ThursdayEndTime
 * @property \Carbon\Carbon $FridayStartTime
 * @property \Carbon\Carbon $FridayEndTime
 * @property \Carbon\Carbon $SaturdayStartTime
 * @property \Carbon\Carbon $SaturdayEndTime
 * @property mixed $TimeZoneSidKey
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $LastViewedDate
 */
class BusinessHours extends BaseRecordModel
{
    public static $objectApiName = 'BusinessHours';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'IsActive' => 'bool',
        'IsDefault' => 'bool',
        'SundayStartTime' => 'time',
        'SundayEndTime' => 'time',
        'MondayStartTime' => 'time',
        'MondayEndTime' => 'time',
        'TuesdayStartTime' => 'time',
        'TuesdayEndTime' => 'time',
        'WednesdayStartTime' => 'time',
        'WednesdayEndTime' => 'time',
        'ThursdayStartTime' => 'time',
        'ThursdayEndTime' => 'time',
        'FridayStartTime' => 'time',
        'FridayEndTime' => 'time',
        'SaturdayStartTime' => 'time',
        'SaturdayEndTime' => 'time',
        'TimeZoneSidKey' => null,
        'SystemModstamp' => 'datetime',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'LastViewedDate' => 'datetime',
    ];
}
