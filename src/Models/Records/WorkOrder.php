<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class WorkOrder
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method WorkOrder[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property bool $IsDeleted
 * @property string $WorkOrderNumber
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $AccountId
 * @property string $ContactId
 * @property string $CaseId
 * @property string $EntitlementId
 * @property string $ServiceContractId
 * @property string $AssetId
 * @property string $Street
 * @property string $City
 * @property string $State
 * @property string $PostalCode
 * @property string $Country
 * @property float $Latitude
 * @property float $Longitude
 * @property mixed $GeocodeAccuracy
 * @property mixed $Address
 * @property string $Description
 * @property \Carbon\Carbon $StartDate
 * @property \Carbon\Carbon $EndDate
 * @property string $Subject
 * @property string $RootWorkOrderId
 * @property mixed $Status
 * @property mixed $Priority
 * @property float $Tax
 * @property float $Subtotal
 * @property float $TotalPrice
 * @property mixed $LineItemCount
 * @property string $Pricebook2Id
 * @property mixed $Discount
 * @property float $GrandTotal
 * @property string $ParentWorkOrderId
 * @property bool $IsClosed
 * @property bool $IsStopped
 * @property \Carbon\Carbon $StopStartDate
 * @property \Carbon\Carbon $SlaStartDate
 * @property \Carbon\Carbon $SlaExitDate
 * @property string $BusinessHoursId
 * @property string $MilestoneStatus
 * @property float $Duration
 * @property mixed $DurationType
 * @property float $DurationInMinutes
 * @property mixed $ServiceAppointmentCount
 * @property string $WorkTypeId
 * @property string $ServiceTerritoryId
 * @property mixed $StatusCategory
 * @property string $LocationId
 * @property string $MaintenancePlanId
 * @property \Carbon\Carbon $SuggestedMaintenanceDate
 * @property mixed $MinimumCrewSize
 * @property mixed $RecommendedCrewSize
 * @property string $ServiceReportTemplateId
 * @property string $ReturnOrderLineItemId
 * @property string $ReturnOrderId
 * @property bool $IsGeneratedFromMaintenancePlan
 * @property mixed $ServiceReportLanguage
 */
class WorkOrder extends BaseRecordModel
{
    protected static $objectApiName = 'WorkOrder';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'IsDeleted' => 'bool',
        'WorkOrderNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'AccountId' => null,
        'ContactId' => null,
        'CaseId' => null,
        'EntitlementId' => null,
        'ServiceContractId' => null,
        'AssetId' => null,
        'Street' => null,
        'City' => null,
        'State' => null,
        'PostalCode' => null,
        'Country' => null,
        'Latitude' => 'number:3,15',
        'Longitude' => 'number:3,15',
        'GeocodeAccuracy' => null,
        'Address' => null,
        'Description' => null,
        'StartDate' => 'datetime',
        'EndDate' => 'datetime',
        'Subject' => null,
        'RootWorkOrderId' => null,
        'Status' => null,
        'Priority' => null,
        'Tax' => 'number:16,2',
        'Subtotal' => 'number:16,2',
        'TotalPrice' => 'number:16,2',
        'LineItemCount' => null,
        'Pricebook2Id' => null,
        'Discount' => null,
        'GrandTotal' => 'number:16,2',
        'ParentWorkOrderId' => null,
        'IsClosed' => 'bool',
        'IsStopped' => 'bool',
        'StopStartDate' => 'datetime',
        'SlaStartDate' => 'datetime',
        'SlaExitDate' => 'datetime',
        'BusinessHoursId' => null,
        'MilestoneStatus' => null,
        'Duration' => 'number:16,2',
        'DurationType' => null,
        'DurationInMinutes' => 'number:16,2',
        'ServiceAppointmentCount' => null,
        'WorkTypeId' => null,
        'ServiceTerritoryId' => null,
        'StatusCategory' => null,
        'LocationId' => null,
        'MaintenancePlanId' => null,
        'SuggestedMaintenanceDate' => 'date',
        'MinimumCrewSize' => null,
        'RecommendedCrewSize' => null,
        'ServiceReportTemplateId' => null,
        'ReturnOrderLineItemId' => null,
        'ReturnOrderId' => null,
        'IsGeneratedFromMaintenancePlan' => 'bool',
        'ServiceReportLanguage' => null,
    ];
}
