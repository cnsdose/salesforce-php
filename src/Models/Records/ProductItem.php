<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ProductItem
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ProductItem[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property bool $IsDeleted
 * @property string $ProductItemNumber
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $LocationId
 * @property string $Product2Id
 * @property string $ProductName
 * @property string $SerialNumber
 * @property float $QuantityOnHand
 * @property mixed $QuantityUnitOfMeasure
 */
class ProductItem extends BaseRecordModel
{
    protected static $objectApiName = 'ProductItem';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'IsDeleted' => 'bool',
        'ProductItemNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'LocationId' => null,
        'Product2Id' => null,
        'ProductName' => null,
        'SerialNumber' => null,
        'QuantityOnHand' => 'number:16,2',
        'QuantityUnitOfMeasure' => null,
    ];
}
