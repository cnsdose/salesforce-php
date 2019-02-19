<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AsyncApexJob
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AsyncApexJob[] query()
 *
 * @property string $Id
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property mixed $JobType
 * @property string $ApexClassId
 * @property mixed $Status
 * @property mixed $JobItemsProcessed
 * @property mixed $TotalJobItems
 * @property mixed $NumberOfErrors
 * @property \Carbon\Carbon $CompletedDate
 * @property string $MethodName
 * @property string $ExtendedStatus
 * @property string $ParentJobId
 * @property string $LastProcessed
 * @property mixed $LastProcessedOffset
 */
class AsyncApexJob extends BaseRecordModel
{
    protected static $objectApiName = 'AsyncApexJob';
    protected $defaultFields = [
        'Id' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'JobType' => null,
        'ApexClassId' => null,
        'Status' => null,
        'JobItemsProcessed' => null,
        'TotalJobItems' => null,
        'NumberOfErrors' => null,
        'CompletedDate' => 'datetime',
        'MethodName' => null,
        'ExtendedStatus' => null,
        'ParentJobId' => null,
        'LastProcessed' => null,
        'LastProcessedOffset' => null,
    ];
}
