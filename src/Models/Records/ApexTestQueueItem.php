<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ApexTestQueueItem
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ApexTestQueueItem[] query()
 *
 * @property string $Id
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $ApexClassId
 * @property mixed $Status
 * @property string $ExtendedStatus
 * @property string $ParentJobId
 * @property string $TestRunResultId
 * @property bool $ShouldSkipCodeCoverage
 */
class ApexTestQueueItem extends BaseRecordModel
{
    protected static $objectApiName = 'ApexTestQueueItem';
    protected $defaultFields = [
        'Id' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'SystemModstamp' => 'datetime',
        'ApexClassId' => null,
        'Status' => null,
        'ExtendedStatus' => null,
        'ParentJobId' => null,
        'TestRunResultId' => null,
        'ShouldSkipCodeCoverage' => 'bool',
    ];
}
