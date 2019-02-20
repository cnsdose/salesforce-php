<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AccountCleanInfo
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AccountCleanInfo[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $Name
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $AccountId
 * @property \Carbon\Carbon $LastMatchedDate
 * @property \Carbon\Carbon $LastStatusChangedDate
 * @property string $LastStatusChangedById
 * @property bool $IsInactive
 * @property string $CompanyName
 * @property mixed $Phone
 * @property string $Street
 * @property string $City
 * @property string $State
 * @property string $PostalCode
 * @property string $Country
 * @property float $Latitude
 * @property float $Longitude
 * @property mixed $GeocodeAccuracy
 * @property mixed $Address
 * @property mixed $Website
 * @property string $TickerSymbol
 * @property float $AnnualRevenue
 * @property mixed $NumberOfEmployees
 * @property mixed $Industry
 * @property mixed $Ownership
 * @property string $DunsNumber
 * @property string $Sic
 * @property string $SicDescription
 * @property string $NaicsCode
 * @property string $NaicsDescription
 * @property string $YearStarted
 * @property mixed $Fax
 * @property string $AccountSite
 * @property string $Description
 * @property string $Tradestyle
 * @property string $DandBCompanyDunsNumber
 * @property string $DunsRightMatchGrade
 * @property mixed $DunsRightMatchConfidence
 * @property mixed $CompanyStatusDataDotCom
 * @property bool $IsReviewedCompanyName
 * @property bool $IsReviewedPhone
 * @property bool $IsReviewedAddress
 * @property bool $IsReviewedWebsite
 * @property bool $IsReviewedTickerSymbol
 * @property bool $IsReviewedAnnualRevenue
 * @property bool $IsReviewedNumberOfEmployees
 * @property bool $IsReviewedIndustry
 * @property bool $IsReviewedOwnership
 * @property bool $IsReviewedDunsNumber
 * @property bool $IsReviewedSic
 * @property bool $IsReviewedSicDescription
 * @property bool $IsReviewedNaicsCode
 * @property bool $IsReviewedNaicsDescription
 * @property bool $IsReviewedYearStarted
 * @property bool $IsReviewedFax
 * @property bool $IsReviewedAccountSite
 * @property bool $IsReviewedDescription
 * @property bool $IsReviewedTradestyle
 * @property bool $IsReviewedDandBCompanyDunsNumber
 * @property bool $IsDifferentCompanyName
 * @property bool $IsDifferentPhone
 * @property bool $IsDifferentStreet
 * @property bool $IsDifferentCity
 * @property bool $IsDifferentState
 * @property bool $IsDifferentPostalCode
 * @property bool $IsDifferentCountry
 * @property bool $IsDifferentWebsite
 * @property bool $IsDifferentTickerSymbol
 * @property bool $IsDifferentAnnualRevenue
 * @property bool $IsDifferentNumberOfEmployees
 * @property bool $IsDifferentIndustry
 * @property bool $IsDifferentOwnership
 * @property bool $IsDifferentDunsNumber
 * @property bool $IsDifferentSic
 * @property bool $IsDifferentSicDescription
 * @property bool $IsDifferentNaicsCode
 * @property bool $IsDifferentNaicsDescription
 * @property bool $IsDifferentYearStarted
 * @property bool $IsDifferentFax
 * @property bool $IsDifferentAccountSite
 * @property bool $IsDifferentDescription
 * @property bool $IsDifferentTradestyle
 * @property bool $IsDifferentDandBCompanyDunsNumber
 * @property bool $IsDifferentStateCode
 * @property bool $IsDifferentCountryCode
 * @property bool $CleanedByJob
 * @property bool $CleanedByUser
 * @property bool $IsFlaggedWrongCompanyName
 * @property bool $IsFlaggedWrongPhone
 * @property bool $IsFlaggedWrongAddress
 * @property bool $IsFlaggedWrongWebsite
 * @property bool $IsFlaggedWrongTickerSymbol
 * @property bool $IsFlaggedWrongAnnualRevenue
 * @property bool $IsFlaggedWrongNumberOfEmployees
 * @property bool $IsFlaggedWrongIndustry
 * @property bool $IsFlaggedWrongOwnership
 * @property bool $IsFlaggedWrongDunsNumber
 * @property bool $IsFlaggedWrongSic
 * @property bool $IsFlaggedWrongSicDescription
 * @property bool $IsFlaggedWrongNaicsCode
 * @property bool $IsFlaggedWrongNaicsDescription
 * @property bool $IsFlaggedWrongYearStarted
 * @property bool $IsFlaggedWrongFax
 * @property bool $IsFlaggedWrongAccountSite
 * @property bool $IsFlaggedWrongDescription
 * @property bool $IsFlaggedWrongTradestyle
 * @property string $DataDotComId
 */
class AccountCleanInfo extends BaseRecordModel
{
    public static $objectApiName = 'AccountCleanInfo';
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
        'AccountId' => null,
        'LastMatchedDate' => 'datetime',
        'LastStatusChangedDate' => 'datetime',
        'LastStatusChangedById' => null,
        'IsInactive' => 'bool',
        'CompanyName' => null,
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
        'Website' => null,
        'TickerSymbol' => null,
        'AnnualRevenue' => 'number:18,0',
        'NumberOfEmployees' => null,
        'Industry' => null,
        'Ownership' => null,
        'DunsNumber' => null,
        'Sic' => null,
        'SicDescription' => null,
        'NaicsCode' => null,
        'NaicsDescription' => null,
        'YearStarted' => null,
        'Fax' => null,
        'AccountSite' => null,
        'Description' => null,
        'Tradestyle' => null,
        'DandBCompanyDunsNumber' => null,
        'DunsRightMatchGrade' => null,
        'DunsRightMatchConfidence' => null,
        'CompanyStatusDataDotCom' => null,
        'IsReviewedCompanyName' => 'bool',
        'IsReviewedPhone' => 'bool',
        'IsReviewedAddress' => 'bool',
        'IsReviewedWebsite' => 'bool',
        'IsReviewedTickerSymbol' => 'bool',
        'IsReviewedAnnualRevenue' => 'bool',
        'IsReviewedNumberOfEmployees' => 'bool',
        'IsReviewedIndustry' => 'bool',
        'IsReviewedOwnership' => 'bool',
        'IsReviewedDunsNumber' => 'bool',
        'IsReviewedSic' => 'bool',
        'IsReviewedSicDescription' => 'bool',
        'IsReviewedNaicsCode' => 'bool',
        'IsReviewedNaicsDescription' => 'bool',
        'IsReviewedYearStarted' => 'bool',
        'IsReviewedFax' => 'bool',
        'IsReviewedAccountSite' => 'bool',
        'IsReviewedDescription' => 'bool',
        'IsReviewedTradestyle' => 'bool',
        'IsReviewedDandBCompanyDunsNumber' => 'bool',
        'IsDifferentCompanyName' => 'bool',
        'IsDifferentPhone' => 'bool',
        'IsDifferentStreet' => 'bool',
        'IsDifferentCity' => 'bool',
        'IsDifferentState' => 'bool',
        'IsDifferentPostalCode' => 'bool',
        'IsDifferentCountry' => 'bool',
        'IsDifferentWebsite' => 'bool',
        'IsDifferentTickerSymbol' => 'bool',
        'IsDifferentAnnualRevenue' => 'bool',
        'IsDifferentNumberOfEmployees' => 'bool',
        'IsDifferentIndustry' => 'bool',
        'IsDifferentOwnership' => 'bool',
        'IsDifferentDunsNumber' => 'bool',
        'IsDifferentSic' => 'bool',
        'IsDifferentSicDescription' => 'bool',
        'IsDifferentNaicsCode' => 'bool',
        'IsDifferentNaicsDescription' => 'bool',
        'IsDifferentYearStarted' => 'bool',
        'IsDifferentFax' => 'bool',
        'IsDifferentAccountSite' => 'bool',
        'IsDifferentDescription' => 'bool',
        'IsDifferentTradestyle' => 'bool',
        'IsDifferentDandBCompanyDunsNumber' => 'bool',
        'IsDifferentStateCode' => 'bool',
        'IsDifferentCountryCode' => 'bool',
        'CleanedByJob' => 'bool',
        'CleanedByUser' => 'bool',
        'IsFlaggedWrongCompanyName' => 'bool',
        'IsFlaggedWrongPhone' => 'bool',
        'IsFlaggedWrongAddress' => 'bool',
        'IsFlaggedWrongWebsite' => 'bool',
        'IsFlaggedWrongTickerSymbol' => 'bool',
        'IsFlaggedWrongAnnualRevenue' => 'bool',
        'IsFlaggedWrongNumberOfEmployees' => 'bool',
        'IsFlaggedWrongIndustry' => 'bool',
        'IsFlaggedWrongOwnership' => 'bool',
        'IsFlaggedWrongDunsNumber' => 'bool',
        'IsFlaggedWrongSic' => 'bool',
        'IsFlaggedWrongSicDescription' => 'bool',
        'IsFlaggedWrongNaicsCode' => 'bool',
        'IsFlaggedWrongNaicsDescription' => 'bool',
        'IsFlaggedWrongYearStarted' => 'bool',
        'IsFlaggedWrongFax' => 'bool',
        'IsFlaggedWrongAccountSite' => 'bool',
        'IsFlaggedWrongDescription' => 'bool',
        'IsFlaggedWrongTradestyle' => 'bool',
        'DataDotComId' => null,
    ];
}
