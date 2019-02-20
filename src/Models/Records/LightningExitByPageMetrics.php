<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class LightningExitByPageMetrics
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method LightningExitByPageMetrics[] query()
 *
 * @property string $Id
 * @property \Carbon\Carbon $MetricsDate
 * @property string $UserId
 * @property string $PageName
 * @property \Carbon\Carbon $SystemModstamp
 * @property mixed $RecordCount
 */
class LightningExitByPageMetrics extends BaseRecordModel
{
    public static $objectApiName = 'LightningExitByPageMetrics';
    protected $defaultFields = [
        'Id' => null,
        'MetricsDate' => 'date',
        'UserId' => null,
        'PageName' => null,
        'SystemModstamp' => 'datetime',
        'RecordCount' => null,
    ];
}
