<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ServiceResourceHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ServiceResourceHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ServiceResourceId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property mixed $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class ServiceResourceHistory extends BaseRecordModel
{
    protected static $objectApiName = 'ServiceResourceHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ServiceResourceId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
