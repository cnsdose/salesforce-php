<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CampaignHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CampaignHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $CampaignId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property mixed $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class CampaignHistory extends BaseRecordModel
{
    public static $objectApiName = 'CampaignHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CampaignId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
