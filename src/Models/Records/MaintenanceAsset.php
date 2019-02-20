<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class MaintenanceAsset
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method MaintenanceAsset[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $MaintenanceAssetNumber
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $MaintenancePlanId
 * @property string $AssetId
 * @property string $WorkTypeId
 * @property string $ContractLineItemId
 * @property \Carbon\Carbon $NextSuggestedMaintenanceDate
 */
class MaintenanceAsset extends BaseRecordModel
{
    public static $objectApiName = 'MaintenanceAsset';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'MaintenanceAssetNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'MaintenancePlanId' => null,
        'AssetId' => null,
        'WorkTypeId' => null,
        'ContractLineItemId' => null,
        'NextSuggestedMaintenanceDate' => 'date',
    ];
}
