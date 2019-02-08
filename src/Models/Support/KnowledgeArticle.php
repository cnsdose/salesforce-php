<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Support;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class KnowledgeArticle
 * @package CNSDose\Salesforce\Models\Support
 *
 * @method KnowledgeArticle[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property string ArticleNumber
 * @property \Carbon\Carbon ArchivedDate
 * @property string ArchivedById
 * @property \Carbon\Carbon FirstPublishedDate
 * @property \Carbon\Carbon LastPublishedDate
 * @property mixed CaseAssociationCount
 * @property \Carbon\Carbon LastViewedDate
 * @property \Carbon\Carbon LastReferencedDate
 * @property string MigratedToFromArticle
 * @property mixed TotalViewCount
 */
class KnowledgeArticle extends BaseModel
{
    protected static $objectApiName = 'KnowledgeArticle';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'ArticleNumber' => null,
        'ArchivedDate' => 'datetime',
        'ArchivedById' => null,
        'FirstPublishedDate' => 'datetime',
        'LastPublishedDate' => 'datetime',
        'CaseAssociationCount' => null,
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'MigratedToFromArticle' => null,
        'TotalViewCount' => null,
    ];
}
