<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ResourceAbsence
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ResourceAbsence[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $AbsenceNumber
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $ResourceId
 * @property mixed $Type
 * @property string $Description
 * @property \Carbon\Carbon $Start
 * @property \Carbon\Carbon $End
 * @property string $Street
 * @property string $City
 * @property string $State
 * @property string $PostalCode
 * @property string $Country
 * @property float $Latitude
 * @property float $Longitude
 * @property mixed $GeocodeAccuracy
 * @property mixed $Address
 */
class ResourceAbsence extends BaseRecordModel
{
    protected static $objectApiName = 'ResourceAbsence';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'AbsenceNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'ResourceId' => null,
        'Type' => null,
        'Description' => null,
        'Start' => 'datetime',
        'End' => 'datetime',
        'Street' => null,
        'City' => null,
        'State' => null,
        'PostalCode' => null,
        'Country' => null,
        'Latitude' => 'number:3,15',
        'Longitude' => 'number:3,15',
        'GeocodeAccuracy' => null,
        'Address' => null,
    ];
}
