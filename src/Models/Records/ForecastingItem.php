<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ForecastingItem
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ForecastingItem[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property string $PeriodId
 * @property string $ForecastingItemCategory
 * @property string $ForecastCategoryName
 * @property string $ParentForecastingItemId
 * @property string $ProductFamily
 * @property float $OwnerOnlyAmount
 * @property float $AmountWithoutAdjustments
 * @property float $AmountWithoutManagerAdjustment
 * @property float $ForecastAmount
 * @property string $CurrencyIsoCode
 * @property float $OwnerOnlyQuantity
 * @property float $QuantityWithoutAdjustments
 * @property float $QuantityWithoutManagerAdjustment
 * @property float $ForecastQuantity
 * @property bool $IsQuantity
 * @property bool $IsAmount
 * @property bool $HasAdjustment
 * @property bool $HasOwnerAdjustment
 * @property bool $IsUpToDate
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $ForecastingTypeId
 * @property float $AmountWithoutOwnerAdjustment
 * @property float $QuantityWithoutOwnerAdjustment
 * @property mixed $SubordinateOverrides
 */
class ForecastingItem extends BaseRecordModel
{
    public static $objectApiName = 'ForecastingItem';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'PeriodId' => null,
        'ForecastingItemCategory' => null,
        'ForecastCategoryName' => null,
        'ParentForecastingItemId' => null,
        'ProductFamily' => null,
        'OwnerOnlyAmount' => 'number:18,0',
        'AmountWithoutAdjustments' => 'number:18,0',
        'AmountWithoutManagerAdjustment' => 'number:18,0',
        'ForecastAmount' => 'number:18,0',
        'CurrencyIsoCode' => null,
        'OwnerOnlyQuantity' => 'number:10,2',
        'QuantityWithoutAdjustments' => 'number:10,2',
        'QuantityWithoutManagerAdjustment' => 'number:10,2',
        'ForecastQuantity' => 'number:10,2',
        'IsQuantity' => 'bool',
        'IsAmount' => 'bool',
        'HasAdjustment' => 'bool',
        'HasOwnerAdjustment' => 'bool',
        'IsUpToDate' => 'bool',
        'SystemModstamp' => 'datetime',
        'ForecastingTypeId' => null,
        'AmountWithoutOwnerAdjustment' => 'number:18,0',
        'QuantityWithoutOwnerAdjustment' => 'number:10,2',
        'SubordinateOverrides' => null,
    ];
}
