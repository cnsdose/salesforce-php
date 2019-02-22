<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class QuickTextHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method QuickTextHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $QuickTextId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class QuickTextHistory extends BaseRecordModel
{
    public static $objectApiName = 'QuickTextHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'QuickTextId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
