<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class EmailTemplate
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method EmailTemplate[] query()
 *
 * @property string $Id
 * @property string $Name
 * @property string $DeveloperName
 * @property string $NamespacePrefix
 * @property string $OwnerId
 * @property string $FolderId
 * @property string $FolderName
 * @property string $BrandTemplateId
 * @property mixed $TemplateStyle
 * @property bool $IsActive
 * @property mixed $TemplateType
 * @property mixed $Encoding
 * @property string $Description
 * @property string $Subject
 * @property string $HtmlValue
 * @property string $Body
 * @property mixed $TimesUsed
 * @property \Carbon\Carbon $LastUsedDate
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property float $ApiVersion
 * @property string $Markup
 * @property mixed $UiType
 * @property mixed $RelatedEntityType
 */
class EmailTemplate extends BaseRecordModel
{
    protected static $objectApiName = 'EmailTemplate';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'DeveloperName' => null,
        'NamespacePrefix' => null,
        'OwnerId' => null,
        'FolderId' => null,
        'FolderName' => null,
        'BrandTemplateId' => null,
        'TemplateStyle' => null,
        'IsActive' => 'bool',
        'TemplateType' => null,
        'Encoding' => null,
        'Description' => null,
        'Subject' => null,
        'HtmlValue' => null,
        'Body' => null,
        'TimesUsed' => null,
        'LastUsedDate' => 'datetime',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'ApiVersion' => 'number:17,1',
        'Markup' => null,
        'UiType' => null,
        'RelatedEntityType' => null,
    ];
}
