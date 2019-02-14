<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContentWorkspaceSubscription
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContentWorkspaceSubscription[] query()
 *
 * @property string Id
 * @property string UserId
 * @property string ContentWorkspaceId
 */
class ContentWorkspaceSubscription extends BaseRecordModel
{
    protected static $objectApiName = 'ContentWorkspaceSubscription';
    protected $defaultFields = [
        'Id' => null,
        'UserId' => null,
        'ContentWorkspaceId' => null,
    ];
}
