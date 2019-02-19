<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContentNotification
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContentNotification[] query()
 *
 * @property string $Id
 * @property string $Nature
 * @property string $UsersId
 * @property \Carbon\Carbon $CreatedDate
 * @property string $EntityType
 * @property string $EntityIdentifierId
 * @property string $Subject
 * @property string $Text
 */
class ContentNotification extends BaseRecordModel
{
    protected static $objectApiName = 'ContentNotification';
    protected $defaultFields = [
        'Id' => null,
        'Nature' => null,
        'UsersId' => null,
        'CreatedDate' => 'datetime',
        'EntityType' => null,
        'EntityIdentifierId' => null,
        'Subject' => null,
        'Text' => null,
    ];
}
