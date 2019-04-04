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
 * @property string $Type
 * @property string $ParentId
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
 * @property mixed $Phone
 * @property mixed $Website
 * @property mixed $PhotoUrl
 * @property string $Industry
 * @property mixed $NumberOfEmployees
 * @property string $Description
 * @property string $CurrencyIsoCode
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
 * @property string $AccountSource
 * @property string $SicDesc
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
        'Website' => null,
        'PhotoUrl' => null,
        'Industry' => null,
        'NumberOfEmployees' => null,
        'Description' => null,
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
        'AccountSource' => null,
        'SicDesc' => null,
    ];
}
