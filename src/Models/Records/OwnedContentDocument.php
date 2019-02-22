<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class OwnedContentDocument
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method OwnedContentDocument[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $OwnerId
 * @property string $ContentDocumentId
 * @property string $Title
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $FileType
 * @property mixed $ContentSize
 * @property string $FileExtension
 * @property mixed $ContentUrl
 * @property string $ExternalDataSourceName
 * @property string $ExternalDataSourceType
 */
class OwnedContentDocument extends BaseRecordModel
{
    public static $objectApiName = 'OwnedContentDocument';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'OwnerId' => null,
        'ContentDocumentId' => null,
        'Title' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedById' => null,
        'LastModifiedDate' => 'datetime',
        'FileType' => null,
        'ContentSize' => null,
        'FileExtension' => null,
        'ContentUrl' => null,
        'ExternalDataSourceName' => null,
        'ExternalDataSourceType' => null,
    ];
}
