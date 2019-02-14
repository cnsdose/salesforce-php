<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class IdeaComment
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method IdeaComment[] query()
 *
 * @property string Id
 * @property string IdeaId
 * @property string CommunityId
 * @property string CommentBody
 * @property string CreatedById
 * @property \Carbon\Carbon CreatedDate
 * @property \Carbon\Carbon SystemModstamp
 * @property bool IsDeleted
 * @property bool IsHtml
 * @property string CreatorFullPhotoUrl
 * @property string CreatorSmallPhotoUrl
 * @property string CreatorName
 * @property mixed UpVotes
 */
class IdeaComment extends BaseRecordModel
{
    protected static $objectApiName = 'IdeaComment';
    protected $defaultFields = [
        'Id' => null,
        'IdeaId' => null,
        'CommunityId' => null,
        'CommentBody' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
        'IsDeleted' => 'bool',
        'IsHtml' => 'bool',
        'CreatorFullPhotoUrl' => null,
        'CreatorSmallPhotoUrl' => null,
        'CreatorName' => null,
        'UpVotes' => null,
    ];
}
