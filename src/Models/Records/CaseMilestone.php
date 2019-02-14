<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CaseMilestone
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CaseMilestone[] query()
 *
 * @property string Id
 * @property string CaseId
 * @property \Carbon\Carbon StartDate
 * @property \Carbon\Carbon TargetDate
 * @property \Carbon\Carbon CompletionDate
 * @property string MilestoneTypeId
 * @property bool IsCompleted
 * @property bool IsViolated
 * @property \Carbon\Carbon SystemModstamp
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property bool IsDeleted
 * @property mixed TargetResponseInMins
 * @property float TargetResponseInHrs
 * @property float TargetResponseInDays
 * @property string TimeRemainingInMins
 * @property mixed ElapsedTimeInMins
 * @property float ElapsedTimeInHrs
 * @property float ElapsedTimeInDays
 * @property string TimeSinceTargetInMins
 * @property string BusinessHoursId
 */
class CaseMilestone extends BaseRecordModel
{
    protected static $objectApiName = 'CaseMilestone';
    protected $defaultFields = [
        'Id' => null,
        'CaseId' => null,
        'StartDate' => 'datetime',
        'TargetDate' => 'datetime',
        'CompletionDate' => 'datetime',
        'MilestoneTypeId' => null,
        'IsCompleted' => 'bool',
        'IsViolated' => 'bool',
        'SystemModstamp' => 'datetime',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'IsDeleted' => 'bool',
        'TargetResponseInMins' => null,
        'TargetResponseInHrs' => 'number:4,2',
        'TargetResponseInDays' => 'number:4,2',
        'TimeRemainingInMins' => null,
        'ElapsedTimeInMins' => null,
        'ElapsedTimeInHrs' => 'number:4,2',
        'ElapsedTimeInDays' => 'number:4,2',
        'TimeSinceTargetInMins' => null,
        'BusinessHoursId' => null,
    ];
}
