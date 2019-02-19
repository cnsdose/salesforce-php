<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class EntitySubscription
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method EntitySubscription[] query()
 *
 * @property string $Id
 * @property string $ParentId
 * @property string $SubscriberId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property bool $IsDeleted
 */
class EntitySubscription extends BaseRecordModel
{
    protected static $objectApiName = 'EntitySubscription';
    protected $defaultFields = [
        'Id' => null,
        'ParentId' => null,
        'SubscriberId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'IsDeleted' => 'bool',
    ];
}
