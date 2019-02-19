<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class FeedItem
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method FeedItem[] query()
 *
 * @property string $Id
 * @property string $ParentId
 * @property mixed $Type
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $LastModifiedDate
 * @property \Carbon\Carbon $SystemModstamp
 * @property mixed $Revision
 * @property string $LastEditById
 * @property \Carbon\Carbon $LastEditDate
 * @property mixed $CommentCount
 * @property mixed $LikeCount
 * @property string $Title
 * @property string $Body
 * @property mixed $LinkUrl
 * @property bool $IsRichText
 * @property string $RelatedRecordId
 * @property string $InsertedById
 * @property string $BestCommentId
 * @property bool $HasContent
 * @property bool $HasLink
 * @property bool $HasFeedEntity
 * @property bool $HasVerifiedComment
 * @property bool $IsClosed
 * @property mixed $Status
 */
class FeedItem extends BaseRecordModel
{
    protected static $objectApiName = 'FeedItem';
    protected $defaultFields = [
        'Id' => null,
        'ParentId' => null,
        'Type' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'IsDeleted' => 'bool',
        'LastModifiedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
        'Revision' => null,
        'LastEditById' => null,
        'LastEditDate' => 'datetime',
        'CommentCount' => null,
        'LikeCount' => null,
        'Title' => null,
        'Body' => null,
        'LinkUrl' => null,
        'IsRichText' => 'bool',
        'RelatedRecordId' => null,
        'InsertedById' => null,
        'BestCommentId' => null,
        'HasContent' => 'bool',
        'HasLink' => 'bool',
        'HasFeedEntity' => 'bool',
        'HasVerifiedComment' => 'bool',
        'IsClosed' => 'bool',
        'Status' => null,
    ];
}
