<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class FeedLike
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method FeedLike[] query()
 *
 * @property string Id
 * @property string FeedItemId
 * @property string FeedEntityId
 * @property string CreatedById
 * @property \Carbon\Carbon CreatedDate
 * @property bool IsDeleted
 * @property string InsertedById
 */
class FeedLike extends BaseRecordModel
{
    protected static $objectApiName = 'FeedLike';
    protected $defaultFields = [
        'Id' => null,
        'FeedItemId' => null,
        'FeedEntityId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'IsDeleted' => 'bool',
        'InsertedById' => null,
    ];
}
