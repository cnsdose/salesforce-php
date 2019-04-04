<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class SocialPostHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method SocialPostHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $SocialPostId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class SocialPostHistory extends BaseRecordModel
{
    public static $objectApiName = 'SocialPostHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'SocialPostId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
