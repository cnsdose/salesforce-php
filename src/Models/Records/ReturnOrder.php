<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ReturnOrder
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ReturnOrder[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property bool $IsDeleted
 * @property string $ReturnOrderNumber
 * @property string $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $AccountId
 * @property string $ContactId
 * @property string $ProductRequestId
 * @property string $CaseId
 * @property string $OrderId
 * @property string $SourceLocationId
 * @property string $DestinationLocationId
 * @property string $ShipmentType
 * @property string $ShipFromStreet
 * @property string $ShipFromCity
 * @property string $ShipFromState
 * @property string $ShipFromPostalCode
 * @property string $ShipFromCountry
 * @property float $ShipFromLatitude
 * @property float $ShipFromLongitude
 * @property string $ShipFromGeocodeAccuracy
 * @property mixed $ShipFromAddress
 * @property string $ReturnedById
 * @property string $Description
 * @property \Carbon\Carbon $ExpectedArrivalDate
 * @property string $Status
 */
class ReturnOrder extends BaseRecordModel
{
    public static $objectApiName = 'ReturnOrder';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'IsDeleted' => 'bool',
        'ReturnOrderNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'AccountId' => null,
        'ContactId' => null,
        'ProductRequestId' => null,
        'CaseId' => null,
        'OrderId' => null,
        'SourceLocationId' => null,
        'DestinationLocationId' => null,
        'ShipmentType' => null,
        'ShipFromStreet' => null,
        'ShipFromCity' => null,
        'ShipFromState' => null,
        'ShipFromPostalCode' => null,
        'ShipFromCountry' => null,
        'ShipFromLatitude' => 'number:3,15',
        'ShipFromLongitude' => 'number:3,15',
        'ShipFromGeocodeAccuracy' => null,
        'ShipFromAddress' => null,
        'ReturnedById' => null,
        'Description' => null,
        'ExpectedArrivalDate' => 'datetime',
        'Status' => null,
    ];
}
