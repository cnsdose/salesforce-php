<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ForecastingUserPreference
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ForecastingUserPreference[] query()
 *
 * @property string $Id
 * @property string $ExternalId
 * @property mixed $ForecastingStartPeriod
 * @property mixed $ForecastingPeriodDuration
 * @property string $ForecastingPeriodType
 * @property string $ForecastingDisplayedTypeId
 * @property string $ForecastingViewCurrency
 * @property bool $IsHideForecastingGuidedTour
 * @property bool $IsShowForecastingQuotaAttainment
 * @property bool $IsHideForecastingQuotaColumn
 * @property bool $IsForecastingShowQuantity
 * @property bool $IsForecastingHideZeroRows
 */
class ForecastingUserPreference extends BaseRecordModel
{
    public static $objectApiName = 'ForecastingUserPreference';
    protected $defaultFields = [
        'Id' => null,
        'ExternalId' => null,
        'ForecastingStartPeriod' => null,
        'ForecastingPeriodDuration' => null,
        'ForecastingPeriodType' => null,
        'ForecastingDisplayedTypeId' => null,
        'ForecastingViewCurrency' => null,
        'IsHideForecastingGuidedTour' => 'bool',
        'IsShowForecastingQuotaAttainment' => 'bool',
        'IsHideForecastingQuotaColumn' => 'bool',
        'IsForecastingShowQuantity' => 'bool',
        'IsForecastingHideZeroRows' => 'bool',
    ];
}
