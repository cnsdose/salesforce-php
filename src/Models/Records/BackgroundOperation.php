<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class BackgroundOperation
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method BackgroundOperation[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string Name
 * @property mixed CurrencyIsoCode
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property \Carbon\Carbon SubmittedAt
 * @property mixed Status
 * @property string ExecutionGroup
 * @property string SequenceGroup
 * @property mixed SequenceNumber
 * @property string GroupLeaderId
 * @property \Carbon\Carbon StartedAt
 * @property \Carbon\Carbon FinishedAt
 * @property string WorkerUri
 * @property mixed Timeout
 * @property \Carbon\Carbon ExpiresAt
 * @property mixed NumFollowers
 * @property \Carbon\Carbon ProcessAfter
 * @property string ParentKey
 * @property mixed RetryLimit
 * @property mixed RetryCount
 * @property mixed RetryBackoff
 * @property string Error
 */
class BackgroundOperation extends BaseRecordModel
{
    protected static $objectApiName = 'BackgroundOperation';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'SubmittedAt' => 'datetime',
        'Status' => null,
        'ExecutionGroup' => null,
        'SequenceGroup' => null,
        'SequenceNumber' => null,
        'GroupLeaderId' => null,
        'StartedAt' => 'datetime',
        'FinishedAt' => 'datetime',
        'WorkerUri' => null,
        'Timeout' => null,
        'ExpiresAt' => 'datetime',
        'NumFollowers' => null,
        'ProcessAfter' => 'datetime',
        'ParentKey' => null,
        'RetryLimit' => null,
        'RetryCount' => null,
        'RetryBackoff' => null,
        'Error' => null,
    ];
}
