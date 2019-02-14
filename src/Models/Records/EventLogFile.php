<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class EventLogFile
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method EventLogFile[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property mixed EventType
 * @property \Carbon\Carbon LogDate
 * @property float LogFileLength
 * @property string LogFileContentType
 * @property float ApiVersion
 * @property mixed Sequence
 * @property mixed Interval
 * @property string LogFileFieldNames
 * @property string LogFileFieldTypes
 * @property mixed LogFile
 */
class EventLogFile extends BaseRecordModel
{
    protected static $objectApiName = 'EventLogFile';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'EventType' => null,
        'LogDate' => 'datetime',
        'LogFileLength' => 'number:18,0',
        'LogFileContentType' => null,
        'ApiVersion' => 'number:17,1',
        'Sequence' => null,
        'Interval' => null,
        'LogFileFieldNames' => null,
        'LogFileFieldTypes' => null,
        'LogFile' => null,
    ];
}
