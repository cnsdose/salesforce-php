<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Support;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class CaseArticle
 * @package CNSDose\Salesforce\Models\Support
 *
 * @method CaseArticle[] query()
 *
 * @property string Id
 * @property string CaseId
 * @property string KnowledgeArticleId
 * @property string KnowledgeArticleVersionId
 * @property string CreatedById
 * @property \Carbon\Carbon CreatedDate
 * @property \Carbon\Carbon SystemModstamp
 * @property bool IsDeleted
 * @property mixed ArticleLanguage
 * @property mixed ArticleVersionNumber
 * @property bool IsSharedByEmail
 */
class CaseArticle extends BaseModel
{
    protected static $objectApiName = 'CaseArticle';
    protected $defaultFields = [
        'Id' => null,
        'CaseId' => null,
        'KnowledgeArticleId' => null,
        'KnowledgeArticleVersionId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
        'IsDeleted' => 'bool',
        'ArticleLanguage' => null,
        'ArticleVersionNumber' => null,
        'IsSharedByEmail' => 'bool',
    ];
}
