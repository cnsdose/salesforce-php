<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Support;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class KnowledgeArticleVersion
 * @package CNSDose\Salesforce\Models\Support
 *
 * @method KnowledgeArticleVersion[] query()
 *
 * @property string Id
 * @property string KnowledgeArticleId
 * @property string OwnerId
 * @property bool IsDeleted
 * @property mixed PublishStatus
 * @property mixed VersionNumber
 * @property bool IsLatestVersion
 * @property bool IsVisibleInApp
 * @property bool IsVisibleInPkb
 * @property bool IsVisibleInCsp
 * @property bool IsVisibleInPrm
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property mixed Language
 * @property string Title
 * @property string UrlName
 * @property mixed CurrencyIsoCode
 * @property \Carbon\Carbon ArchivedDate
 * @property string ArchivedById
 * @property string Summary
 * @property string ArticleNumber
 * @property \Carbon\Carbon FirstPublishedDate
 * @property \Carbon\Carbon LastPublishedDate
 * @property string ArticleArchivedById
 * @property \Carbon\Carbon ArticleArchivedDate
 * @property mixed ArticleCaseAttachCount
 * @property string ArticleCreatedById
 * @property \Carbon\Carbon ArticleCreatedDate
 * @property mixed ArticleMasterLanguage
 * @property mixed ArticleTotalViewCount
 * @property string SourceId
 * @property mixed ArticleType
 * @property string AssignedToId
 * @property string AssignedById
 * @property \Carbon\Carbon AssignmentDate
 * @property \Carbon\Carbon AssignmentDueDate
 * @property string AssignmentNote
 * @property string MigratedToFromArticleVersion
 */
class KnowledgeArticleVersion extends BaseModel
{
    protected static $objectApiName = 'KnowledgeArticleVersion';
    protected $defaultFields = [
        'Id' => null,
        'KnowledgeArticleId' => null,
        'OwnerId' => null,
        'IsDeleted' => 'bool',
        'PublishStatus' => null,
        'VersionNumber' => null,
        'IsLatestVersion' => 'bool',
        'IsVisibleInApp' => 'bool',
        'IsVisibleInPkb' => 'bool',
        'IsVisibleInCsp' => 'bool',
        'IsVisibleInPrm' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'Language' => null,
        'Title' => null,
        'UrlName' => null,
        'CurrencyIsoCode' => null,
        'ArchivedDate' => 'datetime',
        'ArchivedById' => null,
        'Summary' => null,
        'ArticleNumber' => null,
        'FirstPublishedDate' => 'datetime',
        'LastPublishedDate' => 'datetime',
        'ArticleArchivedById' => null,
        'ArticleArchivedDate' => 'datetime',
        'ArticleCaseAttachCount' => null,
        'ArticleCreatedById' => null,
        'ArticleCreatedDate' => 'datetime',
        'ArticleMasterLanguage' => null,
        'ArticleTotalViewCount' => null,
        'SourceId' => null,
        'ArticleType' => null,
        'AssignedToId' => null,
        'AssignedById' => null,
        'AssignmentDate' => 'datetime',
        'AssignmentDueDate' => 'datetime',
        'AssignmentNote' => null,
        'MigratedToFromArticleVersion' => null,
    ];
}
