<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CampaignShare
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CampaignShare[] query()
 *
 * @property string $Id
 * @property string $CampaignId
 * @property string $UserOrGroupId
 * @property mixed $CampaignAccessLevel
 * @property mixed $RowCause
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property bool $IsDeleted
 */
class CampaignShare extends BaseRecordModel
{
    public static $objectApiName = 'CampaignShare';
    protected $defaultFields = [
        'Id' => null,
        'CampaignId' => null,
        'UserOrGroupId' => null,
        'CampaignAccessLevel' => null,
        'RowCause' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'IsDeleted' => 'bool',
    ];
}
