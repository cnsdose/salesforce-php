<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Sales;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class Opportunity
 * @package CNSDose\Salesforce\Models\Sales
 *
 * @method Opportunity[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string AccountId
 * @property string RecordTypeId
 * @property bool IsPrivate
 * @property string Name
 * @property string Description
 * @property mixed StageName
 * @property float Amount
 * @property mixed Probability
 * @property float ExpectedRevenue
 * @property float TotalOpportunityQuantity
 * @property \Carbon\Carbon CloseDate
 * @property mixed Type
 * @property string NextStep
 * @property mixed LeadSource
 * @property bool IsClosed
 * @property bool IsWon
 * @property mixed ForecastCategory
 * @property mixed ForecastCategoryName
 * @property mixed CurrencyIsoCode
 * @property string CampaignId
 * @property bool HasOpportunityLineItem
 * @property string Pricebook2Id
 * @property string OwnerId
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property \Carbon\Carbon LastActivityDate
 * @property mixed FiscalQuarter
 * @property mixed FiscalYear
 * @property string Fiscal
 * @property \Carbon\Carbon LastViewedDate
 * @property \Carbon\Carbon LastReferencedDate
 * @property string SyncedQuoteId
 * @property bool HasOpenActivity
 * @property bool HasOverdueTask
 */
class Opportunity extends BaseModel
{
    protected static $objectApiName = 'Opportunity';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'AccountId' => null,
        'RecordTypeId' => null,
        'IsPrivate' => 'bool',
        'Name' => null,
        'Description' => null,
        'StageName' => null,
        'Amount' => 'number:16,2',
        'Probability' => null,
        'ExpectedRevenue' => 'number:16,2',
        'TotalOpportunityQuantity' => 'number:16,2',
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
        'HasOpenActivity' => 'bool',
        'HasOverdueTask' => 'bool',
    ];
}
