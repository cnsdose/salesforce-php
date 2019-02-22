<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class KnowledgeArticleViewStat
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method KnowledgeArticleViewStat[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ParentId
 * @property float $NormalizedScore
 * @property string $Channel
 * @property mixed $ViewCount
 */
class KnowledgeArticleViewStat extends BaseRecordModel
{
    public static $objectApiName = 'KnowledgeArticleViewStat';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ParentId' => null,
        'NormalizedScore' => 'number:14,4',
        'Channel' => null,
        'ViewCount' => null,
    ];
}
