<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class UserRecordAccess
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method UserRecordAccess[] query()
 *
 * @property string $Id
 * @property string $UserId
 * @property string $RecordId
 * @property bool $HasReadAccess
 * @property bool $HasEditAccess
 * @property bool $HasDeleteAccess
 * @property bool $HasTransferAccess
 * @property bool $HasAllAccess
 * @property string $MaxAccessLevel
 */
class UserRecordAccess extends BaseRecordModel
{
    public static $objectApiName = 'UserRecordAccess';
    protected $defaultFields = [
        'Id' => null,
        'UserId' => null,
        'RecordId' => null,
        'HasReadAccess' => 'bool',
        'HasEditAccess' => 'bool',
        'HasDeleteAccess' => 'bool',
        'HasTransferAccess' => 'bool',
        'HasAllAccess' => 'bool',
        'MaxAccessLevel' => null,
    ];
}
