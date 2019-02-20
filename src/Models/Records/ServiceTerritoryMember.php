<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ServiceTerritoryMember
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ServiceTerritoryMember[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $MemberNumber
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $ServiceTerritoryId
 * @property string $ServiceResourceId
 * @property mixed $TerritoryType
 * @property \Carbon\Carbon $EffectiveStartDate
 * @property \Carbon\Carbon $EffectiveEndDate
 * @property string $Street
 * @property string $City
 * @property string $State
 * @property string $PostalCode
 * @property string $Country
 * @property float $Latitude
 * @property float $Longitude
 * @property mixed $GeocodeAccuracy
 * @property mixed $Address
 * @property string $OperatingHoursId
 */
class ServiceTerritoryMember extends BaseRecordModel
{
    public static $objectApiName = 'ServiceTerritoryMember';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'MemberNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'ServiceTerritoryId' => null,
        'ServiceResourceId' => null,
        'TerritoryType' => null,
        'EffectiveStartDate' => 'datetime',
        'EffectiveEndDate' => 'datetime',
        'Street' => null,
        'City' => null,
        'State' => null,
        'PostalCode' => null,
        'Country' => null,
        'Latitude' => 'number:3,15',
        'Longitude' => 'number:3,15',
        'GeocodeAccuracy' => null,
        'Address' => null,
        'OperatingHoursId' => null,
    ];
}
