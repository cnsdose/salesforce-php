<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class KnowledgeArticleVoteStat
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method KnowledgeArticleVoteStat[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ParentId
 * @property float $NormalizedScore
 * @property string $Channel
 */
class KnowledgeArticleVoteStat extends BaseRecordModel
{
    public static $objectApiName = 'KnowledgeArticleVoteStat';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ParentId' => null,
        'NormalizedScore' => 'number:14,4',
        'Channel' => null,
    ];
}
