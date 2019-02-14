<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContentDocument
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContentDocument[] query()
 *
 * @property string Id
 * @property string CreatedById
 * @property \Carbon\Carbon CreatedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property bool IsArchived
 * @property string ArchivedById
 * @property \Carbon\Carbon ArchivedDate
 * @property bool IsDeleted
 * @property string OwnerId
 * @property \Carbon\Carbon SystemModstamp
 * @property string Title
 * @property mixed PublishStatus
 * @property string LatestPublishedVersionId
 * @property string ParentId
 * @property \Carbon\Carbon LastViewedDate
 * @property \Carbon\Carbon LastReferencedDate
 * @property string Description
 * @property mixed ContentSize
 * @property string FileType
 * @property string FileExtension
 * @property mixed SharingOption
 * @property mixed SharingPrivacy
 * @property \Carbon\Carbon ContentModifiedDate
 * @property string ContentAssetId
 */
class ContentDocument extends BaseRecordModel
{
    protected static $objectApiName = 'ContentDocument';
    protected $defaultFields = [
        'Id' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedById' => null,
        'LastModifiedDate' => 'datetime',
        'IsArchived' => 'bool',
        'ArchivedById' => null,
        'ArchivedDate' => 'date',
        'IsDeleted' => 'bool',
        'OwnerId' => null,
        'SystemModstamp' => 'datetime',
        'Title' => null,
        'PublishStatus' => null,
        'LatestPublishedVersionId' => null,
        'ParentId' => null,
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'Description' => null,
        'ContentSize' => null,
        'FileType' => null,
        'FileExtension' => null,
        'SharingOption' => null,
        'SharingPrivacy' => null,
        'ContentModifiedDate' => 'datetime',
        'ContentAssetId' => null,
    ];
}
