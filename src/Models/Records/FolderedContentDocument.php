<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class FolderedContentDocument
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method FolderedContentDocument[] query()
 *
 * @property string Id
 * @property bool IsFolder
 * @property string ContentDocumentId
 * @property string ParentContentFolderId
 * @property bool IsDeleted
 * @property string Title
 * @property string FileType
 * @property mixed ContentSize
 * @property string FileExtension
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 */
class FolderedContentDocument extends BaseRecordModel
{
    protected static $objectApiName = 'FolderedContentDocument';
    protected $defaultFields = [
        'Id' => null,
        'IsFolder' => 'bool',
        'ContentDocumentId' => null,
        'ParentContentFolderId' => null,
        'IsDeleted' => 'bool',
        'Title' => null,
        'FileType' => null,
        'ContentSize' => null,
        'FileExtension' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}
