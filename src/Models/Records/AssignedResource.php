<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AssignedResource
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AssignedResource[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $AssignedResourceNumber
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $ServiceAppointmentId
 * @property string $ServiceResourceId
 * @property float $EstimatedTravelTime
 * @property float $ActualTravelTime
 * @property string $ServiceCrewId
 */
class AssignedResource extends BaseRecordModel
{
    protected static $objectApiName = 'AssignedResource';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'AssignedResourceNumber' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'ServiceAppointmentId' => null,
        'ServiceResourceId' => null,
        'EstimatedTravelTime' => 'number:16,2',
        'ActualTravelTime' => 'number:16,2',
        'ServiceCrewId' => null,
    ];
}
