<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContentFolderMember
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContentFolderMember[] query()
 *
 * @property string $Id
 * @property string $ParentContentFolderId
 * @property string $ChildRecordId
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $LastModifiedDate
 */
class ContentFolderMember extends BaseRecordModel
{
    protected static $objectApiName = 'ContentFolderMember';
    protected $defaultFields = [
        'Id' => null,
        'ParentContentFolderId' => null,
        'ChildRecordId' => null,
        'IsDeleted' => 'bool',
        'SystemModstamp' => 'datetime',
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedById' => null,
        'LastModifiedDate' => 'datetime',
    ];
}
