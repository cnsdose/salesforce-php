<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AttachedContentDocument
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AttachedContentDocument[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $LinkedEntityId
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
 * @property mixed $ExternalDataSourceType
 * @property mixed $SharingOption
 */
class AttachedContentDocument extends BaseRecordModel
{
    public static $objectApiName = 'AttachedContentDocument';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'LinkedEntityId' => null,
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
        'SharingOption' => null,
    ];
}
