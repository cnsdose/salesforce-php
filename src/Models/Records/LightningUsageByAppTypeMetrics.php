<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class LightningUsageByAppTypeMetrics
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method LightningUsageByAppTypeMetrics[] query()
 *
 * @property string Id
 * @property \Carbon\Carbon MetricsDate
 * @property string UserId
 * @property string AppExperience
 * @property \Carbon\Carbon SystemModstamp
 */
class LightningUsageByAppTypeMetrics extends BaseRecordModel
{
    protected static $objectApiName = 'LightningUsageByAppTypeMetrics';
    protected $defaultFields = [
        'Id' => null,
        'MetricsDate' => 'date',
        'UserId' => null,
        'AppExperience' => null,
        'SystemModstamp' => 'datetime',
    ];
}
