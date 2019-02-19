<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class LightningUsageByFlexiPageMetrics
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method LightningUsageByFlexiPageMetrics[] query()
 *
 * @property string $Id
 * @property \Carbon\Carbon $MetricsDate
 * @property string $FlexiPageType
 * @property string $FlexiPageNameOrId
 * @property \Carbon\Carbon $SystemModstamp
 * @property mixed $RecordCountEPT
 * @property mixed $TotalCount
 * @property mixed $SumEPT
 */
class LightningUsageByFlexiPageMetrics extends BaseRecordModel
{
    protected static $objectApiName = 'LightningUsageByFlexiPageMetrics';
    protected $defaultFields = [
        'Id' => null,
        'MetricsDate' => 'date',
        'FlexiPageType' => null,
        'FlexiPageNameOrId' => null,
        'SystemModstamp' => 'datetime',
        'RecordCountEPT' => null,
        'TotalCount' => null,
        'SumEPT' => null,
    ];
}
