<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ForecastingAdjustment
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ForecastingAdjustment[] query()
 *
 * @property string $Id
 * @property string $ForecastingItemId
 * @property string $PeriodId
 * @property \Carbon\Carbon $StartDate
 * @property string $ProductFamily
 * @property string $ForecastingItemCategory
 * @property string $ForecastCategoryName
 * @property string $CurrencyIsoCode
 * @property float $AdjustedAmount
 * @property float $AdjustedQuantity
 * @property string $OwnerId
 * @property bool $IsQuantity
 * @property bool $IsAmount
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $ForecastingTypeId
 * @property string $AdjustmentNote
 */
class ForecastingAdjustment extends BaseRecordModel
{
    public static $objectApiName = 'ForecastingAdjustment';
    protected $defaultFields = [
        'Id' => null,
        'ForecastingItemId' => null,
        'PeriodId' => null,
        'StartDate' => 'date',
        'ProductFamily' => null,
        'ForecastingItemCategory' => null,
        'ForecastCategoryName' => null,
        'CurrencyIsoCode' => null,
        'AdjustedAmount' => 'number:18,0',
        'AdjustedQuantity' => 'number:10,2',
        'OwnerId' => null,
        'IsQuantity' => 'bool',
        'IsAmount' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'ForecastingTypeId' => null,
        'AdjustmentNote' => null,
    ];
}
