<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ServiceResource
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ServiceResource[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property string $Name
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $RelatedRecordId
 * @property mixed $ResourceType
 * @property string $Description
 * @property bool $IsActive
 * @property bool $IsCapacityBased
 * @property bool $IsOptimizationCapable
 * @property float $LastKnownLatitude
 * @property float $LastKnownLongitude
 * @property mixed $LastKnownLocation
 * @property \Carbon\Carbon $LastKnownLocationDate
 * @property string $LocationId
 * @property string $ServiceCrewId
 * @property string $AccountId
 */
class ServiceResource extends BaseRecordModel
{
    protected static $objectApiName = 'ServiceResource';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'Name' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'RelatedRecordId' => null,
        'ResourceType' => null,
        'Description' => null,
        'IsActive' => 'bool',
        'IsCapacityBased' => 'bool',
        'IsOptimizationCapable' => 'bool',
        'LastKnownLatitude' => 'number:3,15',
        'LastKnownLongitude' => 'number:3,15',
        'LastKnownLocation' => null,
        'LastKnownLocationDate' => 'datetime',
        'LocationId' => null,
        'ServiceCrewId' => null,
        'AccountId' => null,
    ];
}
