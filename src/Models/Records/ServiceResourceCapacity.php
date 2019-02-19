<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ServiceResourceCapacity
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ServiceResourceCapacity[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $CapacityNumber
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $ServiceResourceId
 * @property \Carbon\Carbon $StartDate
 * @property \Carbon\Carbon $EndDate
 * @property float $CapacityInHours
 * @property mixed $CapacityInWorkItems
 * @property mixed $TimePeriod
 */
class ServiceResourceCapacity extends BaseRecordModel
{
    protected static $objectApiName = 'ServiceResourceCapacity';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CapacityNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'ServiceResourceId' => null,
        'StartDate' => 'date',
        'EndDate' => 'date',
        'CapacityInHours' => 'number:16,2',
        'CapacityInWorkItems' => null,
        'TimePeriod' => null,
    ];
}
