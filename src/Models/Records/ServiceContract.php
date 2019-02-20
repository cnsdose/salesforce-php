<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ServiceContract
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ServiceContract[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property bool $IsDeleted
 * @property string $Name
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $AccountId
 * @property string $ContactId
 * @property mixed $Term
 * @property \Carbon\Carbon $StartDate
 * @property \Carbon\Carbon $EndDate
 * @property \Carbon\Carbon $ActivationDate
 * @property mixed $ApprovalStatus
 * @property string $Description
 * @property string $BillingStreet
 * @property string $BillingCity
 * @property string $BillingState
 * @property string $BillingPostalCode
 * @property string $BillingCountry
 * @property float $BillingLatitude
 * @property float $BillingLongitude
 * @property mixed $BillingGeocodeAccuracy
 * @property mixed $BillingAddress
 * @property string $ShippingStreet
 * @property string $ShippingCity
 * @property string $ShippingState
 * @property string $ShippingPostalCode
 * @property string $ShippingCountry
 * @property float $ShippingLatitude
 * @property float $ShippingLongitude
 * @property mixed $ShippingGeocodeAccuracy
 * @property mixed $ShippingAddress
 * @property string $Pricebook2Id
 * @property float $ShippingHandling
 * @property float $Tax
 * @property float $Subtotal
 * @property float $TotalPrice
 * @property mixed $LineItemCount
 * @property string $ContractNumber
 * @property string $SpecialTerms
 * @property mixed $Discount
 * @property float $GrandTotal
 * @property mixed $Status
 * @property string $ParentServiceContractId
 * @property string $RootServiceContractId
 */
class ServiceContract extends BaseRecordModel
{
    public static $objectApiName = 'ServiceContract';
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
        'AccountId' => null,
        'ContactId' => null,
        'Term' => null,
        'StartDate' => 'date',
        'EndDate' => 'date',
        'ActivationDate' => 'datetime',
        'ApprovalStatus' => null,
        'Description' => null,
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
        'Pricebook2Id' => null,
        'ShippingHandling' => 'number:16,2',
        'Tax' => 'number:16,2',
        'Subtotal' => 'number:16,2',
        'TotalPrice' => 'number:16,2',
        'LineItemCount' => null,
        'ContractNumber' => null,
        'SpecialTerms' => null,
        'Discount' => null,
        'GrandTotal' => 'number:16,2',
        'Status' => null,
        'ParentServiceContractId' => null,
        'RootServiceContractId' => null,
    ];
}
