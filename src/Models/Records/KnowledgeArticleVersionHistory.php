<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class KnowledgeArticleVersionHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method KnowledgeArticleVersionHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ParentId
 * @property string $Language
 * @property mixed $VersionNumber
 * @property string $ParentSobjectType
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $EventType
 * @property string $FieldName
 * @property mixed $OldValue
 * @property mixed $NewValue
 * @property string $VersionId
 */
class KnowledgeArticleVersionHistory extends BaseRecordModel
{
    public static $objectApiName = 'KnowledgeArticleVersionHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ParentId' => null,
        'Language' => null,
        'VersionNumber' => null,
        'ParentSobjectType' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'EventType' => null,
        'FieldName' => null,
        'OldValue' => null,
        'NewValue' => null,
        'VersionId' => null,
    ];
}
