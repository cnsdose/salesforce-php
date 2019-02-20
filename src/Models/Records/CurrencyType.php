<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CurrencyType
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CurrencyType[] query()
 *
 * @property string $Id
 * @property mixed $IsoCode
 * @property float $ConversionRate
 * @property mixed $DecimalPlaces
 * @property bool $IsActive
 * @property bool $IsCorporate
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class CurrencyType extends BaseRecordModel
{
    public static $objectApiName = 'CurrencyType';
    protected $defaultFields = [
        'Id' => null,
        'IsoCode' => null,
        'ConversionRate' => 'number:12,6',
        'DecimalPlaces' => null,
        'IsActive' => 'bool',
        'IsCorporate' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}
