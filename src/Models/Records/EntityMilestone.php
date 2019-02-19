<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class EntityMilestone
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method EntityMilestone[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $Name
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $ParentEntityId
 * @property \Carbon\Carbon $StartDate
 * @property \Carbon\Carbon $TargetDate
 * @property \Carbon\Carbon $CompletionDate
 * @property string $SlaProcessId
 * @property string $MilestoneTypeId
 * @property bool $IsCompleted
 * @property bool $IsViolated
 * @property mixed $TargetResponseInMins
 * @property float $TargetResponseInHrs
 * @property float $TargetResponseInDays
 * @property string $TimeRemainingInMins
 * @property string $TimeRemainingInHrs
 * @property float $TimeRemainingInDays
 * @property mixed $ElapsedTimeInMins
 * @property float $ElapsedTimeInHrs
 * @property float $ElapsedTimeInDays
 * @property string $TimeSinceTargetInMins
 * @property string $TimeSinceTargetInHrs
 * @property float $TimeSinceTargetInDays
 * @property string $BusinessHoursId
 */
class EntityMilestone extends BaseRecordModel
{
    protected static $objectApiName = 'EntityMilestone';
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
        'ParentEntityId' => null,
        'StartDate' => 'datetime',
        'TargetDate' => 'datetime',
        'CompletionDate' => 'datetime',
        'SlaProcessId' => null,
        'MilestoneTypeId' => null,
        'IsCompleted' => 'bool',
        'IsViolated' => 'bool',
        'TargetResponseInMins' => null,
        'TargetResponseInHrs' => 'number:4,2',
        'TargetResponseInDays' => 'number:4,2',
        'TimeRemainingInMins' => null,
        'TimeRemainingInHrs' => null,
        'TimeRemainingInDays' => 'number:4,2',
        'ElapsedTimeInMins' => null,
        'ElapsedTimeInHrs' => 'number:4,2',
        'ElapsedTimeInDays' => 'number:4,2',
        'TimeSinceTargetInMins' => null,
        'TimeSinceTargetInHrs' => null,
        'TimeSinceTargetInDays' => 'number:4,2',
        'BusinessHoursId' => null,
    ];
}
