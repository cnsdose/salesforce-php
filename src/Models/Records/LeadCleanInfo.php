<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class LeadCleanInfo
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method LeadCleanInfo[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $Name
 * @property string $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $LeadId
 * @property \Carbon\Carbon $LastMatchedDate
 * @property \Carbon\Carbon $LastStatusChangedDate
 * @property string $LastStatusChangedById
 * @property bool $IsInactive
 * @property string $FirstName
 * @property string $LastName
 * @property mixed $Email
 * @property mixed $Phone
 * @property string $Street
 * @property string $City
 * @property string $State
 * @property string $PostalCode
 * @property string $Country
 * @property float $Latitude
 * @property float $Longitude
 * @property string $GeocodeAccuracy
 * @property mixed $Address
 * @property string $Title
 * @property float $AnnualRevenue
 * @property mixed $NumberOfEmployees
 * @property string $Industry
 * @property string $CompanyName
 * @property string $CompanyDunsNumber
 * @property string $ContactStatusDataDotCom
 * @property bool $IsReviewedName
 * @property bool $IsReviewedEmail
 * @property bool $IsReviewedPhone
 * @property bool $IsReviewedAddress
 * @property bool $IsReviewedTitle
 * @property bool $IsReviewedAnnualRevenue
 * @property bool $IsReviewedNumberOfEmployees
 * @property bool $IsReviewedIndustry
 * @property bool $IsReviewedCompanyName
 * @property bool $IsReviewedCompanyDunsNumber
 * @property bool $IsReviewedDandBCompanyDunsNumber
 * @property bool $IsDifferentFirstName
 * @property bool $IsDifferentLastName
 * @property bool $IsDifferentEmail
 * @property bool $IsDifferentPhone
 * @property bool $IsDifferentStreet
 * @property bool $IsDifferentCity
 * @property bool $IsDifferentState
 * @property bool $IsDifferentPostalCode
 * @property bool $IsDifferentCountry
 * @property bool $IsDifferentTitle
 * @property bool $IsDifferentAnnualRevenue
 * @property bool $IsDifferentNumberOfEmployees
 * @property bool $IsDifferentIndustry
 * @property bool $IsDifferentCompanyName
 * @property bool $IsDifferentCompanyDunsNumber
 * @property bool $IsDifferentDandBCompanyDunsNumber
 * @property bool $IsDifferentStateCode
 * @property bool $IsDifferentCountryCode
 * @property bool $CleanedByJob
 * @property bool $CleanedByUser
 * @property string $DandBCompanyDunsNumber
 * @property string $DataDotComCompanyId
 * @property bool $IsFlaggedWrongName
 * @property bool $IsFlaggedWrongEmail
 * @property bool $IsFlaggedWrongPhone
 * @property bool $IsFlaggedWrongAddress
 * @property bool $IsFlaggedWrongTitle
 * @property bool $IsFlaggedWrongAnnualRevenue
 * @property bool $IsFlaggedWrongNumberOfEmployees
 * @property bool $IsFlaggedWrongIndustry
 * @property bool $IsFlaggedWrongCompanyName
 * @property bool $IsFlaggedWrongCompanyDunsNumber
 * @property string $DataDotComId
 */
class LeadCleanInfo extends BaseRecordModel
{
    public static $objectApiName = 'LeadCleanInfo';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LeadId' => null,
        'LastMatchedDate' => 'datetime',
        'LastStatusChangedDate' => 'datetime',
        'LastStatusChangedById' => null,
        'IsInactive' => 'bool',
        'FirstName' => null,
        'LastName' => null,
        'Email' => null,
        'Phone' => null,
        'Street' => null,
        'City' => null,
        'State' => null,
        'PostalCode' => null,
        'Country' => null,
        'Latitude' => 'number:3,15',
        'Longitude' => 'number:3,15',
        'GeocodeAccuracy' => null,
        'Address' => null,
        'Title' => null,
        'AnnualRevenue' => 'number:18,0',
        'NumberOfEmployees' => null,
        'Industry' => null,
        'CompanyName' => null,
        'CompanyDunsNumber' => null,
        'ContactStatusDataDotCom' => null,
        'IsReviewedName' => 'bool',
        'IsReviewedEmail' => 'bool',
        'IsReviewedPhone' => 'bool',
        'IsReviewedAddress' => 'bool',
        'IsReviewedTitle' => 'bool',
        'IsReviewedAnnualRevenue' => 'bool',
        'IsReviewedNumberOfEmployees' => 'bool',
        'IsReviewedIndustry' => 'bool',
        'IsReviewedCompanyName' => 'bool',
        'IsReviewedCompanyDunsNumber' => 'bool',
        'IsReviewedDandBCompanyDunsNumber' => 'bool',
        'IsDifferentFirstName' => 'bool',
        'IsDifferentLastName' => 'bool',
        'IsDifferentEmail' => 'bool',
        'IsDifferentPhone' => 'bool',
        'IsDifferentStreet' => 'bool',
        'IsDifferentCity' => 'bool',
        'IsDifferentState' => 'bool',
        'IsDifferentPostalCode' => 'bool',
        'IsDifferentCountry' => 'bool',
        'IsDifferentTitle' => 'bool',
        'IsDifferentAnnualRevenue' => 'bool',
        'IsDifferentNumberOfEmployees' => 'bool',
        'IsDifferentIndustry' => 'bool',
        'IsDifferentCompanyName' => 'bool',
        'IsDifferentCompanyDunsNumber' => 'bool',
        'IsDifferentDandBCompanyDunsNumber' => 'bool',
        'IsDifferentStateCode' => 'bool',
        'IsDifferentCountryCode' => 'bool',
        'CleanedByJob' => 'bool',
        'CleanedByUser' => 'bool',
        'DandBCompanyDunsNumber' => null,
        'DataDotComCompanyId' => null,
        'IsFlaggedWrongName' => 'bool',
        'IsFlaggedWrongEmail' => 'bool',
        'IsFlaggedWrongPhone' => 'bool',
        'IsFlaggedWrongAddress' => 'bool',
        'IsFlaggedWrongTitle' => 'bool',
        'IsFlaggedWrongAnnualRevenue' => 'bool',
        'IsFlaggedWrongNumberOfEmployees' => 'bool',
        'IsFlaggedWrongIndustry' => 'bool',
        'IsFlaggedWrongCompanyName' => 'bool',
        'IsFlaggedWrongCompanyDunsNumber' => 'bool',
        'DataDotComId' => null,
    ];
}
