<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Idea
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Idea[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string Title
 * @property mixed CurrencyIsoCode
 * @property string RecordTypeId
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property \Carbon\Carbon LastViewedDate
 * @property \Carbon\Carbon LastReferencedDate
 * @property string CommunityId
 * @property string Body
 * @property mixed NumComments
 * @property float VoteScore
 * @property float VoteTotal
 * @property mixed Categories
 * @property mixed Status
 * @property \Carbon\Carbon LastCommentDate
 * @property string LastCommentId
 * @property string ParentIdeaId
 * @property bool IsHtml
 * @property bool IsMerged
 * @property string CreatorFullPhotoUrl
 * @property string CreatorSmallPhotoUrl
 * @property string CreatorName
 */
class Idea extends BaseRecordModel
{
    protected static $objectApiName = 'Idea';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'Title' => null,
        'CurrencyIsoCode' => null,
        'RecordTypeId' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'CommunityId' => null,
        'Body' => null,
        'NumComments' => null,
        'VoteScore' => 'number:14,4',
        'VoteTotal' => 'number:18,0',
        'Categories' => null,
        'Status' => null,
        'LastCommentDate' => 'datetime',
        'LastCommentId' => null,
        'ParentIdeaId' => null,
        'IsHtml' => 'bool',
        'IsMerged' => 'bool',
        'CreatorFullPhotoUrl' => null,
        'CreatorSmallPhotoUrl' => null,
        'CreatorName' => null,
    ];
}
