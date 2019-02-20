<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ServiceAppointment
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ServiceAppointment[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property bool $IsDeleted
 * @property string $AppointmentNumber
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $ParentRecordId
 * @property string $ParentRecordType
 * @property string $AccountId
 * @property string $WorkTypeId
 * @property string $ContactId
 * @property string $Street
 * @property string $City
 * @property string $State
 * @property string $PostalCode
 * @property string $Country
 * @property float $Latitude
 * @property float $Longitude
 * @property mixed $GeocodeAccuracy
 * @property mixed $Address
 * @property string $Description
 * @property \Carbon\Carbon $EarliestStartTime
 * @property \Carbon\Carbon $DueDate
 * @property float $Duration
 * @property \Carbon\Carbon $ArrivalWindowStartTime
 * @property \Carbon\Carbon $ArrivalWindowEndTime
 * @property mixed $Status
 * @property \Carbon\Carbon $SchedStartTime
 * @property \Carbon\Carbon $SchedEndTime
 * @property \Carbon\Carbon $ActualStartTime
 * @property \Carbon\Carbon $ActualEndTime
 * @property float $ActualDuration
 * @property mixed $DurationType
 * @property float $DurationInMinutes
 * @property string $ServiceTerritoryId
 * @property string $Subject
 * @property mixed $ParentRecordStatusCategory
 * @property mixed $StatusCategory
 * @property string $ServiceNote
 */
class ServiceAppointment extends BaseRecordModel
{
    public static $objectApiName = 'ServiceAppointment';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'IsDeleted' => 'bool',
        'AppointmentNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'ParentRecordId' => null,
        'ParentRecordType' => null,
        'AccountId' => null,
        'WorkTypeId' => null,
        'ContactId' => null,
        'Street' => null,
        'City' => null,
        'State' => null,
        'PostalCode' => null,
        'Country' => null,
        'Latitude' => 'number:3,15',
        'Longitude' => 'number:3,15',
        'GeocodeAccuracy' => null,
        'Address' => null,
        'Description' => null,
        'EarliestStartTime' => 'datetime',
        'DueDate' => 'datetime',
        'Duration' => 'number:16,2',
        'ArrivalWindowStartTime' => 'datetime',
        'ArrivalWindowEndTime' => 'datetime',
        'Status' => null,
        'SchedStartTime' => 'datetime',
        'SchedEndTime' => 'datetime',
        'ActualStartTime' => 'datetime',
        'ActualEndTime' => 'datetime',
        'ActualDuration' => 'number:16,2',
        'DurationType' => null,
        'DurationInMinutes' => 'number:16,2',
        'ServiceTerritoryId' => null,
        'Subject' => null,
        'ParentRecordStatusCategory' => null,
        'StatusCategory' => null,
        'ServiceNote' => null,
    ];
}
