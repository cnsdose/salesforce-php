<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AccountHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AccountHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $AccountId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property mixed $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class AccountHistory extends BaseRecordModel
{
    protected static $objectApiName = 'AccountHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'AccountId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
