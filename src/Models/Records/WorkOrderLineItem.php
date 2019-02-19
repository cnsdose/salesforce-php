<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class WorkOrderLineItem
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method WorkOrderLineItem[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $LineItemNumber
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $WorkOrderId
 * @property string $ParentWorkOrderLineItemId
 * @property string $Product2Id
 * @property string $AssetId
 * @property string $OrderId
 * @property string $RootWorkOrderLineItemId
 * @property string $Description
 * @property \Carbon\Carbon $StartDate
 * @property \Carbon\Carbon $EndDate
 * @property mixed $Status
 * @property string $PricebookEntryId
 * @property float $Quantity
 * @property float $UnitPrice
 * @property mixed $Discount
 * @property float $ListPrice
 * @property float $Subtotal
 * @property float $TotalPrice
 * @property float $Duration
 * @property mixed $DurationType
 * @property float $DurationInMinutes
 * @property string $WorkTypeId
 * @property string $Street
 * @property string $City
 * @property string $State
 * @property string $PostalCode
 * @property string $Country
 * @property float $Latitude
 * @property float $Longitude
 * @property mixed $GeocodeAccuracy
 * @property mixed $Address
 * @property string $ServiceTerritoryId
 * @property string $Subject
 * @property mixed $StatusCategory
 * @property bool $IsClosed
 * @property mixed $Priority
 * @property mixed $ServiceAppointmentCount
 * @property string $LocationId
 * @property mixed $MinimumCrewSize
 * @property mixed $RecommendedCrewSize
 * @property string $ServiceReportTemplateId
 * @property string $ReturnOrderLineItemId
 * @property string $ReturnOrderId
 */
class WorkOrderLineItem extends BaseRecordModel
{
    protected static $objectApiName = 'WorkOrderLineItem';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'LineItemNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'WorkOrderId' => null,
        'ParentWorkOrderLineItemId' => null,
        'Product2Id' => null,
        'AssetId' => null,
        'OrderId' => null,
        'RootWorkOrderLineItemId' => null,
        'Description' => null,
        'StartDate' => 'datetime',
        'EndDate' => 'datetime',
        'Status' => null,
        'PricebookEntryId' => null,
        'Quantity' => 'number:10,2',
        'UnitPrice' => 'number:16,2',
        'Discount' => null,
        'ListPrice' => 'number:16,2',
        'Subtotal' => 'number:16,2',
        'TotalPrice' => 'number:16,2',
        'Duration' => 'number:16,2',
        'DurationType' => null,
        'DurationInMinutes' => 'number:16,2',
        'WorkTypeId' => null,
        'Street' => null,
        'City' => null,
        'State' => null,
        'PostalCode' => null,
        'Country' => null,
        'Latitude' => 'number:3,15',
        'Longitude' => 'number:3,15',
        'GeocodeAccuracy' => null,
        'Address' => null,
        'ServiceTerritoryId' => null,
        'Subject' => null,
        'StatusCategory' => null,
        'IsClosed' => 'bool',
        'Priority' => null,
        'ServiceAppointmentCount' => null,
        'LocationId' => null,
        'MinimumCrewSize' => null,
        'RecommendedCrewSize' => null,
        'ServiceReportTemplateId' => null,
        'ReturnOrderLineItemId' => null,
        'ReturnOrderId' => null,
    ];
}
