<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Quote
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Quote[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property bool $IsDeleted
 * @property string $Name
 * @property string $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $OpportunityId
 * @property string $Pricebook2Id
 * @property string $ContactId
 * @property string $QuoteNumber
 * @property bool $IsSyncing
 * @property float $ShippingHandling
 * @property float $Tax
 * @property string $Status
 * @property \Carbon\Carbon $ExpirationDate
 * @property string $Description
 * @property float $Subtotal
 * @property float $TotalPrice
 * @property mixed $LineItemCount
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
 * @property string $QuoteToStreet
 * @property string $QuoteToCity
 * @property string $QuoteToState
 * @property string $QuoteToPostalCode
 * @property string $QuoteToCountry
 * @property float $QuoteToLatitude
 * @property float $QuoteToLongitude
 * @property string $QuoteToGeocodeAccuracy
 * @property mixed $QuoteToAddress
 * @property string $AdditionalStreet
 * @property string $AdditionalCity
 * @property string $AdditionalState
 * @property string $AdditionalPostalCode
 * @property string $AdditionalCountry
 * @property float $AdditionalLatitude
 * @property float $AdditionalLongitude
 * @property string $AdditionalGeocodeAccuracy
 * @property mixed $AdditionalAddress
 * @property string $BillingName
 * @property string $ShippingName
 * @property string $QuoteToName
 * @property string $AdditionalName
 * @property mixed $Email
 * @property mixed $Phone
 * @property mixed $Fax
 * @property string $ContractId
 * @property string $AccountId
 * @property mixed $Discount
 * @property float $GrandTotal
 * @property bool $CanCreateQuoteLineItems
 */
class Quote extends BaseRecordModel
{
    public static $objectApiName = 'Quote';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'OpportunityId' => null,
        'Pricebook2Id' => null,
        'ContactId' => null,
        'QuoteNumber' => null,
        'IsSyncing' => 'bool',
        'ShippingHandling' => 'number:16,2',
        'Tax' => 'number:16,2',
        'Status' => null,
        'ExpirationDate' => 'date',
        'Description' => null,
        'Subtotal' => 'number:16,2',
        'TotalPrice' => 'number:16,2',
        'LineItemCount' => null,
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
        'QuoteToStreet' => null,
        'QuoteToCity' => null,
        'QuoteToState' => null,
        'QuoteToPostalCode' => null,
        'QuoteToCountry' => null,
        'QuoteToLatitude' => 'number:3,15',
        'QuoteToLongitude' => 'number:3,15',
        'QuoteToGeocodeAccuracy' => null,
        'QuoteToAddress' => null,
        'AdditionalStreet' => null,
        'AdditionalCity' => null,
        'AdditionalState' => null,
        'AdditionalPostalCode' => null,
        'AdditionalCountry' => null,
        'AdditionalLatitude' => 'number:3,15',
        'AdditionalLongitude' => 'number:3,15',
        'AdditionalGeocodeAccuracy' => null,
        'AdditionalAddress' => null,
        'BillingName' => null,
        'ShippingName' => null,
        'QuoteToName' => null,
        'AdditionalName' => null,
        'Email' => null,
        'Phone' => null,
        'Fax' => null,
        'ContractId' => null,
        'AccountId' => null,
        'Discount' => null,
        'GrandTotal' => 'number:16,2',
        'CanCreateQuoteLineItems' => 'bool',
    ];
}
