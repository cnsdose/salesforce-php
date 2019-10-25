<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContentHubItem
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContentHubItem[] query()
 *
 * @property string $Id
 * @property string $ExternalId
 * @property string $ContentHubRepositoryId
 * @property string $ParentId
 * @property string $Owner
 * @property string $Description
 * @property mixed $ContentSize
 * @property \Carbon\Carbon $CreatedDate
 * @property mixed $ExternalDocumentUrl
 * @property mixed $ExternalContentUrl
 * @property bool $IsFolder
 * @property string $FileType
 * @property string $MimeType
 * @property string $Title
 * @property \Carbon\Carbon $LastModifiedDate
 * @property \Carbon\Carbon $ContentModifiedDate
 * @property string $UpdatedBy
 * @property string $Name
 * @property string $FileExtension
 */
class ContentHubItem extends BaseRecordModel
{
    public static $objectApiName = 'ContentHubItem';
    protected $defaultFields = [
        'Id' => null,
        'ExternalId' => null,
        'ContentHubRepositoryId' => null,
        'ParentId' => null,
        'Owner' => null,
        'Description' => null,
        'ContentSize' => null,
        'CreatedDate' => 'datetime',
        'ExternalDocumentUrl' => null,
        'ExternalContentUrl' => null,
        'IsFolder' => 'bool',
        'FileType' => null,
        'MimeType' => null,
        'Title' => null,
        'LastModifiedDate' => 'datetime',
        'ContentModifiedDate' => 'datetime',
        'UpdatedBy' => null,
        'Name' => null,
        'FileExtension' => null,
    ];
}
