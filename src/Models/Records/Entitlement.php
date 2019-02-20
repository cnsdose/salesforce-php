<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Entitlement
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Entitlement[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $Name
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $AccountId
 * @property mixed $Type
 * @property string $ServiceContractId
 * @property string $ContractLineItemId
 * @property string $AssetId
 * @property \Carbon\Carbon $StartDate
 * @property \Carbon\Carbon $EndDate
 * @property string $SlaProcessId
 * @property string $BusinessHoursId
 * @property bool $IsPerIncident
 * @property mixed $CasesPerEntitlement
 * @property mixed $RemainingCases
 * @property mixed $Status
 * @property string $SvcApptBookingWindowsId
 */
class Entitlement extends BaseRecordModel
{
    public static $objectApiName = 'Entitlement';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'AccountId' => null,
        'Type' => null,
        'ServiceContractId' => null,
        'ContractLineItemId' => null,
        'AssetId' => null,
        'StartDate' => 'date',
        'EndDate' => 'date',
        'SlaProcessId' => null,
        'BusinessHoursId' => null,
        'IsPerIncident' => 'bool',
        'CasesPerEntitlement' => null,
        'RemainingCases' => null,
        'Status' => null,
        'SvcApptBookingWindowsId' => null,
    ];
}
