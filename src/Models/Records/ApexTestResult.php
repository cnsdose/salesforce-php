<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ApexTestResult
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ApexTestResult[] query()
 *
 * @property string Id
 * @property \Carbon\Carbon SystemModstamp
 * @property \Carbon\Carbon TestTimestamp
 * @property mixed Outcome
 * @property string ApexClassId
 * @property string MethodName
 * @property string Message
 * @property string StackTrace
 * @property string AsyncApexJobId
 * @property string QueueItemId
 * @property string ApexLogId
 * @property string ApexTestRunResultId
 * @property mixed RunTime
 */
class ApexTestResult extends BaseRecordModel
{
    protected static $objectApiName = 'ApexTestResult';
    protected $defaultFields = [
        'Id' => null,
        'SystemModstamp' => 'datetime',
        'TestTimestamp' => 'datetime',
        'Outcome' => null,
        'ApexClassId' => null,
        'MethodName' => null,
        'Message' => null,
        'StackTrace' => null,
        'AsyncApexJobId' => null,
        'QueueItemId' => null,
        'ApexLogId' => null,
        'ApexTestRunResultId' => null,
        'RunTime' => null,
    ];
}
