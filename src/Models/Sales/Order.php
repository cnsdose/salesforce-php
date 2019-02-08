<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Sales;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class Order
 * @package CNSDose\Salesforce\Models\Sales
 *
 * @method Order[] query()
 *
 * @property string Id
 * @property string OwnerId
 * @property string ContractId
 * @property string AccountId
 * @property string Pricebook2Id
 * @property string OriginalOrderId
 * @property string RecordTypeId
 * @property \Carbon\Carbon EffectiveDate
 * @property \Carbon\Carbon EndDate
 * @property bool IsReductionOrder
 * @property mixed Status
 * @property string Description
 * @property string CustomerAuthorizedById
 * @property \Carbon\Carbon CustomerAuthorizedDate
 * @property string CompanyAuthorizedById
 * @property \Carbon\Carbon CompanyAuthorizedDate
 * @property mixed Type
 * @property string BillingStreet
 * @property string BillingCity
 * @property string BillingState
 * @property string BillingPostalCode
 * @property string BillingCountry
 * @property float BillingLatitude
 * @property float BillingLongitude
 * @property mixed BillingGeocodeAccuracy
 * @property mixed BillingAddress
 * @property string ShippingStreet
 * @property string ShippingCity
 * @property string ShippingState
 * @property string ShippingPostalCode
 * @property string ShippingCountry
 * @property float ShippingLatitude
 * @property float ShippingLongitude
 * @property mixed ShippingGeocodeAccuracy
 * @property mixed ShippingAddress
 * @property string Name
 * @property \Carbon\Carbon PoDate
 * @property string PoNumber
 * @property string OrderReferenceNumber
 * @property string BillToContactId
 * @property string ShipToContactId
 * @property \Carbon\Carbon ActivatedDate
 * @property string ActivatedById
 * @property mixed StatusCode
 * @property mixed CurrencyIsoCode
 * @property string OrderNumber
 * @property float TotalAmount
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property bool IsDeleted
 * @property \Carbon\Carbon SystemModstamp
 * @property \Carbon\Carbon LastViewedDate
 * @property \Carbon\Carbon LastReferencedDate
 */
class Order extends BaseModel
{
    protected static $objectApiName = 'Order';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'ContractId' => null,
        'AccountId' => null,
        'Pricebook2Id' => null,
        'OriginalOrderId' => null,
        'RecordTypeId' => null,
        'EffectiveDate' => 'date',
        'EndDate' => 'date',
        'IsReductionOrder' => 'bool',
        'Status' => null,
        'Description' => null,
        'CustomerAuthorizedById' => null,
        'CustomerAuthorizedDate' => 'date',
        'CompanyAuthorizedById' => null,
        'CompanyAuthorizedDate' => 'date',
        'Type' => null,
        'BillingStreet' => null,
        'BillingCity' => null,
        'BillingState' => null,
        'BillingPostalCode' => null,
        'BillingCountry' => null,
        'BillingLatitude' => 'number:3,15',
        'BillingLongitude' => 'number:3,15',
        'BillingGeocodeAccuracy' => null,
        'BillingAddress' => null,
        'ShippingStreet' => null,
        'ShippingCity' => null,
        'ShippingState' => null,
        'ShippingPostalCode' => null,
        'ShippingCountry' => null,
        'ShippingLatitude' => 'number:3,15',
        'ShippingLongitude' => 'number:3,15',
        'ShippingGeocodeAccuracy' => null,
        'ShippingAddress' => null,
        'Name' => null,
        'PoDate' => 'date',
        'PoNumber' => null,
        'OrderReferenceNumber' => null,
        'BillToContactId' => null,
        'ShipToContactId' => null,
        'ActivatedDate' => 'datetime',
        'ActivatedById' => null,
        'StatusCode' => null,
        'CurrencyIsoCode' => null,
        'OrderNumber' => null,
        'TotalAmount' => 'number:16,2',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'IsDeleted' => 'bool',
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
    ];
}
