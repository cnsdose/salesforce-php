<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Support;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class KnowledgeArticleViewStat
 * @package CNSDose\Salesforce\Models\Support
 *
 * @method KnowledgeArticleViewStat[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string ParentId
 * @property float NormalizedScore
 * @property mixed Channel
 * @property mixed ViewCount
 */
class KnowledgeArticleViewStat extends BaseModel
{
    protected static $objectApiName = 'KnowledgeArticleViewStat';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ParentId' => null,
        'NormalizedScore' => 'number:14,4',
        'Channel' => null,
        'ViewCount' => null,
    ];
}
