<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContentNote
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContentNote[] query()
 *
 * @property string $Id
 * @property string $Title
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property \Carbon\Carbon $LastViewedDate
 * @property string $FileType
 * @property string $TextPreview
 * @property mixed $ContentSize
 * @property bool $IsDeleted
 * @property string $FileExtension
 * @property string $LatestPublishedVersionId
 * @property string $OwnerId
 * @property mixed $Content
 * @property bool $IsReadOnly
 * @property string $SharingPrivacy
 */
class ContentNote extends BaseRecordModel
{
    public static $objectApiName = 'ContentNote';
    protected $defaultFields = [
        'Id' => null,
        'Title' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastViewedDate' => 'datetime',
        'FileType' => null,
        'TextPreview' => null,
        'ContentSize' => null,
        'IsDeleted' => 'bool',
        'FileExtension' => null,
        'LatestPublishedVersionId' => null,
        'OwnerId' => null,
        'Content' => null,
        'IsReadOnly' => 'bool',
        'SharingPrivacy' => null,
    ];
}
