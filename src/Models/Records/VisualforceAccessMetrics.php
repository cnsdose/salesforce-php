<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class VisualforceAccessMetrics
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method VisualforceAccessMetrics[] query()
 *
 * @property string $Id
 * @property \Carbon\Carbon $MetricsDate
 * @property string $ApexPageId
 * @property string $ProfileId
 * @property \Carbon\Carbon $SystemModstamp
 * @property mixed $DailyPageViewCount
 * @property \Carbon\Carbon $LogDate
 */
class VisualforceAccessMetrics extends BaseRecordModel
{
    protected static $objectApiName = 'VisualforceAccessMetrics';
    protected $defaultFields = [
        'Id' => null,
        'MetricsDate' => 'date',
        'ApexPageId' => null,
        'ProfileId' => null,
        'SystemModstamp' => 'datetime',
        'DailyPageViewCount' => null,
        'LogDate' => 'date',
    ];
}
