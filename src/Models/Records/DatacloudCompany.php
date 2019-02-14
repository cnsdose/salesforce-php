<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class DatacloudCompany
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method DatacloudCompany[] query()
 *
 * @property string Id
 * @property mixed CurrencyIsoCode
 * @property string ExternalId
 * @property string CompanyId
 * @property string Name
 * @property string Description
 * @property bool IsInactive
 * @property mixed Phone
 * @property mixed Fax
 * @property string Street
 * @property string City
 * @property string State
 * @property mixed StateCode
 * @property string Country
 * @property mixed CountryCode
 * @property string Zip
 * @property mixed Site
 * @property string Industry
 * @property mixed NumberOfEmployees
 * @property float AnnualRevenue
 * @property string DunsNumber
 * @property string NaicsCode
 * @property string NaicsDesc
 * @property string Sic
 * @property string SicDesc
 * @property string Ownership
 * @property bool IsOwned
 * @property string TickerSymbol
 * @property string TradeStyle
 * @property mixed Website
 * @property string YearStarted
 * @property mixed ActiveContacts
 * @property \Carbon\Carbon UpdatedDate
 * @property mixed FortuneRank
 * @property string IncludedInSnP500
 * @property mixed PremisesMeasure
 * @property string PremisesMeasureReliability
 * @property string PremisesMeasureUnit
 * @property float EmployeeQuantityGrowthRate
 * @property float SalesTurnoverGrowthRate
 * @property mixed PriorYearEmployees
 * @property float PriorYearRevenue
 * @property bool IsInCrm
 * @property string FullAddress
 * @property string SicCodeDesc
 */
class DatacloudCompany extends BaseRecordModel
{
    protected static $objectApiName = 'DatacloudCompany';
    protected $defaultFields = [
        'Id' => null,
        'CurrencyIsoCode' => null,
        'ExternalId' => null,
        'CompanyId' => null,
        'Name' => null,
        'Description' => null,
        'IsInactive' => 'bool',
        'Phone' => null,
        'Fax' => null,
        'Street' => null,
        'City' => null,
        'State' => null,
        'StateCode' => null,
        'Country' => null,
        'CountryCode' => null,
        'Zip' => null,
        'Site' => null,
        'Industry' => null,
        'NumberOfEmployees' => null,
        'AnnualRevenue' => 'number:16,2',
        'DunsNumber' => null,
        'NaicsCode' => null,
        'NaicsDesc' => null,
        'Sic' => null,
        'SicDesc' => null,
        'Ownership' => null,
        'IsOwned' => 'bool',
        'TickerSymbol' => null,
        'TradeStyle' => null,
        'Website' => null,
        'YearStarted' => null,
        'ActiveContacts' => null,
        'UpdatedDate' => 'datetime',
        'FortuneRank' => null,
        'IncludedInSnP500' => null,
        'PremisesMeasure' => null,
        'PremisesMeasureReliability' => null,
        'PremisesMeasureUnit' => null,
        'EmployeeQuantityGrowthRate' => 'number:12,6',
        'SalesTurnoverGrowthRate' => 'number:12,6',
        'PriorYearEmployees' => null,
        'PriorYearRevenue' => 'number:18,0',
        'IsInCrm' => 'bool',
        'FullAddress' => null,
        'SicCodeDesc' => null,
    ];
}
