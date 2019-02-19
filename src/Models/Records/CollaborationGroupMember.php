<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CollaborationGroupMember
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CollaborationGroupMember[] query()
 *
 * @property string $Id
 * @property string $CollaborationGroupId
 * @property string $MemberId
 * @property mixed $CollaborationRole
 * @property mixed $NotificationFrequency
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastFeedAccessDate
 */
class CollaborationGroupMember extends BaseRecordModel
{
    protected static $objectApiName = 'CollaborationGroupMember';
    protected $defaultFields = [
        'Id' => null,
        'CollaborationGroupId' => null,
        'MemberId' => null,
        'CollaborationRole' => null,
        'NotificationFrequency' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastFeedAccessDate' => 'datetime',
    ];
}
