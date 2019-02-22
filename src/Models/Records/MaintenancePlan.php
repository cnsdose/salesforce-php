<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class MaintenancePlan
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method MaintenancePlan[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property bool $IsDeleted
 * @property string $MaintenancePlanNumber
 * @property string $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $WorkTypeId
 * @property string $AccountId
 * @property string $ServiceContractId
 * @property string $FrequencyType
 * @property mixed $Frequency
 * @property \Carbon\Carbon $StartDate
 * @property \Carbon\Carbon $EndDate
 * @property \Carbon\Carbon $NextSuggestedMaintenanceDate
 * @property mixed $MaintenanceWindowStartDays
 * @property mixed $MaintenanceWindowEndDays
 * @property string $WorkOrderGenerationStatus
 * @property string $GenerationTimeframeType
 * @property mixed $GenerationTimeframe
 * @property string $Description
 * @property string $LocationId
 * @property string $ContactId
 * @property string $MaintenancePlanTitle
 * @property mixed $GenerationHorizon
 * @property bool $DoesGenerateUponCompletion
 * @property bool $DoesAutoGenerateWorkOrders
 */
class MaintenancePlan extends BaseRecordModel
{
    public static $objectApiName = 'MaintenancePlan';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'IsDeleted' => 'bool',
        'MaintenancePlanNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'WorkTypeId' => null,
        'AccountId' => null,
        'ServiceContractId' => null,
        'FrequencyType' => null,
        'Frequency' => null,
        'StartDate' => 'date',
        'EndDate' => 'date',
        'NextSuggestedMaintenanceDate' => 'date',
        'MaintenanceWindowStartDays' => null,
        'MaintenanceWindowEndDays' => null,
        'WorkOrderGenerationStatus' => null,
        'GenerationTimeframeType' => null,
        'GenerationTimeframe' => null,
        'Description' => null,
        'LocationId' => null,
        'ContactId' => null,
        'MaintenancePlanTitle' => null,
        'GenerationHorizon' => null,
        'DoesGenerateUponCompletion' => 'bool',
        'DoesAutoGenerateWorkOrders' => 'bool',
    ];
}
