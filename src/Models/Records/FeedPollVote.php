<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class FeedPollVote
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method FeedPollVote[] query()
 *
 * @property string $Id
 * @property string $FeedItemId
 * @property string $ChoiceId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property \Carbon\Carbon $LastModifiedDate
 * @property bool $IsDeleted
 */
class FeedPollVote extends BaseRecordModel
{
    public static $objectApiName = 'FeedPollVote';
    protected $defaultFields = [
        'Id' => null,
        'FeedItemId' => null,
        'ChoiceId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedDate' => 'datetime',
        'IsDeleted' => 'bool',
    ];
}
