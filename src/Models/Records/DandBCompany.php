<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class DandBCompany
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method DandBCompany[] query()
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
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $DunsNumber
 * @property string $Street
 * @property string $City
 * @property string $State
 * @property string $PostalCode
 * @property string $Country
 * @property mixed $GeocodeAccuracyStandard
 * @property mixed $Address
 * @property mixed $Phone
 * @property mixed $Fax
 * @property string $CountryAccessCode
 * @property mixed $PublicIndicator
 * @property string $StockSymbol
 * @property string $StockExchange
 * @property float $SalesVolume
 * @property mixed $URL
 * @property mixed $OutOfBusiness
 * @property float $EmployeesTotal
 * @property string $FipsMsaCode
 * @property string $FipsMsaDesc
 * @property string $TradeStyle1
 * @property string $YearStarted
 * @property string $MailingStreet
 * @property string $MailingCity
 * @property string $MailingState
 * @property string $MailingPostalCode
 * @property string $MailingCountry
 * @property mixed $MailingGeocodeAccuracy
 * @property mixed $MailingAddress
 * @property string $Latitude
 * @property string $Longitude
 * @property string $PrimarySic
 * @property string $PrimarySicDesc
 * @property string $SecondSic
 * @property string $SecondSicDesc
 * @property string $ThirdSic
 * @property string $ThirdSicDesc
 * @property string $FourthSic
 * @property string $FourthSicDesc
 * @property string $FifthSic
 * @property string $FifthSicDesc
 * @property string $SixthSic
 * @property string $SixthSicDesc
 * @property string $PrimaryNaics
 * @property string $PrimaryNaicsDesc
 * @property string $SecondNaics
 * @property string $SecondNaicsDesc
 * @property string $ThirdNaics
 * @property string $ThirdNaicsDesc
 * @property string $FourthNaics
 * @property string $FourthNaicsDesc
 * @property string $FifthNaics
 * @property string $FifthNaicsDesc
 * @property string $SixthNaics
 * @property string $SixthNaicsDesc
 * @property mixed $OwnOrRent
 * @property float $EmployeesHere
 * @property mixed $EmployeesHereReliability
 * @property mixed $SalesVolumeReliability
 * @property mixed $CurrencyCode
 * @property mixed $LegalStatus
 * @property float $GlobalUltimateTotalEmployees
 * @property mixed $EmployeesTotalReliability
 * @property mixed $MinorityOwned
 * @property mixed $WomenOwned
 * @property mixed $SmallBusiness
 * @property mixed $MarketingSegmentationCluster
 * @property mixed $ImportExportAgent
 * @property mixed $Subsidiary
 * @property string $TradeStyle2
 * @property string $TradeStyle3
 * @property string $TradeStyle4
 * @property string $TradeStyle5
 * @property string $NationalId
 * @property mixed $NationalIdType
 * @property string $UsTaxId
 * @property mixed $GeoCodeAccuracy
 * @property mixed $FamilyMembers
 * @property mixed $MarketingPreScreen
 * @property string $GlobalUltimateDunsNumber
 * @property string $GlobalUltimateBusinessName
 * @property string $ParentOrHqDunsNumber
 * @property string $ParentOrHqBusinessName
 * @property string $DomesticUltimateDunsNumber
 * @property string $DomesticUltimateBusinessName
 * @property mixed $LocationStatus
 * @property mixed $CompanyCurrencyIsoCode
 * @property string $Description
 * @property mixed $FortuneRank
 * @property string $IncludedInSnP500
 * @property mixed $PremisesMeasure
 * @property string $PremisesMeasureReliability
 * @property string $PremisesMeasureUnit
 * @property float $EmployeeQuantityGrowthRate
 * @property float $SalesTurnoverGrowthRate
 * @property string $PrimarySic8
 * @property string $PrimarySic8Desc
 * @property string $SecondSic8
 * @property string $SecondSic8Desc
 * @property string $ThirdSic8
 * @property string $ThirdSic8Desc
 * @property string $FourthSic8
 * @property string $FourthSic8Desc
 * @property string $FifthSic8
 * @property string $FifthSic8Desc
 * @property string $SixthSic8
 * @property string $SixthSic8Desc
 * @property mixed $PriorYearEmployees
 * @property float $PriorYearRevenue
 */
