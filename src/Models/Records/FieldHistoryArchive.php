<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class FieldHistoryArchive
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method FieldHistoryArchive[] query()
 *
 * @property string $Id
 * @property string $ParentId
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property string $Field
 * @property string $FieldHistoryType
 * @property mixed $OldValue
 * @property mixed $NewValue
 * @property string $ArchiveParentType
 * @property string $ArchiveFieldName
 * @property \Carbon\Carbon $ArchiveTimestamp
 * @property string $ArchiveParentName
 * @property string $HistoryId
 */
class FieldHistoryArchive extends BaseRecordModel
{
    public static $objectApiName = 'FieldHistoryArchive';
    protected $defaultFields = [
        'Id' => null,
        'ParentId' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'Field' => null,
        'FieldHistoryType' => null,
        'OldValue' => null,
        'NewValue' => null,
        'ArchiveParentType' => null,
        'ArchiveFieldName' => null,
        'ArchiveTimestamp' => 'datetime',
        'ArchiveParentName' => null,
        'HistoryId' => null,
    ];
}
