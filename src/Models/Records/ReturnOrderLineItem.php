<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ReturnOrderLineItem
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ReturnOrderLineItem[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ReturnOrderLineItemNumber
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $ReturnOrderId
 * @property string $ProductRequestLineItemId
 * @property string $OrderItemId
 * @property string $ProductItemId
 * @property string $Product2Id
 * @property float $QuantityReturned
 * @property mixed $QuantityUnitOfMeasure
 * @property string $SourceLocationId
 * @property string $DestinationLocationId
 * @property string $AssetId
 * @property string $Description
 * @property mixed $ReasonForReturn
 * @property mixed $ProcessingPlan
 * @property mixed $RepaymentMethod
 */
class ReturnOrderLineItem extends BaseRecordModel
{
    protected static $objectApiName = 'ReturnOrderLineItem';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ReturnOrderLineItemNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'ReturnOrderId' => null,
        'ProductRequestLineItemId' => null,
        'OrderItemId' => null,
        'ProductItemId' => null,
        'Product2Id' => null,
        'QuantityReturned' => 'number:16,2',
        'QuantityUnitOfMeasure' => null,
        'SourceLocationId' => null,
        'DestinationLocationId' => null,
        'AssetId' => null,
        'Description' => null,
        'ReasonForReturn' => null,
        'ProcessingPlan' => null,
        'RepaymentMethod' => null,
    ];
}