class DandBCompany extends BaseRecordModel
{
    public static $objectApiName = 'DandBCompany';
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
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'DunsNumber' => null,
        'Street' => null,
        'City' => null,
        'State' => null,
        'PostalCode' => null,
        'Country' => null,
        'GeocodeAccuracyStandard' => null,
        'Address' => null,
        'Phone' => null,
        'Fax' => null,
        'CountryAccessCode' => null,
        'PublicIndicator' => null,
        'StockSymbol' => null,
        'StockExchange' => null,
        'SalesVolume' => 'number:18,0',
        'URL' => null,
        'OutOfBusiness' => null,
        'EmployeesTotal' => 'number:18,0',
        'FipsMsaCode' => null,
        'FipsMsaDesc' => null,
        'TradeStyle1' => null,
        'YearStarted' => null,
        'MailingStreet' => null,
        'MailingCity' => null,
        'MailingState' => null,
        'MailingPostalCode' => null,
        'MailingCountry' => null,
        'MailingGeocodeAccuracy' => null,
        'MailingAddress' => null,
        'Latitude' => null,
        'Longitude' => null,
        'PrimarySic' => null,
        'PrimarySicDesc' => null,
        'SecondSic' => null,
        'SecondSicDesc' => null,
        'ThirdSic' => null,
        'ThirdSicDesc' => null,
        'FourthSic' => null,
        'FourthSicDesc' => null,
        'FifthSic' => null,
        'FifthSicDesc' => null,
        'SixthSic' => null,
        'SixthSicDesc' => null,
        'PrimaryNaics' => null,
        'PrimaryNaicsDesc' => null,
        'SecondNaics' => null,
        'SecondNaicsDesc' => null,
        'ThirdNaics' => null,
        'ThirdNaicsDesc' => null,
        'FourthNaics' => null,
        'FourthNaicsDesc' => null,
        'FifthNaics' => null,
        'FifthNaicsDesc' => null,
        'SixthNaics' => null,
        'SixthNaicsDesc' => null,
        'OwnOrRent' => null,
        'EmployeesHere' => 'number:18,0',
        'EmployeesHereReliability' => null,
        'SalesVolumeReliability' => null,
        'CurrencyCode' => null,
        'LegalStatus' => null,
        'GlobalUltimateTotalEmployees' => 'number:18,0',
        'EmployeesTotalReliability' => null,
        'MinorityOwned' => null,
        'WomenOwned' => null,
        'SmallBusiness' => null,
        'MarketingSegmentationCluster' => null,
        'ImportExportAgent' => null,
        'Subsidiary' => null,
        'TradeStyle2' => null,
        'TradeStyle3' => null,
        'TradeStyle4' => null,
        'TradeStyle5' => null,
        'NationalId' => null,
        'NationalIdType' => null,
        'UsTaxId' => null,
        'GeoCodeAccuracy' => null,
        'FamilyMembers' => null,
        'MarketingPreScreen' => null,
        'GlobalUltimateDunsNumber' => null,
        'GlobalUltimateBusinessName' => null,
        'ParentOrHqDunsNumber' => null,
        'ParentOrHqBusinessName' => null,
        'DomesticUltimateDunsNumber' => null,
        'DomesticUltimateBusinessName' => null,
        'LocationStatus' => null,
        'CompanyCurrencyIsoCode' => null,
        'Description' => null,
        'FortuneRank' => null,
        'IncludedInSnP500' => null,
        'PremisesMeasure' => null,
        'PremisesMeasureReliability' => null,
        'PremisesMeasureUnit' => null,
        'EmployeeQuantityGrowthRate' => 'number:12,6',
        'SalesTurnoverGrowthRate' => 'number:12,6',
        'PrimarySic8' => null,
        'PrimarySic8Desc' => null,
        'SecondSic8' => null,
        'SecondSic8Desc' => null,
        'ThirdSic8' => null,
        'ThirdSic8Desc' => null,
        'FourthSic8' => null,
        'FourthSic8Desc' => null,
        'FifthSic8' => null,
        'FifthSic8Desc' => null,
        'SixthSic8' => null,
        'SixthSic8Desc' => null,
        'PriorYearEmployees' => null,
        'PriorYearRevenue' => 'number:18,0',
    ];
}
