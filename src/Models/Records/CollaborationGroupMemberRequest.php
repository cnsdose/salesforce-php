<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CollaborationGroupMemberRequest
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CollaborationGroupMemberRequest[] query()
 *
 * @property string Id
 * @property string CollaborationGroupId
 * @property string RequesterId
 * @property string ResponseMessage
 * @property mixed Status
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 */
class CollaborationGroupMemberRequest extends BaseRecordModel
{
    protected static $objectApiName = 'CollaborationGroupMemberRequest';
    protected $defaultFields = [
        'Id' => null,
        'CollaborationGroupId' => null,
        'RequesterId' => null,
        'ResponseMessage' => null,
        'Status' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}
