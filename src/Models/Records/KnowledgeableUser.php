<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class KnowledgeableUser
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method KnowledgeableUser[] query()
 *
 * @property string $Id
 * @property string $UserId
 * @property string $TopicId
 * @property mixed $RawRank
 * @property \Carbon\Carbon $SystemModstamp
 */
class KnowledgeableUser extends BaseRecordModel
{
    public static $objectApiName = 'KnowledgeableUser';
    protected $defaultFields = [
        'Id' => null,
        'UserId' => null,
        'TopicId' => null,
        'RawRank' => null,
        'SystemModstamp' => 'datetime',
    ];
}
