<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CampaignMemberStatus
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CampaignMemberStatus[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $CampaignId
 * @property string $Label
 * @property mixed $SortOrder
 * @property bool $IsDefault
 * @property bool $HasResponded
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class CampaignMemberStatus extends BaseRecordModel
{
    public static $objectApiName = 'CampaignMemberStatus';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CampaignId' => null,
        'Label' => null,
        'SortOrder' => null,
        'IsDefault' => 'bool',
        'HasResponded' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}
