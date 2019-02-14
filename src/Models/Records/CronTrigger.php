<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CronTrigger
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CronTrigger[] query()
 *
 * @property string Id
 * @property string CronJobDetailId
 * @property \Carbon\Carbon NextFireTime
 * @property \Carbon\Carbon PreviousFireTime
 * @property string State
 * @property \Carbon\Carbon StartTime
 * @property \Carbon\Carbon EndTime
 * @property string CronExpression
 * @property mixed TimeZoneSidKey
 * @property string OwnerId
 * @property string LastModifiedById
 * @property string CreatedById
 * @property \Carbon\Carbon CreatedDate
 * @property mixed TimesTriggered
 */
class CronTrigger extends BaseRecordModel
{
    protected static $objectApiName = 'CronTrigger';
    protected $defaultFields = [
        'Id' => null,
        'CronJobDetailId' => null,
        'NextFireTime' => 'datetime',
        'PreviousFireTime' => 'datetime',
        'State' => null,
        'StartTime' => 'datetime',
        'EndTime' => 'datetime',
        'CronExpression' => null,
        'TimeZoneSidKey' => null,
        'OwnerId' => null,
        'LastModifiedById' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'TimesTriggered' => null,
    ];
}
