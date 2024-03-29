<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class MacroHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method MacroHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $MacroId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class MacroHistory extends BaseRecordModel
{
    public static $objectApiName = 'MacroHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'MacroId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
