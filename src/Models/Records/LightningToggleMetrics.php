<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class LightningToggleMetrics
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method LightningToggleMetrics[] query()
 *
 * @property string $Id
 * @property \Carbon\Carbon $MetricsDate
 * @property string $UserId
 * @property string $Action
 * @property \Carbon\Carbon $SystemModstamp
 * @property mixed $RecordCount
 */
class LightningToggleMetrics extends BaseRecordModel
{
    public static $objectApiName = 'LightningToggleMetrics';
    protected $defaultFields = [
        'Id' => null,
        'MetricsDate' => 'date',
        'UserId' => null,
        'Action' => null,
        'SystemModstamp' => 'datetime',
        'RecordCount' => null,
    ];
}
