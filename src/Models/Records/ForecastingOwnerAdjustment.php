<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ForecastingOwnerAdjustment
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ForecastingOwnerAdjustment[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $ForecastingItemId
 * @property float $OwnerAdjustedAmount
 * @property float $OwnerAdjustedQuantity
 * @property string $OwnerAdjustmentNote
 * @property string $PeriodId
 * @property string $ForecastOwnerId
 * @property \Carbon\Carbon $StartDate
 * @property string $ProductFamily
 * @property string $ForecastingItemCategory
 * @property string $ForecastCategoryName
 * @property bool $IsQuantity
 * @property bool $IsAmount
 * @property string $ForecastingTypeId
 */
class ForecastingOwnerAdjustment extends BaseRecordModel
{
    public static $objectApiName = 'ForecastingOwnerAdjustment';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'ForecastingItemId' => null,
        'OwnerAdjustedAmount' => 'number:18,0',
        'OwnerAdjustedQuantity' => 'number:10,2',
        'OwnerAdjustmentNote' => null,
        'PeriodId' => null,
        'ForecastOwnerId' => null,
        'StartDate' => 'date',
        'ProductFamily' => null,
        'ForecastingItemCategory' => null,
        'ForecastCategoryName' => null,
        'IsQuantity' => 'bool',
        'IsAmount' => 'bool',
        'ForecastingTypeId' => null,
    ];
}
