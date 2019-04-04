<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Contract
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Contract[] query()
 *
 * @property string $Id
 * @property string $AccountId
 * @property string $CurrencyIsoCode
 * @property string $Pricebook2Id
 * @property string $OwnerExpirationNotice
 * @property \Carbon\Carbon $StartDate
 * @property \Carbon\Carbon $EndDate
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
 * @property mixed $ContractTerm
 * @property string $OwnerId
 * @property string $Status
 * @property string $CompanySignedId
 * @property \Carbon\Carbon $CompanySignedDate
 * @property string $CustomerSignedId
 * @property string $CustomerSignedTitle
 * @property \Carbon\Carbon $CustomerSignedDate
 * @property string $SpecialTerms
 * @property string $ActivatedById
 * @property \Carbon\Carbon $ActivatedDate
 * @property string $StatusCode
 * @property string $Description
 * @property bool $IsDeleted
 * @property string $ContractNumber
 * @property \Carbon\Carbon $LastApprovedDate
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastActivityDate
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 */
class Contract extends BaseRecordModel
{
    public static $objectApiName = 'Contract';
    protected $defaultFields = [
        'Id' => null,
        'AccountId' => null,
        'CurrencyIsoCode' => null,
        'Pricebook2Id' => null,
        'OwnerExpirationNotice' => null,
        'StartDate' => 'date',
        'EndDate' => 'date',
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
        'ContractTerm' => null,
        'OwnerId' => null,
        'Status' => null,
        'CompanySignedId' => null,
        'CompanySignedDate' => 'date',
        'CustomerSignedId' => null,
        'CustomerSignedTitle' => null,
        'CustomerSignedDate' => 'date',
        'SpecialTerms' => null,
        'ActivatedById' => null,
        'ActivatedDate' => 'datetime',
        'StatusCode' => null,
        'Description' => null,
        'IsDeleted' => 'bool',
        'ContractNumber' => null,
        'LastApprovedDate' => 'datetime',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastActivityDate' => 'date',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
    ];
}
