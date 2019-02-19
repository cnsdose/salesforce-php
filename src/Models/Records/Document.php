<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Document
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Document[] query()
 *
 * @property string $Id
 * @property string $FolderId
 * @property bool $IsDeleted
 * @property string $Name
 * @property string $DeveloperName
 * @property string $NamespacePrefix
 * @property string $ContentType
 * @property string $Type
 * @property bool $IsPublic
 * @property mixed $BodyLength
 * @property mixed $Body
 * @property string $Url
 * @property string $Description
 * @property string $Keywords
 * @property bool $IsInternalUseOnly
 * @property string $AuthorId
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property bool $IsBodySearchable
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 */
class Document extends BaseRecordModel
{
    protected static $objectApiName = 'Document';
    protected $defaultFields = [
        'Id' => null,
        'FolderId' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'DeveloperName' => null,
        'NamespacePrefix' => null,
        'ContentType' => null,
        'Type' => null,
        'IsPublic' => 'bool',
        'BodyLength' => null,
        'Body' => null,
        'Url' => null,
        'Description' => null,
        'Keywords' => null,
        'IsInternalUseOnly' => 'bool',
        'AuthorId' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'IsBodySearchable' => 'bool',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
    ];
}
