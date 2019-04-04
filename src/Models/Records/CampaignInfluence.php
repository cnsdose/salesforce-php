<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CampaignInfluence
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CampaignInfluence[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $OpportunityId
 * @property string $CampaignId
 * @property string $ContactId
 * @property mixed $Influence
 * @property string $ModelId
 * @property float $RevenueShare
 */
class CampaignInfluence extends BaseRecordModel
{
    public static $objectApiName = 'CampaignInfluence';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'OpportunityId' => null,
        'CampaignId' => null,
        'ContactId' => null,
        'Influence' => null,
        'ModelId' => null,
        'RevenueShare' => 'number:16,2',
    ];
}
