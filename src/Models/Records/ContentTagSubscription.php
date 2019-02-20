<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContentTagSubscription
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContentTagSubscription[] query()
 *
 * @property string $Id
 * @property string $UserId
 */
class ContentTagSubscription extends BaseRecordModel
{
    public static $objectApiName = 'ContentTagSubscription';
    protected $defaultFields = [
        'Id' => null,
        'UserId' => null,
    ];
}
