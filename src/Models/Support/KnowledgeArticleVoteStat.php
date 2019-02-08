<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Support;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class KnowledgeArticleVoteStat
 * @package CNSDose\Salesforce\Models\Support
 *
 * @method KnowledgeArticleVoteStat[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string ParentId
 * @property float NormalizedScore
 * @property mixed Channel
 */
class KnowledgeArticleVoteStat extends BaseModel
{
    protected static $objectApiName = 'KnowledgeArticleVoteStat';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ParentId' => null,
        'NormalizedScore' => 'number:14,4',
        'Channel' => null,
    ];
}
