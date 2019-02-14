<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Shipment
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Shipment[] query()
 *
 * @property string Id
 * @property string OwnerId
 * @property bool IsDeleted
 * @property string ShipmentNumber
 * @property mixed CurrencyIsoCode
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property \Carbon\Carbon LastViewedDate
 * @property \Carbon\Carbon LastReferencedDate
 * @property string ShipFromStreet
 * @property string ShipFromCity
 * @property string ShipFromState
 * @property string ShipFromPostalCode
 * @property string ShipFromCountry
 * @property float ShipFromLatitude
 * @property float ShipFromLongitude
 * @property mixed ShipFromGeocodeAccuracy
 * @property mixed ShipFromAddress
 * @property string ShipToStreet
 * @property string ShipToCity
 * @property string ShipToState
 * @property string ShipToPostalCode
 * @property string ShipToCountry
 * @property float ShipToLatitude
 * @property float ShipToLongitude
 * @property mixed ShipToGeocodeAccuracy
 * @property mixed ShipToAddress
 * @property string SourceLocationId
 * @property string DestinationLocationId
 * @property string TrackingNumber
 * @property mixed TrackingUrl
 * @property \Carbon\Carbon ExpectedDeliveryDate
 * @property \Carbon\Carbon ActualDeliveryDate
 * @property mixed Provider
 * @property mixed Status
 * @property string ShipToName
 * @property string Description
 * @property string DeliveredToId
 */
class Shipment extends BaseRecordModel
{
    protected static $objectApiName = 'Shipment';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'IsDeleted' => 'bool',
        'ShipmentNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'ShipFromStreet' => null,
        'ShipFromCity' => null,
        'ShipFromState' => null,
        'ShipFromPostalCode' => null,
        'ShipFromCountry' => null,
        'ShipFromLatitude' => 'number:3,15',
        'ShipFromLongitude' => 'number:3,15',
        'ShipFromGeocodeAccuracy' => null,
        'ShipFromAddress' => null,
        'ShipToStreet' => null,
        'ShipToCity' => null,
        'ShipToState' => null,
        'ShipToPostalCode' => null,
        'ShipToCountry' => null,
        'ShipToLatitude' => 'number:3,15',
        'ShipToLongitude' => 'number:3,15',
        'ShipToGeocodeAccuracy' => null,
        'ShipToAddress' => null,
        'SourceLocationId' => null,
        'DestinationLocationId' => null,
        'TrackingNumber' => null,
        'TrackingUrl' => null,
        'ExpectedDeliveryDate' => 'datetime',
        'ActualDeliveryDate' => 'datetime',
        'Provider' => null,
        'Status' => null,
        'ShipToName' => null,
        'Description' => null,
        'DeliveredToId' => null,
    ];
}
