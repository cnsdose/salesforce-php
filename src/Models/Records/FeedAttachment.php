<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class FeedAttachment
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method FeedAttachment[] query()
 *
 * @property string Id
 * @property string FeedEntityId
 * @property mixed Type
 * @property string RecordId
 * @property string Title
 * @property string Value
 * @property bool IsDeleted
 */
class FeedAttachment extends BaseRecordModel
{
    protected static $objectApiName = 'FeedAttachment';
    protected $defaultFields = [
        'Id' => null,
        'FeedEntityId' => null,
        'Type' => null,
        'RecordId' => null,
        'Title' => null,
        'Value' => null,
        'IsDeleted' => 'bool',
    ];
}
