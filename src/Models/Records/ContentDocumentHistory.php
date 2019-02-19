<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContentDocumentHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContentDocumentHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ContentDocumentId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property mixed $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class ContentDocumentHistory extends BaseRecordModel
{
    protected static $objectApiName = 'ContentDocumentHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ContentDocumentId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}
