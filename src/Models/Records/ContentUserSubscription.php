<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContentUserSubscription
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContentUserSubscription[] query()
 *
 * @property string Id
 * @property string SubscriberUserId
 * @property string SubscribedToUserId
 */
class ContentUserSubscription extends BaseRecordModel
{
    protected static $objectApiName = 'ContentUserSubscription';
    protected $defaultFields = [
        'Id' => null,
        'SubscriberUserId' => null,
        'SubscribedToUserId' => null,
    ];
}
