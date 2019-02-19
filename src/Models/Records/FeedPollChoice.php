<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class FeedPollChoice
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method FeedPollChoice[] query()
 *
 * @property string $Id
 * @property string $FeedItemId
 * @property mixed $Position
 * @property string $ChoiceBody
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property bool $IsDeleted
 */
class FeedPollChoice extends BaseRecordModel
{
    protected static $objectApiName = 'FeedPollChoice';
    protected $defaultFields = [
        'Id' => null,
        'FeedItemId' => null,
        'Position' => null,
        'ChoiceBody' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'IsDeleted' => 'bool',
    ];
}
