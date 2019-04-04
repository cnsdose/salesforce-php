<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AttachedContentNote
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AttachedContentNote[] query()
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
 * @property string $TextPreview
 */
class AttachedContentNote extends BaseRecordModel
{
    public static $objectApiName = 'AttachedContentNote';
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
        'TextPreview' => null,
    ];
}
