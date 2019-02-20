<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Campaign
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Campaign[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $Name
 * @property string $ParentId
 * @property mixed $Type
 * @property mixed $Status
 * @property \Carbon\Carbon $StartDate
 * @property \Carbon\Carbon $EndDate
 * @property mixed $CurrencyIsoCode
 * @property float $ExpectedRevenue
 * @property float $BudgetedCost
 * @property float $ActualCost
 * @property mixed $ExpectedResponse
 * @property float $NumberSent
 * @property bool $IsActive
 * @property string $Description
 * @property mixed $NumberOfLeads
 * @property mixed $NumberOfConvertedLeads
 * @property mixed $NumberOfContacts
 * @property mixed $NumberOfResponses
 * @property mixed $NumberOfOpportunities
 * @property mixed $NumberOfWonOpportunities
 * @property float $AmountAllOpportunities
 * @property float $AmountWonOpportunities
 * @property string $OwnerId
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastActivityDate
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $CampaignMemberRecordTypeId
 */
class Campaign extends BaseRecordModel
{
    public static $objectApiName = 'Campaign';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'ParentId' => null,
        'Type' => null,
        'Status' => null,
        'StartDate' => 'date',
        'EndDate' => 'date',
        'CurrencyIsoCode' => null,
        'ExpectedRevenue' => 'number:18,0',
        'BudgetedCost' => 'number:18,0',
        'ActualCost' => 'number:18,0',
        'ExpectedResponse' => null,
        'NumberSent' => 'number:18,0',
        'IsActive' => 'bool',
        'Description' => null,
        'NumberOfLeads' => null,
        'NumberOfConvertedLeads' => null,
        'NumberOfContacts' => null,
        'NumberOfResponses' => null,
        'NumberOfOpportunities' => null,
        'NumberOfWonOpportunities' => null,
        'AmountAllOpportunities' => 'number:18,0',
        'AmountWonOpportunities' => 'number:18,0',
        'OwnerId' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastActivityDate' => 'date',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'CampaignMemberRecordTypeId' => null,
    ];
}
