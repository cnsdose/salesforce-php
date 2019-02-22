<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContentVersionHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContentVersionHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ContentVersionId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class ContentVersionHistory extends BaseRecordModel
{
    public static $objectApiName = 'ContentVersionHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ContentVersionId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
