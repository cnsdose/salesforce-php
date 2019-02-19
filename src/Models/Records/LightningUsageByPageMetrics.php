<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class LightningUsageByPageMetrics
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method LightningUsageByPageMetrics[] query()
 *
 * @property string $Id
 * @property \Carbon\Carbon $MetricsDate
 * @property string $UserId
 * @property string $PageName
 * @property \Carbon\Carbon $SystemModstamp
 * @property mixed $RecordCountEPT
 * @property mixed $TotalCount
 * @property mixed $SumEPT
 * @property mixed $EptBinUnder3
 * @property mixed $EptBin3To5
 * @property mixed $EptBin5To8
 * @property mixed $EptBin8To10
 * @property mixed $EptBinOver10
 */
class LightningUsageByPageMetrics extends BaseRecordModel
{
    protected static $objectApiName = 'LightningUsageByPageMetrics';
    protected $defaultFields = [
        'Id' => null,
        'MetricsDate' => 'date',
        'UserId' => null,
        'PageName' => null,
        'SystemModstamp' => 'datetime',
        'RecordCountEPT' => null,
        'TotalCount' => null,
        'SumEPT' => null,
        'EptBinUnder3' => null,
        'EptBin3To5' => null,
        'EptBin5To8' => null,
        'EptBin8To10' => null,
        'EptBinOver10' => null,
    ];
}
