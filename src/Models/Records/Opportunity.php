<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Opportunity
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Opportunity[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $AccountId
 * @property string $Name
 * @property string $Description
 * @property string $StageName
 * @property float $Amount
 * @property mixed $Probability
 * @property \Carbon\Carbon $CloseDate
 * @property string $Type
 * @property string $NextStep
 * @property string $LeadSource
 * @property bool $IsClosed
 * @property bool $IsWon
 * @property string $ForecastCategory
 * @property string $ForecastCategoryName
 * @property string $CurrencyIsoCode
 * @property string $CampaignId
 * @property bool $HasOpportunityLineItem
 * @property string $Pricebook2Id
 * @property string $OwnerId
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastActivityDate
 * @property mixed $FiscalQuarter
 * @property mixed $FiscalYear
 * @property string $Fiscal
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $SyncedQuoteId
 * @property string $ContractId
 * @property bool $HasOpenActivity
 * @property bool $HasOverdueTask
 */
class Opportunity extends BaseRecordModel
{
    public static $objectApiName = 'Opportunity';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'AccountId' => null,
        'Name' => null,
        'Description' => null,
        'StageName' => null,
        'Amount' => 'number:16,2',
        'Probability' => null,
        'CloseDate' => 'date',
        'Type' => null,
        'NextStep' => null,
        'LeadSource' => null,
        'IsClosed' => 'bool',
        'IsWon' => 'bool',
        'ForecastCategory' => null,
        'ForecastCategoryName' => null,
        'CurrencyIsoCode' => null,
        'CampaignId' => null,
        'HasOpportunityLineItem' => 'bool',
        'Pricebook2Id' => null,
        'OwnerId' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastActivityDate' => 'date',
        'FiscalQuarter' => null,
        'FiscalYear' => null,
        'Fiscal' => null,
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'SyncedQuoteId' => null,
        'ContractId' => null,
        'HasOpenActivity' => 'bool',
        'HasOverdueTask' => 'bool',
    ];
}
