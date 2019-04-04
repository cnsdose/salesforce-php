<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ForecastingFact
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ForecastingFact[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property string $PeriodId
 * @property string $ForecastCategoryName
 * @property string $OpportunityId
 * @property string $ForecastedObjectId
 * @property string $ForecastingItemId
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $ForecastingTypeId
 */
class ForecastingFact extends BaseRecordModel
{
    public static $objectApiName = 'ForecastingFact';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'PeriodId' => null,
        'ForecastCategoryName' => null,
        'OpportunityId' => null,
        'ForecastedObjectId' => null,
        'ForecastingItemId' => null,
        'SystemModstamp' => 'datetime',
        'ForecastingTypeId' => null,
    ];
}
