<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CollaborationInvitation
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CollaborationInvitation[] query()
 *
 * @property string $Id
 * @property string $ParentId
 * @property string $SharedEntityId
 * @property string $InviterId
 * @property string $InvitedUserEmail
 * @property mixed $InvitedUserEmailNormalized
 * @property mixed $Status
 * @property string $OptionalMessage
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class CollaborationInvitation extends BaseRecordModel
{
    protected static $objectApiName = 'CollaborationInvitation';
    protected $defaultFields = [
        'Id' => null,
        'ParentId' => null,
        'SharedEntityId' => null,
        'InviterId' => null,
        'InvitedUserEmail' => null,
        'InvitedUserEmailNormalized' => null,
        'Status' => null,
        'OptionalMessage' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}
