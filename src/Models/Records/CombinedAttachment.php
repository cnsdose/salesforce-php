<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CombinedAttachment
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CombinedAttachment[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ParentId
 * @property string $RecordType
 * @property string $Title
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property string $FileType
 * @property mixed $ContentSize
 * @property string $FileExtension
 * @property mixed $ContentUrl
 * @property string $ExternalDataSourceName
 * @property mixed $ExternalDataSourceType
 * @property mixed $SharingOption
 */
class CombinedAttachment extends BaseRecordModel
{
    public static $objectApiName = 'CombinedAttachment';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ParentId' => null,
        'RecordType' => null,
        'Title' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'FileType' => null,
        'ContentSize' => null,
        'FileExtension' => null,
        'ContentUrl' => null,
        'ExternalDataSourceName' => null,
        'ExternalDataSourceType' => null,
        'SharingOption' => null,
    ];
}
