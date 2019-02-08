<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Support;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class FeedComment
 * @package CNSDose\Salesforce\Models\Support
 *
 * @method FeedComment[] query()
 *
 * @property string Id
 * @property string FeedItemId
 * @property string ParentId
 * @property string CreatedById
 * @property \Carbon\Carbon CreatedDate
 * @property \Carbon\Carbon SystemModstamp
 * @property mixed Revision
 * @property string LastEditById
 * @property \Carbon\Carbon LastEditDate
 * @property string CommentBody
 * @property bool IsDeleted
 * @property string InsertedById
 * @property mixed CommentType
 * @property string RelatedRecordId
 * @property bool IsRichText
 * @property bool IsVerified
 * @property bool HasEntityLinks
 * @property mixed Status
 * @property string ThreadParentId
 * @property mixed ThreadLevel
 * @property mixed ThreadChildrenCount
 * @property \Carbon\Carbon ThreadLastUpdatedDate
 */
class FeedComment extends BaseModel
{
    protected static $objectApiName = 'FeedComment';
    protected $defaultFields = [
        'Id' => null,
        'FeedItemId' => null,
        'ParentId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
        'Revision' => null,
        'LastEditById' => null,
        'LastEditDate' => 'datetime',
        'CommentBody' => null,
        'IsDeleted' => 'bool',
        'InsertedById' => null,
        'CommentType' => null,
        'RelatedRecordId' => null,
        'IsRichText' => 'bool',
        'IsVerified' => 'bool',
        'HasEntityLinks' => 'bool',
        'Status' => null,
        'ThreadParentId' => null,
        'ThreadLevel' => null,
        'ThreadChildrenCount' => null,
        'ThreadLastUpdatedDate' => 'datetime',
    ];
}
