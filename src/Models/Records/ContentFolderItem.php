<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContentFolderItem
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContentFolderItem[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property bool $IsFolder
 * @property string $ParentContentFolderId
 * @property string $Title
 * @property string $FileType
 * @property mixed $ContentSize
 * @property string $FileExtension
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class ContentFolderItem extends BaseRecordModel
{
    public static $objectApiName = 'ContentFolderItem';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'IsFolder' => 'bool',
        'ParentContentFolderId' => null,
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
