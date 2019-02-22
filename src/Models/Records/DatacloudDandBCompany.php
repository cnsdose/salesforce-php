<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class DatacloudDandBCompany
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method DatacloudDandBCompany[] query()
 *
 * @property string $Id
 * @property string $CurrencyIsoCode
 * @property string $ExternalId
 * @property string $Name
 * @property string $DunsNumber
 * @property string $CompanyId
 * @property string $Street
 * @property string $City
 * @property string $State
 * @property string $StateCode
 * @property string $Country
 * @property string $CountryCode
 * @property string $Zip
 * @property mixed $Phone
 * @property mixed $Fax
 * @property string $CountryAccessCode
 * @property string $PublicIndicator
 * @property string $StockSymbol
 * @property string $StockExchange
 * @property float $SalesVolume
 * @property mixed $URL
 * @property string $OutOfBusiness
 * @property float $EmployeesTotal
 * @property string $FipsMsaCode
 * @property string $FipsMsaDesc
 * @property string $TradeStyle1
 * @property string $YearStarted
 * @property string $MailingStreet
 * @property string $MailingCity
 * @property string $MailingState
 * @property string $MailingStateCode
 * @property string $MailingCountry
 * @property string $MailingCountryCode
 * @property string $MailingZip
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
 * @property string $OwnOrRent
 * @property float $EmployeesHere
 * @property string $EmployeesHereReliability
 * @property string $SalesVolumeReliability
 * @property string $CurrencyCode
 * @property string $LegalStatus
 * @property float $GlobalUltimateTotalEmployees
 * @property string $EmployeesTotalReliability
 * @property string $MinorityOwned
 * @property string $WomenOwned
 * @property string $SmallBusiness
 * @property string $MarketingSegmentationCluster
 * @property string $ImportExportAgent
 * @property string $Subsidiary
 * @property string $TradeStyle2
 * @property string $TradeStyle3
 * @property string $TradeStyle4
 * @property string $TradeStyle5
 * @property string $NationalId
 * @property string $NationalIdType
 * @property string $UsTaxId
 * @property string $GeoCodeAccuracy
 * @property mixed $FamilyMembers
 * @property string $MarketingPreScreen
 * @property string $GlobalUltimateDunsNumber
 * @property string $GlobalUltimateBusinessName
 * @property string $ParentOrHqDunsNumber
 * @property string $ParentOrHqBusinessName
 * @property string $DomesticUltimateDunsNumber
 * @property string $DomesticUltimateBusinessName
 * @property string $LocationStatus
 * @property string $CompanyCurrencyIsoCode
 * @property string $Description
 * @property bool $IsOwned
 * @property bool $IsParent
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
 * @property string $Industry
 * @property float $Revenue
 * @property bool $IsInCrm
 * @property string $FullAddress
 * @property string $SicCodeDesc
 */
class DatacloudDandBCompany extends BaseRecordModel
{
    public static $objectApiName = 'DatacloudDandBCompany';
    protected $defaultFields = [
        'Id' => null,
        'CurrencyIsoCode' => null,
        'ExternalId' => null,
        'Name' => null,
        'DunsNumber' => null,
        'CompanyId' => null,
        'Street' => null,
        'City' => null,
        'State' => null,
        'StateCode' => null,
        'Country' => null,
        'CountryCode' => null,
        'Zip' => null,
        'Phone' => null,
        'Fax' => null,
        'CountryAccessCode' => null,
        'PublicIndicator' => null,
        'StockSymbol' => null,
        'StockExchange' => null,
        'SalesVolume' => 'number:16,2',
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
        'MailingStateCode' => null,
        'MailingCountry' => null,
        'MailingCountryCode' => null,
        'MailingZip' => null,
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
        'IsOwned' => 'bool',
        'IsParent' => 'bool',
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
        'Industry' => null,
        'Revenue' => 'number:18,0',
        'IsInCrm' => 'bool',
        'FullAddress' => null,
        'SicCodeDesc' => null,
    ];
}
