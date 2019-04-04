<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ForecastingQuota
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ForecastingQuota[] query()
 *
 * @property string $Id
 * @property string $PeriodId
 * @property \Carbon\Carbon $StartDate
 * @property string $ProductFamily
 * @property string $CurrencyIsoCode
 * @property float $QuotaAmount
 * @property float $QuotaQuantity
 * @property string $QuotaOwnerId
 * @property bool $IsQuantity
 * @property bool $IsAmount
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $ForecastingTypeId
 */
class ForecastingQuota extends BaseRecordModel
{
    public static $objectApiName = 'ForecastingQuota';
    protected $defaultFields = [
        'Id' => null,
        'PeriodId' => null,
        'StartDate' => 'date',
        'ProductFamily' => null,
        'CurrencyIsoCode' => null,
        'QuotaAmount' => 'number:18,0',
        'QuotaQuantity' => 'number:10,2',
        'QuotaOwnerId' => null,
        'IsQuantity' => 'bool',
        'IsAmount' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'ForecastingTypeId' => null,
    ];
}
