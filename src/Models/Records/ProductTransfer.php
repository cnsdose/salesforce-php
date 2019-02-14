<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ProductTransfer
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ProductTransfer[] query()
 *
 * @property string Id
 * @property string OwnerId
 * @property bool IsDeleted
 * @property string ProductTransferNumber
 * @property mixed CurrencyIsoCode
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property \Carbon\Carbon LastViewedDate
 * @property \Carbon\Carbon LastReferencedDate
 * @property string ProductRequestLineItemId
 * @property string ProductRequestId
 * @property string SourceProductItemId
 * @property string Product2Id
 * @property float QuantitySent
 * @property float QuantityReceived
 * @property string SourceLocationId
 * @property string DestinationLocationId
 * @property bool IsReceived
 * @property string ReceivedById
 * @property string Description
 * @property mixed QuantityUnitOfMeasure
 * @property string ShipmentId
 * @property \Carbon\Carbon ExpectedPickupDate
 * @property mixed Status
 * @property \Carbon\Carbon ShipmentExpectedDeliveryDate
 * @property mixed ShipmentStatus
 * @property string ShipmentTrackingNumber
 * @property mixed ShipmentTrackingUrl
 * @property string ReturnOrderLineItemId
 * @property string ReturnOrderId
 */
class ProductTransfer extends BaseRecordModel
{
    protected static $objectApiName = 'ProductTransfer';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'IsDeleted' => 'bool',
        'ProductTransferNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'ProductRequestLineItemId' => null,
        'ProductRequestId' => null,
        'SourceProductItemId' => null,
        'Product2Id' => null,
        'QuantitySent' => 'number:16,2',
        'QuantityReceived' => 'number:16,2',
        'SourceLocationId' => null,
        'DestinationLocationId' => null,
        'IsReceived' => 'bool',
        'ReceivedById' => null,
        'Description' => null,
        'QuantityUnitOfMeasure' => null,
        'ShipmentId' => null,
        'ExpectedPickupDate' => 'datetime',
        'Status' => null,
        'ShipmentExpectedDeliveryDate' => 'datetime',
        'ShipmentStatus' => null,
        'ShipmentTrackingNumber' => null,
        'ShipmentTrackingUrl' => null,
        'ReturnOrderLineItemId' => null,
        'ReturnOrderId' => null,
    ];
}
