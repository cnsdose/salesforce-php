<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class TopicUserEvent
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method TopicUserEvent[] query()
 *
 * @property string Id
 * @property string UserId
 * @property string TopicId
 * @property mixed ActionEnum
 * @property \Carbon\Carbon CreatedDate
 */
class TopicUserEvent extends BaseRecordModel
{
    protected static $objectApiName = 'TopicUserEvent';
    protected $defaultFields = [
        'Id' => null,
        'UserId' => null,
        'TopicId' => null,
        'ActionEnum' => null,
        'CreatedDate' => 'datetime',
    ];
}
