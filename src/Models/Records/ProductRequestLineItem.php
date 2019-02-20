<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ProductRequestLineItem
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ProductRequestLineItem[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ProductRequestLineItemNumber
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $ParentId
 * @property string $Product2Id
 * @property float $QuantityRequested
 * @property mixed $QuantityUnitOfMeasure
 * @property string $WorkOrderId
 * @property string $WorkOrderLineItemId
 * @property \Carbon\Carbon $NeedByDate
 * @property mixed $Status
 * @property mixed $ShipmentType
 * @property string $ShipToStreet
 * @property string $ShipToCity
 * @property string $ShipToState
 * @property string $ShipToPostalCode
 * @property string $ShipToCountry
 * @property float $ShipToLatitude
 * @property float $ShipToLongitude
 * @property mixed $ShipToGeocodeAccuracy
 * @property mixed $ShipToAddress
 * @property string $Description
 * @property string $DestinationLocationId
 * @property string $SourceLocationId
 * @property string $CaseId
 * @property string $AccountId
 */
class ProductRequestLineItem extends BaseRecordModel
{
    public static $objectApiName = 'ProductRequestLineItem';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ProductRequestLineItemNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'ParentId' => null,
        'Product2Id' => null,
        'QuantityRequested' => 'number:16,2',
        'QuantityUnitOfMeasure' => null,
        'WorkOrderId' => null,
        'WorkOrderLineItemId' => null,
        'NeedByDate' => 'datetime',
        'Status' => null,
        'ShipmentType' => null,
        'ShipToStreet' => null,
        'ShipToCity' => null,
        'ShipToState' => null,
        'ShipToPostalCode' => null,
        'ShipToCountry' => null,
        'ShipToLatitude' => 'number:3,15',
        'ShipToLongitude' => 'number:3,15',
        'ShipToGeocodeAccuracy' => null,
        'ShipToAddress' => null,
        'Description' => null,
        'DestinationLocationId' => null,
        'SourceLocationId' => null,
        'CaseId' => null,
        'AccountId' => null,
    ];
}
