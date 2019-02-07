<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 7/02/19
 * Time: 6:04 PM
 */

namespace CNSDose\Salesforce\Models\Sales;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class Account
 * @package CNSDose\Salesforce\Models\Sales
 *
 * @method Account[] query()
 *
 * @property mixed Id
 * @property mixed IsDeleted
 * @property mixed MasterRecordId
 * @property mixed Name
 * @property mixed Type
 * @property mixed ParentId
 * @property mixed BillingStreet
 * @property mixed BillingCity
 * @property mixed BillingState
 * @property mixed BillingPostalCode
 * @property mixed BillingCountry
 * @property mixed BillingLatitude
 * @property mixed BillingLongitude
 * @property mixed BillingGeocodeAccuracy
 * @property mixed BillingAddress
 * @property mixed ShippingStreet
 * @property mixed ShippingCity
 * @property mixed ShippingState
 * @property mixed ShippingPostalCode
 * @property mixed ShippingCountry
 * @property mixed ShippingLatitude
 * @property mixed ShippingLongitude
 * @property mixed ShippingGeocodeAccuracy
 * @property mixed ShippingAddress
 * @property mixed Phone
 * @property mixed Fax
 * @property mixed AccountNumber
 * @property mixed Website
 * @property mixed PhotoUrl
 * @property mixed Sic
 * @property mixed Industry
 * @property mixed AnnualRevenue
 * @property mixed NumberOfEmployees
 * @property mixed Ownership
 * @property mixed TickerSymbol
 * @property mixed Description
 * @property mixed Rating
 * @property mixed Site
 * @property mixed CurrencyIsoCode
 * @property mixed OwnerId
 * @property \Carbon\Carbon CreatedDate
 * @property mixed CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property mixed LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property \Carbon\Carbon LastActivityDate
 * @property \Carbon\Carbon LastViewedDate
 * @property \Carbon\Carbon LastReferencedDate
 * @property mixed Jigsaw
 * @property mixed JigsawCompanyId
 * @property mixed CleanStatus
 * @property mixed AccountSource
 * @property mixed DunsNumber
 * @property mixed Tradestyle
 * @property mixed NaicsCode
 * @property mixed NaicsDesc
 * @property mixed YearStarted
 * @property mixed SicDesc
 * @property mixed DandbCompanyId
 */
class Account extends BaseModel
{
    protected static $objectApiName = 'Account';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => null,
        'MasterRecordId' => null,
        'Name' => null,
        'Type' => null,
        'ParentId' => null,
        'BillingStreet' => null,
        'BillingCity' => null,
        'BillingState' => null,
        'BillingPostalCode' => null,
        'BillingCountry' => null,
        'BillingLatitude' => null,
        'BillingLongitude' => null,
        'BillingGeocodeAccuracy' => null,
        'BillingAddress' => null,
        'ShippingStreet' => null,
        'ShippingCity' => null,
        'ShippingState' => null,
        'ShippingPostalCode' => null,
        'ShippingCountry' => null,
        'ShippingLatitude' => null,
        'ShippingLongitude' => null,
        'ShippingGeocodeAccuracy' => null,
        'ShippingAddress' => null,
        'Phone' => null,
        'Fax' => null,
        'AccountNumber' => null,
        'Website' => null,
        'PhotoUrl' => null,
        'Sic' => null,
        'Industry' => null,
        'AnnualRevenue' => null,
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
        'LastActivityDate' => 'datetime',
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
    ];
}
