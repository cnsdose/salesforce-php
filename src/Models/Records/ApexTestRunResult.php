<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ApexTestRunResult
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ApexTestRunResult[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $AsyncApexJobId
 * @property string $UserId
 * @property string $JobName
 * @property bool $IsAllTests
 * @property string $Source
 * @property \Carbon\Carbon $StartTime
 * @property \Carbon\Carbon $EndTime
 * @property mixed $TestTime
 * @property mixed $Status
 * @property mixed $ClassesEnqueued
 * @property mixed $ClassesCompleted
 * @property mixed $MethodsEnqueued
 * @property mixed $MethodsCompleted
 * @property mixed $MethodsFailed
 */
class ApexTestRunResult extends BaseRecordModel
{
    protected static $objectApiName = 'ApexTestRunResult';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'AsyncApexJobId' => null,
        'UserId' => null,
        'JobName' => null,
        'IsAllTests' => 'bool',
        'Source' => null,
        'StartTime' => 'datetime',
        'EndTime' => 'datetime',
        'TestTime' => null,
        'Status' => null,
        'ClassesEnqueued' => null,
        'ClassesCompleted' => null,
        'MethodsEnqueued' => null,
        'MethodsCompleted' => null,
        'MethodsFailed' => null,
    ];
}
