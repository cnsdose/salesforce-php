<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Topic
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Topic[] query()
 *
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property mixed $TalkingAbout
 * @property string $ManagedTopicType
 * @property \Carbon\Carbon $SystemModstamp
 */
class Topic extends BaseRecordModel
{
    public static $objectApiName = 'Topic';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'Description' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'TalkingAbout' => null,
        'ManagedTopicType' => null,
        'SystemModstamp' => 'datetime',
    ];
}
