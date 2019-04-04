<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class SocialPost
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method SocialPost[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property bool $IsDeleted
 * @property string $Name
 * @property string $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $ParentId
 * @property string $PersonaId
 * @property string $WhoId
 * @property string $ReplyToId
 * @property string $Headline
 * @property string $Content
 * @property \Carbon\Carbon $Posted
 * @property mixed $PostUrl
 * @property string $Provider
 * @property string $Handle
 * @property string $SpamRating
 * @property string $MediaType
 * @property string $MediaProvider
 * @property string $Sentiment
 * @property string $PostPriority
 * @property string $Status
 * @property string $StatusMessage
 * @property string $Recipient
 * @property string $RecipientType
 * @property string $MessageType
 * @property string $R6PostId
 * @property string $R6TopicId
 * @property string $R6SourceId
 * @property string $TopicType
 * @property string $ExternalPostId
 * @property \Carbon\Carbon $HarvestDate
 * @property bool $IsOutbound
 * @property string $PostTags
 * @property string $SourceTags
 * @property string $Classification
 * @property mixed $ThreadSize
 * @property mixed $CommentCount
 * @property mixed $Shares
 * @property mixed $ViewCount
 * @property mixed $InboundLinkCount
 * @property mixed $UniqueCommentors
 * @property mixed $LikesAndVotes
 * @property string $TopicProfileName
 * @property string $KeywordGroupName
 * @property string $EngagementLevel
 * @property string $AssignedTo
 * @property string $OutboundSocialAccountId
 * @property string $ReviewedStatus
 * @property mixed $AttachmentUrl
 * @property string $AttachmentType
 * @property string $DeletedById
 * @property string $ResponseContextExternalId
 * @property string $LikedBy
 * @property float $AnalyzerScore
 * @property string $Language
 * @property float $ReviewScore
 * @property float $ReviewScale
 * @property string $HiddenById
 * @property string $Notes
 * @property string $TruncatedContent
 */
class SocialPost extends BaseRecordModel
{
    public static $objectApiName = 'SocialPost';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'ParentId' => null,
        'PersonaId' => null,
        'WhoId' => null,
        'ReplyToId' => null,
        'Headline' => null,
        'Content' => null,
        'Posted' => 'datetime',
        'PostUrl' => null,
        'Provider' => null,
        'Handle' => null,
        'SpamRating' => null,
        'MediaType' => null,
        'MediaProvider' => null,
        'Sentiment' => null,
        'PostPriority' => null,
        'Status' => null,
        'StatusMessage' => null,
        'Recipient' => null,
        'RecipientType' => null,
        'MessageType' => null,
        'R6PostId' => null,
        'R6TopicId' => null,
        'R6SourceId' => null,
        'TopicType' => null,
        'ExternalPostId' => null,
        'HarvestDate' => 'datetime',
        'IsOutbound' => 'bool',
        'PostTags' => null,
        'SourceTags' => null,
        'Classification' => null,
        'ThreadSize' => null,
        'CommentCount' => null,
        'Shares' => null,
        'ViewCount' => null,
        'InboundLinkCount' => null,
        'UniqueCommentors' => null,
        'LikesAndVotes' => null,
        'TopicProfileName' => null,
        'KeywordGroupName' => null,
        'EngagementLevel' => null,
        'AssignedTo' => null,
        'OutboundSocialAccountId' => null,
        'ReviewedStatus' => null,
        'AttachmentUrl' => null,
        'AttachmentType' => null,
        'DeletedById' => null,
        'ResponseContextExternalId' => null,
        'LikedBy' => null,
        'AnalyzerScore' => 'number:15,3',
        'Language' => null,
        'ReviewScore' => 'number:16,2',
        'ReviewScale' => 'number:16,2',
        'HiddenById' => null,
        'Notes' => null,
        'TruncatedContent' => null,
    ];
}
