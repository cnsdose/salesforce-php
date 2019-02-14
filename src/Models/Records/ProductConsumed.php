<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ProductConsumed
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ProductConsumed[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string ProductConsumedNumber
 * @property mixed CurrencyIsoCode
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property \Carbon\Carbon LastViewedDate
 * @property \Carbon\Carbon LastReferencedDate
 * @property string WorkOrderId
 * @property string WorkOrderLineItemId
 * @property string ProductItemId
 * @property string PricebookEntryId
 * @property string Product2Id
 * @property string ProductName
 * @property mixed QuantityUnitOfMeasure
 * @property float QuantityConsumed
 * @property float UnitPrice
 * @property string Description
 */
class ProductConsumed extends BaseRecordModel
{
    protected static $objectApiName = 'ProductConsumed';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ProductConsumedNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'WorkOrderId' => null,
        'WorkOrderLineItemId' => null,
        'ProductItemId' => null,
        'PricebookEntryId' => null,
        'Product2Id' => null,
        'ProductName' => null,
        'QuantityUnitOfMeasure' => null,
        'QuantityConsumed' => 'number:16,2',
        'UnitPrice' => 'number:16,2',
        'Description' => null,
    ];
}
