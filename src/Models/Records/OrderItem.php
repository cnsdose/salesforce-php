<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class OrderItem
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method OrderItem[] query()
 *
 * @property string $Id
 * @property string $Product2Id
 * @property bool $IsDeleted
 * @property string $OrderId
 * @property string $PricebookEntryId
 * @property string $OriginalOrderItemId
 * @property float $AvailableQuantity
 * @property float $Quantity
 * @property mixed $CurrencyIsoCode
 * @property float $UnitPrice
 * @property float $ListPrice
 * @property float $TotalPrice
 * @property \Carbon\Carbon $ServiceDate
 * @property \Carbon\Carbon $EndDate
 * @property string $Description
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $OrderItemNumber
 */
class OrderItem extends BaseRecordModel
{
    protected static $objectApiName = 'OrderItem';
    protected $defaultFields = [
        'Id' => null,
        'Product2Id' => null,
        'IsDeleted' => 'bool',
        'OrderId' => null,
        'PricebookEntryId' => null,
        'OriginalOrderItemId' => null,
        'AvailableQuantity' => 'number:16,2',
        'Quantity' => 'number:16,2',
        'CurrencyIsoCode' => null,
        'UnitPrice' => 'number:16,2',
        'ListPrice' => 'number:16,2',
        'TotalPrice' => 'number:16,2',
        'ServiceDate' => 'date',
        'EndDate' => 'date',
        'Description' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'OrderItemNumber' => null,
    ];
}
