<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class TopicAssignment
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method TopicAssignment[] query()
 *
 * @property string Id
 * @property string TopicId
 * @property string EntityId
 * @property string EntityKeyPrefix
 * @property string EntityType
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property bool IsDeleted
 * @property \Carbon\Carbon SystemModstamp
 */
class TopicAssignment extends BaseRecordModel
{
    protected static $objectApiName = 'TopicAssignment';
    protected $defaultFields = [
        'Id' => null,
        'TopicId' => null,
        'EntityId' => null,
        'EntityKeyPrefix' => null,
        'EntityType' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'IsDeleted' => 'bool',
        'SystemModstamp' => 'datetime',
    ];
}
