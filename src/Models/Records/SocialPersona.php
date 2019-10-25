<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class SocialPersona
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method SocialPersona[] query()
 *
 * @property string $Id
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
 * @property string $Provider
 * @property string $ExternalId
 * @property bool $IsDefault
 * @property mixed $ExternalPictureURL
 * @property mixed $ProfileUrl
 * @property string $TopicType
 * @property bool $IsBlacklisted
 * @property string $RealName
 * @property bool $IsFollowingUs
 * @property bool $AreWeFollowing
 * @property string $MediaType
 * @property string $Bio
 * @property mixed $Followers
 * @property mixed $Following
 * @property mixed $NumberOfFriends
 * @property mixed $ListedCount
 * @property string $MediaProvider
 * @property string $ProfileType
 * @property string $R6SourceId
 * @property mixed $NumberOfTweets
 * @property string $SourceApp
 * @property string $AuthorLabels
 * @property bool $IsVerified
 * @property mixed $InfluencerScore
 * @property string $AvatarUrl
 */
class SocialPersona extends BaseRecordModel
{
    public static $objectApiName = 'SocialPersona';
    protected $defaultFields = [
        'Id' => null,
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
        'Provider' => null,
        'ExternalId' => null,
        'IsDefault' => 'bool',
        'ExternalPictureURL' => null,
        'ProfileUrl' => null,
        'TopicType' => null,
        'IsBlacklisted' => 'bool',
        'RealName' => null,
        'IsFollowingUs' => 'bool',
        'AreWeFollowing' => 'bool',
        'MediaType' => null,
        'Bio' => null,
        'Followers' => null,
        'Following' => null,
        'NumberOfFriends' => null,
        'ListedCount' => null,
        'MediaProvider' => null,
        'ProfileType' => null,
        'R6SourceId' => null,
        'NumberOfTweets' => null,
        'SourceApp' => null,
        'AuthorLabels' => null,
        'IsVerified' => 'bool',
        'InfluencerScore' => null,
        'AvatarUrl' => null,
    ];
}
