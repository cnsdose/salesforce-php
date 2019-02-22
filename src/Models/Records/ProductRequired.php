<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ProductRequired
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ProductRequired[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ProductRequiredNumber
 * @property string $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $ParentRecordId
 * @property string $ParentRecordType
 * @property string $Product2Id
 * @property string $ProductName
 * @property float $QuantityRequired
 * @property string $QuantityUnitOfMeasure
 */
class ProductRequired extends BaseRecordModel
{
    public static $objectApiName = 'ProductRequired';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ProductRequiredNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'ParentRecordId' => null,
        'ParentRecordType' => null,
        'Product2Id' => null,
        'ProductName' => null,
        'QuantityRequired' => 'number:16,2',
        'QuantityUnitOfMeasure' => null,
    ];
}
