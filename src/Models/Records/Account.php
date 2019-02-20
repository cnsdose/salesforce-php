<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Account
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Account[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $MasterRecordId
 * @property string $Name
 * @property mixed $Type
 * @property string $ParentId
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
 * @property mixed $Phone
 * @property mixed $Fax
 * @property string $AccountNumber
 * @property mixed $Website
 * @property mixed $PhotoUrl
 * @property string $Sic
 * @property mixed $Industry
 * @property float $AnnualRevenue
 * @property mixed $NumberOfEmployees
 * @property mixed $Ownership
 * @property string $TickerSymbol
 * @property string $Description
 * @property mixed $Rating
 * @property string $Site
 * @property mixed $CurrencyIsoCode
 * @property string $OwnerId
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastActivityDate
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $Jigsaw
 * @property string $JigsawCompanyId
 * @property mixed $CleanStatus
 * @property mixed $AccountSource
 * @property string $DunsNumber
 * @property string $Tradestyle
 * @property string $NaicsCode
 * @property string $NaicsDesc
 * @property string $YearStarted
 * @property string $SicDesc
 * @property string $DandbCompanyId
 * @property string $OperatingHoursId
 */
class Account extends BaseRecordModel
{
    public static $objectApiName = 'Account';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'MasterRecordId' => null,
        'Name' => null,
        'Type' => null,
        'ParentId' => null,
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
        'Phone' => null,
        'Fax' => null,
        'AccountNumber' => null,
        'Website' => null,
        'PhotoUrl' => null,
        'Sic' => null,
        'Industry' => null,
        'AnnualRevenue' => 'number:18,0',
        'NumberOfEmployees' => null,
        'Ownership' => null,
        'TickerSymbol' => null,
        'Description' => null,
        'Rating' => null,
        'Site' => null,
        'CurrencyIsoCode' => null,
        'OwnerId' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastActivityDate' => 'date',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'Jigsaw' => null,
        'JigsawCompanyId' => null,
        'CleanStatus' => null,
        'AccountSource' => null,
        'DunsNumber' => null,
        'Tradestyle' => null,
        'NaicsCode' => null,
        'NaicsDesc' => null,
        'YearStarted' => null,
        'SicDesc' => null,
        'DandbCompanyId' => null,
        'OperatingHoursId' => null,
    ];
}
