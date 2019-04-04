<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Order
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Order[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property string $ContractId
 * @property string $AccountId
 * @property string $Pricebook2Id
 * @property string $OriginalOrderId
 * @property \Carbon\Carbon $EffectiveDate
 * @property \Carbon\Carbon $EndDate
 * @property bool $IsReductionOrder
 * @property string $Status
 * @property string $Description
 * @property string $CustomerAuthorizedById
 * @property string $CompanyAuthorizedById
 * @property string $Type
 * @property string $BillingStreet
 * @property string $BillingCity
 * @property string $BillingState
 * @property string $BillingPostalCode
 * @property string $BillingCountry
 * @property float $BillingLatitude
 * @property float $BillingLongitude
 * @property string $BillingGeocodeAccuracy
 * @property mixed $BillingAddress
 * @property string $ShippingStreet
 * @property string $ShippingCity
 * @property string $ShippingState
 * @property string $ShippingPostalCode
 * @property string $ShippingCountry
 * @property float $ShippingLatitude
 * @property float $ShippingLongitude
 * @property string $ShippingGeocodeAccuracy
 * @property mixed $ShippingAddress
 * @property \Carbon\Carbon $ActivatedDate
 * @property string $ActivatedById
 * @property string $StatusCode
 * @property string $CurrencyIsoCode
 * @property string $OrderNumber
 * @property float $TotalAmount
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 */
class Order extends BaseRecordModel
{
    public static $objectApiName = 'Order';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'ContractId' => null,
        'AccountId' => null,
        'Pricebook2Id' => null,
        'OriginalOrderId' => null,
        'EffectiveDate' => 'date',
        'EndDate' => 'date',
        'IsReductionOrder' => 'bool',
        'Status' => null,
        'Description' => null,
        'CustomerAuthorizedById' => null,
        'CompanyAuthorizedById' => null,
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
